<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class contactsClient
 * @package App\Models
 * @version June 19, 2020, 10:29 am +07
 *
 * @property string name
 * @property string email
 * @property string message
 */
class contactsClient extends Model
{
    use SoftDeletes;

    public $table = 'contacts_clients';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:255',
        'email' => 'required|email',
        'message' => 'required'
    ];

    
}
