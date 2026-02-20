<?php

namespace App\Services\Page;

use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
};
use App\Models\{
    PageSection,
    SectionBenefit
};
use App\Traits\GlobalTrait;

class SectionBenefitService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * SectionBenefitService index
     * @param Request $request
     * @param Page $page
     * @return Response
     */
    public function index($request, $parent_id): Response
    {
        $record = SectionBenefit::orderBy('sequence')
        ->where('parent_id', $parent_id)
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
     * SectionBenefitService store
     * @param Request $request
     * @param Page $page
     * @return Response
     */
    public function store($request, $parent_id): Response
    {
        /**
         * Sequence rules (same as Section Tabs):
         * - Sequence should start from 1 (not 0)
         * - It should auto-assign ONLY on create
         * - Deleted records should NOT block reuse of their sequence value
         * - On update, whatever sequence is sent from the CMS should be respected
         */
        $existingSequences = SectionBenefit::where('parent_id', $parent_id)
            ->whereNull('deleted_at')
            ->pluck('sequence')
            ->map(fn ($seq) => (int) $seq)
            ->filter(fn ($seq) => $seq > 0)
            ->sort()
            ->values()
            ->all();
        $nextSequence = 1;
        foreach ($existingSequences as $used) {
            if ($used === $nextSequence) {
                $nextSequence++;
            } elseif ($used > $nextSequence) {
                break;
            }
        }

        $record = SectionBenefit::create([
            'parent_id'     => $parent_id,
            'title'         => $request->title,
            'description'   => $request->description,
            'type'          => $request->type,
            'sequence'      => $nextSequence,
        ]);

        if ($request->has('main_image')) {
            $this->addImages('section_benefit', $request, $record, 'main_image');
        }
        $this->generateLog(Auth::guard('api')->user(), "Created", "Section Benefit", $record);
        $record->load('images');

        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionBenefitService show
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function show($request, $parent_id, SectionBenefit $record): Response
    {
        $record->load('images');
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionBenefitService update
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function update($request, $parent_id, SectionBenefit $record): Response
    {
        $record->update([
            'title'         => $request->title,
            'description'   => $request->description,
            'type'          => $request->type,
            'sequence'      => $request->sequence,
        ]);
        if ($request->has('main_image')) {
            $this->updateImages('section_benefit', $request, $record, 'main_image');
        }
        $this->generateLog(Auth::guard('api')->user(), "Changed", "Section Benefit", $record);
        $record->load('images');
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionBenefitService destroy
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function destroy($request, $parent_id, SectionBenefit $record): Response
    {
        $record->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Section Benefit", $record);
        return response([
            'record' => 'Section Benefit deleted successfully!'
        ]);
    }
}