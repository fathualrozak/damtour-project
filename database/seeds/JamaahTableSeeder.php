<?php

use App\Address;
use App\Heir;
use App\Jamaah;
use Illuminate\Database\Seeder;

/**
 * Class JamaahTableSeeder
 */
class JamaahTableSeeder extends Seeder
{
    /**
     *
     */
    public function run()
    {
        /**
         * First data
         */
        $address = Address::create([
            'line1' => 'Jl. Hasyim Asyari No.20',
            'line2' => 'Bedengsatu, Bugistua',
            'district_id' => 1,
            'city_id' => 1
        ]);

        $jamaah = Jamaah::create([
            'firstname' => 'Annida',
            'lastname' => 'Az-Zukhruf',
            'nickname' => 'Nida',
            'gender' => 'female',
            'birthplace' => 'Indramayu',
            'birthdate' => '1996-05-05',
            'idcard_type' => 'ktp',
            'idcard_number' => '1621120519960005',
            'contact' => '+62 812 8708 8586',
            'email' => 'annida@gmail.com',
            'profession' => 'Pelajar',
            'education' => 's1',
            'has_umroh' => 1,
            'has_hajj' => 0,
            'dress_size' => 'l',
            'address_id' => $address->id
        ]);

        Heir::create([
            'heir_firstname' => 'Nurmawati',
            'heir_lastname' => 'Ridwan',
            'relationship_id' => 5,
            'jamaah_id' => $jamaah->id
        ]);

        /**
         * Second data
         */

        $address = Address::create([
            'line1' => 'Jl. Hasyim Asyari No.20',
            'line2' => 'Bedengsatu, Bugistua',
            'district_id' => 1,
            'city_id' => 1
        ]);

        $jamaah = Jamaah::create([
            'firstname' => 'Farhan',
            'lastname' => 'Maulana',
            'nickname' => 'Farhan',
            'gender' => 'male',
            'birthplace' => 'Indramayu',
            'birthdate' => '1996-05-05',
            'idcard_type' => 'ktp',
            'idcard_number' => '1621120519960005',
            'contact' => '+62 812 8708 8586',
            'email' => 'farhan@gmail.com',
            'profession' => 'Pelajar',
            'education' => 's1',
            'has_umroh' => 1,
            'has_hajj' => 0,
            'dress_size' => 'l',
            'address_id' => $address->id
        ]);

        Heir::create([
            'heir_firstname' => 'Supardi',
            'heir_lastname' => 'Rangsa',
            'relationship_id' => 2,
            'jamaah_id' => $jamaah->id
        ]);

    }
}
