<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\MessageInstance;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->singleton('go', function () {
            return new MessageInstance();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
