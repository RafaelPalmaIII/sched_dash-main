<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            auth()->logout();
            return redirect()->route('admin.login')
                ->withErrors(['email' => 'You must be an admin to access this area.']);
        }

        return $next($request);
    }
}