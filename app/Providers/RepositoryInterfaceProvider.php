<?php

namespace App\Providers;

use APP\Repositories\BaseRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;
use APP\Interfaces\BaseRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;

class RepositoryInterfaceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
