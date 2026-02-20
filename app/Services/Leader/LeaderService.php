<?php

namespace App\Services\Leader;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
    Validator,
    Facade,
    Auth,
};
use App\Models\Leader;
use App\Traits\GlobalTrait; 

class LeaderService
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
        $records = Leader::orderBy('sequence')
        ->when(isset($request->keyword), function ($query) use ($request) {
            $query->where('name', 'LIKE', '%' . strtolower($request->keyword).'%');	
        })
        ->when($request->filled('type'), function ($query) use ($request) {
            $query->where('type', $request->type);
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
        $record = Leader::create([
            'name'              => $request->name,
            'position'          => $request->position,
            'type'              => $request->type,
            'biography'         => $request->biography,
            'sequence'          => $request->sequence ?? 0,
        ]);

        if ($request->has('main_image')) {
            $this->addImages('leader', $request, $record, 'main_image');
        }

        $this->generateLog(Auth::guard('api')->user(), "Created", "Leader", $record);
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
    public function show ($leader, $request): Response
    {
        $leader->load('images');
        return response([
            'record' => $leader
        ]);
    }


    /**
     * AgentService update
     * @param  Agent $agent
     * @param  Request $request
     * @return Response
     */
    public function update ($leader, $request): Response
    {
        $leader->update([
            'name'              => $request->name,
            'position'          => $request->position,
            'type'              => $request->type,
            'biography'         => $request->biography,
            'sequence'          => $request->sequence ?? 0,
        ]);

        if ($request->has('main_image')) {
            $this->updateImages('leader', $request, $leader, 'main_image');
        }

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Leader", $leader);

        return response([
            'record' => $leader
        ]);
    }

    /**
     * AgentService destroy
     * @param  Agent $agent
     * @param  Request $request
     * @return Response
     */
    public function destroy ($leader, $request): Response
    {
        $leader->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Leader", $leader);
        return response([
            'record' => 'Leader deleted'
        ]);
    }

    public function getLeadersByType($type)
    {
        return Leader::where('type', $type)
            ->with('images')
            ->orderBy('sequence')
            ->get();
    }
}
