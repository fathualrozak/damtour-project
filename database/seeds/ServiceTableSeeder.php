<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceTableSeeder extends Seeder {

    public function run()
    {
        Service::create(['service_name' => 'Umroh', 'service_description' => 'Jasa perjalanan umroh']);
        Service::create(['service_name' => 'Haji', 'service_description' => 'Jasa perjalanan haji']);
    }

}