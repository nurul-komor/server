<?php

namespace App\Providers;

use App\Repositories\HostingRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\HostingInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(HostingInterface::class, HostingRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}