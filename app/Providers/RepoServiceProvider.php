<?php

namespace App\Providers;

use App\Repository\Tiket\TiketRepository;
use App\Repository\Stasiun\StasiunRepository;
use App\Repository\Tiket\TiketRepositoryImplement;
use App\Repository\Stasiun\StasiunRepositoryImplement;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(TiketRepository::class, TiketRepositoryImplement::class);
        $this->app->bind(StasiunRepository::class, StasiunRepositoryImplement::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
