<?php

namespace App\Services\Agent;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
};
use App\Models\Agent;
use App\Traits\GlobalTrait; 

class AgentService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * AgentService index
     * @param  Request $request
     * @return Response
     */
    public function index ($request): Response
    {
        $records = Agent::orderBy('lastname')
        ->when($request->filled('keyword'), function ($query) use ($request) {
            $keyword = '%' . $request->keyword . '%';
            $query->where(function ($q) use ($keyword) {
                $q->where('lastname', 'LIKE', $keyword)
                    ->orWhere('firstname', 'LIKE', $keyword)
                    ->orWhere('middle_initial', 'LIKE', $keyword)
                    ->orWhere('license_id', 'LIKE', $keyword);
            });
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
     * AgentService store
     * @param  Request $request
     * @return Response
     */
    public function store ($request): Response
    {
        $record = Agent::create([
            'firstname'         => $request->firstname,
            'lastname'          => $request->lastname,
            'middle_initial'    => $request->middle_initial,
            'license_type'      => $request->license_type,
            'license_id'        => $request->license_id,
            'effectivity'       => $request->effectivity,
            'expiry'            => $request->expiry,
        ]);
        $this->generateLog(Auth::guard('api')->user(), "Created", "Agent", $record);
        return response([
            'record' => $record
        ]);
    }

    /**
     * AgentService show
     * @param  Agent $agent
     * @param  Request $request
     * @return Response
     */
    public function show ($agent, $request): Response
    {
        return response([
            'record' => $agent
        ]);
    }


    /**
     * AgentService update
     * @param  Agent $agent
     * @param  Request $request
     * @return Response
     */
    public function update ($agent, $request): Response
    {
        $agent->update([
            'firstname'         => $request->firstname,
            'lastname'          => $request->lastname,
            'middle_initial'    => $request->middle_initial,
            'license_type'      => $request->license_type,
            'license_id'        => $request->license_id,
            'effectivity'       => $request->effectivity,
            'expiry'            => $request->expiry,
        ]);
        $this->generateLog(Auth::guard('api')->user(), "Changed", "Agent", $agent);
        return response([
            'record' => $agent
        ]);
    }

    /**
     * AgentService destroy
     * @param  Agent $agent
     * @param  Request $request
     * @return Response
     */
    public function destroy ($agent, $request): Response
    {
        $agent->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Agent", $agent);
        return response([
            'record' => 'Agent deleted'
        ]);
    }

    public function getAgents($request)
    {
        return Agent::select(
        'lastname',
        'firstname',
        'middle_initial',
        'license_type',
        'license_id',
        'effectivity',
        'expiry'

        )
        ->orderBy('lastname')
        ->when($request->filled('keyword'), function ($query) use ($request) {
            $keyword = '%' . $request->keyword . '%';
            $query->where(function ($q) use ($keyword) {
                $q->where('lastname', 'LIKE', $keyword)
                ->orWhere('firstname', 'LIKE', $keyword)
                ->orWhere('middle_initial', 'LIKE', $keyword)
                ->orWhere('license_id', 'LIKE', $keyword);
            });
        })
        ->when($request->filled('license_type'), function ($query) use ($request) {
                        $query->where('license_type', $request->license_type);
        })
        ->paginate(10);
    }

    public function getLicenseTypes()
    {
        return Agent::select(
        'license_type',
        )
        ->distinct()
        ->get();
    }
}
