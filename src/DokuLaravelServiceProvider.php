<?php

namespace Jawak\DokuLaravel;

use Illuminate\Support\ServiceProvider;
use Jawak\DokuLaravel\Doku;

class DokuLaravelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('doku-laravel.php'),
            ], 'config');
        }

        $this->app->bind('doku', function($app) {
            return new Doku();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
