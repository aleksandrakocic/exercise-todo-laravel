<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    $status = ['done', 'notdone'];
    return [
        'title'=> $faker->sentence,
        'body'=> $faker->text(30),
        'date'=> $faker->date('Y-m-d'),
        'status' => $status[rand(0,1)]
    ];
});
