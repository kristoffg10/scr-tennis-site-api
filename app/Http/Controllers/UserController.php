<?php

namespace App\Http\Controllers;

use Illuminate\Http\{
    Request,
    Response
};
use App\Models\User;
use App\Services\User\UserService;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    protected $userService;

    /**
     * UserController constructor
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * UserController login
     * @param  Request $request
     * @return Response
     */
    public function login(Request $request): Response
    {
        return $this->userService->login($request);
    }

    /**
     * UserController checkToken
     * @param  Request $request
     * @return Response
     */
    public function checkToken(Request $request): Response
    {
        return $this->userService->checkToken($request);
    }

    /**
     * UserController logout
     * @param  Request $request
     * @return Response
     */
    public function logout(Request $request): Response
    {
        return $this->userService->logout($request);
    }
}
