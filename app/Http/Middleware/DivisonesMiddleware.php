<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Input;

class DivisonesMiddleware
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
        $divisor = Input::get('divisor');



        if(0 == $divisor){
            return redirect('error');
        }else{
            return $next($request);
        }


    }
}
