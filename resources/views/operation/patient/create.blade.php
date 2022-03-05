@extends('layouts.operation')

@section('title', 'patientの新規登録')

@section('content')
<div class="container">
      <div class="row">
            <div class="col-md-8 mx-auto">
                 <h2>＜基本情報＞</h2>
                 <form action="{{ action('Operation\UserController@add') }}" method="post" enctype="multipart/form-data">
                    
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
                            <input type="text" class="form-control" name="ID2" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-auto">性別　</label>
                        <div class="col-md-2">
                          <div>
                             <input type="radio" name="gender2" value="男" checked>男
                          </div>
                          <div>
                             <input type="radio"  name="gender2" value="女">女
                          </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-auto">年齢　</label>
                        <div class="col-md-2">
                            <select name="age2">
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
                     {{ csrf_field() }} 
                    <input type="submit" class="btn btn-primary" value="登録する">
              </form>
            </div>
   　 </div>
</div>
@endsection