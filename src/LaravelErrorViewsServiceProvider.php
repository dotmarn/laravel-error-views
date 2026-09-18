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
        $this->mergeConfigFrom(__DIR__ . '/config/laravel-error-views.php', 'laravel-error-views');
        $this->loadTranslationsFrom(__DIR__ . '/lang', 'laravel-error-views');

        $this->publishViews();
        $this->publishConfiguration();
        $this->publishTranslations();
    }

    protected function publishViews(): void
    {
        $this->publishes([
            __DIR__ . '/views/errors' => resource_path('views/errors'),
        ], 'laravel-error-views:views');

        $this->publishes([
            __DIR__ . '/assets/svg' => public_path('vendor/laravel-error-views/svg'),
            __DIR__ . '/assets/css' => public_path('vendor/laravel-error-views'),
        ], 'laravel-error-views:static-assets');

        // Retain the original tag so existing installation instructions continue to work.
        $this->publishes([
            __DIR__ . '/views/errors' => resource_path('views/errors'),
            __DIR__ . '/assets/svg' => public_path('vendor/laravel-error-views/svg'),
            __DIR__ . '/assets/css' => public_path('vendor/laravel-error-views'),
        ], 'laravel-error-views:assets');
    }

    protected function publishConfiguration(): void
    {
        $this->publishes([
            __DIR__ . '/config/laravel-error-views.php' => config_path('laravel-error-views.php'),
        ], 'laravel-error-views:config');
    }

    protected function publishTranslations(): void
    {
        $this->publishes([
            __DIR__ . '/lang' => lang_path('vendor/laravel-error-views'),
        ], 'laravel-error-views:lang');
    }
}
