<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Service::class, 10)->create();
    }
}
