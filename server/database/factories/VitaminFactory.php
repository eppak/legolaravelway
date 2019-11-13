<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Agronomist\Models\Vitamin;
use Faker\Generator as Faker;

$factory->define(Vitamin::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName()
    ];
});
