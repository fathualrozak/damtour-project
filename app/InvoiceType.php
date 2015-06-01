<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceType extends Model {

	protected $fillable = ['code', 'name'];

    public function invoice() {
        return $this->belongsTo('App\Invoice');
    }

}
