<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AmarPayService;
use App\Models\Payment;
use Illuminate\Support\Facades\Log;

class AmarPayController extends Controller
{
    protected $amarPay;

    public function __construct(AmarPayService $amarPay)
    {
        $this->amarPay = $amarPay;
    }

    public function pay()
    {
        $transactionId = uniqid('txn_');

        $data = [
            'amount' => 100,
            'tran_id' => $transactionId,
            'cus_name' => 'John Doe',
            'cus_email' => 'john@example.com',
            'cus_add1' => 'Dhaka',
            'cus_phone' => '017XXXXXXXX',
            'desc' => 'Test Payment',
        ];

        try {
            // Create record before payment
            Payment::create([
                'transaction_id' => $transactionId,
                'payment_status' => 'Pending',
                'amount' => $data['amount'],
                'currency' => 'BDT',
                'customer_name' => $data['cus_name'],
                'customer_email' => $data['cus_email'],
                'customer_phone' => $data['cus_phone'],
            ]);

            $paymentUrl = $this->amarPay->initiatePayment($data);
            return redirect()->away($paymentUrl);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function success(Request $request)
    {
        $trxId = $request->input('mer_txnid');

        if (!$trxId) {
            return redirect()->route('course.page')->with('error', 'Transaction ID missing.');
        }

        $verification = $this->amarPay->verifyTransaction($trxId);
        $payment = Payment::where('transaction_id', $trxId)->first();

        if (!$payment) {
            return redirect()->route('course.page')->with('error', 'Payment record not found.');
        }

        $payment->update([
            'payment_status' => $verification['pay_status'] ?? 'Failed',
            'response_data' => $verification,
        ]);

        if (isset($verification['pay_status']) && $verification['pay_status'] === 'Successful') {
            return redirect()->route('course')->with('success', 'Payment successful!');
        }

        return redirect()->route('course')->with('error', 'Payment verification failed.');
    }


    public function fail(Request $request)
    {
        return response()->json(['message' => 'Payment failed', 'data' => $request->all()]);
    }

    public function cancel(Request $request)
    {
        return response()->json(['message' => 'Payment cancelled', 'data' => $request->all()]);
    }
}
