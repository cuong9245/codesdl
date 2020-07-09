<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class imageTour
 * @package App\Models
 * @version December 7, 2019, 3:04 am UTC
 *
 * @property string image
 */
class imageTour extends Model
{
    use SoftDeletes;

    public $table = 'image_tours';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'image',
        'imageTour_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required|image|mimes:jpeg,png,jpg|max:4096'
    ];

    
}
