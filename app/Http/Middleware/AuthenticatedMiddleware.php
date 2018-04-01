<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticatedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $guards = [
            'web',
            'blogger',
        ];

        foreach ($guards as $guard)
        {
            $user = $request->user($guard);
            if ($user) {
                return $next($request);
            }
        }

        abort(403, 'Please login and try again');

        return $next($request);
    }
}
