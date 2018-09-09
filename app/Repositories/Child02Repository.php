<?php

namespace App\Repositories;

use App\Models\Child02;
use InfyOm\Generator\Common\BaseRepository;

class Child02Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_child01',
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Child02::class;
    }
}
