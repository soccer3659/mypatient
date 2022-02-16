<?php

namespace App\Http\Controllers\Operation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function add () {
        return view('operation.patient.create');
    }
    
     public function create()
    {
        return redirect('operation/patient/create');
    }
    
    public function test()
    {
        return view('operation.patient.test');    
    }
    
    public function testresult(Request $request)
    {
        $this->validate($request,Test::$rules);
        $test = new Test;
        $form = $request->all();
        
        unset($form['_token']);
        
        $test->fill($form);
        $test->save();
        
        return redirect('operation/patient/test');
    }
}
