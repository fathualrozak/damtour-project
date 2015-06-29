<?php

use Illuminate\Database\Seeder;
use App\Program;

class ProgramTableSeeder extends Seeder {

    public function run()
    {
        Program::create([
            'name' => 'Mei 2016',
            'schedule' => '2016-05-15',
            'schedule_end' => '2016-05-24',
            'price' => 17000000,
            'payment_before' => '2015-11-15',
            'description' => 'Program promo favorite',
            'service_id' => 1,
            'program_category_id' => 2,
            'package_id' => 1,
            'currency_id' => 1
        ]);
        Program::create([
            'name' => 'Juni 2016',
            'schedule' => '2016-06-15',
            'schedule_end' => '2016-06-24',
            'price' => 17500000,
            'payment_before' => '2015-12-15',
            'description' => 'Program promo favorite',
            'service_id' => 1,
            'program_category_id' => 2,
            'package_id' => 1,
            'currency_id' => 1
        ]);
        Program::create([
            'name' => 'Juli 2016',
            'schedule' => '2016-07-15',
            'schedule_end' => '2016-07-24',
            'price' => 18000000,
            'payment_before' => '2016-01-15',
            'description' => 'Program promo favorite',
            'service_id' => 1,
            'program_category_id' => 2,
            'package_id' => 1,
            'currency_id' => 1
        ]);
        Program::create([
            'name' => 'Haji Plus',
            'schedule' => null,
            'schedule_end' => null,
            'price' => 110000000,
            'payment_before' => '2016-01-15',
            'description' => 'Program Haji Plus',
            'service_id' => 2,
            'program_category_id' => 1,
            'package_id' => 4,
            'currency_id' => 1
        ]);

    }

}