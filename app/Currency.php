<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model {

	protected $table = 'currencies';

    protected $fillable = ['name', 'description'];

    public function program() {
        return $this->hasMany('App\Program');
    }

}
