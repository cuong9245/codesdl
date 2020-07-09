<?php

namespace App\Repositories;

use App\Models\Menu;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MenuRepository
 * @package App\Repositories
 * @version January 14, 2020, 2:45 pm +07
 *
 * @method Menu findWithoutFail($id, $columns = ['*'])
 * @method Menu find($id, $columns = ['*'])
 * @method Menu first($columns = ['*'])
*/
class MenuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'originalMenu',
        'Link',
        'active'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Menu::class;
    }
}
