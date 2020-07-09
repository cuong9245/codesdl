<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tour;
use Faker\Generator as Faker;

$factory->define(Tour::class, function (Faker $faker) {

    return [
        'Name' => $faker->word,
        'Code' => $faker->word,
        'departureDay' => $faker->word,
        'departureTime' => $faker->word,
        'Time' => $faker->word,
        'startPlace' => $faker->word,
        'price' => $faker->randomDigitNotNull,
        'max' => $faker->randomDigitNotNull,
        'discountPrice' => $faker->randomDigitNotNull,
        'Summary' => $faker->word,
        'note' => $faker->word,
        'booked' => $faker->randomDigitNotNull,
        'city' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
