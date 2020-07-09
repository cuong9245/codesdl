<?php

namespace App\Repositories;

use App\Models\Banner;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BannerRepository
 * @package App\Repositories
 * @version December 6, 2019, 2:53 am UTC
 *
 * @method Banner findWithoutFail($id, $columns = ['*'])
 * @method Banner find($id, $columns = ['*'])
 * @method Banner first($columns = ['*'])
*/
class BannerRepository extends BaseRepository
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
        return Banner::class;
    }
}
