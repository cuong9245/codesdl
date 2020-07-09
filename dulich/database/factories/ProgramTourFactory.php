<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProgramTour;
use Faker\Generator as Faker;

$factory->define(ProgramTour::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'detail' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
