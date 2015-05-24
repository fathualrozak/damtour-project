<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    public function run()
    {
        Item::create(['name' => 'Visa', 'price' => 200000, 'description' => 'Pembuatan visa', 'currency_id' => 1]);
        Item::create(['name' => 'Buku Vaksin Maningitis', 'price' => 200000, 'description' => 'Pembuatan buku vaksin maningitis', 'currency_id' => 1]);
    }
}
