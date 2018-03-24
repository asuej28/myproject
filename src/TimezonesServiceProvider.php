<?php

namespace Mixtlisoft\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'my_package_name');

        // artisan vendor:publish --provider="Mixtlisoft\Timezones\TimezonesServiceProvider" --tag=grupo
        /*$this->publishes([
            __DIR__.'/views' => base_path('resources/views/mixtlisoft/timezones'),
        ]);*/

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/mixtlisoft/timezones'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //include __DIR__.'/routes.php';
        $this->app->make('Mixtlisoft\Timezones\TimezonesController');
    }
}
