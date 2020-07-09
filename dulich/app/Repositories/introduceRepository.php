<?php

namespace App\Repositories;

use App\Models\introduce;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class introduceRepository
 * @package App\Repositories
 * @version May 18, 2020, 3:24 pm +07
 *
 * @method introduce findWithoutFail($id, $columns = ['*'])
 * @method introduce find($id, $columns = ['*'])
 * @method introduce first($columns = ['*'])
*/
class introduceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return introduce::class;
    }
}
