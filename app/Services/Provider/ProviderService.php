<?php

namespace App\Services\Provider;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
};
use App\Models\Provider;
use App\Traits\GlobalTrait; 

class ProviderService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * ProviderService index
     * @param  Request $request
     * @return Response
     */
    public function index ($request): Response
    {
        $records = Provider::orderBy('name')
        ->when(isset($request->keyword), function ($query) use ($request) {
            $query->where('name', 'LIKE', '%' . strtolower($request->keyword).'%');	
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
     * ProviderService store
     * @param  Request $request
     * @return Response
     */
    public function store ($request): Response
    {
        $record = Provider::create([
            'name'              => $request->name,
            'specialization'    => $request->specialization,
            'clinic'            => $request->clinic,
            'location'          => $request->location,
            'address'           => $request->address,
            'address_link'      => $request->address_link,
        ]);
        $this->generateLog(Auth::guard('api')->user(), "Created", "Provider", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * ProviderService show
     * @param  Provider $provider
     * @param  Request $request
     * @return Response
     */
    public function show ($provider, $request): Response
    {
        return response([
            'record' => $provider
        ]);
    }


    /**
     * ProviderService update
     * @param  Provider $provider
     * @param  Request $request
     * @return Response
     */
    public function update ($provider, $request): Response
    {
        $provider->update([
            'name'              => $request->name,
            'specialization'    => $request->specialization,
            'clinic'            => $request->clinic,
            'location'          => $request->location,
            'address'           => $request->address,
            'address_link'     => $request->address_link,
        ]);
        $this->generateLog(Auth::guard('api')->user(), "Changed", "Provider", $provider);
        return response([
            'record' => $provider
        ]);
    }

    /**
     * ProviderService destroy
     * @param  Provider $provider
     * @param  Request $request
     * @return Response
     */
    public function destroy ($provider, $request): Response
    {
        $provider->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Provider", $provider);
        return response([
            'record' => 'Provider deleted'
        ]);
    }

    public function getFilter($params)
    {
       return Provider::select($params)
            ->orderBy($params)
            ->distinct()
            ->pluck($params)
            ->toArray();

    }

    public function getAllProviders($request)
    {
        return Provider::select(
        'name',
        'specialization',
        'clinic',
        'location',
        'address',
        'address_link'
        )
        ->orderBy('name')
        ->when($request->filled('keyword'), function ($query) use ($request) {
            $keyword = '%' . $request->keyword . '%';
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'LIKE', $keyword)
                ->orWhere('specialization', 'LIKE', $keyword)
                ->orWhere('clinic', 'LIKE', $keyword)
                ->orWhere('location', 'LIKE', $keyword)
                ->orWhere('address', 'LIKE', $keyword)
                ->orWhere('address_link', 'LIKE', $keyword);
            });
        })
        ->when($request->filled('clinic'), function ($query) use ($request) {
                        $query->where('clinic', $request->clinic);
        })
        ->when($request->filled('location'), function ($query) use ($request) {
                        $query->where('location', $request->location);
        })
        ->when($request->filled('specialization'), function ($query) use ($request) {
                        $query->where('specialization', $request->specialization);
        })
        ->paginate(10);
    }
}
