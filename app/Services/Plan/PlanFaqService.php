<?php

namespace App\Services\Plan;

use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
};
use App\Models\{
    Plan,
    PlanFaq,
};
use App\Traits\GlobalTrait;

class PlanFaqService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * PlanAvailmentService index
     * @param Request $request
     * @param Plan $plan
     * @return Response
     */
    public function index($request, $plan_id): Response
    {
        $record = PlanFaq::orderBy('sequence')
        ->where('plan_id', $plan_id)
        ->when( $request->filled('all') , function ($q, $request) {
            return $q->get();
        }, function ($q) {
            return $q->paginate(20);
        });

        return response([
            'records' => $record
        ]);
    }

    /**
     * PlanAvailmentService store
     * @param Request $request
     * @param Plan $plan
     * @return Response
     */
    public function store($request, $plan_id): Response
    {
        $record = PlanFaq::create([
            'plan_id'       => $plan_id,
            'title'         => $request->title,
            'answer'        => $request->answer,
            'sequence'      => $request->sequence,
        ]);
        $this->generateLog(Auth::guard('api')->user(), "Created", "Plan Faq", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * PlanFaqService show
     * @param Request $request
     * @param Plan $plan
     * @param PlanFaq $planFaq
     * @return Response
     */
    public function show($request, $plan_id, $faq): Response
    {
        // Explicitly find the record to ensure it exists and has all fields
        $record = PlanFaq::where('id', $faq)
            ->where('plan_id', $plan_id)
            ->firstOrFail();
        
        $record->load('images');
        return response([
            'record' => $record
        ]);
    }

    /**
     * PlanFaqService update
     * @param Request $request
     * @param Plan $plan
     * @param PlanFaq $planFaq
     * @return Response
     */
    public function update($request, $plan_id, PlanFaq $faq): Response
    {
        $faq->update([
            'title'         => $request->title,
            'answer'        => $request->answer,
            'sequence'      => $request->sequence,
        ]);

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Plan Faq", $faq);
        return response([
            'record' => $faq
        ]);
    }

    /**
     * PlanFaqService destroy
     * @param Request $request
     * @param Plan $plan
     * @param PlanFaq $planFaq
     * @return Response
     */
    public function destroy($request, $plan_id, PlanFaq $faq): Response
    {
        $faq->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Plan Faq", $faq);
        return response([
            'record' => 'Plan Faq deleted successfully!'
        ]);
    }
}