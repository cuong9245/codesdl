<?php

namespace App\Repositories;

use App\Models\News;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NewsRepository
 * @package App\Repositories
 * @version January 2, 2020, 10:09 am +07
 *
 * @method News findWithoutFail($id, $columns = ['*'])
 * @method News find($id, $columns = ['*'])
 * @method News first($columns = ['*'])
*/
class NewsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'title',
        'summary',
        'TourRelated',
        'Detail'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return News::class;
    }
}
