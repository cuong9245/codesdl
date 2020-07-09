<?php

namespace App\Repositories;

use App\Models\GroupTour;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GroupTourRepository
 * @package App\Repositories
 * @version January 16, 2020, 9:59 am +07
 *
 * @method GroupTour findWithoutFail($id, $columns = ['*'])
 * @method GroupTour find($id, $columns = ['*'])
 * @method GroupTour first($columns = ['*'])
*/
class GroupTourRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'url_rewrite',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GroupTour::class;
    }
}
