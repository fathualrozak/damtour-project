<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramCategory extends Model {

	protected $table = 'program_categories';

    protected $fillable = ['category_name', 'category_description'];

}
