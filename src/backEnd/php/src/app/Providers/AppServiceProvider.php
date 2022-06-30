<?php

namespace App\Providers;

use App\Repositories\DB\Interfaces\GamesRepositoryInterface;
use App\Repositories\DB\MariaDB\GamesRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(GamesRepositoryInterface::class,GamesRepository::class);
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
