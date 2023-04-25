<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('is_super', function($user){
            if(strtolower($user->user_role->term) == 'super')
            {
                return true;
            }
            return abort(404);
        });

        Gate::define('is_admin', function($user){
            if(strtolower($user->user_role->term) == 'admin')
            {
                return true;
            }
            return abort(404);
        });

        Gate::define('is_faculty', function($user){
            if(strtolower($user->user_role->term) == 'faculty')
            {
                return true;
            }
            return abort(404);
        });

        Gate::define('is_staff', function($user){
            if(strtolower($user->user_role->term) == 'staff')
            {
                return true;
            }
            return abort(404);
        });
    }
}
