<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	protected $table = 'items';

    protected $fillable = ['name', 'price', 'description'];

    public function bookings() {
        return $this->belongsToMany('App\Booking', 'additional_item');
    }

    public function currency() {
        return $this->belongsTo('App\Currency');
    }

}
