<?php

namespace App\Http\Controllers\Operation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Test;
use Carbon\Carbon;


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
        $test->created_at = Carbon::today();
        $test->save();
        
        $gait = config('average.10m歩行');
        $md = config('average.6分間歩行距離');
        
        return view('operation.patient.testresult', compact('gait' , 'md'),['test' => $test]);
    }
    
    
    public function delete(Request $request)
    {
        $test = Test::find($request->id);
        $test -> delete();
        $cond_title = $request->cond_title;
        $posts = Test::all();
        return view('operation.patient.select',['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function history(Request $request)
    {
        $cond_title = $request->cond_title;
        $posts = Test::all();
        $history = Test::find($request->id);
        $gait = config('average.10m歩行');
        $md = config('average.6分間歩行距離');
        
        return view('operation.patient.history', compact('gait' , 'md'),['history' => $history, 'posts' => $posts, 'cond_title' => $cond_title]);
    }
}
