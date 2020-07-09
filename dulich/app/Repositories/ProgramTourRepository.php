<?php

namespace App\Repositories;

use App\Models\ProgramTour;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProgramTourRepository
 * @package App\Repositories
 * @version December 25, 2019, 3:29 pm +07
 *
 * @method ProgramTour findWithoutFail($id, $columns = ['*'])
 * @method ProgramTour find($id, $columns = ['*'])
 * @method ProgramTour first($columns = ['*'])
*/
class ProgramTourRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'detail'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProgramTour::class;
    }
}
