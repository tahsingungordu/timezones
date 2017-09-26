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

	    /*
	     * Publishing the Views
	     */
	    $this->publishes([
		    __DIR__.'/views' => resource_path('views/vendor/timezones'),
	    ], 'timezones');
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
