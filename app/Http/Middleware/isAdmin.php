<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if (Auth::check())
        {
            if ($this->auth->user()->admin == 1)
            {
                return $next($request);
            }
        }
        return redirect()->route('home')->with("info", "vous n'êtes pas admin");
    }
}
