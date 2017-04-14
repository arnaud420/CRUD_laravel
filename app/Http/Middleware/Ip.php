<?php

namespace App\Http\Middleware;

use Closure;

class Ip
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
        $ip = $request->ip();

        if($ip == null){
            throw new Exception("pas d'adresse IP");
        }

        else {
            echo 'Ceci est votre ip :' . $ip;
        }
        return $next($request);
    }
}
