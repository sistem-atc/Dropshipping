<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AnunciosValidate
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
        if (!auth()->check() )
            return redirect()->route('login');

        if (!auth()->user()->paper()->first()->anuncios)
            return redirect()->route('login');

        return $next($request);
    }
}
