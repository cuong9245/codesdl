<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class News
 * @package App\Models
 * @version January 2, 2020, 10:09 am +07
 *
 * @property string image
 * @property string title
 * @property string summary
 * @property string TourRelated
 * @property string Detail
 */
class News extends Model
{
    use SoftDeletes;

    public $table = 'news';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'image',
        'title',
        'summary',
        'TourRelated',
        'url_rewrite',
        'Detail'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'title' => 'string',
        'summary' => 'string',
        'TourRelated' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        'title' => 'required|max:255',
        'summary' => 'required|max:255',
        'Detail' => 'required'
    ];

    public static $rule = [
        'image' => 'image|mimes:jpeg,png,jpg|max:4096',
        'title' => 'required|max:255',
        'summary' => 'required|max:255',
        'Detail' => 'required'
    ];
    
}
