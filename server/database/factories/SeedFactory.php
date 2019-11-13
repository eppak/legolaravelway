<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Agronomist\Models\Seed;
use Faker\Generator as Faker;

$factory->define(Seed::class, function (Faker $faker) {
    $faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));

    return [
        'name' => $faker->firstName(),
	'photo' => $faker->imageUrl(500, 500),
	'origin' => $faker->country(),
	'origin_lng' => $faker->latitude(),
	'origin_lat' => $faker->latitude(),
	'description' => $faker->paragraph(),
	'tecnic' => $faker->paragraph(),
	'history' => $faker->paragraph()
    ];
});
