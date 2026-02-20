<?php

namespace App\Services\Taxonomy;

use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
};
use App\Models\{
    PageSection,
    Taxonomy
};
use App\Traits\GlobalTrait;

class TaxonomyService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * TaxonomyService index
     * @param Request $request
     * @param Page $page
     * @return Response
     */
    public function index($request, $type): Response
    {
        $sortBy = $request->get('sortBy', 'name');
        $sortDirection = $request->get('sortDirection', 'asc');
        $allowedSortColumns = ['name', 'created_at', 'updated_at'];
        if (!in_array($sortBy, $allowedSortColumns)) {
            $sortBy = 'name';
        }
        $sortDirection = strtolower($sortDirection) === 'desc' ? 'desc' : 'asc';

        $record = Taxonomy::where('type', $type)
        ->when(in_array($type, ['article_category']), fn ($q) => $q->withCount('articles'))
        ->orderBy($sortBy, $sortDirection)
        ->when($request->filled('all'), function ($q) {
            return $q->get();
        }, function ($q) {
            return $q->paginate(20);
        });

        return response([
            'records' => $record
        ]);
    }

    /**
     * TaxonomyService store
     * @param Request $request
     * @param Page $page
     * @return Response
     */
    public function store($request, $type): Response
    {
        $record = Taxonomy::create([
            'type'          => $type,
            'name'          => $request->name,
            'email_recipients' => $request->email_recipients,
        ]);

        $this->generateLog(Auth::guard('api')->user(), "Created", "Taxonomy", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * TaxonomyService show
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function show($request, $type, Taxonomy $record): Response
    {
        return response([
            'record' => $record
        ]);
    }

    /**
     * TaxonomyService update
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function update($request, $type, Taxonomy $record): Response
    {
        $updateData = [
            'type' => $type,
            'name' => $request->name,
        ];
        if ($request->has('email_recipients')) {
            $updateData['email_recipients'] = $request->email_recipients;
        }
        $record->update($updateData);

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Taxonomy", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * TaxonomyService destroy
     * @param Request $request
     * @param Page $page
     * @param PageCta $cta
     * @return Response
     */
    public function destroy($request, $type, Taxonomy $record): Response
    {
        $record->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Taxonomy", $record);
        return response([
            'record' => 'Taxonomy deleted successfully!'
        ]);
    }

    public function getByType($type)
    {
        return Taxonomy::where('type', $type)
            ->orderBy('name')
            ->select('id','name','type')
            ->get();
    }

    public function getArticleTaxonomiesByType($type)
    {
        return Taxonomy::whereHas('articles', function ($q) use ($type) {
                $q->where('type', $type);
                })
                ->orderBy('name')
                ->select('id', 'name')
                ->get();
    }
}