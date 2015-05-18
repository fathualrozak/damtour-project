<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceTableSeeder extends Seeder {

    public function run()
    {
        Service::create(['name' => 'Umroh', 'description' => 'Jasa perjalanan umroh']);
        Service::create(['name' => 'Haji', 'description' => 'Jasa perjalanan haji']);
    }

}