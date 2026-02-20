<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use Illuminate\Http\{
    Request,
    Response
};
use App\Http\Requests\LeaderRequest;
use App\Services\Leader\LeaderService;

class LeaderController extends Controller
{
    /**
     * @var LeaderService
     */
    protected $leaderService;

    /**
     * AgentController constructor
     * @param LeaderService $leaderService
     */
    public function __construct (LeaderService $leaderService)
    {
        $this->leaderService = $leaderService;
    }

    /**
     * AgentController index
     * @param  Request $request
     * @return Response
     */
    public function index (Request $request): Response
    {
        return $this->leaderService->index($request);
    }

    /**
     * AgentController store
     * @param  LeaderRequest $request
     * @return Response
     */
    public function store (LeaderRequest $request): Response
    {
        return $this->leaderService->store($request);
    }

    /**
     * AgentController show
     * @param  Leader $leader
     * @param  Request $request
     * @return Response
     */
    public function show (Leader $leader, Request $request): Response
    {
        return $this->leaderService->show($leader, $request);
    }

    /**
     * AgentController update
     * @param  Leader $leader
     * @param  LeaderRequest $request
     * @return Response
     */
    public function update (Leader $leader, LeaderRequest $request): Response
    {
        return $this->leaderService->update($leader, $request);
    }

    /**
     * AgentController destroy
     * @param  Leader $leader
     * @param  Request $request
     * @return Response
     */
    public function destroy (Leader $leader, Request $request): Response
    {
        return $this->leaderService->destroy($leader, $request);
    }
}
