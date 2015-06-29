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
        'schedule_end',
        'price',
        'payment_before',
        'description',
        'service_id',
        'program_category_id',
        'package_id',
        'currency_id'
    ];

    protected $dates = ['schedule', 'schedule_end', 'payment_before'];

//    public function getDownPaymentAttribute($downpayment) {
//        if ($this->down_payment_type == 'fixed') {
//            return $downpayment;
//        } else {
//            return ($this->price / 100) * $downpayment;
//        }
//    }
//
//    public function getPelunasanAttribute() {
//        return $this->price - $this->down_payment;
//    }


    public function scopeHaji($query) {
        $service = Service::whereName('Haji')->first();
        return $query->where('service_id', '=', $service->id);
    }

    public function scopeUmroh($query) {
        $service = Service::whereName('Umroh')->first();
        return $query->where('service_id', '=', $service->id);
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

    public function booking() {
        return $this->hasMany('App\Booking');
    }

    public function currency() {
        return $this->belongsTo('App\Currency');
    }



}
