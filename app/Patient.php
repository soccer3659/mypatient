<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'ID2' => 'required',
        'gender2' => 'required',
        'age2' => 'required',
        );
        
        //以下でPatient Modelに関連付けを行う
        public function tests()
        {
            return $this->hasMany('App\Test');
        }
}
