<?php

namespace App\Services\Page;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
    Auth,
    DB,
    Log,
    Validator
};
use App\Models\{
    Page,
    PageSection,
    Button,
    Accordion
};
use App\Traits\GlobalTrait;

class PageSectionService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * PageSectionService index
     * @param Request $request
     * @param Page $page
     * @return Response
     */
    public function show($request, PageSection $page_section): Response
    {
        $page_section->load([
            'files',
            'images',
            'buttons' => function ($q) {
                $q->orderBy('order')->with('images');
            },
            'testimonials' => function ($q) {
                $q->orderBy('sequence')->with('images');
            },
            'faqs' => function ($q) {
                $q->orderBy('sequence');
            },
            'cards' => function ($q) {
                $q->orderBy('sequence')->with('images');
            },
            'tabs' => function ($q) {
                $q->orderBy('sequence')
                    ->with('images')
                    ->with('files')
                    ->with('subs')
                    ->where('parent', 'root');
            },
            'videos' => function ($q) {
                $q->orderBy('yt_published_date');
            },
            'hotlines' => function ($q) {
                $q->orderBy('sequence');
            },
            'benefits' => function ($q) {
                $q->orderByRaw("FIELD(type, 'medical', 'agent')")
                ->orderBy('sequence', 'asc')
                ->with('images');
            },
            'emails' => function ($q) {
                $q->orderBy('sequence');
            },
            'socials' => function ($q) {
                $q->orderBy('sequence')->with('images');
            },
        ]);
        $page_section->load([
            'logs' => function ($q) {
                $q->orderBy('updated_at', 'desc')
                    ->with([
                        'user' => function ($q) {
                            $q->with(['images', 'userDetail']);
                        }
                    ]);
            }
        ]);

        return response([
            'record' => $page_section,
        ]);
    }

    /**
     * PageSectionService update
     * @param Request $request
     * @param Page $page
     * @param PageSection $page_section
     * @return Response
     */
    public function update($request, PageSection $page_section): Response
    {
        Log::info('PageSection update request', ['sub_text' => $request->input('sub_text'), 'all' => $request->except(['main_image', 'mobile_image'])]);
        $page = Page::find($page_section->page_id);
        DB::beginTransaction();

        try {
            // Core fields
            $updatePayload = [
                'name'        => $request->name ?? $page_section->name,
                'title'       => $request->title ?? '',
                'description' => $request->description,
                'has_button'  => $request->has_button ?? 0,
                // Always respect incoming sub_text (including empty string),
                // but fall back to the existing value if it wasn't sent.
                'sub_text'    => $request->input('sub_text', $page_section->sub_text),
            ];

            $page_section->fill($updatePayload);
            $page_section->save();

            // Load related models
            $this->loadRelatedModels($page_section);

            // Handle button updates or creation
            if ($request->has_button) {
                $this->updateOrCreateButtons($request, $page_section);
            }          

            // Update or add images and files
            $this->updateImagesAndFiles($request, $page_section);

            // Generate and load logs
            $this->generateLog(Auth::guard('api')->user(), "Changed", $page->name, $page_section);
            $this->loadRelatedModels($page_section);
            $this->loadRelatedLogs($page_section);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error($e);
            return response(['error' => 'Transaction failed: ' . $e->getMessage()], 500);
        }

        return response([
            'record' => $page_section,

        ]);
    }

    // Helper Methods

    protected function loadRelatedModels(PageSection $page_section)
    {
        $page_section->load([
            'buttons'  => function ($q) {
                $q->orderBy('order')->with('images');
            },
            'testimonials' => function ($q) {
                $q->orderBy('sequence')->with('images');
            },
            'faqs' => function ($q) {
                $q->orderBy('sequence');
            },
            'cards' => function ($q) {
                $q->orderBy('sequence')->with('images');
            },
            'tabs' => function ($q) {
                $q->orderBy('sequence')
                    ->with('images')
                    ->with('files')
                    ->with('subs')
                    ->where('parent', 'root');
            },
            'videos' => function ($q) {
                $q->orderBy('yt_published_date');
            },
            'hotlines' => function ($q) {
                $q->orderBy('sequence');
            },
            'benefits' => function ($q) {
                $q->orderByRaw("FIELD(type, 'medical', 'agent')")
                ->orderBy('sequence', 'asc')
                ->with('images');
            },
            'emails' => function ($q) {
                $q->orderBy('sequence');
            },
            'socials' => function ($q) {
                $q->orderBy('sequence')->with('images');
            },
            'images',
            'files',
        ]);
    }

    protected function updateOrCreateButtons($request, $page_section)
    {
        // Safeguard: if there are no button names in the request, skip gracefully
        if (empty($request->button_name) || !is_iterable($request->button_name)) {
            return;
        }

        foreach ($request->button_name as $index => $btn_name) {
            $button = Button::find($request->button_id[$index]) ?? new Button(['parent' => $page_section->id]);
            $button->fill([
                'button_name' => $btn_name,
                'is_link_out' => $request->button_link_out[$index] ? 1 : 0,
                'link' => $request->button_link[$index],
            ])->save();

            if ($request->has('logo' . $index . '_id')) {
                $this->handleFileUpdate('button', $request, $button, 'logo' . $index, 0);
            }
        }
    }

    protected function updateOrCreateAccordions($request, $page_section)
    {
        foreach ($request->accordion_title as $key => $title) {
            $accordion = Accordion::find($request->accordion_id[$key]) ?? new Accordion(['parent' => $page_section->id]);
            $accordion->fill([
                'title' => $title,
                'description' => $request->accordion_description[$key],
                'order' => $request->accordion_order[$key],
            ])->save();

            if ($request->has('icon' . $key . '_id')) {
                $this->handleFileUpdate('accordion', $request, $accordion, 'icon' . $key, 0);
            }
        }
    }

    protected function updateImagesAndFiles($request, $page_section)
    {
        // Process main_image when new files uploaded OR when existing image metadata (e.g. alt) is updated
        if ($request->has('main_image') || $request->has('main_image_id')) {
            $this->updateImages('page_section', $request, $page_section, 'main_image');
        }
        if ($request->has('mobile_image') || $request->has('mobile_image_id')) {
            $this->updateImages('page_section', $request, $page_section, 'mobile_image');
        }
        // Update PDF files (Code of Conduct, Claim Requirements, etc.)
        // Trigger when either a new PDF is uploaded (pdf[]) OR when we're just
        // updating metadata like titles for existing PDFs (pdf_id / pdf_title).
        if ($request->has('pdf') || $request->has('pdf_id')) {
            $this->updateImages('page_section', $request, $page_section, 'pdf', 'file');
        }
    }

    protected function loadRelatedLogs(PageSection $page_section)
    {
        $page_section->load([
            'logs' => function ($query) {
                $query->orderBy('updated_at', 'desc')
                    ->with([
                        'user.images',
                        'user.userDetail'
                    ]);
            }
        ]);
    }

    protected function handleFileUpdate($type, $request, $model, $fileType, $index)
    {
        $temp_request = (object) [
            "{$fileType}" => [
                $request->{"{$fileType}_id"}[$index] === null ?
                    $request->file($fileType)[($index - (count($request->{"{$fileType}_id"}) - count($request->{"{$fileType}"}))) > 0 ?? 0] : null
            ],
            "{$fileType}_id" => [$request->{"{$fileType}_id"}[$index] ?? null],
            "{$fileType}_alt" => [$request->{"{$fileType}_alt"}[$index] ?? null],
            "{$fileType}_category" => [$request->{"{$fileType}_category"}[$index] ?? null],
        ];

        // \Log::info($temp_request->feature_icon_id[0] . ' + ' . $temp_request->feature_icon[0]);

        $this->{$model->exists ? 'updateImages' : 'addImages'}($type, $temp_request, $model, $fileType);
    }
}
