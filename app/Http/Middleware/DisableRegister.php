<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DisableRegister
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);
    // }
    public function handle($request, Closure $next)
    {
        abort_if($request->is('register*'), 404);

        return $next($request);
    }

}
