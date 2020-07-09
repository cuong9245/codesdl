<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ticket;
use Faker\Generator as Faker;

$factory->define(ticket::class, function (Faker $faker) {

    return [
        'from' => $faker->word,
        'to' => $faker->word,
        'type' => $faker->word,
        'price' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
