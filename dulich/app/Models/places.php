<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class places
 * @package App\Models
 * @version December 7, 2019, 4:13 am UTC
 *
 * @property string name
 * @property string image
 */
class places extends Model
{
    use SoftDeletes;

    public $table = 'places';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'image',
        'places_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'image' => 'string'
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
