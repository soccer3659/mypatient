@extends('layouts.operation')
@section('title', '新規検査')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>新規検査</h2>
                <a href="{{ action('Operation\UserController@test', ['id' => $id]) }}" role="button" class="btn btn-primary">開始</a>
                {{ csrf_field() }}    
            </div>    
        </div>
        <br>
        <div class="row">
            <div class="col-md-8 mx-auto">
             <h2>履歴</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                    <table class="table table-dark">
                        <thead>
                            <tr style="border:1px solid black;">
                                <th>検査日時</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $test)
                                <tr style="border:1px solid black;">
                                    <td>{{ \Str::limit($test->created_at->format('Y,m,d'), 30) }}</td>
                                    <td>
                                        <div>
                                             <a href="{{ action('Operation\UserController@history',['id' =>$test->id]) }}" role="button" class="btn btn-primary">結果</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Operation\UserController@delete', ['id' => $test->id]) }}" role="button" class="btn btn-danger">削除</a>
                                        </div>
                                    </td>    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection