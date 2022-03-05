@extends('layouts.operation')

@section('title', 'patientの一覧')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-8 mx-auto">
               <h2>患者選択</h2>
               <h3>一覧</h3>
           </div>
       </div>
       <div class="row">
          <div class="list-test col-md-8 mx-auto">
             <table class="table table-dark">
                 <thead>
                    <tr style="border:1px solid black;">
                      <th width=10%>患者ID</th>
                      <th width=10%>性別</th>
                      <th width=70%>年齢</th>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach($posts as $patient)
                      <tr style="border:1px solid black;">
                         <td>{{ $patient->ID2 }}</td>
                         <td>{{ $patient->gender2 }}</td>
                         <td>{{ $patient->age2 }}</td>
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