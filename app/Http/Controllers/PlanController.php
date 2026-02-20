<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\{
    Request,
    Response
};
use App\Http\Requests\PlanRequest;
use App\Services\Plan\PlanService;

class PlanController extends Controller
{
    /**
     * @var PlanService
     */
    protected $planService;

    /**
     * PlanController constructor
     * @param PlanService $planService
     */
    public function __construct (PlanService $planService)
    {
        $this->planService = $planService;
    }

    /**
     * PlanController index
     * @param  Request $request
     * @return Response
     */
    public function index (Request $request): Response
    {
        return $this->planService->index($request);
    }

    /**
     * PlanController store
     * @param  PlanRequest $request
     * @return Response
     */
    public function store (PlanRequest $request): Response
    {
        return $this->planService->store($request);
    }

    /**
     * PlanController show
     * @param  Plan $plan
     * @param  Request $request
     * @return Response
     */
    public function show (Plan $plan, Request $request): Response
    {
        return $this->planService->show($plan, $request);
    }

    /**
     * PlanController update
     * @param  Plan $plan
     * @param  AgentRequest $request
     * @return Response
     */
    public function update (Plan $plan, PlanRequest $request): Response
    {
        return $this->planService->update($plan, $request);
    }

    /**
     * PlanController destroy
     * @param  Plan $plan
     * @param  Request $request
     * @return Response
     */
    public function destroy (Plan $plan, Request $request): Response
    {
        return $this->planService->destroy($plan, $request);
    }
}
