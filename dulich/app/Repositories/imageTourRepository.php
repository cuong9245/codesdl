<?php

namespace App\Repositories;

use App\Models\imageTour;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class imageTourRepository
 * @package App\Repositories
 * @version December 7, 2019, 3:04 am UTC
 *
 * @method imageTour findWithoutFail($id, $columns = ['*'])
 * @method imageTour find($id, $columns = ['*'])
 * @method imageTour first($columns = ['*'])
*/
class imageTourRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return imageTour::class;
    }
}
