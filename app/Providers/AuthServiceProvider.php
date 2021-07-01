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
        //Edit
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

        Gate::define('feature-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });

        Gate::define('nav-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });

        Gate::define('user-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });

        Gate::define('map-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });


        //Create-Edit
        //Slider
        Gate::define('slider-create', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('slider-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        //Testimonial
        Gate::define('testimonial-create', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('testimonial-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        //Service
        Gate::define('service-create', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('service-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        //Article
        Gate::define('article-create', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('article-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('article-confirm', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('article-confirmed', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        //Comment
        Gate::define('comment-create', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('comment-edit', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('comment-confirm', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
        Gate::define('comment-confirmed', function () {
            return in_array(Auth::user()->role_id, [1, 2]);
        });
    }
}
