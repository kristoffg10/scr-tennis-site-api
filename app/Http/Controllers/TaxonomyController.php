<?php

namespace App\Http\Controllers;

use App\Models\Taxonomy;
use Illuminate\Http\{
    Request,
    Response
};
use App\Http\Requests\TaxonomyRequest;
use App\Services\Taxonomy\TaxonomyService;

class TaxonomyController extends Controller
{
     /**
     * @var TaxonomyService
     */
    protected $taxonomyService;

    /**
     * TaxonomyController constructor
     * @param TaxonomyService $taxonomyService
     */
    public function __construct (TaxonomyService $taxonomyService)
    {
        $this->taxonomyService = $taxonomyService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index (Request $request, $type): Response
    {
        return $this->taxonomyService->index($request, $type);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store (TaxonomyRequest $request, $type): Response
    {
        return $this->taxonomyService->store($request, $type);
    }

    /**
     * Display the specified resource.
     */
    public function show ($type, $taxonomy, Request $request): Response
    {
        $taxonomyModel = Taxonomy::where('type', $type)->findOrFail($taxonomy);
        return $this->taxonomyService->show($request, $type, $taxonomyModel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update ($type, $taxonomy, TaxonomyRequest $request): Response
    {
        $taxonomyModel = Taxonomy::where('type', $type)->findOrFail($taxonomy);
        return $this->taxonomyService->update($request, $type, $taxonomyModel);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy ($type, $taxonomy, Request $request): Response
    {
        $taxonomyModel = Taxonomy::where('type', $type)->findOrFail($taxonomy);
        return $this->taxonomyService->destroy($request, $type, $taxonomyModel);
    }
}
