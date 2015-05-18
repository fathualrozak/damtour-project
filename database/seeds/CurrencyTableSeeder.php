<?php

use Illuminate\Database\Seeder;
use App\Currency;

class CurrencyTableSeeder extends Seeder {

    public function run()
    {
        Currency::create(['name' => 'idr', 'description' => 'Indonesian Rupiah']);
        Currency::create(['name' => 'usd', 'description' => 'United States Dollar']);
    }

}