<?php

namespace App\Http\Controllers;

use App\Models\AnnualReport;
use Illuminate\Http\{
    Request,
    Response
};
use App\Http\Requests\AnnualReportRequest;
use App\Services\AnnualReport\AnnualReportService;

class AnnualReportController extends Controller
{
    /**
     * @var AnnualReportService
     */
    protected $annualReportService;

    /**
     * AnnualReportController constructor
     * @param AnnualReportService $annualReportService
     */
    public function __construct (AnnualReportService $annualReportService)
    {
        $this->annualReportService = $annualReportService;
    }

    /**
     * AnnualReportController index
     * @param  Request $request
     * @return Response
     */
    public function index (Request $request): Response
    {
        return $this->annualReportService->index($request);
    }

    /**
     * AnnualReportController store
     * @param  AnnualReportRequest $request
     * @return Response
     */
    public function store (AnnualReportRequest $request): Response
    {
        return $this->annualReportService->store($request);
    }

    /**
     * AnnualReportController show
     * @param  AnnualReport $annual_report
     * @param  Request $request
     * @return Response
     */
    public function show (AnnualReport $annual_report, Request $request): Response
    {
        return $this->annualReportService->show($annual_report, $request);
    }

    /**
     * AnnualReportController update
     * @param  AnnualReport $annual_report
     * @param  AnnualReportRequest $request
     * @return Response
     */
    public function update (AnnualReport $annual_report, AnnualReportRequest $request): Response
    {
        return $this->annualReportService->update($annual_report, $request);
    }

    /**
     * nnualReportController destroy
     * @param  AnnualReport $annual_report
     * @param  Request $request
     * @return Response
     */
    public function destroy (AnnualReport $annual_report, Request $request): Response
    {
        return $this->annualReportService->destroy($annual_report, $request);
    }
}
