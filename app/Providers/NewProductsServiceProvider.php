<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NewProductsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts/front_new_products', 'App\Http\ViewComposers\ProductsViewComposer@compose');
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
