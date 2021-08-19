<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateLogin
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
        //TODO VALIDATE USER ROLE IS ALREADY LOGIN
        return $next($request);
    }
}
