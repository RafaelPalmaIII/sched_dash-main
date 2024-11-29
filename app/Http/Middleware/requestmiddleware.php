<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RequestMiddleware
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
        if ($request->is('user_requestform') || $request->is('dashboard')) {
            return $next($request);
        }

        return redirect()->route('login');
    }
}
