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
    SectionTestimonial
};
use App\Traits\GlobalTrait;
use Illuminate\Support\Facades\Log as Logger;

class SectionTestimonialService
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
        $record = SectionTestimonial::orderBy('sequence')
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
        $validator = Validator::make($request->all(), [
            'name'      => ['required', 'string', 'max:255'],
            'position'  => ['required', 'string', 'max:255'],
            'company'   => ['required', 'string', 'max:255'],
            'content'   => ['nullable', 'string'],
            'main_image' => ['required'],
        ]);

        if ($validator->fails()) {
            return response([
                'errors' => $validator->errors()
            ], 422);
        }

        $contentPlain = trim(strip_tags((string) $request->content));
        if (!empty($contentPlain) && mb_strlen($contentPlain) > 150) {
            return response([
                'errors' => [
                    'content' => ['Content may not be greater than 150 characters.'],
                ]
            ], 422);
        }

        /**
         * Sequence rules (same as Section Tabs):
         * - Sequence should start from 1 (not 0); auto-assign only on create.
         * - Deleted records should NOT block reuse of their sequence value.
         * - On update, whatever sequence is sent from the CMS should be respected.
         */
        $existingSequences = SectionTestimonial::where('parent_id', $parent_id)
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

        $record = SectionTestimonial::create([
            'parent_id'     => $parent_id,
            'name'          => $request->name,
            'position'      => $request->position,
            'company'       => $request->company,
            'content'       => $request->content,
            'sequence'      => $nextSequence,
        ]);

        $this->addImages('section_testimonial', $request, $record, 'main_image');


        $this->generateLog(Auth::guard('api')->user(), "Created", "Section Testimonial", $record);
        
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
    public function show($request, $parent_id, SectionTestimonial $record): Response
    {
        $record->load('images');
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
    public function update($request, $parent_id, SectionTestimonial $record): Response
    {
        $validator = Validator::make($request->all(), [
            'name'      => ['required', 'string', 'max:255'],
            'position'  => ['required', 'string', 'max:255'],
            'company'   => ['required', 'string', 'max:255'],
            'content'   => ['nullable', 'string'],
            'sequence'  => [
                'required',
                'integer',
                Rule::unique('section_testimonials', 'sequence')
                    ->where(function ($query) use ($parent_id) {
                        return $query
                            ->where('parent_id', $parent_id)
                            ->whereNull('deleted_at');
                    })
                    ->ignore($record->id),
            ],
        ]);

        if ($validator->fails()) {
            return response([
                'errors' => $validator->errors()
            ], 422);
        }

        $contentPlain = trim(strip_tags((string) $request->content));
        if (!empty($contentPlain) && mb_strlen($contentPlain) > 150) {
            return response([
                'errors' => [
                    'content' => ['Content may not be greater than 150 characters.'],
                ]
            ], 422);
        }

        if (!$record->images()->where('category', 'main_image')->exists() && !$request->has('main_image')) {
            return response([
                'errors' => [
                    'main_image' => ['Main image is required.'],
                ]
            ], 422);
        }

        $record->update([
            'name'          => $request->name,
            'position'      => $request->position,
            'company'       => $request->company,
            'content'       => $request->content,
            'sequence'      => $request->sequence,
        ]);

        if ($request->has('main_image')) {
            $this->updateImages('section_testimonial', $request, $record, 'main_image');
        }

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Section Testimonial", $record);
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
    public function destroy($request, $parent_id, SectionTestimonial $record): Response
    {
        $record->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Section Testimonial", $record);
        return response([
            'record' => 'Section Testimonial deleted successfully!'
        ]);
    }
}