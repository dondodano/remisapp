<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApplicationOnProduction
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $path = storage_path('framework/') .'production';
        if(file_exists( $path))
        {
            $content = file_get_contents($path);
            if(filter_var($content, FILTER_VALIDATE_BOOLEAN) == true)
            {
                abort('404');
            }

        }
        return $next($request);
    }
}
