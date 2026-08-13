<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\PremiumBrand;
use App\Models\CalidonBrand;
use Illuminate\Support\Facades\Schema;

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
        View::composer('*', function ($view) {
            if (Schema::hasTable('premium_brands') && Schema::hasTable('calidon_brands')) {
                $view->with('globalPremiumBrands', PremiumBrand::all());
                $view->with('globalCalidonBrands', CalidonBrand::all());
            }
        });
    }
}
