<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'patient_id' => 'required',
        'gender' => 'required',
        'age' => 'required'
        );
}
