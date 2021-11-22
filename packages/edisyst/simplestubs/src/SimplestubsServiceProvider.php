<?php

//namespace App\Providers;
namespace Edisyst\Simplestubs;

use Edisyst\Simplestubs\Console\Commands\StubsPublishCommand;
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
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                StubsPublishCommand::class,
            ]);
        }
    }
}
