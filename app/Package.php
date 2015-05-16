<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model {

	protected $table = 'packages';

    protected $fillable = ['package_name', 'package_description'];

    public function program()
    {
        return $this->hasMany('App\Program');
    }

}
