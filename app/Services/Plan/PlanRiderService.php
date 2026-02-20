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
    PlanRider,
};
use App\Traits\GlobalTrait;

class PlanRiderService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * PlanRiderService index
     * @param Request $request
     * @param Plan $plan
     * @return Response
     */
    public function index($request, $plan_id): Response
    {
        $record = PlanRider::orderBy('sequence')
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
     * PlanRiderService store
     * @param Request $request
     * @param Plan $plan
     * @return Response
     */
    public function store($request, $plan_id): Response
    {
        $record = PlanRider::create([
            'plan_id'       => $plan_id,
            'title'         => $request->title,
            'description'   => $request->description,
            'sequence'      => $request->sequence,
        ]);

        if ($request->has('main_image')) {
            $this->addImages('plan_rider', $request, $record, 'main_image');
        }

        $this->generateLog(Auth::guard('api')->user(), "Created", "Plan Rider", $record);
        $record->load('images');

        return response([
            'record' => $record
        ]);
    }

    /**
     * PlanRiderService show
     * @param Request $request
     * @param Plan $plan
     * @param PlanRider $planRider
     * @return Response
     */
    public function show($request, $plan_id, $rider): Response
    {
        // Explicitly find the record to ensure it exists and has all fields
        $record = PlanRider::where('id', $rider)
            ->where('plan_id', $plan_id)
            ->firstOrFail();
        
        $record->load('images');
        return response([
            'record' => $record
        ]);
    }

    /**
     * PlanRiderService update
     * @param Request $request
     * @param Plan $plan
     * @param PlanRider $planRider
     * @return Response
     */
    public function update($request, $plan_id, PlanRider $rider): Response
    {
        $rider->update([
            'title'         => $request->title,
            'description'   => $request->description,
            'sequence'      => $request->sequence,
        ]);

        if ($request->has('main_image')) {
            $this->updateImages('plan_rider', $request, $rider, 'main_image');
        }
        $this->generateLog(Auth::guard('api')->user(), "Changed", "Plan Rider", $rider);
        $rider->load('images');
        return response([
            'record' => $rider
        ]);
    }

    /**
     * PlanRiderService destroy
     * @param Request $request
     * @param Plan $plan
     * @param PlanRider $planRider
     * @return Response
     */
    public function destroy($request, $plan_id, PlanRider $rider): Response
    {
        $rider->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Plan Rider", $rider);
        return response([
            'record' => 'Plan Rider deleted successfully!'
        ]);
    }
}