<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\{
    SalesInquiryMail,
    UserInquiryMail
};
use Illuminate\Support\Facades\{
    Mail
};
use Illuminate\Support\Facades\Log;
use App\Models\Taxonomy;

class SendProposalJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    public $subject;
    public $email_message;
    public $selected_plans;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data, $subject, $email_message, $selected_plans)
    {
        $this->data = $data;
        $this->subject = $subject;
        $this->email_message = $email_message;
        $this->selected_plans = $selected_plans;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->data['email_address'])->queue(new UserInquiryMail($this->data, $this->subject, $this->email_message));

        $taxonomy = Taxonomy::where('name', 'Request for Proposal')->first();
            if (!empty($taxonomy?->email_recipients)) {
                $recipients = array_filter((array) $taxonomy->email_recipients);
                if (!empty($recipients)) {
                    Mail::to($recipients)->queue(new SalesInquiryMail($this->data, $this->selected_plans)); 
                }
            }
    }
}
