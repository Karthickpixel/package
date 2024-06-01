<?php

namespace Demo\Project;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Demo\Project\DemoController');
        $this->loadViewsFrom(__DIR__.'/views','project');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ .'/routes.php';
    }
}
