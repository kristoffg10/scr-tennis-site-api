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
    PlanAvailment
};

use App\Http\Requests\PlanAvailmentRequest;
use App\Services\Plan\PlanAvailmentService;

class PlanAvailmentController extends Controller
{
    protected $planAvailmentService;

    public function __construct(PlanAvailmentService $planAvailmentService)
    {
        $this->planAvailmentService = $planAvailmentService;
    }

    public function index(Request $request, $plan_id): Response
    {
        return $this->planAvailmentService->index($request, $plan_id);
    }

    public function store(PlanAvailmentRequest $request, $plan_id): Response
    {
        return $this->planAvailmentService->store($request, $plan_id);
    }

    public function show(Request $request, $plan_id, $availment): Response
    {
        return $this->planAvailmentService->show($request, $plan_id, $availment);
    }

    public function update(Request $request, $plan_id, PlanAvailment $availment): Response
    {
        return $this->planAvailmentService->update($request, $plan_id, $availment);
    }

    public function destroy(Request $request, $plan_id, PlanAvailment $availment): Response
    {
        return $this->planAvailmentService->destroy($request, $plan_id, $availment);
    }


}

