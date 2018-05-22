<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LatestArticlesProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts/front_blog', 'App\Http\ViewComposers\LatestArticlesViewComposer@compose');
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
