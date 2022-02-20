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
    
    public function select(Request $request)
    {
        $cond_title = $request->cond_title;
        $posts = Test::all();
        return view('operation.patient.select',['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function test()
    {
        return view('operation.patient.test');    
    }
    
    public function test2(Request $request)
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
        
        return view('operation.patient.testresult');
    }
    
    
    public function delete(Request $request)
    {
        $test = Test::find($request->id);
        $test -> delete();
        $cond_title = $request->cond_title;
        $posts = Test::all();
        return view('operation.patient.select',['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
}
