<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (isset(Auth::user()->admin) && Auth::user()->admin == 0) {
              return $next($request);
            } 
        return redirect('home');
    }
}
