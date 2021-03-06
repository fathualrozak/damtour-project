<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\Node;

class Network extends Node {

	protected $table = 'networks';

    protected $fillable = [
        'parent_id', 'sponsor_id', 'pos'
    ];

    public function getFullNameAttribute() {
        return $this->book->jamaah->firstname; //." ". $this->book->jamaah->lastname;
    }
    public function book() {
        return $this->hasOne('App\Booking');
    }

}
