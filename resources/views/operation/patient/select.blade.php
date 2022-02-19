@extends('layouts.operation')
@section('title', '選択')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>選択</h2>
                <form action="{{ action('Operation\UserController@select') }}" method="post" >
                {{ csrf_field() }}    
                <input type="submit" class="btn btn-primary" value="検査開始">
                </form>
            </div>    
        </div>        
    </div>
@endsection