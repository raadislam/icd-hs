<?php
// app/Console/Commands/RetryPendingCertificates.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\CertificateRequest;
use App\Jobs\SendCertificateJob;

class RetryPendingCertificates extends Command
{
    protected $signature = 'certificates:retry-pending';
    protected $description = 'Retry sending pending or failed certificates';

    public function handle()
    {
        $pending = CertificateRequest::whereIn('status', ['pending', 'failed'])->get();
        foreach ($pending as $certRequest) {
            dispatch(new SendCertificateJob($certRequest));
        }
        $this->info("Retried " . $pending->count() . " pending/failed certificate jobs.");
    }
}
