<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class BaseModel extends Model
{
    use SoftDeletes;

    protected $class = null;
    protected $softDelete = true;

    public static $belongs = [];
    public static $rules = [];

    public static $messages = [
        'required' => 'The :attribute is required',
        'min' => 'The :attribute is required length :min',
        'alpha'	=> 'The :attribute is Alpha',
        'alpha_num' => 'The :attribute is Alpha Numeric',
        'unique' => 'The :attribute is Unique in :values',
        'exists' => 'The :attribute have Exists in :exists',
        'email' => 'The :attribute not is a valid Email',
        'numeric' => 'This :attribute is a Numeric field',
    ];
}