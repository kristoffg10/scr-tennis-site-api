<?php

namespace App\Http\Controllers;

use Illuminate\Http\{
    Request,
    Response
};
use Illuminate\Support\Facades\{
    Validator,
    Facade,
};
use App\Models\{
    PageSection,
    SectionVideo
};

use App\Services\Page\SectionVideoService;

class SectionVideoController extends Controller
{
    protected $sectionVideoService;

    public function __construct(SectionVideoService $sectionVideoService)
    {
        $this->sectionVideoService = $sectionVideoService;
    }

    public function index(Request $request, $parent_id): Response
    {
        return $this->sectionVideoService->index($request, $parent_id);
    }

    public function store(Request $request, $parent_id): Response
    {
        return $this->sectionVideoService->store($request, $parent_id);
    }

    public function show(Request $request, $parent_id, SectionVideo $video): Response
    {
        return $this->sectionVideoService->show($request, $parent_id, $video);
    }

    public function update(Request $request, $parent_id, SectionVideo $video): Response
    {
        return $this->sectionVideoService->update($request, $parent_id, $video);
    }

    public function destroy(Request $request, $parent_id, SectionVideo $video): Response
    {
        return $this->sectionVideoService->destroy($request, $parent_id, $video);
    }


}
