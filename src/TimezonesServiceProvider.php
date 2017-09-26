<?php

namespace Bymega\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
	    $this->loadRoutesFrom(__DIR__.'/routes.php');
	    $this->loadViewsFrom(__DIR__.'/views', 'timezones');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
	    $this->app->make('Bymega\Timezones\TimezonesController');
    }
}
