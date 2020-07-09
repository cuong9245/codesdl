<?php

namespace App\Repositories;

use App\Models\Promotion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PromotionRepository
 * @package App\Repositories
 * @version January 16, 2020, 11:32 am +07
 *
 * @method Promotion findWithoutFail($id, $columns = ['*'])
 * @method Promotion find($id, $columns = ['*'])
 * @method Promotion first($columns = ['*'])
*/
class PromotionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Title',
        'image',
        'Detail'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Promotion::class;
    }
}
