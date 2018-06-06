<?php

use Faker\Generator as Faker;

$factory->define(App\Occupations::class, function (Faker $faker) {

    $data = [
        'title' => $faker->title
    ];

    return $data;
});