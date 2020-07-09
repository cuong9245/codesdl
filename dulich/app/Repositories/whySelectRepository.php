<?php

namespace App\Repositories;

use App\Models\whySelect;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class whySelectRepository
 * @package App\Repositories
 * @version December 12, 2019, 4:20 am UTC
 *
 * @method whySelect findWithoutFail($id, $columns = ['*'])
 * @method whySelect find($id, $columns = ['*'])
 * @method whySelect first($columns = ['*'])
*/
class whySelectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'detail'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return whySelect::class;
    }
}
