<?php

namespace App\Providers;

use App\Core\Repositories\UserRepository;
use App\Infrastructure\Repositories\UserDatabaseRepository;
use Illuminate\Support\ServiceProvider;

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
        $this->app->bind(UserRepository::class, UserDatabaseRepository::class);
    }
}
