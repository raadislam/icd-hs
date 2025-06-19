<?php

namespace App\Jobs;

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
            $pdf = Pdf::loadView('pdf.certificate', [
                'user' => $user,
                'course' => $course,
            ]);

            Mail::to($user->email)->send(new CertificateMail($pdf));

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
