<?php

use Faker\Generator as Faker;
use App\Certificate;
$factory->define(Certificate::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'number' => $faker->numerify('ISO##########'),
        'date'=>$faker->date($format='Y-m-d'),
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        },
    ];
});