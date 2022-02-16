@extends('layouts.operation')

@section('title', 'patientの一覧')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-8 mx-auto">
               <h2>patient一覧</h2>
           </div>
       </div>
       <div class="row">
         <div class="col-md-8 offset-md-4">
         <button type="submit" class="btn btn-primary">
             {{ __('messages.register') }}
         </button>
         </div>
      </div>
   </div>
@endsection  