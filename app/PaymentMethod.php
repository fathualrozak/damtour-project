<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model {

	protected $fillable = ['code', 'name'];

    public function payment() {
        return $this->hasMany('App\Payment');
    }

}
