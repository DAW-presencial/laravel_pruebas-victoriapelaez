<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\UserPolicy;
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

        Gate::define('index-agenda', function (User $user) {
            return true;
            //return ($user->email === 'victoria@gmail.com');
            //return true;//return false; //false es para que me salga el error
        });
        Gate::define('create-agenda', 'App\Policies\UserPolicy@create');
        Gate::define('update-agenda','App\Policies\UserPolicy@update');
        Gate::define('delete-agenda','App\Policies\UserPolicy@delete');
    }
}
