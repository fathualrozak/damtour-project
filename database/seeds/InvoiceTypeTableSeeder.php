<?php

use Illuminate\Database\Seeder;
use App\InvoiceType;

class InvoiceTypeTableSeeder extends Seeder {

    public function run()
    {
        InvoiceType::create(['code' => 'dp', 'name' => 'Down Payment']);
        InvoiceType::create(['code' => 'pl', 'name' => 'Pelunasan']);
        InvoiceType::create(['code' => 'ad', 'name' => 'Layanan Lain']);
    }

}