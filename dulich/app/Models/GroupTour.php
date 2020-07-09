<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GroupTour
 * @package App\Models
 * @version January 16, 2020, 9:59 am +07
 *
 * @property string Name
 * @property string url_rewrite
 * @property string image
 */
class GroupTour extends Model
{
    use SoftDeletes;

    public $table = 'group_tours';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'url_rewrite',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'url_rewrite' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:4096'
    ];

     public static $rule = [
        'Name' => 'required|max:255',
        'image' => 'image|mimes:jpeg,png,jpg|max:4096'
    ];

    
}
