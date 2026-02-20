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
    PlanFaq
};

use App\Http\Requests\PlanFaqRequest;
use App\Services\Plan\PlanFaqService;

class PlanFaqController extends Controller
{
    protected $planFaqService;

    public function __construct(PlanFaqService $planFaqService)
    {
        $this->planFaqService = $planFaqService;
    }

    public function index(Request $request, $plan_id): Response
    {
        return $this->planFaqService->index($request, $plan_id);
    }

    public function store(PlanFaqRequest $request, $plan_id): Response
    {
        return $this->planFaqService->store($request, $plan_id);
    }

    public function show(Request $request, $plan_id, $faq): Response
    {
        return $this->planFaqService->show($request, $plan_id, $faq);
    }

    public function update(Request $request, $plan_id, PlanFaq $faq): Response
    {
        return $this->planFaqService->update($request, $plan_id, $faq);
    }

    public function destroy(Request $request, $plan_id, PlanFaq $faq): Response
    {
        return $this->planFaqService->destroy($request, $plan_id, $faq);
    }


}

