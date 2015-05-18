<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model {

	protected $table = 'programs';

    protected $fillable = [
        'name',
        'schedule',
        'days_length',
        'price',
        'payment_before',
        'description',
        'service_id',
        'program_category_id',
        'package_id',
        'currency_id'
    ];

    public function programCategory()
    {
        return $this->belongsTo('App\ProgramCategory', 'program_category_id');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    public function package()
    {
        return $this->belongsTo('App\Package');
    }

}
