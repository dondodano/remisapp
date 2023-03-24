<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        /**
         * Custom Blade Directives
         */

        Blade::if('role', function($roles = []){
            switch(gettype($roles))
            {
                case "string":
                    if(strlen($roles) == 0){return false;}
                    return strtolower(sessionGet('role')) == strtolower( $roles);
                    break;

                case "array":
                    if(empty($roles)){return false;}

                    return in_array( strtolower(sessionGet('role')) , array_map('strtolower', $roles));
                    break;
            }

        });

    }
}
