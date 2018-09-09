<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Child02
 * @package App\Models
 * @version September 9, 2018, 5:03 am UTC
 */
class Child02 extends Model
{

    public $table = 'child02';
    

    public $fillable = [
        'id_child01',
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_child01' => 'string',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_child01' => 'required',
        'title' => 'required'
    ];

    
}
