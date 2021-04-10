<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View()->composer(['admin.layouts.header','admin.layouts.footer','front.layouts.index', 'front.pages.contact'], function ($view) {
            $settings = \App\Models\Setting::where('language_id', getLangId())->first();
            $view->with('settings', $settings);
        });
        View()->composer(['front.index'], function ($view) {
            $about = \App\Models\About::where('language_id', getLangId())->latest()->get();
            $view->with('about', $about);
        });

        Schema::defaultStringLength(191);

    }
}
