<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Promotion;
use Faker\Generator as Faker;

$factory->define(Promotion::class, function (Faker $faker) {

    return [
        'Title' => $faker->word,
        'image' => $faker->word,
        'Detail' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
