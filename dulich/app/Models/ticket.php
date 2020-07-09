<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ticket
 * @package App\Models
 * @version June 26, 2020, 9:58 am +07
 *
 * @property string from
 * @property string to
 * @property string type
 * @property string price
 */
class ticket extends Model
{
    use SoftDeletes;

    public $table = 'tickets';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'from',
        'to',
        'type',
        'price',
        'promotion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'from' => 'string',
        'to' => 'string',
        'type' => 'string',
        'price' => 'string',
        'promotion'=>'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'from' => 'required|max:255',
        'to' => 'required|max:255',
        'price' => 'required',
        'promotion'=>'required',
    ];

    
}
