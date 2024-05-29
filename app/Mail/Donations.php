<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Donations extends Mailable
{
    use Queueable, SerializesModels;

    public $donation;
    public function __construct($donation)
    {
        $this->donation = $donation;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Donation',
        );
    }


    public function content(): Content
    {
        return new Content(
            markdown: 'mail.donations',
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
