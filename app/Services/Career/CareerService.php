<?php

namespace App\Services\Career;

use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
};
use App\Models\Career;
use App\Traits\GlobalTrait; 

class CareerService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * CareerService index
     * @param  Request $request
     * @return Response
     */
    public function index ($request): Response
    {
        $records = Career::orderBy('date')
        ->when(isset($request->keyword), function ($query) use ($request) {
            $query->where('title', 'LIKE', '%' . strtolower($request->keyword).'%');	
        })
        ->when($request->filled('all') , function ($query, $request) {
            return $query->get();
        }, function ($query) {
            return $query->paginate(20);
        });

        return response([
            'records' => $records
        ]);
    }

    /**
     * CareerService store
     * @param  Request $request
     * @return Response
     */
    public function store ($request): Response
    {
        $date = $this->parseCareerDate($request->date);

        $record = Career::create([
            'title'             => $request->title,
            'department'        => $request->department,
            'arrangement'       => $request->arrangement,
            'address'           => $request->address,
            'benefits'          => $request->benefits ?? '',
            'responsibilities'  => $request->responsibilities ?? '',
            'qualifications'    => $request->qualifications ?? '',
            'date'              => $date,
            'enabled'           => $request->enabled ?? 1,
            'slug'              => $this->slugify($request->title, 'Career'),
        ]);
        $this->generateLog(Auth::guard('api')->user(), "Created", "Career", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * CareerService show
     * @param  Career $agent
     * @param  Request $request
     * @return Response
     */
    public function show ($career, $request): Response
    {
        return response([
            'record' => $career
        ]);
    }


    /**
     * CareerService update
     * @param  Career $agent
     * @param  Request $request
     * @return Response
     */
    public function update ($career, $request): Response
    {
         $data = [
            'title'             => $request->title,
            'department'        => $request->department,
            'arrangement'       => $request->arrangement,
            'address'           => $request->address,
            'benefits'          => $request->benefits ?? '',
            'responsibilities'  => $request->responsibilities ?? '',
            'qualifications'    => $request->qualifications ?? '',
            'date'              => $this->parseCareerDate($request->date),
            'enabled'           => $request->enabled ?? 1,
        ];

        if ($career->title !== $request->title) {
            $data['slug'] = $this->slugify($request->title, 'Career');
        }
        
        $career->update($data);
        
        $this->generateLog(Auth::guard('api')->user(), "Changed", "Career", $career);
        return response([
            'record' => $career
        ]);
    }

    /**
     * CareerService destroy
     * @param  Career $agent
     * @param  Request $request
     * @return Response
     */
    public function destroy ($career, $request): Response
    {
        $career->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Career", $career);
        return response([
            'record' => 'Career deleted'
        ]);
    }

    public function getCareers()
    {
        return Career::orderBy('date','desc')
        ->where('enabled', 1)
        ->get();
    }

    public function getCareerBySlugComplete($identifier)
    {
        return Career::where('slug', $identifier)
        ->where('enabled', 1)
        ->first();
    }

    /**
     * Parse date for career record - ensures valid MySQL timestamp format
     */
    private function parseCareerDate($date): string
    {
        if (empty($date)) {
            return Carbon::now()->format('Y-m-d H:i:s');
        }
        try {
            return Carbon::parse($date)->format('Y-m-d H:i:s');
        } catch (\Exception $e) {
            return Carbon::now()->format('Y-m-d H:i:s');
        }
    }
}
