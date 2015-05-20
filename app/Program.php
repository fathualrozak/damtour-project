<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Program
 * @package App
 */
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

    protected $dates = ['schedule', 'payment_before'];


    /**
     * Dates Formatting
     * @class Program
     */
    public function getDates() {
        return ['schedule', 'payment_before'];
    }

    public function getScheduleAttribute($date) {
        $dt = Carbon::createFromFormat('Y-m-d', $date);
        return $dt->toDateString();
    }
    public function getPaymentBeforeAttribute($date) {
        $dt = Carbon::createFromFormat('Y-m-d', $date);
        return $dt->toDateString();
    }


    /**
     * Relationships
     * @class Program
     */
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
