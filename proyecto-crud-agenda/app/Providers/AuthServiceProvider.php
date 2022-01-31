<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('index-contacto', function (User $user) {
            return true;
        });
        Gate::define('create-contacto', 'App\Policies\UserPolicy@create');
        Gate::define('update-contacto','App\Policies\UserPolicy@update');
        Gate::define('delete-contacto','App\Policies\UserPolicy@delete');
    }
}
