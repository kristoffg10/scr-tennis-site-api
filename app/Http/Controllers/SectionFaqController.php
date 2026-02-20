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
    SectionFaq
};

use App\Services\Page\SectionFaqService;

class SectionFaqController extends Controller
{
    protected $sectionFaqService;

    public function __construct(SectionFaqService $sectionFaqService)
    {
        $this->sectionFaqService = $sectionFaqService;
    }

    public function index(Request $request, $parent_id): Response
    {
        return $this->sectionFaqService->index($request, $parent_id);
    }

    public function store(Request $request, $parent_id): Response
    {
        return $this->sectionFaqService->store($request, $parent_id);
    }

    public function show(Request $request, $parent_id, SectionFaq $faq): Response
    {
        return $this->sectionFaqService->show($request, $parent_id, $faq);
    }

    public function update(Request $request, $parent_id, SectionFaq $faq): Response
    {
        return $this->sectionFaqService->update($request, $parent_id, $faq);
    }

    public function destroy(Request $request, $parent_id, SectionFaq $faq): Response
    {
        return $this->sectionFaqService->destroy($request, $parent_id, $faq);
    }

    /**
     * Tab-nested section FAQ routes: section-tab/{parent_id}/{tab_id}/section-faq/...
     * Accept tab_id so Laravel can resolve {faq} to SectionFaq correctly.
     */
    public function indexForTab(Request $request, $parent_id, $tab_id): Response
    {
        return $this->sectionFaqService->index($request, $tab_id);
    }

    public function storeForTab(Request $request, $parent_id, $tab_id): Response
    {
        return $this->sectionFaqService->store($request, $tab_id);
    }

    public function showForTab(Request $request, $parent_id, $tab_id, SectionFaq $faq): Response
    {
        return $this->sectionFaqService->show($request, $tab_id, $faq);
    }

    public function updateForTab(Request $request, $parent_id, $tab_id, SectionFaq $faq): Response
    {
        return $this->sectionFaqService->update($request, $tab_id, $faq);
    }

    public function destroyForTab(Request $request, $parent_id, $tab_id, SectionFaq $faq): Response
    {
        return $this->sectionFaqService->destroy($request, $tab_id, $faq);
    }
}
