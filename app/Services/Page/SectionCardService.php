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
    SectionCard
};
use App\Traits\GlobalTrait;

class SectionCardService
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
        $record = SectionCard::orderBy('sequence')
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
     * SectionCardService store
     * @param Request $request
     * @param Page $page
     * @return Response
     */
    public function store($request, $parent_id): Response
    {
        $validator = Validator::make($request->all(), [
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sequence'    => ['nullable', 'integer'], // optional on create; backend auto-assigns
        ]);

        if ($validator->fails()) {
            return response([
                'errors' => $validator->errors()
            ], 422);
        }

        /**
         * Sequence rules (same as Section Tabs):
         * - Sequence should start from 1 (not 0); auto-assign only on create.
         * - Deleted records should NOT block reuse of their sequence value.
         * - On update, whatever sequence is sent from the CMS should be respected.
         */
        $existingSequences = SectionCard::where('parent_id', $parent_id)
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

        $record = SectionCard::create([
            'parent_id'     => $parent_id,
            'title'         => $request->title,
            'description'   => $request->description,
            'sequence'      => $nextSequence,
        ]);

        // Images: currently supporting main_image and mobile_image (for specific parents)
        if ($request->has('main_image')) {
            $this->addImages('section_card', $request, $record, 'main_image');
        }
        if ($request->has('mobile_image')) {
            $this->addImages('section_card', $request, $record, 'mobile_image');
        }

        $this->generateLog(Auth::guard('api')->user(), "Created", "Section Card", $record);
        $record->load('images');

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
    public function show($request, $parent_id, SectionCard $record): Response
    {
        $record->load('images');
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionCardService update
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function update($request, $parent_id, SectionCard $record): Response
    {
        $validator = Validator::make($request->all(), [
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sequence'    => [
                'required',
                'integer',
                // Enforce uniqueness only among NON-deleted section cards for this parent,
                // and ignore the current record when updating
                Rule::unique('section_cards', 'sequence')
                    ->where(function ($query) use ($parent_id, $record) {
                        return $query
                            ->where('parent_id', $parent_id)
                            ->whereNull('deleted_at')
                            ->where('id', '!=', $record->id);
                    }),
            ],
        ]);

        if ($validator->fails()) {
            return response([
                'errors' => $validator->errors()
            ], 422);
        }

        $record->update([
            'title'         => $request->title,
            'description'   => $request->description,
            'sequence'      => $request->sequence,
        ]);

        // Images: currently supporting main_image and mobile_image (for specific parents)
        if ($request->has('main_image')) {
            $this->updateImages('section_card', $request, $record, 'main_image');
        }
        if ($request->has('mobile_image')) {
            $this->updateImages('section_card', $request, $record, 'mobile_image');
        }
        $this->generateLog(Auth::guard('api')->user(), "Changed", "Section Card", $record);
        $record->load('images');
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
    public function destroy($request, $parent_id, SectionCard $record): Response
    {
        $record->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Section Card", $record);
        return response([
            'record' => 'Section Card deleted successfully!'
        ]);
    }
}