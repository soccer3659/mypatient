@extends('layouts.operation')

@section('title', 'patientの一覧')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-8 mx-auto">
               <h2>患者一覧</h2>
           </div>
       </div>
       <div class="row">
          <div class="list-test col-md-8 mx-auto">
             <table class="table">
                 <thead>
                    <tr class="list-head">
                      <th width=15%>患者ID</th>
                      <th width=15%>性別</th>
                      <th width=15%>年齢</th>
                      <th width=25%></th>
                      <th width=20%></th>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach($posts as $patient)
                      <tr class="list-body">
                         <td>{{ $patient->ID2 }}</td>
                         <td>{{ $patient->gender2 }}</td>
                         <td>{{ $patient->age2 }}</td>
                         <td>
                             <a href="{{ action('Operation\UserController@select', ['id' => $patient->id]) }}" role="button" class="btn btn-primary">新規検査・履歴</a>
                         </td>
                         <td>
                            <div>
                                <a href="{{ action('Operation\UserController@patientDelete', ['id' => $patient->id]) }}" role="button" class="btn btn-danger">削除</a>
                            </div>
                         </td> 
                         
                      </tr>
                    @endforeach
                 </tbody>
             </table>
         </div>
       </div>
       
       <div class="row">
         <div class="col-md-8 mx-auto">
               <a href="{{ action('Operation\UserController@create') }}" role="button" class="btn btn-primary">新規作成</a>
         </div>
         </div>
      </div>
   </div>
@endsection  