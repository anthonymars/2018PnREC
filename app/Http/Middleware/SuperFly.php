<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class SuperFly
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
        if (!Auth::check()) {
            return redirect('/login');
        } else {
            $user = Auth::user();
            if ($user->hasRole('SuperFly')) {
                return $next($request);
            } else {
               <!-- return redirect('/not-authorized'); -->
            }
        }
    }
}
