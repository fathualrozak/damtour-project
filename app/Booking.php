<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model {

	protected $table = 'bookings';

    protected $fillable = [
        'code', 'date', 'jamaah_id', 'program_id', 'network_id'
    ];

    protected $dates = ['date'];

    public function network() {
        return $this->belongsTo('App\Network');
    }

    public function jamaah() {
        return $this->belongsTo('App\Jamaah');
    }

    public function program() {
        return $this->belongsTo('App\Program');
    }

    public function items() {
        return $this->belongsToMany('App\Item', 'additional_item');
    }

}
