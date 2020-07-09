<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class commentClient
 * @package App\Models
 * @version June 15, 2020, 10:48 am +07
 *
 * @property string name
 * @property string email
 * @property string title
 * @property string content
 * @property number star
 * @property number liked
 * @property number status
 * @property string date
 */
class commentClient extends Model
{
    use SoftDeletes;

    public $table = 'comment_clients';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'title',
        'content',
        'star',
        'liked',
        'status',
        'id_page',
        'date'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'title' => 'string',
        'date' => 'string',
        'created_at' => 'datetime:d/m/Y', // Change your format
        'updated_at' => 'datetime:d/m/Y',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:255',
        'email' => 'required|email',
        'title' => 'required|max:255',
        'content' => 'required'
    ];

    
}
