<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Owner',
            'email' => 'owner@damtour.co.id',
            'password' => bcrypt('owner')
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@damtour.co.id',
            'password' => bcrypt('admin')
        ]);
        User::create([
            'name' => 'Staff',
            'email' => 'staff@damtour.co.id',
            'password' => bcrypt('staff')
        ]);
        User::create([
            'name' => 'Yos Sularko',
            'email' => 'yoslarko@damtour.co.id',
            'password' => bcrypt('yoslarko')
        ]);
        User::create([
            'name' => 'Shafira',
            'email' => 'shafira@damtour.co.id',
            'password' => bcrypt('shafira')
        ]);
        User::create([
            'name' => 'Niya',
            'email' => 'niya@damtour.co.id',
            'password' => bcrypt('niya')
        ]);
        User::create([
            'name' => 'Endra',
            'email' => 'endra@damtour.co.id',
            'password' => bcrypt('endra')
        ]);
        User::create([
            'name' => 'Harist',
            'email' => 'harist@damtour.co.id',
            'password' => bcrypt('harist')
        ]);

    }
}
