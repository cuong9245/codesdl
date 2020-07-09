<?php

namespace App\Repositories;

use App\Models\contactsClient;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class contactsClientRepository
 * @package App\Repositories
 * @version June 19, 2020, 10:29 am +07
 *
 * @method contactsClient findWithoutFail($id, $columns = ['*'])
 * @method contactsClient find($id, $columns = ['*'])
 * @method contactsClient first($columns = ['*'])
*/
class contactsClientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'message'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return contactsClient::class;
    }
}
