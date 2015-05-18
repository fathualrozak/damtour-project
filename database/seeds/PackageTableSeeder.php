<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackageTableSeeder extends Seeder {

    public function run()
    {
        Package::create(['name' => 'Favorite', 'description' => 'Paket umroh favorite']);
        Package::create(['name' => 'Premium', 'description' => 'Paket umroh premium']);
        Package::create(['name' => 'Executive', 'description' => 'Paket umroh eksekutif']);
    }

}