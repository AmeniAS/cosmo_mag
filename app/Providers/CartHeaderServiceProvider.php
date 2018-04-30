<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CartHeaderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts/front_header_cart', 'App\Http\ViewComposers\CartHeaderViewComposer@compose');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
