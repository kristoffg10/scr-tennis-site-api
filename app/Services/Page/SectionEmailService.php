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
    SectionEmail
};
use App\Traits\GlobalTrait;

class SectionEmailService
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
        $record = SectionEmail::orderBy('sequence')
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
        $existingSequences = SectionEmail::where('parent_id', $parent_id)
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

        $record = SectionEmail::create([
            'parent_id'         => $parent_id,
            'title'             => $request->title,
            'email'             => $request->email,
            'sequence'          => $nextSequence,
        ]);

        $this->generateLog(Auth::guard('api')->user(), "Created", "Section Email", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionEmailService show
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function show($request, $parent_id, SectionEmail $record): Response
    {
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionEmailService update
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function update($request, $parent_id, SectionEmail $record): Response
    {
        $record->update([
            'title'             => $request->title,
            'email'             => $request->email,
            'sequence'          => $request->sequence,
        ]);

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Section Email", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionEmailService destroy
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function destroy($request, $parent_id, SectionEmail $record): Response
    {
        $record->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Section Email", $record);
        return response([
            'record' => 'Section Email deleted successfully!'
        ]);
    }
}