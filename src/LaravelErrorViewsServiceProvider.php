<?php

namespace Dotman\LaravelErrorViews;

use Illuminate\Support\ServiceProvider;

class LaravelErrorViewsServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider
     * 
     * @return void
     * 
     **/
    public function boot(): void
    {
        $this->publishViews();
        $this->publishConfiguration();
    }

    protected function publishViews(): void
    {
        $this->publishes([
            __DIR__ . '/views/errors' => resource_path('views/errors'),
            __DIR__ . '/assets/svg' => public_path('vendor/laravel-error-views/svg'),
        ], 'laravel-error-views:assets');
    }

    protected function publishConfiguration(): void
    {
        $this->publishes([
            __DIR__ . '/config/laravel-error-views.php' => config_path('laravel-error-views.php'),
        ], 'laravel-error-views:config');
    }
}
