<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Menu
 * @package App\Models
 * @version January 14, 2020, 2:45 pm +07
 *
 * @property string Name
 * @property string originalMenu
 * @property string Link
 * @property string active
 */
class Menu extends Model
{
    use SoftDeletes;

    public $table = 'menus';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'originalMenu',
        'Link',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'originalMenu' => 'string',
        'Link' => 'string',
        'active' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required|max:255|unique:menus',
        'Link' => 'required|max:255|unique:menus'
    ];

    public static $rule = [
        'Name' => 'required|max:255|',
        'Link' => 'required|max:255|'
    ];

    
}
