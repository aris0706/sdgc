<?php

namespace App\Repositories;

use App\Models\Child03;
use InfyOm\Generator\Common\BaseRepository;

class Child03Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_child02',
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Child03::class;
    }
}
