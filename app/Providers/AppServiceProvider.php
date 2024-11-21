<?php

namespace App\Providers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Laravel\Cashier\Cashier;

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
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        Cashier::calculateTaxes();

        SEOTools::addImages(asset('img/preview.png'));
    }
}
