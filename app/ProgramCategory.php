<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramCategory extends Model {

	protected $table = 'program_categories';

    protected $fillable = ['name', 'description'];

    public function program()
    {
        return $this->hasMany('App\Program');
    }

}
