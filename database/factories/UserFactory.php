<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $gender=array('M','F','O');
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'mobile'=>$faker->numerify('+91##########'),
        'date_of_birth'=>$faker->date($format='Y-m-d'),
        'gender'=> $gender[rand(0, 2)],
        'user_type'=>'P',
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
