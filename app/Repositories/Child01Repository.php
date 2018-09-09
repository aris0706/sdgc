<?php

namespace App\Repositories;

use App\Models\Child01;
use InfyOm\Generator\Common\BaseRepository;

class Child01Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_list1',
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Child01::class;
    }
}
