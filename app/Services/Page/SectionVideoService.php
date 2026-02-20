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
    SectionVideo,
};
use App\Traits\GlobalTrait;
use Carbon\Carbon;

class SectionVideoService
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
        $record = SectionVideo::orderBy('yt_published_date')
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
        $youtube = $this->validateYoutubeLink($request->youtube_url);
        $record = SectionVideo::create([
            'parent_id'         => $parent_id,
            'title'             => $request->title,
            'yt_id'             => $youtube->youtubeId,
            'yt_url'            => $request->youtube_url,
            'embed_url'        => "https://www.youtube.com/embed/" . $youtube->youtubeId,
            'yt_title'          => $youtube->title,
            'yt_thumbnail'      => $youtube->thumbnail,
            'yt_published_date' => Carbon::parse($youtube->published),
        ]);

        $this->generateLog(Auth::guard('api')->user(), "Created", "Section Video", $record);
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
    public function show($request, $parent_id, SectionVideo $record): Response
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
    public function update($request, $parent_id, SectionVideo $record): Response
    {
        if($record->yt_url != $request->youtube_url) {
            $youtube = $this->validateYoutubeLink($request->youtube_url);
             $record->update([
            'title'             => $request->title,
            'yt_id'             => $youtube->youtubeId,
            'yt_url'            => $request->youtube_url,
            'embed_url'         => "https://www.youtube.com/embed/" . $youtube->youtubeId,
            'yt_title'          => $youtube->title,
            'yt_thumbnail'      => $youtube->thumbnail,
            'yt_published_date' => Carbon::parse($youtube->published),
        ]);
        } else {
            $record->update([
                'title'             => $request->title,
            ]);
        }
        
        $this->generateLog(Auth::guard('api')->user(), "Changed", "Section Video", $record);
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
    public function destroy($request, $parent_id, SectionVideo $record): Response
    {
        $record->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Section Video", $record);
        return response([
            'record' => 'Section Video deleted successfully!'
        ]);
    }
}