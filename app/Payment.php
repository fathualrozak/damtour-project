<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {

    protected $fillable = [
        'date',
        'amount',
        'invoice_id',
        'payer_id',
        'currency_id',
        'payment_method_id',
        'payment_status_id',
        'user_id'
    ];

    public function invoice() {
        return $this->belongsTo('App\Invoice');
    }

    public function payer() {
        return $this->belongsTo('App\Payer');
    }

    public function currency() {
        return $this->belongsTo('App\Currency');
    }

    public function paymentMethod() {
        return $this->belongsTo('App\PaymentMethod');
    }

    public function paymentStatus() {
        return $this->belongsTo('App\PaymentStatus');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
