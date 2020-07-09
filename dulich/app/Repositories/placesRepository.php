<?php

namespace App\Repositories;

use App\Models\places;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class placesRepository
 * @package App\Repositories
 * @version December 7, 2019, 4:13 am UTC
 *
 * @method places findWithoutFail($id, $columns = ['*'])
 * @method places find($id, $columns = ['*'])
 * @method places first($columns = ['*'])
*/
class placesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return places::class;
    }
}
