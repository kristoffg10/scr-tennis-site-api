<?php

namespace App\Http\Controllers;

use Illuminate\Http\{
    Request,
    Response
};
use App\Services\Dashboard\DashboardService;

class DashboardController extends Controller
{

    protected $dashboardService;

    /**
     * Class constructor.
     *
     * @param DashboardService $dashboardService An instance of the DashboardService class.
     */
    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): Response
    {
        return $this->dashboardService->index($request);
    }

    public function smartSearch(Request $request): Response
    {
        return $this->dashboardService->smartSearch($request);
    }

    public function smartSearchFilter(Request $request): Response
    {
        return $this->dashboardService->smartSearchFilter($request);
    }
}
