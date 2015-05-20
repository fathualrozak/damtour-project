<?php

use Illuminate\Database\Seeder;
use App\City;

class CityTableSeeder extends Seeder {

    public function run()
    {
        
        City::create(["name" => "	ACEH SELATAN	"]);
        City::create(["name" => "	ACEH TENGGARA	"]);
        City::create(["name" => "	ACEH TIMUR	"]);
        City::create(["name" => "	ACEH TENGAH	"]);
        City::create(["name" => "	ACEH BARAT	"]);
        City::create(["name" => "	ACEH BESAR	"]);
        City::create(["name" => "	PIDIE	"]);
        City::create(["name" => "	ACEH UTARA	"]);
        City::create(["name" => "	SIMEULUE	"]);
        City::create(["name" => "	ACEH SINGKIL	"]);
        City::create(["name" => "	BIREUEN	"]);
        City::create(["name" => "	ACEH BARAT DAYA	"]);
        City::create(["name" => "	GAYO LUES	"]);
        City::create(["name" => "	ACEH JAYA	"]);
        City::create(["name" => "	NAGAN RAYA	"]);
        City::create(["name" => "	ACEH TAMIANG	"]);
        City::create(["name" => "	BENER MERIAH	"]);
        City::create(["name" => "	PIDIE JAYA	"]);
        City::create(["name" => "	KOTA BANDA ACEH	"]);
        City::create(["name" => "	KOTA SABANG	"]);
        City::create(["name" => "	KOTA LHOKSEUMAWE	"]);
        City::create(["name" => "	KOTA LANGSA	"]);
        City::create(["name" => "	KOTA SUBULUSSALAM	"]);
        City::create(["name" => "	LABUHANBATU SELATAN	"]);
        City::create(["name" => "	LABUHANBATU UTARA	"]);
        City::create(["name" => "	NIAS UTARA	"]);

    }

}