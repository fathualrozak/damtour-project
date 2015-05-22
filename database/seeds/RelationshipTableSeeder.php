<?php

use Illuminate\Database\Seeder;
use App\Relationship;

class RelationshipTableSeeder extends Seeder {

    public function run()
    {
        Relationship::create(['name' => 'Anak Kandung']);
        Relationship::create(['name' => 'Suami']);
        Relationship::create(['name' => 'Istri']);
        Relationship::create(['name' => 'Ayah Kandung']);
        Relationship::create(['name' => 'Ibu Kandung']);
        Relationship::create(['name' => 'Saudara Kandung']);
    }

}