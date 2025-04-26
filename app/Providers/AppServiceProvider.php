<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Config;
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
     */
    public function boot(): void
    {
        $setting = Setting::find(1);

        if ($setting) {
            Config::set('app.name', $setting->sitename);
        } else {
            // Default fallback if the setting is not found
            Config::set('app.name', 'Laravel');
        }
    }
}
