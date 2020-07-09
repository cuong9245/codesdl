<?php

namespace App\Repositories;

use App\Models\faqs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class faqsRepository
 * @package App\Repositories
 * @version June 19, 2020, 3:16 pm +07
 *
 * @method faqs findWithoutFail($id, $columns = ['*'])
 * @method faqs find($id, $columns = ['*'])
 * @method faqs first($columns = ['*'])
*/
class faqsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question',
        'answer',
        'tourId'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return faqs::class;
    }
}
