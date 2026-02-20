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
    SectionCard
};

use App\Services\Page\SectionCardService;

class SectionCardController extends Controller
{
   protected $sectionCardService;

    public function __construct(SectionCardService $sectionCardService)
    {
        $this->sectionCardService = $sectionCardService;
    }

    public function index(Request $request, $parent_id): Response
    {
        return $this->sectionCardService->index($request, $parent_id);
    }

    public function store(Request $request, $parent_id): Response
    {
        return $this->sectionCardService->store($request, $parent_id);
    }

    public function show(Request $request, $parent_id, SectionCard $card): Response
    {
        return $this->sectionCardService->show($request, $parent_id, $card);
    }

    public function update(Request $request, $parent_id, SectionCard $card): Response
    {
        return $this->sectionCardService->update($request, $parent_id, $card);
    }

    public function destroy(Request $request, $parent_id, SectionCard $card): Response
    {
        return $this->sectionCardService->destroy($request, $parent_id, $card);
    }


}
