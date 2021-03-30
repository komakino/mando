<?php

namespace Komakino\Mando;

use Illuminate\Support\ServiceProvider;

class MandoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'mando');

        $this->publishes([
            __DIR__ . '/../database/seeders/MandoCharacterSeeder.php' => database_path('seeders/MandoCharacterSeeder.php'),
        ], 'mando-seeder');
    }
}