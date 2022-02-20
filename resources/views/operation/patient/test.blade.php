@extends('layouts.operation')
@section('title', '各評価入力')

@section('content')
     <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>基本情報</h2>
                <form action="{{ action('Operation\UserController@testresult') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-1">　id</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-auto">　性別</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                        </div>
                        <label class="col-md-auto">年齢</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="age" value="{{ old('age') }}">
                        </div>
                    </div>
                <h2>評価入力</h2>
                    <div class="form-group row">
                        <label class="col-md-auto">　＜10m歩行速度(2～3回計測の最速値)＞</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-auto">　快適速度(秒)</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="comfortable" value="{{ old('comfortable') }}">
                        </div>
                        <label class="col-md-auto">最大速度(秒)</label>
                        
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="maximum" value="{{ old('maximum') }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-auto">　＜6分間歩行距離＞</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-auto">　距離(m)</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="distance" value="{{ old('distance') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="結果を見る">
                </form>
             </div>
         </div>
     </div>
@endsection