<?php

//namespace App\Providers;
namespace Edisyst\Simplestubs;

use Illuminate\Support\ServiceProvider;

class SimplestubsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edisyst\Simplestubs\SimplestubsController');
        $this->loadViewsFrom(__DIR__ . '/views', 'simplestubs');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';
    }
}
