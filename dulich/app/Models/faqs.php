<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class faqs
 * @package App\Models
 * @version June 19, 2020, 3:16 pm +07
 *
 * @property string question
 * @property string answer
 * @property interge tourId
 */
class faqs extends Model
{
    use SoftDeletes;

    public $table = 'faqs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'question',
        'answer',
        'tourId'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'question' => 'required:255',
        'answer' => 'required'
    ];

    
}
