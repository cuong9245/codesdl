<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\GroupTour;
use Faker\Generator as Faker;

$factory->define(GroupTour::class, function (Faker $faker) {

    return [
        'Name' => $faker->word,
        'url_rewrite' => $faker->word,
        'image' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
