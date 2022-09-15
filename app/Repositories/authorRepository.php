<?php

namespace App\Repositories;

use App\Models\author;
use App\Repositories\BaseRepository;

/**
 * Class authorRepository
 * @package App\Repositories
 * @version September 9, 2022, 8:56 am UTC
*/

class authorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'alamat'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return author::class;
    }
}
