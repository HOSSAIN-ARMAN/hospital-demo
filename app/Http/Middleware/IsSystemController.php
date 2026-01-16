<?php

namespace App\Http\Middleware;

use Closure;

class IsSystemController
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

        if(auth()->user()->is_controller == 101){
            return $next($request);
        }

        return redirect('home')->with('error',"You don't access.");
        // return $next($request);
    }
}
