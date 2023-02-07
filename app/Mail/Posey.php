<?php

namespace App\Mail;
// ea903e751992d2641b322ccf5a73f308;
// 9aa62e16c9832c737e7aff34d5d957a8 apikey;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Posey extends Mailable {
    use Queueable, SerializesModels;

    /**
    * Create a new message instance.
    *
    * @return void
    */

    public function __construct() {
        //
    }

    /**
    * Get the message envelope.
    *
    * @return \Illuminate\Mail\Mailables\Envelope
    */

    public function envelope() {
        return new Envelope(
            subject: 'Posey',
        );
    }

    /**
    * Get the message content definition.
    *
    * @return \Illuminate\Mail\Mailables\Content
    */

    public function content() {
        return new Content(
            view: 'view.name',
        );
    }

    /**
    * Get the attachments for the message.
    *
    * @return array
    */

    public function attachments() {
        return [];
    }
}
