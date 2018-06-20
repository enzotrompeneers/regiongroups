<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactPortfolio extends Mailable
{
    use Queueable, SerializesModels;

    public $email_sender;
    public $email_subject;
    public $email_message;

    /**
     * Create a new message instance.
     *
     * @return void
     *
     */
    public function __construct($email_sender, $email_subject, $email_message)
    {
        $this->email_sender = $email_sender;
        $this->email_subject = $email_subject;
        $this->email_message = $email_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.portfolio');
    }
}
