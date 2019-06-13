<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'type' => 'required',
        'amount' => 'required',
        'price' => 'required',
        );
}
