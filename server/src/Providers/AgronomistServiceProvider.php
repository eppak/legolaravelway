<?php

namespace Agronomist\Providers;

use Illuminate\Support\ServiceProvider;

use Agronomist\Models\Approbation;
use Agronomist\Observers\ApprobationObserver;
use Agronomist\Models\Request;
use Agronomist\Observers\RequestObserver;

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
        Request::observe(RequestObserver::class);
    }
}
