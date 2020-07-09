<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\faqs;
use Faker\Generator as Faker;

$factory->define(faqs::class, function (Faker $faker) {

    return [
        'question' => $faker->word,
        'answer' => $faker->word,
        'tourId' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
