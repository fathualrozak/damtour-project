<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceLine extends Model {

	protected $table = 'invoice_lines';

    protected $fillable = ['invoice_type_id', 'invoice_id', 'booking_id'];



}
