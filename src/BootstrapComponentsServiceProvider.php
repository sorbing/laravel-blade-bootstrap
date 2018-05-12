<?php

namespace Sorbing\LaravelBladeBootstrap;

use Illuminate\Support\ServiceProvider;

class BootstrapComponentsServiceProvider extends ServiceProvider
{
    protected function getPackageIdentity()
    {
        return 'bs';
    }

    public function boot()
    {
        //$identity = $this->getPackageIdentity();

        // @see https://goo.gl/PSd4XY
        $this->loadViewsFrom(__DIR__.'/views/bootstrap4', 'bs');
        $this->loadViewsFrom(__DIR__.'/views/bootstrap4', 'bs4');
    }

    public function provides()
    {
        return ['bs'];
    }

    public function register()
    {
        $this->app->singleton('bread', function ($app) {
            //return new \Sorbing\LaravelBladeBootstrap\Services\SomeClass();

            return ['BS'];
        });
    }
}
