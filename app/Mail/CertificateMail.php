<?php
// app/Mail/CertificateMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CertificateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdf;

    public function __construct($pdf)
    {
        $this->pdf = $pdf;
    }

    public function build()
    {
        return $this->subject('Your Course Certificate')
            ->view('emails.certificate')
            ->attachData($this->pdf->output(), 'certificate.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
