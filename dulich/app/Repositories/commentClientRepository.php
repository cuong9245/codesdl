<?php

namespace App\Repositories;

use App\Models\commentClient;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class commentClientRepository
 * @package App\Repositories
 * @version June 15, 2020, 10:48 am +07
 *
 * @method commentClient findWithoutFail($id, $columns = ['*'])
 * @method commentClient find($id, $columns = ['*'])
 * @method commentClient first($columns = ['*'])
*/
class commentClientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'title',
        'content',
        'star',
        'liked',
        'status',
        'date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return commentClient::class;
    }
}
