@extends('layouts.operation')
@section('title', '結果判断')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>結果判断</h2>
                @foreach($gait as $key => $value)
                    <p>{{$key}}->{{$value}}</p>
                @endforeach
            </div>    
        </div>        
    </div>
@endsection