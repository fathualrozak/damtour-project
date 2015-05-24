<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AdditionalItem extends Model {

	protected $table = 'additional_item';

    protected $fillable = ['booking_id', 'item_id'];

}
