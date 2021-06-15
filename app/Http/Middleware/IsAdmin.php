<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if (Auth::check()) {
            if (Auth::user()->roles == "ADMIN") {
                return $next($request);
            }
            else {
                Auth::logout();
                return redirect()->to('/')->with('not_admin', 'Anda bukan Admin');
            }
        }
        // if (Auth::user() && Auth::user()->roles == "ADMIN") {
        //     return $next($request);
        // }
        // else {
        //     Auth::logout();
        //     redirect('/');
        // }
    }
}
