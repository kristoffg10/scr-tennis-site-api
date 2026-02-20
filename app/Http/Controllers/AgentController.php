<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\{
    Request,
    Response
};
use App\Http\Requests\AgentRequest;
use App\Services\Agent\AgentService;

class AgentController extends Controller
{
     /**
     * @var AgentService
     */
    protected $agentService;

    /**
     * AgentController constructor
     * @param AgentService $agentService
     */
    public function __construct (AgentService $agentService)
    {
        $this->agentService = $agentService;
    }

    /**
     * AgentController index
     * @param  Request $request
     * @return Response
     */
    public function index (Request $request): Response
    {
        return $this->agentService->index($request);
    }

    /**
     * AgentController store
     * @param  AgentRequest $request
     * @return Response
     */
    public function store (AgentRequest $request): Response
    {
        return $this->agentService->store($request);
    }

    /**
     * AgentController show
     * @param  Agent $agent
     * @param  Request $request
     * @return Response
     */
    public function show (Agent $agent, Request $request): Response
    {
        return $this->agentService->show($agent, $request);
    }

    /**
     * AgentController update
     * @param  Agent $agent
     * @param  AgentRequest $request
     * @return Response
     */
    public function update (Agent $agent, AgentRequest $request): Response
    {
        return $this->agentService->update($agent, $request);
    }

    /**
     * AgentController destroy
     * @param  Agent $agent
     * @param  Request $request
     * @return Response
     */
    public function destroy (Agent $agent, Request $request): Response
    {
        return $this->agentService->destroy($agent, $request);
    }
}
