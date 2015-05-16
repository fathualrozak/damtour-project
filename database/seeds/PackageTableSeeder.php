<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackageTableSeeder extends Seeder {

    public function run()
    {
        Package::create(['package_name' => 'Favorite', 'package_description' => 'Paket umroh favorite']);
        Package::create(['package_name' => 'Premium', 'package_description' => 'Paket umroh premium']);
        Package::create(['package_name' => 'Executive', 'package_description' => 'Paket umroh eksekutif']);
    }

}