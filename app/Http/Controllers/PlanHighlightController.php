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
    PlanHighlight
};

use App\Http\Requests\PlanHighlightRequest;
use App\Services\Plan\PlanHighlightService;

class PlanHighlightController extends Controller
{
    protected $planHighlightService;

    public function __construct(PlanHighlightService $planHighlightService)
    {
        $this->planHighlightService = $planHighlightService;
    }

    public function index(Request $request, $plan_id): Response
    {
        return $this->planHighlightService->index($request, $plan_id);
    }

    public function store(PlanHighlightRequest $request, $plan_id): Response
    {
        return $this->planHighlightService->store($request, $plan_id);
    }

    public function show(Request $request, $plan_id, $highlight): Response
    {
        return $this->planHighlightService->show($request, $plan_id, $highlight);
    }

    public function update(PlanHighlightRequest $request, $plan_id, PlanHighlight $highlight): Response
    {
        return $this->planHighlightService->update($request, $plan_id, $highlight);
    }

    public function destroy(Request $request, $plan_id, PlanHighlight $highlight): Response
    {
        return $this->planHighlightService->destroy($request, $plan_id, $highlight);
    }


}

