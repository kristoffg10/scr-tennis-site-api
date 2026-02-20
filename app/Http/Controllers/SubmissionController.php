<?php

namespace App\Http\Controllers;

use Illuminate\Http\{
    Request,
    Response
};

use App\Services\Submission\SubmissionService;

class SubmissionController extends Controller
{
    protected $submissionService;

    public function __construct (SubmissionService $submissionService)
    {
        $this->submissionService = $submissionService;
    }

    public function submitInquiry (Request $request): Response
    {
        return $this->submissionService->submitInquiry($request);
    }

    public function submitCareerApplication (Request $request): Response
    {
        return $this->submissionService->submitCareerApplication($request);
    }

    public function submitProposal (Request $request): Response
    {
        return $this->submissionService->submitProposal($request);
    }

    public function submitClinicAccreditation (Request $request): Response
    {
        return $this->submissionService->submitClinicAccreditation($request);
    }

    public function submitHospitalAccreditation (Request $request): Response
    {
        return $this->submissionService->submitHospitalAccreditation($request);
    }

    public function submitDoctorAccreditation (Request $request): Response
    {
        return $this->submissionService->submitDoctorAccreditation($request);
    }

    public function submitAgentAccreditation (Request $request): Response
    {
        return $this->submissionService->submitAgentAccreditation($request);
    }

}
