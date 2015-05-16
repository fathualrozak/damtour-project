<?php

use Illuminate\Database\Seeder;
use App\ProgramCategory;

class ProgramCategoryTableSeeder extends Seeder {

    public function run()
    {
        ProgramCategory::create(['category_name' => 'Reguler', 'category_description' => 'Kategori program reguler']);
        ProgramCategory::create(['category_name' => 'Promo', 'category_description' => 'Kategori program promo']);
    }

}