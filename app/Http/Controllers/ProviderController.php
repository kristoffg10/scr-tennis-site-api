<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\{
    Request,
    Response
};
use App\Http\Requests\ProviderRequest;
use App\Services\Provider\ProviderService;

class ProviderController extends Controller
{
    /**
     * @var ProviderService
     */
    protected $providerService;

    /**
     * ProviderController constructor
     * @param ProviderService $providerService
     */
    public function __construct (ProviderService $providerService)
    {
        $this->providerService = $providerService;
    }

    /**
     * ProviderController index
     * @param  Request $request
     * @return Response
     */
    public function index (Request $request): Response
    {
        return $this->providerService->index($request);
    }

    /**
     * ProviderController store
     * @param  ProviderRequest $request
     * @return Response
     */
    public function store (ProviderRequest $request): Response
    {
        return $this->providerService->store($request);
    }

    /**
     * ProviderController show
     * @param  Provider $provider
     * @param  Request $request
     * @return Response
     */
    public function show (Provider $provider, Request $request): Response
    {
        return $this->providerService->show($provider, $request);
    }

    /**
     * ProviderController update
     * @param  Provider $provider
     * @param  AgentRequest $request
     * @return Response
     */
    public function update (Provider $provider, ProviderRequest $request): Response
    {
        return $this->providerService->update($provider, $request);
    }

    /**
     * ProviderController destroy
     * @param  Provider $provider
     * @param  Request $request
     * @return Response
     */
    public function destroy (Provider $provider, Request $request): Response
    {
        return $this->providerService->destroy($provider, $request);
    }
}
