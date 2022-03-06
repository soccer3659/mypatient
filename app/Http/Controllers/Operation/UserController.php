<?php

namespace App\Http\Controllers\Operation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Test;
use App\Patient;
use Carbon\Carbon;


class UserController extends Controller
{
    public function list(Request $request) 
    {
        $posts = Patient::all();
        return view('operation.patient.list', ['posts' => $posts]);
    }
    
     public function create()
    {
        return view('operation.patient.create');
    }
    
    public function add(Request $request)
    {
        $this->validate($request,Patient::$rules);
        $patient = new Patient;
        $form = $request->all();
        unset($form['_token']);
        $patient->fill($form);
        $patient->save();
        
        //↓以下は質問の助言にて削除
        // $test = new Test();
        // $test->patients_id = $patient->id;
        
        //patient_idを渡す
        return redirect('operation/patient/select?id=' . $patient->id);
    }
    
    public function select(Request $request)
    {
        $posts = Test::all();
        return view('operation.patient.select',['posts' => $posts, 'id' => $request->id]);
    }
    
    public function test(Request $request)
    {
        return view('operation.patient.test',['id' => $request->id]);    
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
        
        return view('operation.patient.result', compact('gait' , 'md'), ['history' => $test, 'id' => $request->id]);
    }
    
        public function patientDelete(Request $request)
    {
        $patient = Patient::find($request->id);
        $patient -> delete();
        $posts = Patient::all();
        return view('operation.patient.list',['posts' => $posts]);
    }
    
    
    public function delete(Request $request)
    {
        $test = Test::find($request->id);
        $test -> delete();
        $posts = Test::all();
        return view('operation.patient.select',['posts' => $posts]);
    }
    
    
    public function history(Request $request)
    {
        $history = Test::find($request->id);
        $gait = config('average.10m歩行');
        $md = config('average.6分間歩行距離');
        
        return view('operation.patient.result', compact('gait' , 'md'),['history' => $history]);
    }
}
