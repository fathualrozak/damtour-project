<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Jamaah extends Model {

	protected $table = 'jamaah';

    protected $fillable = [
        'firstname',
        'lastname',
        'nickname',
        'gender',
        'birthplace',
        'birthdate',
        'idcard_type',
        'idcard_number',
        'contact',
        'email',
        'profession',
        'education',
        'has_umroh',
        'has_hajj',
        'dress_size',
        'address_id'
    ];

    protected $dates = ['birthdate'];

    protected $casts = [
        'has_umroh' => 'boolean',
        'has_hajj'  => 'boolean'
    ];

    public function address() {
        return $this->belongsTo('App\Address');
    }

    public function heir() {
        return $this->hasOne('App\Heir');
    }

    public function booking() {
        return $this->hasMany('App\Booking');
    }

}
