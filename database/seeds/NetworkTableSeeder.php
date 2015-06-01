<?php

use Illuminate\Database\Seeder;
use App\Network;

class NetworkTableSeeder extends Seeder {

    public function run()
    {
        Network::create(['pos' => 'mid', 'sponsor_id' => 0]);
        Network::create(['parent_id' => 1, 'pos' => 'lft', 'sponsor_id' => 1]);
        Network::create(['parent_id' => 1, 'pos' => 'mid', 'sponsor_id' => 1]);
        Network::create(['parent_id' => 1, 'pos' => 'rgt', 'sponsor_id' => 1]);
    }

}