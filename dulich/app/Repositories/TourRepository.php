<?php

namespace App\Repositories;

use App\Models\Tour;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TourRepository
 * @package App\Repositories
 * @version December 11, 2019, 2:30 am UTC
 *
 * @method Tour findWithoutFail($id, $columns = ['*'])
 * @method Tour find($id, $columns = ['*'])
 * @method Tour first($columns = ['*'])
*/
class TourRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Code',
        'departureDay',
        'departureTime',
        'Time',
        'startPlace',
        'price',
        'max',
        'percent',
        'discountPrice',
        'Summary',
        'note',
        'booked',
        'city'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tour::class;
    }
}
