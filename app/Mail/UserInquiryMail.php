<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserInquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $subject;
    public $email_message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $subject, $email_message)
    {
        //
        $this->data = $data;
        $this->subject = $subject;
        $this->email_message = $email_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
            ->view('emails.user-inquiry-mail');
    }
}
