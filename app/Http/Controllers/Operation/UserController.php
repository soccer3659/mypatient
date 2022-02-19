<?php

namespace App\Http\Controllers\Operation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Test;

class UserController extends Controller
{
    public function add () {
        return view('operation.patient.create');
    }
    
     public function create()
    {
        return redirect('operation/patient/create');
    }
    
    public function select()
    {
        return view('operation.patient.select');
    }
    
    public function test1()
    {
        return view('operation.patient.test');    
    }
    
    public function test2(Request $request)
    {
        return redirect('operation/patient/test');    
    }
    
    public function testresult(Request $request)
    {
        $this->validate($request,Test::$rules);
        $test = new Test;
        $form = $request->all();
        
        unset($form['_token']);
        
        $test->fill($form);
        $test->save();
        
        return view('operation.patient.testresult');
    }
}
