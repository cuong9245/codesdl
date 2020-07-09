<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Promotion
 * @package App\Models
 * @version January 16, 2020, 11:32 am +07
 *
 * @property string Title
 * @property string image
 * @property string Detail
 */
class Promotion extends Model
{
    use SoftDeletes;

    public $table = 'promotions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Title',
        'image',
        'Detail',
        'url_rewrite'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Title' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Title' => 'required|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        'Detail' => 'required'
    ];

    public static $rule = [
        'Title' => 'required|max:255',
        'image' => 'image|mimes:jpeg,png,jpg|max:4096',
        'Detail' => 'required'
    ];


    
}
