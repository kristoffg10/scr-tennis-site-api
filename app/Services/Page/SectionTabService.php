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
    SectionTab
};
use App\Traits\GlobalTrait;

class SectionTabService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * SectionTabService index
     * @param Request $request
     * @param Page $page
     * @return Response
     */
    public function index($request, $parent_id): Response
    {
        $record = SectionTab::orderBy('sequence')
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
         * Sequence rules for Section Tabs:
         * - Sequence should start from 1 (not 0)
         * - It should auto-assign ONLY on create
         * - Deleted records should NOT block reuse of their sequence value
         *   (we pick the smallest available positive integer)
         * - On update, whatever sequence is sent from the CMS should be respected
         */

        // Find the smallest available positive sequence number for this parent
        $existingSequences = SectionTab::where('parent_id', $parent_id)
            ->whereNull('deleted_at')
            ->pluck('sequence')
            ->map(function ($seq) {
                return (int) $seq;
            })
            ->filter(function ($seq) {
                return $seq > 0;
            })
            ->sort()
            ->values()
            ->all();

        $nextSequence = 1;
        foreach ($existingSequences as $used) {
            if ($used === $nextSequence) {
                $nextSequence++;
            } elseif ($used > $nextSequence) {
                // We've found a gap; stop here so we can reuse it
                break;
            }
        }

        $record = SectionTab::create([
            'parent_id'     => $parent_id,
            'title'         => $request->title,
            'content_1'     => $request->content_1,
            'content_2'     => $request->content_2,
            // Always use the computed sequence on CREATE.
            // Updates remain fully manual via the update() method.
            'sequence'      => $nextSequence,
        ]);

        if ($request->has('main_image')) {
            $this->addImages('section_tab', $request, $record, 'main_image');
        }

        if( $request->has('pdf') || $request->has('files') ) {
            $this->updateImages('section_tab', $request, $record, 'pdf','file');
        }

        $this->generateLog(Auth::guard('api')->user(), "Created", "Section Tab", $record);
        $record->load('images','files');
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionTestimonialService show
     * @param Request $request
     * @param string $parent_id
     * @param SectionTab $record
     * @return Response
     */
    public function show($request, $parent_id, SectionTab $record): Response
    {
        // Verify the record belongs to the parent
        if ($record->parent_id !== $parent_id) {
            return response([
                'message' => 'Tab does not belong to the specified parent section'
            ], 403);
        }
        
        // Refresh the record to ensure we have the latest data
        $record->refresh();
        // Load relationships
        $record->load('images','files','faqs');
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
    public function update($request, $parent_id, SectionTab $record): Response
    {
        Log::info('Storing Section Tab for parent_id: ' . $parent_id);
        Log::info($request->all());
        Log::info($record->toArray());

        $record->update([
            'title'         => $request->title,
            'content_1'     => $request->content_1,
            'content_2'     => $request->content_2,
            'sequence'      => $request->sequence,
        ]);

        if ($request->has('main_image')) {
            $this->updateImages('section_tab', $request, $record, 'main_image');
        }
        // Run when there are new PDFs or when existing PDFs are present (e.g. title-only updates)
        if( $request->has('pdf') || $request->has('files') || $request->has('pdf_id') ) {
            $this->updateImages('section_tab', $request, $record, 'pdf','file');
        }
        $this->generateLog(Auth::guard('api')->user(), "Changed", "Section Tab", $record);
        $record->load('images','files');
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
    public function destroy($request, $parent_id, SectionTab $record): Response
    {
        $record->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Section Tab", $record);
        return response([
            'record' => 'Section Tab deleted successfully!'
        ]);
    }
}