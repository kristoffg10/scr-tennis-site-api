<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\{
    DoctorAccreditationMail,
    UserInquiryMail
};
use Illuminate\Support\Facades\{
    Mail
};
use Illuminate\Support\Facades\Log;
use App\Models\Taxonomy;

class SendDoctorAccreditationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    public $remotePath;
    public $subject;
    public $email_message;

    /**
     * Create a new job instance.
     *
     * @return void
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
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->data['email_address'])->queue(new UserInquiryMail($this->data, $this->subject, $this->email_message));

        $taxonomy = Taxonomy::where('name', 'Doctor Accreditation')->first();
            if (!empty($taxonomy?->email_recipients)) {
                $recipients = array_filter((array) $taxonomy->email_recipients);
                if (!empty($recipients)) {
                    Mail::to($recipients)->queue(new DoctorAccreditationMail($this->data, $this->remotePath)); 
                }
            }
    }
}
