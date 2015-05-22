<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

	protected $table = 'addresses';

    protected $fillable = ['line1', 'line2', 'district_id', 'city_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function jamaah() {
        return $this->hasOne('App\Jamaah');
    }

    public function district() {
        return $this->belongsTo('App\District');
    }

    public function city() {
        return $this->belongsTo('App\City');
    }

}
