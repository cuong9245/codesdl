<?php

namespace App\Repositories;

use App\Models\city;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class cityRepository
 * @package App\Repositories
 * @version December 10, 2019, 8:43 am UTC
 *
 * @method city findWithoutFail($id, $columns = ['*'])
 * @method city find($id, $columns = ['*'])
 * @method city first($columns = ['*'])
*/
class cityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image',
        'customer'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return city::class;
    }
}
