<?php

use Faker\Generator as Faker;
use App\Service;
$factory->define(Service::class, function (Faker $faker) {
    return [
        'name' => $faker->name,   
        'speciality_id'=> rand(1,6),
    ];
});
