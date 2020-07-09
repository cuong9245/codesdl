<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tour
 * @package App\Models
 * @version December 11, 2019, 2:30 am UTC
 *
 * @property string Name
 * @property string Code
 * @property string departureDay
 * @property string departureTime
 * @property string Time
 * @property string startPlace
 * @property integer price
 * @property integer max
 * @property integer discountPrice
 * @property string Summary
 * @property string note
 * @property integer booked
 * @property string city
 */
class Tour extends Model
{
    use SoftDeletes;

    public $table = 'tours';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'url_rewrite',
        'Code',
        'departureDay',
        'departureTime',
        'Time',
        'startPlace',
        'price',
        'max',
        'percent',
        'discountPrice',
        'Summary',
        'note',
        'booked',
        'city',
        'groupTour'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'Code' => 'string',
        'departureDay' => 'string',
        'departureTime' => 'string',
        'Time' => 'string',
        'startPlace' => 'string',
        'price' => 'integer',
        'max' => 'integer',
        'discountPrice' => 'integer',
        'booked' => 'integer',
        'city' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required',
        'Code' => 'required',
        'departureDay' => 'required',
        'departureTime' => 'required',
        'Time' => 'required',
        'startPlace' => 'required',
        'price' => 'required|integer',
        'max' => 'required|integer',
        'discountPrice' => 'required|integer',
        'Summary' => 'required',
        'note' => 'required'
    ];

    public function citytour()
    {
        return $this->belongsTo('App\Models\city','city');
    }


    
}
