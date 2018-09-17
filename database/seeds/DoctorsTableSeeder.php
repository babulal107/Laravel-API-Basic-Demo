<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Certificate;
use App\Qualification;
class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create 10 users
        factory(User::class, 10)->create()->each(function ($user) {
            $services=array();
            $no_of_service= rand(1, 5);
            for($i=0;$i<$no_of_service;$i++){
                $services[rand(1, 10)] = ['charge'=>rand(100,500)];
            }
            $user->user_type='D';
            $user->save();
            $user->services()->sync($services);
            factory(Certificate::class, 3)->create(['user_id'=>$user->id]);
            factory(Qualification::class, 2)->create(['user_id'=>$user->id]);
            
        });
    }
}
