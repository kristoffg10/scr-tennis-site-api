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
    SectionHotline
};

use App\Services\Page\SectionHotlineService;

class SectionHotlineController extends Controller
{
    protected $sectionHotlineService;

    public function __construct(SectionHotlineService $sectionHotlineService)
    {
        $this->sectionHotlineService = $sectionHotlineService;
    }

    public function index(Request $request, $parent_id): Response
    {
        return $this->sectionHotlineService->index($request, $parent_id);
    }

    public function store(Request $request, $parent_id): Response
    {
        return $this->sectionHotlineService->store($request, $parent_id);
    }

    public function show(Request $request, $parent_id, SectionHotline $hotline): Response
    {
        return $this->sectionHotlineService->show($request, $parent_id, $hotline);
    }

    public function update(Request $request, $parent_id, SectionHotline $hotline): Response
    {
        return $this->sectionHotlineService->update($request, $parent_id, $hotline);
    }

    public function destroy(Request $request, $parent_id, SectionHotline $hotline): Response
    {
        return $this->sectionHotlineService->destroy($request, $parent_id, $hotline);
    }


}
