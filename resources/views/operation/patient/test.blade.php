@extends('layouts.operation')
@section('title', '結果入力')

@section('content')
     <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>{{ $patient->ID2 }}さんの身体機能・認知機能検査</h2>
            </div>    
        </div>
        
        <div class="row">
            <div class="col-md-8 mx-auto">
              <div class="border mt-1 mb-2 p-2">
                <form action="{{ action('Operation\UserController@testresult') }}" method="post" enctype="multipart/form-data">
                     {{--右記を質問にて修正<input type="hidden" name="patient_id" value="{{ $id }}"> --}}
                     <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                     <input type="hidden" name="gender" value="{{ $patient->gender2 }}">
                     <input type="hidden" name="age" value="{{ $patient->age2 }}">
                     
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                  
                <h3>＜評価入力＞</h3>
                <h4> ➀10m歩行速度(2～3回計測の最速値)</h4>
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
                <h4> ➁6分間歩行距離</h4>
                    <div class="form-group row">
                        <label class="col-md-auto">　距離(m)</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="distance" value="{{ old('distance') }}">
                        </div>
                    </div>
                {{ csrf_field() }}
                    <br>
                    <input type="submit" class="btn btn-primary " value="結果を見る">
                </form>
                </div>
             </div>
         </div>
     </div>
@endsection