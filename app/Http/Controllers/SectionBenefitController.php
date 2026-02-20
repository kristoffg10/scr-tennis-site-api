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
    SectionBenefit
};

use App\Services\Page\SectionBenefitService;

class SectionBenefitController extends Controller
{
    protected $sectionBenefitService;
    
    public function __construct(SectionBenefitService $sectionBenefitService)
    {
        $this->sectionBenefitService = $sectionBenefitService;
    }

    public function index(Request $request, $parent_id): Response
    {
        return $this->sectionBenefitService->index($request, $parent_id);
    }

    public function store(Request $request, $parent_id): Response
    {
        return $this->sectionBenefitService->store($request, $parent_id);
    }

    public function show(Request $request, $parent_id, SectionBenefit $benefit): Response
    {
        return $this->sectionBenefitService->show($request, $parent_id, $benefit);
    }

    public function update(Request $request, $parent_id, SectionBenefit $benefit): Response
    {
        return $this->sectionBenefitService->update($request, $parent_id, $benefit);
    }

    public function destroy(Request $request, $parent_id, SectionBenefit $benefit): Response
    {
        return $this->sectionBenefitService->destroy($request, $parent_id, $benefit);
    }


}

