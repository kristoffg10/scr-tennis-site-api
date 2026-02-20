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
    SectionSocial
};

use App\Services\Page\SectionSocialService;

class SectionSocialController extends Controller
{
    protected $sectionSocialService;

    public function __construct(SectionSocialService $sectionSocialService)
    {
        $this->sectionSocialService = $sectionSocialService;
    }

    public function index(Request $request, $parent_id): Response
    {
        return $this->sectionSocialService->index($request, $parent_id);
    }

    public function store(Request $request, $parent_id): Response
    {
        return $this->sectionSocialService->store($request, $parent_id);
    }

    public function show(Request $request, $parent_id, SectionSocial $social): Response
    {
        return $this->sectionSocialService->show($request, $parent_id, $social);
    }

    public function update(Request $request, $parent_id, SectionSocial $social): Response
    {
        return $this->sectionSocialService->update($request, $parent_id, $social);
    }

    public function destroy(Request $request, $parent_id, SectionSocial $social): Response
    {
        return $this->sectionSocialService->destroy($request, $parent_id, $social);
    }

}
