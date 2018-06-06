<?php

use Faker\Generator as Faker;

$factory->define(App\Vacancy::class, function (Faker $faker) {
    $data = [
        'title' => $faker->title,
        'description' => $faker->title
    ];

    return $data;
});
