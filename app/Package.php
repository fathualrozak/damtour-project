<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model {

	protected $table = 'packages';

    protected $fillable = ['name', 'description'];

    public function program()
    {
        return $this->hasMany('App\Program');
    }

}
