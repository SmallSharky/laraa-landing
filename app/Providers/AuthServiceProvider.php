<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerRoleManagePolicies();
    }

    public function registerRoleManagePolicies()
    {
        Gate::define('manage_role', function ($user) {
            return $user->hasAccess(['manage_role']);
        });
        Gate::define('assign_role', function ($user) {
            return $user->hasAccess(['assign_role']);
        });
        Gate::define('create_role', function ($user) {
            return $user->inRole('create_role');
        });
    }
}
