@extends('layouts.operation')
@section('title', '新規検査')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>{{ $patient->ID2 }}さんの履歴</h2>
            </div>    
        </div>
        <div class="row">
           <div class="col-md-8 mx-auto mt-3">
                <a href="{{ action('Operation\UserController@test', ['id' => $id]) }}" role="button" class="btn btn-primary btn-sm">検査開始</a>
                <input type="hidden" name="id" value="{{ $id }}">
                {{ csrf_field() }}    
            </div>     
        </div>
        <br>
        <div class="row">
            <div class="col-md-8 mx-auto">
             <h3>履歴</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                    <table class="table">
                        <thead>
                            <tr class="select-head">
                                <th width=40%>検査日時</th>
                                <th width=15%></th>
                                <th width=40%></th>
                            </tr>
                        </thead>
                        <tbody>
                              @foreach($posts as $test)
                                <tr class="select-body">
                                    <td>{{ \Str::limit($test->created_at->format('Y,m,d'), 30) }}</td>
                                    <td>
                                        <div>
                                             <a href="{{ action('Operation\UserController@history',['id' => $test->id]) }}" role="button" class="btn btn-primary btn-sm">結果</a>
                                              <input type="hidden" name="id" value="{{ $id }}">
                                              {{ csrf_field() }}
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Operation\UserController@delete', ['id' => $test->id]) }}" role="button" class="btn btn-danger btn-sm">削除</a>
                                             <input type="hidden" name="id" value="{{ $id }}">
                                              {{ csrf_field() }}
                                        </div>
                                    </td>    
                                </tr>
                              @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        <div class="row">
             @if($posts->count() == 0)
               <p>履歴はありません</p>
             @endif
        </div>    
    </div>
@endsection