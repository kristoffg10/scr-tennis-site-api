<?php

namespace App\Services\Plan;

use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
    Log,
};
use App\Models\{
    Plan,
    PlanAvailment,
};
use App\Traits\GlobalTrait;

class PlanAvailmentService
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
        $record = PlanAvailment::orderBy('sequence')
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
        $record = PlanAvailment::create([
            'plan_id'       => $plan_id,
            'title'         => $request->title,
            'sequence'      => $request->sequence,
        ]);

        if ($request->has('main_image')) {
            $this->addImages('plan_availment', $request, $record, 'main_image');
        }

        $this->generateLog(Auth::guard('api')->user(), "Created", "Plan Availment", $record);
        $record->load('images');

        return response([
            'record' => $record
        ]);
    }

    /**
     * PlanAvailmentService show
     * @param Request $request
     * @param Plan $plan
     * @param PlanAvailment $planAvailment
     * @return Response
     */
    public function show($request, $plan_id, $availment): Response
    {
        // Explicitly find the record to ensure it exists and has all fields
        $record = PlanAvailment::where('id', $availment)
            ->where('plan_id', $plan_id)
            ->firstOrFail();
        
        $record->load('images');
        return response([
            'record' => $record
        ]);
    }

    /**
     * PlanAvailmentService update
     * @param Request $request
     * @param Plan $plan
     * @param PlanAvailment $planAvailment
     * @return Response
     */
    public function update($request, $plan_id, PlanAvailment $availment): Response
    {
                Log::info($request->all());
                        Log::info($plan_id);
        Log::info($availment);
        $availment->update([
            'title'         => $request->title,
            'sequence'      => $request->sequence,
        ]);

        if ($request->has('main_image')) {
            $this->updateImages('plan_availment', $request, $availment, 'main_image');
        }
        $this->generateLog(Auth::guard('api')->user(), "Changed", "Plan Availment", $availment);
        $availment->load('images');
        return response([
            'record' => $availment
        ]);
    }

    /**
     * PlanAvailmentService destroy
     * @param Request $request
     * @param Plan $plan
     * @param PlanAvailment $planAvailment
     * @return Response
     */
    public function destroy($request, $plan_id, PlanAvailment $availment): Response
    {
        $availment->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Plan Availment", $availment);
        return response([
            'record' => 'Plan Availment deleted successfully!'
        ]);
    }
}