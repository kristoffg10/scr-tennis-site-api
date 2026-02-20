<?php

namespace App\Http\Controllers;

use Illuminate\Http\{
    Request,
    Response
};
use App\Models\Video;
use App\Services\Video\VideoService;
use App\Http\Requests\VideoRequest;

class VideoController extends Controller
{
    /**
     * @var VideoService
     */
    protected $videoService;

    public function __construct(VideoService $videoService)
    {
        $this->videoService = $videoService;
    }

    public function index(Request $request): Response
    {
        return $this->videoService->index($request);
    }

    public function store(VideoRequest $request): Response
    {
        return $this->videoService->store($request);
    }

    /**
     * VideoController show
     * @param  Video $video
     * @param  Request $request
     * @return Response
     */
    public function show(Video $video, Request $request): Response
    {
        return $this->videoService->show($video, $request);
    }

    /**
     * VideoController update
     * @param  Video $video
     * @param  Request $request
     * @return Response
     */
    public function update(Video $video, VideoRequest $request): Response
    {
        return $this->videoService->update($video, $request);
    }


    /**
     * VideoController destroy
     * @param  Video $video
     * @param  Request $request
     * @return Response
     */
    public function destroy(Video $video, Request $request): Response
    {
        return $this->videoService->destroy($video, $request);
    }

    
}
