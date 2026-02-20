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
    SectionHotline
};
use App\Traits\GlobalTrait;

class SectionHotlineService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * SectionHotlineService index
     * @param Request $request
     * @param Page $page
     * @return Response
     */
    public function index($request, $parent_id): Response
    {
        $record = SectionHotline::orderBy('sequence')
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
     * SectionHotlineService store
     * @param Request $request
     * @param Page $page
     * @return Response
     */
    public function store($request, $parent_id): Response
    {
        /**
         * Sequence rules (same as Section Tabs):
         * - Sequence should start from 1 (not 0); auto-assign only on create.
         * - Deleted records should NOT block reuse of their sequence value.
         * - On update, whatever sequence is sent from the CMS should be respected.
         */
        $existingSequences = SectionHotline::where('parent_id', $parent_id)
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

        $record = SectionHotline::create([
            'parent_id'         => $parent_id,
            'title'             => $request->title,
            'type'              => $request->type,
            'primary_number'    => $request->primary_number,
            'secondary_number'  => $request->secondary_number,
            'sequence'          => $nextSequence,
        ]);

        $this->generateLog(Auth::guard('api')->user(), "Created", "Section Hotline", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionHotlineService show
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function show($request, $parent_id, SectionHotline $record): Response
    {
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionHotlineService update
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function update($request, $parent_id, SectionHotline $record): Response
    {
        $record->update([
            'title'             => $request->title,
            'type'              => $request->type,
            'primary_number'    => $request->primary_number,
            'secondary_number'  => $request->secondary_number,
            'sequence'          => $request->sequence,
        ]);

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Section Hotline", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionHotlineService destroy
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function destroy($request, $parent_id, SectionHotline $record): Response
    {
        $record->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Section Hotline", $record);
        return response([
            'record' => 'Section Hotline deleted successfully!'
        ]);
    }
}