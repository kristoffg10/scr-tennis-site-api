<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\{
    Request,
    Response
};
use App\Services\Career\CareerService;
use App\Http\Requests\CareerRequest;

class CareerController extends Controller
{
    /**
     * @var CareerService
     */
    protected $careerService;
    /**
     * CareerController constructor
     * @param CareerService $careerService
     */
    public function __construct (CareerService $careerService)
    {
        $this->careerService = $careerService;
    }


    /**
     * CareerController index
     * @param  Request $request
     * @return Response
     */
    public function index (Request $request): Response
    {
        return $this->careerService->index($request);
    }

    /**
     * CareerController store
     * @param  CareerRequest $request
     * @return Response
     */
    public function store (CareerRequest $request): Response
    {
        return $this->careerService->store($request);
    }

    /**
     * CareerController show
     * @param  Career $career
     * @param  Request $request
     * @return Response
     */
    public function show (Career $career, Request $request): Response
    {
        return $this->careerService->show($career, $request);
    }

    /**
     * CareerController update
     * @param  Career $career
     * @param  CareerRequest $request
     * @return Response
     */
    public function update (Career $career, CareerRequest $request): Response
    {
        return $this->careerService->update($career, $request);
    }

    /**
     * CareerController destroy
     * @param  Career $career
     * @param  Request $request
     * @return Response
     */
    public function destroy (Career $career, Request $request): Response
    {
        return $this->careerService->destroy($career, $request);
    }
}
