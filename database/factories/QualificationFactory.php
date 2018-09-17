<?php

use Faker\Generator as Faker;
use App\Qualification;
$factory->define(Qualification::class, function (Faker $faker) {
    $degree=array('MBBS','MD','BAMS','BHMS');
    
    return [
        'institute' => $faker->company,
        'degree' => $degree[rand(0, 3)],
        'from_date'=>$faker->date($format='Y-m-d'),
        'to_date'=>$faker->date($format='Y-m-d'),
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        },
    ];
});
