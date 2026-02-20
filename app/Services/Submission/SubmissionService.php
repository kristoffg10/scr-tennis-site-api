<?php

namespace App\Services\Submission;

use Illuminate\Support\Facades\{
    Validator
};
use Illuminate\Http\Response;
use App\Models\{
    Inquiry,
    Plan
};
use App\Traits\GlobalTrait;
use App\Jobs\SendInquiryJob;
use App\Jobs\SendCareerApplicationJob;
use App\Jobs\SendProposalJob;
use App\Jobs\SendClinicAccreditationJob;
use App\Jobs\SendHospitalAccreditationJob;
use App\Jobs\SendDoctorAccreditationJob;
use App\Jobs\SendAgentAccreditationJob;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use ZipArchive;

class SubmissionService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * InquiryService index
     * @param  Request  $request
     * @return Response
     */
    
    public function submitInquiry($request): Response
    {
        Log::info('Submitting Inquiry', ['request' => $request->all()]);
        //$this->verifyCaptcha($request['captcha_token']);

        $subject = 'We’ve received your inquiry';
        $email_message = 'Thanks for your message. We’ve received your message and we’ll get back to you through your preferred<br>method of contact at the soonest possible time.';
        SendInquiryJob::dispatch($request->all(), $subject, $email_message);

        return response([
            'success' => true,
            'message' => 'Inquiry submitted'
        ]);
    }

    public function submitCareerApplication($request): Response
    {
        Log::info('Submitting Career Application', ['request' => $request->all()]);
        //$this->verifyCaptcha($request['captcha_token']);

        $disk = 'public';
        $sftpDisk = 'sftp';
        $timestamp = now()->timestamp;

        if ($request->hasFile('resume_file')) {
            try {
                
                $todayFolder = now()->format('Y-m-d');

                $resumeFilename = $request->file('resume_file')->getClientOriginalName();
                $lastName = $request->get('last_name');
                $resumeFilename = $lastName . '_resume_' . $timestamp . '.' . $request->file('resume_file')->extension();
                $resumePath = 'resumes/' . $todayFolder . '/' . $resumeFilename;
                Storage::disk($disk)->put($resumePath, file_get_contents($request->file('resume_file')->path()));

                // upload to SFTP
                $remoteFolder = 'HR/' . $todayFolder;
                $localFile = Storage::disk($disk)->path($resumePath);
                $remotePath = $remoteFolder . '/' . $resumeFilename;
                Storage::disk($sftpDisk)->put($remotePath, file_get_contents($localFile));

            } catch (\Exception $e) {
                Log::error('Error storing resume file: ' . $e->getMessage());
            }
        }

        Log::info($remotePath.' stored on SFTP server.');

        $subject = 'Application Received - ' . $request->get('position');
        $email_message = 'Thank you for applying for the <b>' . $request->get('position') . '</b>. <br>We appreciate the time and effort you put into your application.<br><br>
        Our team is currently reviewing applications, and if your qualifications <br>match our requirements, we will be in touch regarding the next steps.<br>';

        SendCareerApplicationJob::dispatch($request->except('resume_file'), $remotePath, $subject, $email_message);

        return response([
            'success' => true,
            'message' => 'Inquiry submitted'
        ]);
    }

    public function submitProposal($request): Response
    {
        Log::info('Submitting Proposal', ['request' => $request->all()]);
        //$this->verifyCaptcha($request['token']);

        $selected_plans = Plan::whereIn('id', $request->get('selected_products'))->get();

        $subject = 'Your request form has been received!';
        $email_message = 'Thank you for your interest in our products! We’ve received your proposal request form. One of our<br> representatives will get back to you soon through the email you’ve provided. We hope to hear from you soon!';
        
        SendProposalJob::dispatch($request->all(), $subject, $email_message, $selected_plans);

        return response([
            'success' => true,
            'message' => 'Proposal submitted'
        ]);
    }

    public function submitClinicAccreditation($request): Response
    {
        Log::info('Submitting Clinic Accreditation', ['request' => $request->all()]);
        //$this->verifyCaptcha($request['captcha_token']);
        
        
        $subject = 'Your application has been received.';
        $email_message = 'Thank you for your submission! We’re currently reviewing your information we’ll<br> and contact you if we need additional details.';
        
        SendClinicAccreditationJob::dispatch($request->except(['clinic_photo','sec_certificate','doh_license','philhealth_certificate','roster_doctors','rates_procedures','package_rate','aca_form']), 'test.pdf', $subject, $email_message);

        
        // $disk = 'public';
        // $sftpDisk = 'sftp';
        // $timestamp = $request->get('form_timestamp');
        // $todayFolder = now()->format('Y-m-d');
        // $folderToZip = 'clinic-accreditations/' . $timestamp;

        // // 1️⃣ Save uploaded file
        // if ($request->hasFile('sec_certificate')) {
        //     try {
        //         $name = $request->get('name');
        //         $resumeFilename = $name . '_sec_certificate_' . $timestamp . '.' . $request->file('sec_certificate')->extension();
        //         $resumePath = $folderToZip . '/' . $resumeFilename;

        //         // Ensure directory exists
        //         Storage::disk($disk)->makeDirectory($folderToZip);

        //         // Save file
        //         Storage::disk($disk)->put($resumePath, file_get_contents($request->file('sec_certificate')->path()));

        //         Log::info('Sec certificate saved', ['path' => $resumePath]);
        //     } catch (\Exception $e) {
        //         Log::error('Error storing sec certificate file: ' . $e->getMessage());
        //         return response([
        //             'success' => false,
        //             'message' => 'Failed to store certificate'
        //         ], 500);
        //     }
        // }

        // // 2️⃣ Compress all files in today's folder into a ZIP
        // try {
        //     $zipFileName = $request->get('name') . '_clinic_accreditation_docs_' . $timestamp . '.zip';
        //     $zipRelativePath = 'zips/' . $zipFileName; // storage/app/zips
        //     $zipFullPath = storage_path('app/' . $zipRelativePath);

        //     // Make sure local zip folder exists
        //     // Storage::disk('local')->makeDirectory('zips');

        //     $zip = new ZipArchive();

        //     if ($zip->open($zipFullPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
        //         $files = Storage::disk($disk)->allFiles($folderToZip);

        //         foreach ($files as $file) {
        //             $absolutePath = Storage::disk($disk)->path($file);
        //             $relativeNameInZip = str_replace($folderToZip . '/', '', $file);
        //             $zip->addFile($absolutePath, $relativeNameInZip);
        //         }

        //         $zip->close();
        //         Log::info('ZIP created', ['zip' => $zipRelativePath]);
        //     } else {
        //         throw new \Exception('Could not create ZIP file.');
        //     }

        //     // 3️⃣ (Optional) Upload ZIP to SFTP
        //     Storage::disk($sftpDisk)->put('CLINIC ACCREDITATIONS/'.$todayFolder . '/' . $zipFileName, file_get_contents($zipFullPath));

        //     // 4️⃣ (Optional) Delete local ZIP after upload
        //     Storage::disk('local')->delete($zipRelativePath);

        // } catch (\Exception $e) {
        //     Log::error('Error creating/uploading ZIP: ' . $e->getMessage());
        //     return response([
        //         'success' => false,
        //         'message' => 'Failed to create/upload ZIP'
        //     ], 500);
        // }

        return response([
            'success' => true,
            'message' => 'Sec certificate submitted and zipped successfully'
        ]);
    }

    public function submitHospitalAccreditation($request): Response
    {
        Log::info('Submitting Hospital Accreditation', ['request' => $request->all()]);
        //$this->verifyCaptcha($request['captcha_token']);
        
        
        $subject = 'Your application has been received.';
        $email_message = 'Thank you for your submission! We’re currently reviewing your information we’ll<br> and contact you if we need additional details.';
        
        SendHospitalAccreditationJob::dispatch($request->except(['hospital_photo','sec_certificate','doh_license','philhealth_certificate','roster_doctors','rates_procedures','package_rate','aca_form']), 'test.pdf', $subject, $email_message);

        return response([
            'success' => true,
            'message' => 'Hospital accreditation submitted successfully'
        ]);
    }

    public function submitDoctorAccreditation($request): Response
    {
        Log::info('Submitting Doctor Accreditation', ['request' => $request->all()]);
        //$this->verifyCaptcha($request['captcha_token']);
        
        
        $subject = 'Your application has been received.';
        $email_message = 'Thank you for your submission! We’re currently reviewing your information we’ll<br> and contact you if we need additional details.';
        
        SendDoctorAccreditationJob::dispatch($request->except(['docApplication','docCV','docDiplomate','docFellow','docContract','docACA']), 'test.pdf', $subject, $email_message);

        return response([
            'success' => true,
            'message' => 'Doctor accreditation submitted successfully'
        ]);
    }

    public function submitAgentAccreditation($request): Response
    {
        Log::info('Submitting Agent Application', ['request' => $request->all()]);
        //$this->verifyCaptcha($request['captcha_token']);

        $disk = 'public';
        $sftpDisk = 'sftp';
        $timestamp = now()->timestamp;

        if ($request->hasFile('id')) {
            try {
                
                $todayFolder = now()->format('Y-m-d');

                $resumeFilename = $request->file('id')->getClientOriginalName();
                $lastName = $request->get('last_name');
                $resumeFilename = $lastName . '_identification_' . $timestamp . '.' . $request->file('id')->extension();
                $resumePath = 'resumes/' . $todayFolder . '/' . $resumeFilename;
                Storage::disk($disk)->put($resumePath, file_get_contents($request->file('id')->path()));

                // upload to SFTP
                $remoteFolder = 'AGENT ACCREDITATION/' . $todayFolder;
                $localFile = Storage::disk($disk)->path($resumePath);
                $remotePath = $remoteFolder . '/' . $resumeFilename;
                Storage::disk($sftpDisk)->put($remotePath, file_get_contents($localFile));

            } catch (\Exception $e) {
                Log::error('Error storing id file: ' . $e->getMessage());
            }
        }

        Log::info($remotePath.' stored on SFTP server.');

        $subject = 'Your application has been received.';
        $email_message = 'Thank you for your submission! We’re currently reviewing your information we’ll<br>and contact you if we need additional details.';

        SendAgentAccreditationJob::dispatch($request->except('id'), $remotePath, $subject, $email_message);

        return response([
            'success' => true,
            'message' => 'Inquiry submitted'
        ]);
    }


    

    
}
