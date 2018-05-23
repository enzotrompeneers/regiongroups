<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Portfolio;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.sidebar', function ($view) {
            // group portfolios by city
            $view->with('cities', Portfolio::groupCities());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
