<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class whySelect
 * @package App\Models
 * @version December 12, 2019, 4:20 am UTC
 *
 * @property string name
 * @property string detail
 */
class whySelect extends Model
{
    use SoftDeletes;

    public $table = 'why_selects';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'detail'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'detail' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'detail' => 'required'
    ];

    
}
