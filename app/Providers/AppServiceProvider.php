<?php

namespace App\Providers;

use App\Models\Website;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
     * If user already logged in, redirect to admin dashboard on "/login"
     */
    public function boot(): void
    {
        RedirectIfAuthenticated::redirectUsing(function ($request) {
            return route('admin.dashboard');
        });

        View::composer('*', function ($view) {
            $view->with('website', Website::first());
        });
    }
}
