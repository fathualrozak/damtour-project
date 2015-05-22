<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model {

	protected $table = 'districts';

	protected $fillable = ['name'];

    /**
     * Start relationship
     */

    public function address() {
        return $this->hasOne('App\Address');
    }

}
