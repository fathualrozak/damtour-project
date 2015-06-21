<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'name' => 'owner',
            'display_name' => 'Owner',
            'description' => 'User ini adalah pemilik dari Perusahaan'
        ]);
        Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'User ini bisa mengatur dan mengedit user lain'
        ]);
    }
}
