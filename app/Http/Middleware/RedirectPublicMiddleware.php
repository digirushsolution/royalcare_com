<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectPublicMiddleware
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
        // Check if the request URL contains 'public'
        if ($request->is('public*')) {
            return redirect('/');
        }

        return $next($request);
    }
}
