<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class AmarPayService
{
    protected $storeId;
    protected $signatureKey;
    protected $sandbox;

    public function __construct()
    {
        $this->storeId = config('amarpay.store_id');
        $this->signatureKey = config('amarpay.signature_key');
        $this->sandbox = config('amarpay.sandbox');
    }

    public function initiatePayment(array $data): string
    {
        $data['store_id'] = config('amarpay.store_id');
        $data['signature_key'] = config('amarpay.signature_key');
        $data['currency'] = $data['currency'] ?? 'BDT';

        $data['success_url'] = $data['success_url'] ?? config('amarpay.success_url');
        $data['fail_url']    = $data['fail_url']    ?? config('amarpay.fail_url');
        $data['cancel_url']  = $data['cancel_url']  ?? config('amarpay.cancel_url');

        $requestUrl = config('amarpay.sandbox')
            ? config('amarpay.sandbox_url')
            : config('amarpay.live_url');

        $fields = http_build_query($data);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $requestUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);
            Log::error("AmarPay cURL error: $error");
            throw new \Exception("AmarPay cURL error: $error");
        }

        curl_close($ch);

        Log::info("Raw AmarPay response: " . $response);

        $decoded = json_decode($response, true);

        if (is_array($decoded) && isset($decoded['payment_url'])) {
            $url = $decoded['payment_url'];
        } else {
            // Clean up escaped slashes and quotes
            $url = str_replace('\\/', '/', trim($response, "\" \n\r"));

            // If response is a relative path, prepend full domain
            if (str_starts_with($url, '/paynow.php')) {
                $baseUrl = config('amarpay.sandbox')
                    ? 'https://sandbox.aamarpay.com'
                    : 'https://secure.aamarpay.com';
                $url = $baseUrl . $url;
            }
        }

        Log::info("Final AmarPay payment URL: " . $url);

        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            Log::error("AmarPay failed to return valid URL: $url");
            throw new \Exception("AmarPay failed to create payment URL: {$url}");
        }

        return $url;
    }



    public function verifyTransaction(string $transactionId): ?array
    {
        $verificationUrl = $this->sandbox
            ? config('amarpay.sandbox_verification_url')
            : config('amarpay.live_verification_url');

        $params = [
            'request_id'    => $transactionId,
            'store_id'      => $this->storeId,
            'signature_key' => $this->signatureKey,
            'type' => "json",
        ];

        Log::info('Sending verification params: ', $params);

        $fields = http_build_query($params);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $verificationUrl . "?" . $fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            Log::error('AmarPay verification cURL error: ' . curl_error($ch));
            curl_close($ch);
            return null;
        }

        curl_close($ch);

        if (empty($response)) {
            Log::error('Empty response from AmarPay verification');
            return null;
        }

        Log::info('Raw response from AmarPay verification: ' . $response);

        $data = json_decode($response, true);

        if (!is_array($data)) {
            Log::error('Invalid JSON from AmarPay verification: ' . $response);
            return null;
        }

        return $data;
    }
}
