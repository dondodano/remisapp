<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Cache;
use Carbon\Carbon;


use App\Providers\RouteServiceProvider;

class RedirectIfAuthenticatedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if(session()->has('session')){
            return redirect(RouteServiceProvider::HOME);
        }


        // $guards = empty($guards) ? [null] : $guards;
        // foreach ($guards as $guard)
        // {
        //     if (Auth::guard($guard)->check()) {
        //         $expiration = Carbon::now()->addMinutes(1);
        //         Cache::put('user-online-'. Auth()::user()->id, true, $expiration);
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }

        return $next($request);
    }
}
