<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('/login');
        }
    
        return $next($request);
    }

    protected function redirectTo($request)
    {
        if(! $request->expectJson()) {
            return route('login');
        }
    }
}
