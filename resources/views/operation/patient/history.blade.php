@extends('layouts.operation')
@section('title', '履歴')

@section('content')
    <div class="container">
        <div class="row">
            <h2>履歴</h2>
        </div>
        <div class="row">
            <div class="list-test col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="10%">日時</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $test)
                                <tr>
                                    <th>{{ $test->id }}</th>
                                    <td>{{ \Str::limit($test->created_at, 250) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection