<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       
        //Passport::routes();
        //$this->registerPolicies();
        $this->master();
    }
    public function master(){
        foreach (Permission::all() as $permission){
            Gate::define($permission->slug, function ($user) use ($permission){
                return c_auth($permission->slug, $user);
                
            });
        }
    }
}