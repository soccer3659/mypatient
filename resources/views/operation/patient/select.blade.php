@extends('layouts.operation')
@section('title', '選択')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>選択</h2>
                <a href="{{ action('Operation\UserController@test') }}" role="button" class="btn btn-primary">検査開始</a>
                {{ csrf_field() }}    
            </div>    
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
             <h2></h2>
             <h2>履歴</h2>
            </div>
        </div>
        <div class="row">
            <div class="list-test col-md-8 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="10%">日時</th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $test)
                                <tr>
                                    <th>{{ $test->id }}</th>
                                    <td>{{ \Str::limit($test->created_at, 30) }}</td>
                                     <td>
                                        <div>
                                             <a href="{{ action('Operation\UserController@delete', ['id' => $test->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection