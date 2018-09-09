<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Child01
 * @package App\Models
 * @version September 9, 2018, 4:58 am UTC
 */
class Child01 extends Model
{

    public $table = 'child01';

    public $fillable = [
        'id_list1',
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_list1' => 'string',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_list1' => 'required',
        'title' => 'required'
    ];

    
}
