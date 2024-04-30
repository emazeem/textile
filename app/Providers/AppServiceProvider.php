<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
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
        // foreach (Permission::all() as $permission){
        //     Gate::define($permission->slug, function ($user) use ($permission){
        //         return c_auth($permission->slug, $user);
        //     });
        // }
        
    }
}