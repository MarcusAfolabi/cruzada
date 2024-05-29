<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Partners extends Mailable
{
    use Queueable, SerializesModels;

   public $partner;
    public function __construct($partner)
    {
        $this->partner = $partner;
    }

   
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Partner',
        );
    }

   
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.partners',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
