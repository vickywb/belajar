<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() && Auth::user()->role == 'admin') {

            return $next($request);

        } else if (Auth::user() && Auth::user()->role == 'teacher') {

            return $next($request);

        } else if (Auth::user() && Auth::user()->role == 'student') {

            return $next($request);
            
        }

        return redirect('/');
    }
}
