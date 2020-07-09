<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class rewriteWord
 * @package App\Models
 * @version January 20, 2020, 11:49 am +07
 *
 * @property string word
 * @property string rewrite
 * @property string page
 */
class rewriteWord extends Model
{
    use SoftDeletes;

    public $table = 'rewrite_words';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'word',
        'rewrite',
        'page'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'word' => 'string',
        'rewrite' => 'string',
        'page' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'word' => 'required|max:255',
        'rewrite' => 'required|max:255'
    ];

    
}
