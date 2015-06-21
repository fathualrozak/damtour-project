<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Payer extends Model {

	protected $fillable = ['name', 'contact'];

    public function payment() {
        return $this->hasMany('App\Payment');
    }

}
