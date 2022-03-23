@extends('layouts.operation')

@section('title', 'patientの一覧')

@section('content')
   <div class="container">
       <div class="row">
           <div class="d-flex align-atems-center col-8 mx-auto">
               <h2 class="m-0 mb-2">患者一覧   　　 </h2>
               <div class="me-auto">
                  <a href="{{ action('Operation\UserController@create') }}" role="button" class="btn btn-primary btn-sm">
                      <i class="bi bi-person-plus-fill mr-1"></i>
                      追加
                  </a>
               </div>
           </div>
       </div>
       
       <div class="row">
          <div class="list-test col-md-8 mx-auto">
             <table class="table">
                 <thead>
                    <tr class="list-head">
                      <th width=30%>患者ID</th>
                      <th width=10%>性別</th>
                      <th width=20%>年齢</th>
                      <th width=28%></th>
                      <th width=35%></th>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach($posts as $patient)
                      <tr class="list-body">
                         <td>{{ $patient->ID2 }}</a></td><td>{{ $patient->gender2 }}</td><td>{{ $patient->age2 }}</td>
                         <td>
                             <a href="{{ action('Operation\UserController@test', ['id' => $patient->id]) }}" role="button" class="btn btn-primary btn-sm">検査開始</a>
                             <a href="{{ action('Operation\UserController@select', ['id' => $patient->id]) }}" role="button" class="btn btn-primary btn-sm">履歴</a>
                         </td>
                         <td>
                             <a href="{{ action('Operation\UserController@patientDelete', ['id' => $patient->id]) }}" role="button" class="btn btn-danger btn-sm">削除</a>
                         </td> 
                      </tr>
                    @endforeach
                 </tbody>
             </table>
         </div>
       </div>
   </div>
@endsection  