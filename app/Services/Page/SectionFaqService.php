<?php

namespace App\Services\Page;

use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
    Log,
};
use App\Models\{
    PageSection,
    SectionFaq
};
use App\Traits\GlobalTrait;

class SectionFaqService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * SectionTestimonialService index
     * @param Request $request
     * @param Page $page
     * @return Response
     */
    public function index($request, $parent_id): Response
    {
        $record = SectionFaq::orderBy('sequence')
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
     * SectionTestimonialService store
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
        $existingSequences = SectionFaq::where('parent_id', $parent_id)
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

        $record = SectionFaq::create([
            'parent_id'     => $parent_id,
            'title'         => $request->title,
            'answer'        => $request->answer,
            'sequence'      => $nextSequence,
        ]);

        $this->generateLog(Auth::guard('api')->user(), "Created", "Section FAQ", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionTestimonialService show
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function show($request, $parent_id, SectionFaq $record): Response
    {
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionTestimonialService update
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function update($request, $parent_id, SectionFaq $record): Response
    {
        // Log::info('Updating Section FAQ for parent_id: ' . $parent_id);
        // Log::info($request->all());
        // Log::info($record->toArray());
        $record->update([
            'title'         => $request->title,
            'answer'        => $request->answer,
            'sequence'      => $request->sequence,
        ]);

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Section FAQ", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionTestimonialService destroy
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function destroy($request, $parent_id, SectionFaq $record): Response
    {
        $record->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Section FAQ", $record);
        return response([
            'record' => 'Section FAQ deleted successfully!'
        ]);
    }
}