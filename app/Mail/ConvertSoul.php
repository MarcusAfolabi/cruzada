<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConvertSoul extends Mailable
{
    use Queueable, SerializesModels;

  public $soul;
    public function __construct($soul)
    {
        $this->soul = $soul;
    }

  
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Convert Soul',
        );
    }

   
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.convert-soul',
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
