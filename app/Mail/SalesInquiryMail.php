<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SalesInquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $selected_plans;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $selected_plans)
    {
        $this->data = $data;
        $this->selected_plans = $selected_plans;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Proposal Request - ' . $this->data['company_name'])
            ->view('emails.sales-inquiry-mail');
    }
}