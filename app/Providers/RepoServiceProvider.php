<?php

namespace App\Providers;

use App\Repository\TiketRepository;
use App\Repository\StasiunRepository;
use App\Repository\TiketImplement;
use App\Repository\StasiunImplement;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(TiketRepository::class, TiketImplement::class);
        $this->app->bind(StasiunRepository::class, StasiunImplement::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
