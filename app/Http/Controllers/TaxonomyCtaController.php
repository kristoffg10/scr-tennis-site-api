<?php

namespace App\Http\Controllers;

use App\Models\TaxonomyCta;
use Illuminate\Http\{
    Request,
    Response
};
use App\Http\Requests\TaxonomyCtaRequest;
use App\Services\Taxonomy\TaxonomyCtaService;

class TaxonomyCtaController extends Controller
{
     /**
     * @var TaxonomyCtaService
     */
    protected $taxonomyCtaService;

    /**
     * TaxonomyCtaController constructor
     * @param TaxonomyCtaService $taxonomyCtaService
     */
    public function __construct (TaxonomyCtaService $taxonomyCtaService)
    {
        $this->taxonomyCtaService = $taxonomyCtaService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index (Request $request): Response
    {
        return $this->taxonomyCtaService->index($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store (TaxonomyCtaRequest $request): Response
    {
        return $this->taxonomyCtaService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show (TaxonomyCta $taxonomy_cta, Request $request): Response
    {
        return $this->taxonomyCtaService->show($taxonomy_cta, $request);
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update (TaxonomyCta $taxonomy_cta, TaxonomyCtaRequest $request): Response
    {
        return $this->taxonomyCtaService->update($taxonomy_cta, $request);
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy (TaxonomyCta $taxonomy_cta, Request $request): Response
    {
        return $this->taxonomyCtaService->destroy($taxonomy_cta, $request);
    }
}
