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
    SectionTab
};

use App\Services\Page\SectionTabService;

class SectionTabController extends Controller
{
    protected $sectiontTabService;

    public function __construct(SectionTabService $sectionTabService)
    {
        $this->sectionTabService = $sectionTabService;
    }

    public function index(Request $request, $parent_id): Response
    {
        return $this->sectionTabService->index($request, $parent_id);
    }

    public function store(Request $request, $parent_id): Response
    {
        return $this->sectionTabService->store($request, $parent_id);
    }

    public function show(Request $request, $parent_id, $card): Response
    {
        // Manually resolve the tab since route parameter name doesn't match
        $tab = SectionTab::where('id', $card)
            ->where('parent_id', $parent_id)
            ->firstOrFail();
        
        return $this->sectionTabService->show($request, $parent_id, $tab);
    }

    public function update(Request $request, $parent_id, $card): Response
    {
        // Manually resolve the tab since route parameter name doesn't match
        $tab = SectionTab::where('id', $card)
            ->where('parent_id', $parent_id)
            ->firstOrFail();
        
        return $this->sectionTabService->update($request, $parent_id, $tab);
    }

    public function destroy(Request $request, $parent_id, $card): Response
    {
        // Manually resolve the tab since route parameter name doesn't match
        $tab = SectionTab::where('id', $card)
            ->where('parent_id', $parent_id)
            ->firstOrFail();
        
        return $this->sectionTabService->destroy($request, $parent_id, $tab);
    }
}
