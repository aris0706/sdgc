<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class list1
 * @package App\Models
 * @version September 9, 2018, 4:42 am UTC
 */
class list1 extends Model
{

    public $table = 'list1';

    public $fillable = [
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    
}
