<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('category', 'CategoryCrudController');
    Route::crud('vitamin', 'VitaminCrudController');
    Route::crud('seed', 'SeedCrudController');
    Route::crud('harvest', 'HarvestCrudController');
    Route::crud('request', 'RequestCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('approbation', 'ApprobationCrudController');
    Route::get('seed/request-seed/{id}/{qty}', 'SeedCrudController@requestSeed');
}); // this should be the absolute last line of this file
