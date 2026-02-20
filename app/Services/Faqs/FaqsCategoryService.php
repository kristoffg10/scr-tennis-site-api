<?php

namespace App\Services\Faqs;

use Illuminate\Http\Response;
use Illumninate\Support\Facades\{
    Auth,
    DB,
    Validator
};
use App\Models\{
    Faqs,
    FaqsCategory
};
use App\Traits\GlobalTrait;

class FaqsCategoryService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    public function index($request): Response
    {
        $faqs_category = FaqsCategory::when($request->has('page_id'), function ($query) use ($request) {
            $query->where('page_id', $request->page_id);
        });

        return response([
            'record' => $faqs_category
        ]);
    }

    public function store($request): Response
    {
        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'type'  => 'required',
        ]);

        if ($validator->fails()) {
            return response([
                'errors' => $validator->errors()->all(),
            ], 403);
        }

        $faqs = FaqsCategory::create([
            'name'  => $request->name,
            'type'  => $request->type,
        ]);

        return response([
            'record' => $faqs
        ]);
    }

    public function getFaqsCategories(): Response
    {
        $categories = FaqsCategory::select('id', 'name', 'type')->get();

        return response([
            'record' => $categories
        ]);
    }
}
