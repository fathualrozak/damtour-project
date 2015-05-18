<?php

use Illuminate\Database\Seeder;
use App\ProgramCategory;

class ProgramCategoryTableSeeder extends Seeder {

    public function run()
    {
        ProgramCategory::create(['name' => 'Reguler', 'description' => 'Kategori program reguler']);
        ProgramCategory::create(['name' => 'Promo', 'description' => 'Kategori program promo']);
    }

}