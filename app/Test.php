<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'patients_id' => 'required',
        'ID2' => 'required',
        'gender' => 'required',
        'age' => 'required'
        );
}
