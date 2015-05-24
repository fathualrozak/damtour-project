<?php

use Illuminate\Database\Seeder;
use App\Currency;

class CurrencyTableSeeder extends Seeder {

    public function run()
    {
        Currency::create(['name' => 'Rp', 'description' => 'Indonesian Rupiah']);
        Currency::create(['name' => 'USD', 'description' => 'United States Dollar']);
    }

}