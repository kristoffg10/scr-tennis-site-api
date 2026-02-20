<?php

namespace App\Services\User;

use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
    Auth,
    DB,
    Hash,
    Validator
};
use App\Models\{
    Role,
    User
};
use App\Traits\GlobalTrait;

class UserService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;
    public function login($request): Response
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'password'  => 'required',
        ]);

        if ($validator->fails()) {
            return response([
                'errors' => $validator->errors()->all()
            ], 400);
        }

        $user = User::where('email', $request->email)->with([
            'role' => function ($query) {
                $query->select('id', 'name', 'type');
            },
            'userDetail' => function ($query) {
                $query->select('id', 'user_id', 'full_name');
            }
        ])
            ->first();

        if ($user) {
            if (!$user->enabled) {
                return response([
                    'errors' => [
                        'Sorry, your account is disabled.'
                    ]
                ], 403);
            }
            if (Hash::check($request->password, $user->password)) {
                $token = DB::table('oauth_access_tokens')->where('user_id', $user->id)->latest();

                if (!empty($token)) {
                    $token->delete();
                }
                $token = $user->createToken("SLMC-Doctor-Finder " . $user->role->name)->accessToken;
                $this->generateLog($user, "successfully logged in.");
                return response([
                    'token' => $token,
                    'user'  => $user
                ]);
            } else {
                return response([
                    'errors' => [
                        'Wrong password. Please try again.'
                    ]
                ], 403);
            }
        } else {
            return response([
                'errors' => [
                    'User not found. Please try again.'
                ]
            ], 404);
        }
    }

    /**
     * Check user token
     * @param  Request $request
     * @return Response
     */
    public function checkToken($request): Response
    {

        $user = Auth::guard('api')->user();

        if ($user) {
            $user->load('role', 'images');
            return response([
                'user' => $this->getAuthenticatedUser($user),
            ]);
        } else {
            return response([
                'errors' => ['Invalid token. Who are you?']
            ], 403);
        }
    }

    /**
     * UserService logout
     * @param  Request $request
     * @return Response
     */
    public function logout($request): Response
    {
        $user = Auth::guard('api')->user();

        if ($user) {
            $user->token()->revoke();
            $this->generateLog($user, 'Logout');
            return response([
                'message' => 'Successfully logged out'
            ], 200);
        }

        // If no user is authenticated
        return response([
            'errors' => ['No authenticated user found']
        ], 403);
    }
}
