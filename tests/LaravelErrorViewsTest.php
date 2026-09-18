<?php

namespace Dotman\LaravelErrorViews\Tests;

use Dotman\LaravelErrorViews\LaravelErrorViewsServiceProvider;
use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase;

class LaravelErrorViewsTest extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelErrorViewsServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('app.debug', false);
        $app['config']->set('app.url', 'http://localhost');
    }

    public function test_it_publishes_every_error_view_and_static_asset(): void
    {
        $this->artisan('vendor:publish', [
            '--tag' => 'laravel-error-views:assets',
            '--force' => true,
        ])->assertExitCode(0);

        foreach (['401', '403', '404', '405', '419', '429', '500', '503'] as $statusCode) {
            $this->assertFileExists(resource_path("views/errors/{$statusCode}.blade.php"));
            $this->assertFileExists(public_path("vendor/laravel-error-views/svg/{$statusCode}.svg"));
        }

        $this->assertFileExists(resource_path('views/errors/layout.blade.php'));
        $this->assertFileExists(public_path('vendor/laravel-error-views/error-views.css'));
    }

    public function test_the_default_error_view_renders_without_external_dependencies(): void
    {
        $this->artisan('vendor:publish', [
            '--tag' => 'laravel-error-views:views',
            '--force' => true,
        ])->assertExitCode(0);

        Route::get('/missing', static function (): void {
            abort(404);
        });

        $this->get('/missing')
            ->assertNotFound()
            ->assertSee('Page not found')
            ->assertSee('vendor/laravel-error-views/error-views.css')
            ->assertDontSee('cdn.tailwindcss')
            ->assertDontSee('fonts.googleapis.com');
    }

    public function test_the_back_link_is_limited_to_an_internal_referrer(): void
    {
        $this->artisan('vendor:publish', [
            '--tag' => 'laravel-error-views:views',
            '--force' => true,
        ])->assertExitCode(0);

        Route::get('/missing', static function (): void {
            abort(404);
        });

        $this->withHeader('Referer', 'https://example.test/previous')
            ->get('/missing')
            ->assertNotFound()
            ->assertSee('Go home')
            ->assertDontSee('Go back');

        $this->withHeader('Referer', 'http://localhost/previous')
            ->get('/missing')
            ->assertNotFound()
            ->assertSee('Go back');
    }

    public function test_it_uses_the_package_translation_defaults(): void
    {
        $this->assertSame('Page not found', __('laravel-error-views::errors.404.title'));
        $this->assertSame('Go home', __('laravel-error-views::errors.navigation.home'));
        $this->assertSame(
            'laravel-error-views::errors.404.title',
            config('laravel-error-views.title.404')
        );
    }
}
