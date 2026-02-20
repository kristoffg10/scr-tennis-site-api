<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\{
    UserInquiryMail,
    AgentAccreditationMail
};
use Illuminate\Support\Facades\{
    Mail
};
use Illuminate\Support\Facades\Log;
use App\Models\Taxonomy;

class SendAgentAccreditationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    public $remotePath;
    public $subject;
    public $email_message;
    /**
     * Create a new job instance.
     */
    public function __construct($data, $remotePath, $subject, $email_message)
    {
        $this->data = $data;
        $this->remotePath = $remotePath;
        $this->subject = $subject;
        $this->email_message = $email_message;
    }


    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->data['email_address'])->queue(new UserInquiryMail($this->data, $this->subject, $this->email_message));

        $taxonomy = Taxonomy::where('name', 'Agent Accreditation')->first();

        if (!empty($taxonomy?->email_recipients)) {
            $recipients = array_filter((array) $taxonomy->email_recipients);
            if (!empty($recipients)) {
                    Mail::to($recipients)->queue(new AgentAccreditationMail($this->data, $this->remotePath)); 
            }
        }

    }
}
