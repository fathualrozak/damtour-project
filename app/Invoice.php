<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model {

	protected $fillable = ['code', 'date', 'invoice_type_id', 'booking_id', 'jamaah_id'];

    protected $dates = ['date'];

    public function invoiceType() {
        return $this->belongsTo('App\InvoiceType');
    }

    public function booking() {
        return $this->belongsTo('App\Booking');
    }

    public function jamaah() {
        return $this->belongsTo('App\Jamaah');
    }

    public function payment() {
        return $this->hasMany('App\Payment');
    }
}
