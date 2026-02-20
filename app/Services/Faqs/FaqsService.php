<?php

namespace App\Services\Faqs;

use Illuminate\Http\Response;
use Illumninate\Support\Facades\{
    Auth,
    DB,
    Validator
};
use App\Models\{
    Faq,
    FaqsCategory
};
use App\Traits\GlobalTrait;

class FaqsService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    public function index($request): Response
    {
        $faqs = Faq::orderBy(isset($request->sortBy) ? $request->sortBy : 'updated_at', isset($request->sortDirection) ? $request->sortDirection : 'desc')
            ->with('faqCategory')
            ->when($request->filled('keyword'), function ($query) use ($request) {
                $query->where('question', 'LIKE', '%' . $request->keyword . '%');
            })
            ->when($request->filled('all'), function ($query) {
                return $query->get();
            }, function ($query) {
                return $query->paginate(20);
            });

        return response([
            'record' => $faqs
        ]);
    }

    public function store($request): Response
    {
        try {

            $validator = Validator::make($request->all(), [
                'faqs_category_id'  => 'required',
                'question'          => 'required',
                'answer'            => 'required'
            ]);

            if ($validator->fails()) {
                return response([
                    'errors' => $validator->errors()->all(),
                ], 403);
            }

            DB::beginTransaction();

            $record = Faq::create([
                'parent_id'         => $request->parent_id,
                'faqs_category_id'  => $request->faqs_category_id,
                'question'          => $request->question,
                'answer'            => $request->answer
            ]);

            // Generate and load logs
            $this->generateLog(Auth::guard('api')->user(), "Created", "FAQs", $record);

            DB::commit();

            return response([
                'message'   => 'FAQ created successfully',
                'record'    => $record
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error($e);
            return response(['error' => 'Transaction failed: ' . $e->getMessage()], 500);
        }
    }

    public function show($faq): Response
    {
        try {
            $faq->load(['faqCategory']);

            return response([
                'record' => $faq
            ]);
        } catch (\Exception $e) {
            \Log::error($e);
            return response(['error' => 'Transaction failed: ' . $e->getMessage()], 500);
        }
    }

    public function update($faq, $request): Response
    {
        try {

            $validator = Validator::make($request->all(), [
                'faqs_category_id'  => 'required',
                'question'          => 'required',
                'answer'            => 'required'
            ]);

            if ($validator->fails()) {
                return response([
                    'errors' => $validator->errors()->all(),
                ], 403);
            }

            DB::beginTransaction();

            $faq->update([
                'parent_id'         => $request->parent_id,
                'faqs_category_id'  => $request->faqs_category_id,
                'question'          => $request->question,
                'answer'            => $request->answer
            ]);

            // Generate and load logs
            $this->generateLog(Auth::guard('api')->user(), "Changed", "FAQs", $faq);

            DB::commit();

            return response([
                'message'   => 'FAQ updated successfully',
                'record'    => $faq
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error($e);
            return response(['error' => 'Transaction failed: ' . $e->getMessage()], 500);
        }
    }

    public function destroy($faq): Response
    {
        // Generate and load logs
        $this->generateLog(Auth::guard('api')->user(), "Created", "FAQs", $faq);
        $faq->delete();

        return response([
            'record' => 'Faq deleted'
        ]);
    }
}
