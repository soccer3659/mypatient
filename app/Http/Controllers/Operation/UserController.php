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
        //質問にて以下を修正
        //$posts = Test::all();
        //↓ 2行分を追加
          $patient = Patient::find($request->id);
          # Patientモデルでtestsメソッドを定義しているので、postsではなくtestsにする必要がある
          # $posts = $patient->posts; 
          $posts = $patient->tests;
        return view('operation.patient.select',['posts' => $posts, 'id' => $request->id, 'patient' => $patient]);
    }
    
    public function test(Request $request)
    {
        //↓以下を質問にて修正
        //return view('operation.patient.test',['id' => $request->id]);
         $patient = Patient::find($request->id);
         return view('operation.patient.test',['patient' => $patient]); 
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
        
        return view('operation.patient.result', compact('gait' , 'md'), ['history' => $test]);
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
        //以下を質問で追加　
        $patient_id = $test->patient_id;
        $test -> delete();
        
        //$patient = Patient::find($request->id);
        //上の行を質問にて↓に修正
        //更にreturn redirectにしたことで↓2行を消去
        //$patient = Patient::find($patient_id);
        //$posts = $patient->tests;
        return redirect('operation/patient/select?id='. $patient_id);
    }
    
    
    public function history(Request $request)
    {
        $history = Test::find($request->id);
        $gait = config('average.10m歩行');
        $md = config('average.6分間歩行距離');
        
        return view('operation.patient.result', compact('gait' , 'md'),['history' => $history]);
    }
}
