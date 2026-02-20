<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HRInquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $remotePath;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $remotePath)
    {
        $this->data = $data;
        $this->remotePath = $remotePath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Career Application - ' . $this->data['position'])
            ->view('emails.hr-inquiry-mail');
    }
}
