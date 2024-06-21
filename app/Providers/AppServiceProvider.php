<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\EtudiantRepository;
use App\Repositories\EtudiantRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\FormationRepositoryInterface;
use App\Repositories\FormationRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(EtudiantRepositoryInterface::class, EtudiantRepository::class);
        $this->app->bind(FormationRepositoryInterface::class, FormationRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
