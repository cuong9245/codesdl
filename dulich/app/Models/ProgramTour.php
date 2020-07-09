<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProgramTour
 * @package App\Models
 * @version December 25, 2019, 3:29 pm +07
 *
 * @property string title
 * @property string detail
 */
class ProgramTour extends Model
{
    use SoftDeletes;

    public $table = 'program_tours';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'detail',
        'tour_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|max:255',
        'detail' => 'required'
    ];

    
}
