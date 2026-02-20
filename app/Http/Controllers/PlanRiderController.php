<?php

namespace App\Http\Controllers;

use Illuminate\Http\{
    Request,
    Response
};
use Illuminate\Support\Facades\{
    Validator,
    Facade,
};
use App\Models\{
    Plan,
    PlanRider
};

use App\Http\Requests\PlanRiderRequest;
use App\Services\Plan\PlanRiderService;

class PlanRiderController extends Controller
{
    protected $planRiderService;

    public function __construct(PlanRiderService $planRiderService)
    {
        $this->planRiderService = $planRiderService;
    }

    public function index(Request $request, $plan_id): Response
    {
        return $this->planRiderService->index($request, $plan_id);
    }

    public function store(PlanRiderRequest $request, $plan_id): Response
    {
        return $this->planRiderService->store($request, $plan_id);
    }

    public function show(Request $request, $plan_id, $rider): Response
    {
        return $this->planRiderService->show($request, $plan_id, $rider);
    }

    public function update(Request $request, $plan_id, PlanRider $rider): Response
    {
        return $this->planRiderService->update($request, $plan_id, $rider);
    }

    public function destroy(Request $request, $plan_id, PlanRider $rider): Response
    {
        return $this->planRiderService->destroy($request, $plan_id, $rider);
    }


}

