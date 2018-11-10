<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->userType == 'Admin' || Auth::user()->userType == 'Coordinator' || Auth::user()->userType == 'Chair') {
    
            return $next($request);
        }
        return redirect()->route('home');
        
    }
}
