<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Child03
 * @package App\Models
 * @version September 9, 2018, 5:06 am UTC
 */
class Child03 extends Model
{

    public $table = 'child03';


    public $fillable = [
        'id_child02',
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_child02' => 'string',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_child02' => 'required',
        'title' => 'required'
    ];

    
}
