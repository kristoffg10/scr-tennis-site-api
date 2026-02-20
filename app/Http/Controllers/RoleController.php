<?php

namespace App\Http\Controllers;

use Illuminate\Http\{
    Request,
    Response
};
use App\Models\Role;
use App\Services\User\RoleService;

class RoleController extends Controller
{
    /**
     * @var RoleService
     */
    protected $roleService;

    /**
     * RoleController constructor.
     *
     * @param RoleService $roleService
     */
    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): Response
    {
        return $this->roleService->index($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        return $this->roleService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role): Response
    {
        return $this->roleService->show($role);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Role $role, Request $request): Response
    {
        return $this->roleService->update($role, $request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role): Response
    {
        return $this->roleService->destroy($role);
    }
}