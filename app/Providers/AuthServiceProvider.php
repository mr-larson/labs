<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        Gate::define('footer-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('link-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('titre-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('video-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('image-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('adresse-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('slider-create', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('slider-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('feature-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
    }
}
