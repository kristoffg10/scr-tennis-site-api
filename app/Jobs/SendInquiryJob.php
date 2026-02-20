<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\{
    AdminInquiryMail,
    UserInquiryMail
};
use Illuminate\Support\Facades\{
    Mail
};
use Illuminate\Support\Facades\Log;
use App\Models\Taxonomy;

class SendInquiryJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    public $subject;
    public $email_message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data, $subject, $email_message)
    {
        $this->data = $data;
        $this->subject = $subject;
        $this->email_message = $email_message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->data['email_address'])->queue(new UserInquiryMail($this->data, $this->subject, $this->email_message));
         //get email based on inquiry type from taxonomies
    //     $email = Taxonomy::where('name', 'Contact Us Inquiry')
    //         ->select('email_recipients')
    //         ->first();

    //     if ($email && !empty($email->email_recipients)) {
    //         Mail::to($email->email_recipients)->queue(new AdminInquiryMail($this->data));
    //     } 
    // }
        $taxonomy = Taxonomy::where('name', 'Contact Us Inquiry')->first();

            if (!empty($taxonomy?->email_recipients)) {

                // cast guarantees array, but we normalize anyway
                $recipients = array_filter((array) $taxonomy->email_recipients);

                if (!empty($recipients)) {
                    Mail::to($recipients)->queue(new AdminInquiryMail($this->data)); 
                }
            }
    }
}
