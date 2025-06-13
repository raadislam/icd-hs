<?php

namespace App\Http\Controllers;

use App\Models\CourseUserPayment;
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

    public function pay(Request $request)
    {
        $transactionId = uniqid('txn_');
        $courseId = $request->input('course_id'); // Make sure it's sent from the frontend

        $user = auth('course')->user(); // course user

        $data = [
            'amount' => 100,
            'tran_id' => $transactionId,
            'cus_name' => $user->name ?? 'Anonymous',
            'cus_email' => $user->email ?? 'noemail@example.com',
            'cus_add1' => 'Dhaka',
            'cus_phone' => $user->phone_number ?? '01700000000',
            'desc' => 'Course Purchase',
        ];

        try {
            // ✅ Save the full payment record before redirecting
            Payment::create([
                'transaction_id' => $transactionId,
                'payment_status' => 'Pending',
                'amount' => $data['amount'],
                'currency' => 'BDT',
                'customer_name' => $data['cus_name'],
                'customer_email' => $data['cus_email'],
                'customer_phone' => $data['cus_phone'],
                'user_id' => auth('course')->id(),   // ✅ NEW
                'course_id' => $request->course_id,  // ✅ NEW
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
            return redirect()->route('user-signin')->with('error', 'Transaction ID missing.');
        }

        $verification = $this->amarPay->verifyTransaction($trxId);
        $payment = Payment::where('transaction_id', $trxId)->first();

        if (!$payment) {
            return redirect()->route('user-signin')->with('error', 'Payment record not found.');
        }

        $payment->update([
            'payment_status' => $verification['pay_status'] ?? 'Failed',
            'response_data' => json_encode($verification),
        ]);

        if (($verification['pay_status'] ?? '') === 'Successful') {
            $user = \App\Models\CourseUser::find($payment->user_id); // ✅ fallback
            $courseId = $payment->course_id;

            if ($user && $courseId) {
                \App\Models\CourseUserPayment::firstOrCreate([
                    'user_id' => $user->id,
                    'course_id' => $courseId,
                    'transaction_id' => $trxId,
                ], [
                    'payment_status' => 'success',
                ]);
            }

            return redirect()->route('user-signin')
                ->with('success', 'Payment successful. Please log in again to start your course.');
        }

        return redirect()->route('user-signin')->with('error', 'Payment verification failed.');
    }



    public function fail(Request $request)
    {
        $trxId = $request->input('mer_txnid');

        // Optional: update payment status
        if ($trxId) {
            $payment = Payment::where('transaction_id', $trxId)->first();
            if ($payment) {
                $payment->update([
                    'payment_status' => 'Failed',
                    'response_data' => $request->all(),
                ]);
            }
        }

        return redirect()->away(route('user-signin', ['message' => 'payment_failed']));
    }

    public function cancel()
    {
        return redirect()->route('course')->with('error', 'Payment canceled.');
    }
}
