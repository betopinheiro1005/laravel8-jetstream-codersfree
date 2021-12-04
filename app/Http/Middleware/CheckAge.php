<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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

        if (auth()->user()->email == "betopinheiro1005@yahoo.com.br") {
            return $next($request);
        } else {
            return redirect('nao_autorizado');
        }


        // if($request->age >= 18){
        //     return $next($request);
        // } else {
        //     return redirect('nao_autorizado');
        // }

        // return $next($request);

    }
}
