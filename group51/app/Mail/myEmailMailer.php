<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class myEmailMailer extends Mailable
{
    use Queueable;
    use SerializesModels;

    /**
     * Create a new message instance.
     */
    public $details;

    public function __construct($details)
    {
        $this->details = $details;
        // فيه داتا عاوز ابعتها
    }
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'My Email Mailer',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail',// صفحه انا بصممها
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
