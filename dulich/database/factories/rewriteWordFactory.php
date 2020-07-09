<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\rewriteWord;
use Faker\Generator as Faker;

$factory->define(rewriteWord::class, function (Faker $faker) {

    return [
        'word' => $faker->word,
        'rewrite' => $faker->word,
        'page' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
