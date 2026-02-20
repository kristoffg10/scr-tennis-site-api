<?php

namespace App\Http\Controllers;

use Illuminate\Http\{
    Request,
    Response
};
use App\Models\User;
use App\Services\User\CmsUserService;

class CmsUserController extends Controller
{
    /**
     * @var CmsUserService
     */
    protected $cmsUserService;

    /**
     * CmsUserController constructor.
     *
     * @param CmsUserService $cmsUserService
     */
    public function __construct(CmsUserService $cmsUserService)
    {
        $this->cmsUserService = $cmsUserService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): Response
    {
        return $this->cmsUserService->index($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        return $this->cmsUserService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): Response
    {
        return $this->cmsUserService->show($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user, Request $request): Response
    {
        return $this->cmsUserService->update($user, $request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): Response
    {
        return $this->cmsUserService->destroy($user);
    }
}

