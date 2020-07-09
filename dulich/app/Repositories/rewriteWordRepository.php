<?php

namespace App\Repositories;

use App\Models\rewriteWord;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class rewriteWordRepository
 * @package App\Repositories
 * @version January 20, 2020, 11:49 am +07
 *
 * @method rewriteWord findWithoutFail($id, $columns = ['*'])
 * @method rewriteWord find($id, $columns = ['*'])
 * @method rewriteWord first($columns = ['*'])
*/
class rewriteWordRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'word',
        'rewrite',
        'page'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return rewriteWord::class;
    }
}
