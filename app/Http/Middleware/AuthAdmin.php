<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('api')->user()) {
            return response([
                'errors' => ['Invalid Credentials']
            ], 403);
        } else {
            if (Auth::guard('api')->user()) {
                return $next($request);
            } else {
                return response([
                    'errors' => ['You don\'t have permissions to do this']
                ], 403);
            }
        }
    }
}
