<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Agronomist\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));

    return [
        'name' => $faker->firstName()
    ];
});
