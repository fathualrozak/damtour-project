<?php

use Illuminate\Database\Seeder;
use App\Currency;

class CurrencyTableSeeder extends Seeder {

    public function run()
    {
        Currency::create(['currency_name' => 'idr', 'currency_description' => 'Indonesian Rupiah']);
        Currency::create(['currency_name' => 'usd', 'currency_description' => 'United States Dollar']);
    }

}