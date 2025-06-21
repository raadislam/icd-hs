<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CertificateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $course;
    public $certificatePath;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $course, $certificatePath)
    {
        $this->user = $user;
        $this->course = $course;
        $this->certificatePath = $certificatePath;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Your Course Certificate')
            ->view('mails.certificate') // Or 'emails.certificate', as you wish
            ->attach($this->certificatePath, [
                'as' => 'certificate.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}
