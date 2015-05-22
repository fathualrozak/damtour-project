<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Heir extends Model {

	protected $table = 'heirs';

    protected $fillable = ['heir_firstname', 'heir_lastname', 'relationship_id', 'jamaah_id'];


    /**
     * Start relationship
     */

    public function jamaah() {
        return $this->hasMany('App\Jamaah');
    }

    public function relationship() {
        return $this->belongsTo('App\Relationship');
    }

}
