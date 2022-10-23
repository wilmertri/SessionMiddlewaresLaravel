<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SaveCookieLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        if($request->user()->rol->id === 1 && $request->ip() === '127.0.0.1')
        {
            $cookie = cookie('origin_sesion', $request->user()->id);
            $response->cookie($cookie);
        }
        return $response;
    }
}
