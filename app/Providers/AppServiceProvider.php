<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Portfolio;
use Stripe\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.cities', function ($view) {
            // group portfolios by city
            $view->with('cities', Portfolio::groupCities());
        });

        Stripe::setApiKey(config('services.stripe.secret'));
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
