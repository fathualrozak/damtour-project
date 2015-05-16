<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

	protected $table = 'services';

    protected $fillable = ['service_name', 'service_description'];

    public function program()
    {
        return $this->hasMany('App\Program');
    }

}
