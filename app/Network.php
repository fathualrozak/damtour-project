<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\Node

class Network extends Node {

	protected $table = 'networks';

    protected $fillable = [
        'upline_id', 'sponsor_id'
    ];

    public function book() {
        return $this->hasOne('App\Book');
    }

}
