<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\GuatePromos;
use Faker\Generator as Faker;

$factory->define(GuatePromos::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'price' => $faker->randomFloat($nbMaxDecimals = 2),
        'address' => $faker->address,
        'latitude' => $faker->latitude(),
        'longitude' => $faker->longitude(),        
    ];
});
