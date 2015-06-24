<?php

use Illuminate\Database\Seeder;

use App\PaymentMethod;

class PaymentMethodTableSeeder extends Seeder
{
    public function run()
    {
        PaymentMethod::create(['code' => 'cash', 'name' => 'Tunai']);
        PaymentMethod::create(['code' => 'bri', 'name' => 'Transfer Bank BRI']);
        PaymentMethod::create(['code' => 'bni', 'name' => 'Transfer Bank BNI']);
        PaymentMethod::create(['code' => 'bca', 'name' => 'Transfer Bank BCA']);
        PaymentMethod::create(['code' => 'mandiri', 'name' => 'Transfer Bank Mandiri']);
    }
}
