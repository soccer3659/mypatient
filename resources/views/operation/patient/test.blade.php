@extends('layouts.operation')
@section('title', '結果入力')

@section('content')
     <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>＜基本情報＞</h2>
                <form action="{{ action('Operation\UserController@testresult') }}" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="patient_id" value="{{ $id }}">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                   
                    
                    <div class="form-group row">
                        <label class="col-md-auto">患者ID</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-auto">性別　</label>
                        <div class="col-md-2">
                          <div>
                             <input type="radio" name="gender" value="男" checked>男
                          </div>
                          <div>
                             <input type="radio"  name="gender" value="女">女
                          </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-auto">年齢　</label>
                        <div class="col-md-2">
                            <select name="age">
                                <option value="40~44">40~44</option>
                                <option value="45~49">45~49</option>
                                <option value="50~54">50~54</option>
                                <option value="55~59">55~59</option>
                                <option value="60~64">60~64</option>
                                <option value="65~69">65~69</option>
                                <option value="70~74">70~74</option>
                                <option value="75~79">75~79</option>
                                <option value="80~84">80~84</option>
                                <option value="85~89">85~89</option>
                                <option value="90~94">90~94</option>
                            </select>
                        </div>
                    </div>
                <h2>＜評価入力＞</h2>
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
                    <input type="submit" class="btn btn-primary" value="結果を見る">
                    
                </form>
             </div>
         </div>
     </div>
@endsection