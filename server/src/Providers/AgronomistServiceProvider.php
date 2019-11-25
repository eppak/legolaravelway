<?php

namespace Agronomist\Providers;

use Illuminate\Support\ServiceProvider;

use Agronomist\Models\Approbation;
use Agronomist\Policies\ApprobationPolicy;
use Agronomist\Observers\ApprobationObserver;

use Agronomist\Models\Request;
use Agronomist\Policies\RequestPolicy;
use Agronomist\Observers\RequestObserver;

use Agronomist\Models\Seed;
use Agronomist\Policies\SeedPolicy;

use Agronomist\Models\Harvest;
use Agronomist\Observers\HarvestObserver;
use Agronomist\Policies\HarvestPolicy;

use Agronomist\Models\Vitamin;
use Agronomist\Policies\VitaminPolicy;

use Agronomist\Models\Category;
use Agronomist\Policies\CategoryPolicy;

use Agronomist\Models\User;
use Agronomist\Policies\UserPolicy;

class AgronomistServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Seed::class => SeedPolicy::class,
        Approbation::class => ApprobationPolicy::class,
        Request::class => RequestPolicy::class,
        Harvest::class => HarvestPolicy::class,
        Vitamin::class => VitaminPolicy::class,
        Category::class => CategoryPolicy::class,
        User::class => UserPolicy::class
    ];


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
        Harvest::observe(HarvestObserver::class);
    }
}
