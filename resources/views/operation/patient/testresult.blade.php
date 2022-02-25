@extends('layouts.operation')
@section('title', '結果判断')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>結果判断 ({{\Carbon\Carbon::now()->format("Y/m/d")}})</h2>
                
                <h2>10m歩行結果</h2>
                    @if($test['comfortable'] != null)
                    <p>結果は快適速度{{$test['comfortable']}}秒、最大速度{{$test['maximum']}}秒でした。</p>
                    @endif
                    
                    @if    ($test['age'] >="30" && $test['age'] <= "59" && $test['comfortable'] != null)
                     <p>{{$gait['50代']}}</p>
                    @elseif($test['age'] >="60" && $test['age'] <= "64" && $test['comfortable'] != null)
                     <p>{{$test['60代']}}</p>
                    @elseif($test['age'] >="65" && $test['age'] <= "69" && $test['gender']=="男" && $test['comfortable'] != null)
                     <p>{{$test['65～69歳男性']}}</p>
                    @elseif($test['age'] >="65" && $test['age'] <= "69" && $test['gender']=="女" && $test['comfortable'] != null)
                     <p>{{$gait['65～69歳女性']}}</p>
                    @elseif($test['age'] >="70" && $test['age'] <= "74" && $test['gender']=="男" && $test['comfortable'] != null)
                     <p>{{$gait['70～74歳男性']}}</p>
                    @elseif($test['age'] >="70" && $test['age'] <= "74" && $test['gender']=="女" && $test['comfortable'] != null)
                     <p>{{$gait['70～74歳女性']}}</p>
                    @elseif($test['age'] >="75" && $test['age'] <= "79" && $test['gender']=="男" && $test['comfortable'] != null)
                     <p>{{$gait['75～79歳男性']}}</p>
                    @elseif($test['age'] >="75" && $test['age'] <= "79" && $test['gender']=="女" && $test['comfortable'] != null)
                     <p>{{$gait['75～79歳女性']}}</p>
                    @elseif($test['age'] >="80" && $test['age'] <= "84" && $test['gender']=="男" && $test['comfortable'] != null)
                     <p>{{$gait['80～84歳男性']}}</p>
                    @elseif($test['age'] >="80" && $test['age'] <= "84" && $test['gender']=="女" && $test['comfortable'] != null)
                     <p>{{$gait['80～84歳女性']}}</p>
                    @endif
                    
                    @if($test['comfortable'] >= "10")
                     <p>{{$gait['x>=10秒']}}</p>
                    @endif
                    
                    @if($test['comfortable'] <= "12" && $test['comfortable'] >= "0")
                     <p>{{$gait['x<=12.5秒']}}</p>
                    @elseif($test['comfortable'] <= "25" && $test['comfortable'] > "12")
                     <p>{{$gait['12<x<=25']}}</p>
                    @elseif($test['comfortable'] > "25")
                     <p>{{$gait['25<x']}}</p> 
                    @endif
                    
                     
              　<h2>6分間歩行距離結果</h2>
              　     @if($test['distance'] != null)
              　 　　<p>結果は{{$test['distance']}}mでした。</p>
              　 　  @endif
              　 　  
                    @if    ($test['age'] >= "40" && $test['age'] <= "69" && $test['gender'] == "男" && $test['distance'] != null)
                     <p>{{$md['60代男性']}}</p>
                    @elseif($test['age'] >= "40" && $test['age'] <= "69" && $test['gender'] == "女" && $test['distance'] != null)
                     <p>{{$md['60代女性']}}</p>
                    @elseif($test['age'] >= "70" && $test['age'] <= "90" && $test['gender'] == "男" && $test['distance'] != null)
                     <p>{{$md['70代男性']}}</p>
                    @elseif($test['age'] >= "70" && $test['age'] <= "90" && $test['gender'] == "女" && $test['distance'] != null)
                     <p>{{$md['70代女性']}}</p>
                    @endif
                    
                    @if($test['distance'] < "300" && $test['distance'] >= "0")
                     <p>{{$md['300m未満']}}</p>
                    @elseif($test['distance'] >= "300")
                     <p>{{$md['300m以上']}}</p>
                    @endif
            </div>    
        </div>        
    </div>
@endsection