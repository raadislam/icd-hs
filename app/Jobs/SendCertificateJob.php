<?php

namespace App\Jobs;

use PHPJasper\PHPJasper;
use App\Models\CertificateRequest;
use App\Models\Course;
use App\Mail\CertificateMail;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendCertificateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $certRequest;

    public function __construct(CertificateRequest $certRequest)
    {
        $this->certRequest = $certRequest;
    }

    public function handle()
    {
        $user = $this->certRequest->courseUser;
        $course = Course::find($this->certRequest->course_id);


        try {
            $data = [
                [
                    "name" => "USER_NAME",
                    "type" => "collection",
                    "value" => [$user->id]
                ],
                [
                    "name" => "COURSE_TITLE",
                    "type" => "collection",
                    "value" => [$course->id]
                ]
            ];

            // Do NOT json_encode here!
            // $params = json_encode($data, JSON_PRETTY_PRINT);

            $reportParameters = $data; // Use array directly

            $raw_params = "";

            [$typedParameters, $parameters] = collect($reportParameters)->partition(function ($parameter) {
                return isset($parameter['type']);
            });

            if ($parameters->count() > 0) {
                $raw_params .= " -P";
            }
            foreach ($parameters as $parameter) {
                // Handle array values
                $value = is_array($parameter['value']) ? implode(",", $parameter['value']) : $parameter['value'];
                $raw_params .= " " . $parameter['name'] . "=" . $value;
            }

            if ($typedParameters->count() > 0) {
                $raw_params .= " -TP";
            }
            foreach ($typedParameters as $parameter) {
                $value = is_array($parameter['value']) ? implode(",", $parameter['value']) : $parameter['value'];
                $raw_params .= " " . $parameter['type'] . ":" . $parameter['name'] . "=[" . $value . "]";
            }

            try {
                $phpJasper = new PHPJasper;
                $input = public_path('jrxml/certificate.jrxml');
                $output =  public_path('output/');

                $options = [
                    'format' => ['pdf'],
                    'locale' => 'en',
                    'params' => [],
                    'raw_params' => $raw_params,
                    'db_connection' => [
                        'driver' => 'mysql',
                        'username' => env('DB_USERNAME'),
                        'host' => 'localhost',
                        'database' => env('DB_DATABASE'),
                        // 'password' => env('DB_PASSWORD'),
                        'port' => '3306'
                    ],
                ];

                $processed = $phpJasper->process(
                    $input,
                    $output,
                    $options
                );
                $processed->execute();
            } catch (Exception $e) {
                // error handling
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }

            $certificatePath = public_path('output/certificate.pdf'); // Or dynamic path

            Mail::to($user->email)->send(new CertificateMail($user, $course, $certificatePath));

            $this->certRequest->update([
                'status' => 'success',
                'sent_at' => now(),
                'fail_reason' => null,
            ]);
        } catch (Exception $e) {
            $this->certRequest->update([
                'status' => 'failed',
                'fail_reason' => $e->getMessage(),
            ]);
        }
    }
}
