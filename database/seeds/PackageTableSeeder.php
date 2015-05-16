<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackageTableSeeder extends Seeder {

    public function run()
    {
        Package::create(['currency_name' => 'idr', 'currency_description' => 'Indonesian Rupiah']);
        Package::create(['currency_name' => 'usd', 'currency_description' => 'United States Dollar']);
    }

}