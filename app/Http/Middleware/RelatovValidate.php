<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RelatovValidate
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
        if (!auth()->check())
            return redirect()->route('login');
        if (!auth()->user()->paper()->first()->relatov)
            return redirect()->route('login');

        return $next($request);
    }
}
