<?php

namespace Agronomist\Providers;

use Illuminate\Support\ServiceProvider;

use Agronomist\Models\Approbation;
use Agronomist\Observers\ApprobationObserver;

class AgronomistServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Approbation::observe(ApprobationObserver::class);
    }
}
