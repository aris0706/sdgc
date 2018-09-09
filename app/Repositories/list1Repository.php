<?php

namespace App\Repositories;

use App\Models\list1;
use InfyOm\Generator\Common\BaseRepository;

class list1Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return list1::class;
    }
}
