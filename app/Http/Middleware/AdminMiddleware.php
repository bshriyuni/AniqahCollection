<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(Auth::user()->role);

    if (Auth::check() && Auth::user()->hasRole('admin')) {
        return $next($request);
    }

    return redirect('/login')->with('error', 'Unauthorized.');
    }
}