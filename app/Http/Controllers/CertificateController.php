<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CertificateRequest;
use App\Jobs\SendCertificateJob;

class CertificateController extends Controller
{
    public function request($course)
    {
        $user = auth('course')->user();

        $alreadyRequested = CertificateRequest::where('course_user_id', $user->id)
            ->where('course_id', $course)
            ->where('status', 'success')
            ->exists();

        if ($alreadyRequested) {
            return back()->with('info', 'You have already received your certificate.');
        }

        $certRequest = CertificateRequest::updateOrCreate(
            ['course_user_id' => $user->id, 'course_id' => $course],
            ['status' => 'pending', 'requested_at' => now(), 'fail_reason' => null]
        );

        // Optionally dispatch job now (or let cron do it)
        dispatch(new SendCertificateJob($certRequest));

        return back()->with('success', 'Certificate request submitted! You will receive it by email soon.');
    }

    public function certificateRequests()
    {
        $success = CertificateRequest::where('status', 'success')->with(['courseUser', 'course'])->get();
        $pendingOrFailed = CertificateRequest::whereIn('status', ['pending', 'failed'])->with(['courseUser', 'course'])->get();

        return view('dashboard.certificate-request', [
            'successRequests' => $success,
            'pendingOrFailedRequests' => $pendingOrFailed,
        ]);
    }

    public function retry($id)
    {
        $certRequest = \App\Models\CertificateRequest::findOrFail($id);
        dispatch(new \App\Jobs\SendCertificateJob($certRequest));
        return back()->with('info', 'Retry job dispatched.');
    }
}
