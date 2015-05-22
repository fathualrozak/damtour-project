<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model {

	protected $table = 'relationships';

    protected $fillable = ['name'];

    /**
     * Start relationship
     */

    public function heir() {
        return $this->hasMany('App\Heir');
    }

}
