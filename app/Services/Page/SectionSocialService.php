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
    SectionSocial
};
use App\Traits\GlobalTrait;

class SectionSocialService
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
        $record = SectionSocial::orderBy('sequence')
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
        $existingSequences = SectionSocial::where('parent_id', $parent_id)
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

        $record = SectionSocial::create([
            'parent_id'     => $parent_id,
            'title'         => $request->title,
            'link'          => $request->link,
            'sequence'      => $nextSequence,
        ]);

        // Merge file uploads so GlobalTrait addImages sees them ($request->file() vs $request->field)
        if ($request->hasFile('main_image')) {
            $request->merge(['main_image' => $request->file('main_image')]);
        }
        if ($request->hasFile('desktop_image')) {
            $request->merge(['desktop_image' => $request->file('desktop_image')]);
        }

        if ($request->has('main_image')) {
            $this->addImages('section_socials', $request, $record, 'main_image');
        }

        if ($request->has('desktop_image')) {
            $this->addImages('section_socials', $request, $record, 'desktop_image');
        }

        $this->generateLog(Auth::guard('api')->user(), "Created", "Section Social", $record);
        $record->load('images');

        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionSocialService show
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function show($request, $parent_id, SectionSocial $record): Response
    {
        $record->load('images');
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionSocialService update
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function update($request, $parent_id, SectionSocial $record): Response
    {
        $validator = Validator::make($request->all(), [
            'title'       => ['required', 'string', 'max:255'],
            'sequence'    => [
                'required',
                'integer',
                // Enforce uniqueness only among NON-deleted section cards for this parent,
                // and ignore the current record when updating
                Rule::unique('section_socials', 'sequence')
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
            'link'          => $request->link,
            'sequence'      => $request->sequence,
        ]);

        // Merge file uploads so GlobalTrait updateImages sees them when adding first image (no existing img)
        if ($request->hasFile('main_image')) {
            $request->merge(['main_image' => $request->file('main_image')]);
        }
        if ($request->hasFile('desktop_image')) {
            $request->merge(['desktop_image' => $request->file('desktop_image')]);
        }

        if ($request->has('main_image')) {
            $this->updateImages('section_socials', $request, $record, 'main_image');
        }

        if ($request->has('desktop_image')) {
            $this->updateImages('section_socials', $request, $record, 'desktop_image');
        }

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Section Social", $record);
        $record->load('images');
        return response([
            'record' => $record
        ]);
    }

    /**
     * SectionSocialService destroy
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function destroy($request, $parent_id, SectionSocial $record): Response
    {
        $record->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Section Social", $record);
        return response([
            'record' => 'Section Social deleted successfully!'
        ]);
    }
}