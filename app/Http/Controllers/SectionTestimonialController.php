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
    SectionTestimonial
};
use Illuminate\Support\Facades\Log as Logger;
use App\Services\Page\SectionTestimonialService;

class SectionTestimonialController extends Controller
{
    protected $sectionTestimonialService;

    public function __construct(SectionTestimonialService $sectionTestimonialService)
    {
        $this->sectionTestimonialService = $sectionTestimonialService;
    }

    public function index(Request $request, $parent_id): Response
    {
        return $this->sectionTestimonialService->index($request, $parent_id);
    }

    public function store(Request $request, $parent_id): Response
    {
        return $this->sectionTestimonialService->store($request, $parent_id);
    }

    public function show(Request $request, $parent_id, SectionTestimonial $testimonial): Response
    {
        return $this->sectionTestimonialService->show($request, $parent_id, $testimonial);
    }

    public function update(Request $request, $parent_id, SectionTestimonial $testimonial): Response
    {
        return $this->sectionTestimonialService->update($request, $parent_id, $testimonial);
    }

    public function destroy(Request $request, $parent_id, SectionTestimonial $testimonial): Response
    {
        return $this->sectionTestimonialService->destroy($request, $parent_id, $testimonial);
    }


}
