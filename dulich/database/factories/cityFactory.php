<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\city;
use Faker\Generator as Faker;

$factory->define(city::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'image' => $faker->word,
        'customer' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
