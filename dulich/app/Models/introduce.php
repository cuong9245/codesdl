<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class introduce
 * @package App\Models
 * @version May 18, 2020, 3:24 pm +07
 *
 * @property string image
 * @property string name
 * @property string description
 */
class introduce extends Model
{
    use SoftDeletes;

    public $table = 'introduces';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'image',
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        'name' => 'required|max:255',
        'description' => 'required|max:255'
    ];

    
}
