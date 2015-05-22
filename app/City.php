<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

	protected $table = 'cities';

    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function address() {
        return $this->hasOne('App\Address');
    }


}
