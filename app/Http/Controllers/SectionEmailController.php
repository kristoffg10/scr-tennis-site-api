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
    SectionEmail
};

use App\Services\Page\SectionEmailService;

class SectionEmailController extends Controller
{
    protected $sectionEmailService;

    public function __construct(SectionEmailService $sectionEmailService)
    {
        $this->sectionEmailService = $sectionEmailService;
    }

    public function index(Request $request, $parent_id): Response
    {
        return $this->sectionEmailService->index($request, $parent_id);
    }

    public function store(Request $request, $parent_id): Response
    {
        return $this->sectionEmailService->store($request, $parent_id);
    }

    public function show(Request $request, $parent_id, SectionEmail $email): Response
    {
        return $this->sectionEmailService->show($request, $parent_id, $email);
    }

    public function update(Request $request, $parent_id, SectionEmail $email): Response
    {
        return $this->sectionEmailService->update($request, $parent_id, $email);
    }

    public function destroy(Request $request, $parent_id, SectionEmail $email): Response
    {
        return $this->sectionEmailService->destroy($request, $parent_id, $email);
    }


}
