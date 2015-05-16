<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model {

	protected $table = 'programs';

    protected $fillable = [
        'program_name',
        'program_schedule',
        'program_days_length',
        'price',
        'price_currency',
        'program_payment_before',
        'program_description',
        'service_id',
        'program_category_id',
        'package_id',
        'currency_id'
    ];

    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    public function category()
    {
        return $this->belongsTo('App\ProgramCategory');
    }

    public function package()
    {
        return $this->belongsTo('App\Package');
    }

}
