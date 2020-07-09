<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class city
 * @package App\Models
 * @version December 10, 2019, 8:43 am UTC
 *
 * @property string name
 * @property string image
 * @property integer customer
 */
class city extends Model
{
    use SoftDeletes;

    public $table = 'cities';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'image',
        'url_rewrite',
        'customer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'image' => 'string',
        'customer' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:4096'
    ];

    public static $rule = [
        'name' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg|max:4096'
    ];

    
}
