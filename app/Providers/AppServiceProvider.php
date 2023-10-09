<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\BakersApi\BakersApiService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
{
    $this->app->singleton(
        abstract: BakersApiService::class,
        concrete: fn () => new BakersApiService(
            baseUrl: strval(config('services.bakersapi.url')),
            apiToken: strval(config('services.bakersapi.token')),
        ),
    );
}
}
