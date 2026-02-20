<?php

namespace App\Services\Plan;

use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Log,
};
use App\Models\{
    Plan,
    PlanHighlight,
};
use App\Traits\GlobalTrait;

class PlanHighlightService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * PlanHighlightService index
     * @param Request $request
     * @param Plan $plan
     * @return Response
     */
    public function index($request, $plan_id): Response
    {
        $record = PlanHighlight::orderBy('sequence')
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
     * PlanHighlightService store
     * @param Request $request
     * @param Plan $plan
     * @return Response
     */
    public function store($request, $plan_id): Response
    {
        $record = PlanHighlight::create([
            'plan_id'       => $plan_id,
            'title'         => $request->title,
            'description'   => $request->description ?? null,
            'has_tooltip'   => $request->has_tooltip ?? 0,
            'tooltip_content' => $request->tooltip_content ?? null,
            'sequence'      => $request->sequence,
        ]);

        $this->addImages('plan_highlight', $request, $record, 'main_image');


        $this->generateLog($request->user(), "Created", "Plan Highlight", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * PlanHighlightService show
     * @param Request $request
     * @param Plan $plan
     * @param PlanHighlight $planHighlight
     * @return Response
     */
    public function show($request, $plan_id, $highlight): Response
    {
        // Explicitly find the record to ensure it exists and has all fields
        $record = PlanHighlight::where('id', $highlight)
            ->where('plan_id', $plan_id)
            ->firstOrFail();
        
        $record->load('images');
        return response([
            'record' => $record
        ]);
    }

    /**
     * PlanHighlightService update
     * @param Request $request
     * @param Plan $plan
     * @param PlanHighlight $planHighlight
     * @return Response
     */
    public function update($request, $plan_id, PlanHighlight $planHighlight): Response
    {

        $planHighlight->update([
            'title'         => $request->title,
            'description'   => $request->description ?? null,
            'has_tooltip'   => $request->has_tooltip ?? 0,
            'tooltip_content' => $request->tooltip_content ?? null,
            'sequence'      => $request->sequence,
        ]);

        $this->updateImages('plan_highlight', $request, $planHighlight, 'main_image');


        $this->generateLog($request->user(), "Changed", "Plan Highlight", $planHighlight);
        return response([
            'record' => $planHighlight
        ]);
    }

    /**
     * PlanHighlightService destroy
     * @param Request $request
     * @param Plan $plan
     * @param PlanHighlight $planHighlight
     * @return Response
     */
    public function destroy($request, $plan_id, PlanHighlight $planHighlight): Response
    {
        $planHighlight->delete();
        $this->generateLog($request->user(), "Deleted", "Plan Highlight", $planHighlight);
        return response([
            'planHighlight' => 'Plan Highlight deleted successfully!'
        ]);
    }

    
}
