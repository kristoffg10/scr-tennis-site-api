<?php

namespace App\Services\Video;

use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
};
use Illuminate\Validation\ValidationException;
use App\Models\Video;
use App\Traits\GlobalTrait; 
use Carbon\Carbon;

class VideoService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * VideoService index
     * @param  Request $request
     * @return Response
     */
    public function index ($request): Response
    {
        // videos table does not have a native "date" column; order by yt_published_date instead
        $records = Video::orderBy('yt_published_date', 'desc')
         ->with(['category' => function ($query) {
                $query->select('id', 'name');
        }])
        ->when($request->filled('article_id'), function ($query) use ($request) {
            $query->where('article_id', $request->article_id)
                ->reorder('updated_at', 'desc');
        })
        ->when(isset($request->keyword), function ($query) use ($request) {
            $query->where('title', 'LIKE', '%' . strtolower($request->keyword).'%');	
        })
        ->when(isset($request->keyword), function ($query) use ($request) {
            $query->where('yt_title', 'LIKE', '%' . strtolower($request->keyword).'%');	
        })
        ->when($request->filled('all') , function ($query, $request) {
            return $query->get();
        }, function ($query) {
            return $query->paginate(20);
        });

        return response([
            'records' => $records
        ]);
    }

    /**
     * VideoService store
     * @param  Request $request
     * @return Response
     */
    public function store ($request): Response
    {
        $youtube = $this->validateYoutubeLink($request->youtube_url);

        if (empty($youtube->valid) || empty($youtube->youtubeId)) {
            throw ValidationException::withMessages([
                'youtube_url' => ['Unable to fetch video from YouTube. Please check the URL is valid and the video is public, or try again later.'],
            ]);
        }

        // One video per article: update existing by article_id (from query or body).
        $articleId = $request->input('article_id') ?? $request->query('article_id');
        if (!empty($articleId)) {
            $existing = Video::where('article_id', $articleId)
                ->orderBy('updated_at', 'desc')
                ->first();
            if ($existing) {
                $response = $this->update($existing, $request);
                // Remove any other videos for this article so only one remains.
                Video::where('article_id', $articleId)->where('id', '!=', $existing->id)->delete();
                return $response;
            }
        }

        $record = Video::create([
            'article_id'        => $request->article_id ?? null,
            'title'             => 'Video',
            'content'           => '',
            'type'              => $request->type,
            'yt_id'             => $youtube->youtubeId,
            'yt_url'            => $request->youtube_url,
            'embed_url'         => "https://www.youtube.com/embed/" . $youtube->youtubeId,
            'yt_title'          => $youtube->title,
            'yt_thumbnail'      => $youtube->thumbnail,
            'yt_published_date' => Carbon::parse($youtube->published),
            'enabled'           => $request->enabled,
            'featured'          => $request->featured,
            'category_id'       => $request->category_id,
            'slug'              => $this->slugify($youtube->title, 'Video'),
        ]);

        $this->generateLog(Auth::guard('api')->user(), "Created", "Video", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * VideoService show
     * @param  Video $video
     * @param  Request $request
     * @return Response
     */
    public function show ($video, $request): Response
    {
        return response([
            'record' => $video
        ]);
    }

    /**
     * VideoService update
     * @param  Video $video
     * @param  Request $request
     * @return Response
     */
    public function update ($video, $request): Response
    {
        if ($video->yt_url != $request->youtube_url) {
            $youtube = $this->validateYoutubeLink($request->youtube_url);
            if (empty($youtube->valid) || empty($youtube->youtubeId)) {
                throw ValidationException::withMessages([
                    'youtube_url' => ['Unable to fetch video from YouTube. Please check the URL is valid and the video is public, or try again later.'],
                ]);
            }
            $video->update([
                'title'             => 'Video',
                'content'           => '',
                'type'              => $request->type,
                'yt_id'             => $youtube->youtubeId,
                'yt_url'            => $request->youtube_url,
                'embed_url'         => "https://www.youtube.com/embed/" . $youtube->youtubeId,
                'yt_title'          => $youtube->title,
                'yt_thumbnail'      => $youtube->thumbnail,
                'yt_published_date' => Carbon::parse($youtube->published),
                'article_id'        => $request->article_id ?? $video->article_id,
                'enabled'           => $request->enabled,
                'featured'          => $request->featured,
                'category_id'       => $request->category_id,
                'slug'              => $this->slugify($youtube->title, 'Video'),
            ]);
        } else {
            $video->update([
                'title'             => 'Video',
                'content'           => '',
                'type'              => $request->type,
                'article_id'        => $request->article_id ?? $video->article_id,
                'enabled'           => $request->enabled,
                'featured'          => $request->featured,
            ]);
        }

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Video", $video);
        return response([
            'record' => $video
        ]);
    }

    /**
     * VideoService destroy
     * @param  Video $video
     * @param  Request $request
     * @return Response
     */
    public function destroy ($video, $request): Response
    {
        $video->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Video", $video);
        return response([
            'record' => 'Video deleted'
        ]);
    }

    public function getVideoBySlugComplete($identifier)
    {
        return Video::where('slug', $identifier)
            ->where('enabled', 1)
            ->with(['category' => function ($query) {
                $query->select('id', 'name');
            }])
            ->first();
    }
}