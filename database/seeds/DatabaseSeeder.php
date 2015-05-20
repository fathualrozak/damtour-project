<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('CurrencyTableSeeder');
        $this->call('PackageTableSeeder');
        $this->call('ServiceTableSeeder');
        $this->call('ProgramCategoryTableSeeder');
        $this->call('DistrictTableSeeder');
        $this->call('CityTableSeeder');
    }

}