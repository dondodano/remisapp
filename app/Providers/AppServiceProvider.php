<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use Illuminate\Support\Facades\Blade;
use Cache;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
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

        Blade::if('isOnline', function($userId){
            return Cache::get('user-' . $userId)['isOnline'] == 1;
        });

        Blade::if('isOffline', function($userId){
            return Cache::get('user-' . $userId)['isOnline'] == 0;
        });


        Blade::if('isDeployedLocally', function(){
            $file = storage_path('framework/') . 'production';
            if(file_exists($file))
            {
                $content = file_get_contents($file);

                if(config('app.url') == 'http://127.0.0.1:8000' && filter_var($content, FILTER_VALIDATE_BOOLEAN) == true
                    || str_contains(config('app.url'), 'http://127.0.0.1:8000')  && filter_var($content, FILTER_VALIDATE_BOOLEAN) == true)
                {
                    return true;
                }else{
                    return false;
                }
            }
            return false;
        });
    }
}
