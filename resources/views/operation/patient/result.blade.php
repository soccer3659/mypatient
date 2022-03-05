@extends('layouts.operation')
@section('title', '結果判断')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>結果判断 ({{$history->created_at->format('Y,m,d')}})</h2>
                
                <div class="hokou">
                <h4>＜10m歩行結果＞</h4>
                    @if($history['comfortable'] != null)
                    <h5>結果は快適速度{{$history['comfortable']}}秒、最大速度{{$history['maximum']}}秒でした。</h5>
                    @endif
                    
                    @if    ($history['age'] =="40~44" && $history['comfortable'] != null)
                     <p>{{$gait['50代']}}</p>
                    @elseif($history['age'] =="45~49" && $history['comfortable'] != null)
                     <p>{{$gait['50代']}}</p>
                    @elseif($history['age'] =="50~54" && $history['comfortable'] != null)
                     <p>{{$gait['50代']}}</p>
                    @elseif($history['age'] =="55~59" && $history['comfortable'] != null)
                     <p>{{$gait['50代']}}</p> 
                    @elseif($history['age'] =="60~64" && $history['comfortable'] != null)
                     <p>{{$gait['60代']}}</p>
                    @elseif($history['age'] =="65~69" && $history['gender']=="男" && $history['comfortable'] != null)
                     <p>{{$gait['65～69歳男性']}}</p>
                    @elseif($history['age'] =="65~69" && $history['gender']=="女" && $history['comfortable'] != null)
                     <p>{{$gait['65～69歳女性']}}</p>
                    @elseif($history['age'] =="70~74" && $history['gender']=="男" && $history['comfortable'] != null)
                     <p>{{$gait['70～74歳男性']}}</p>
                    @elseif($history['age'] =="70~74" && $history['gender']=="女" && $history['comfortable'] != null)
                     <p>{{$gait['70～74歳女性']}}</p>
                    @elseif($history['age'] =="75~79" && $history['gender']=="男" && $history['comfortable'] != null)
                     <p>{{$gait['75～79歳男性']}}</p>
                    @elseif($history['age'] =="75~79" && $history['gender']=="女" && $history['comfortable'] != null)
                     <p>{{$gait['75～79歳女性']}}</p>
                    @elseif($history['age'] =="80~84" && $history['gender']=="男" && $history['comfortable'] != null)
                     <p>{{$gait['80～84歳男性']}}</p>
                    @elseif($history['age'] =="80~84" && $history['gender']=="女" && $history['comfortable'] != null)
                     <p>{{$gait['80～84歳女性']}}</p>
                    @elseif($history['age'] =="85~89" && $history['gender']=="男" && $history['comfortable'] != null)
                     <p>{{$gait['80～84歳男性']}}</p>
                    @elseif($history['age'] =="85~89" && $history['gender']=="女" && $history['comfortable'] != null)
                     <p>{{$gait['80～84歳女性']}}</p> 
                    @elseif($history['age'] =="90~94" && $history['gender']=="男" && $history['comfortable'] != null)
                     <p>{{$gait['80～84歳男性']}}</p>
                    @elseif($history['age'] =="90~94" && $history['gender']=="女" && $history['comfortable'] != null)
                     <p>{{$gait['80～84歳女性']}}</p>
                    @endif
                    
                    @if($history['comfortable'] >= "10")
                     <p>{{$gait['x>=10秒']}}</p>
                    @endif
                    
                    @if($history['comfortable'] <= "12" && $history['comfortable'] >= "0")
                     <p>{{$gait['x<=12.5秒']}}</p>
                    @elseif($history['comfortable'] <= "25" && $history['comfortable'] > "12")
                     <p>{{$gait['12<x<=25']}}</p>
                    @elseif($history['comfortable'] > "25")
                     <p>{{$gait['25<x']}}</p> 
                    @endif
               </div>
               <div class ="hokoukyori">      
              　<h4>＜6分間歩行距離結果＞</h4>
              　     @if($history['distance'] != null)
              　 　　<h5>結果は{{$history['distance']}}mでした。</h5>
              　 　  @endif
              　 　  
                    @if    ($history['age'] == "40~44" && $history['gender'] == "男" && $history['distance'] != null)
                     <p>{{$md['60代男性']}}</p>
                    @elseif($history['age'] == "45~49" && $history['gender'] == "男" && $history['distance'] != null)
                     <p>{{$md['60代男性']}}</p>
                    @elseif($history['age'] == "50~54" && $history['gender'] == "男" && $history['distance'] != null)
                     <p>{{$md['60代男性']}}</p>
                    @elseif($history['age'] == "55~59" && $history['gender'] == "男" && $history['distance'] != null)
                     <p>{{$md['60代男性']}}</p>
                    @elseif($history['age'] == "60~64" && $history['gender'] == "男" && $history['distance'] != null)
                     <p>{{$md['60代男性']}}</p>
                    @elseif($history['age'] == "65~69" && $history['gender'] == "男" && $history['distance'] != null)
                     <p>{{$md['60代男性']}}</p>
                    @elseif($history['age'] == "70~74" && $history['gender'] == "男" && $history['distance'] != null)
                     <p>{{$md['70代男性']}}</p>
                    @elseif($history['age'] == "75~79" && $history['gender'] == "男" && $history['distance'] != null)
                     <p>{{$md['70代男性']}}</p>
                    @elseif($history['age'] == "80~84" && $history['gender'] == "男" && $history['distance'] != null)
                     <p>{{$md['70代男性']}}</p>
                    @elseif($history['age'] == "85~89" && $history['gender'] == "男" && $history['distance'] != null)
                     <p>{{$md['70代男性']}}</p>
                    @elseif($history['age'] == "90~94" && $history['gender'] == "男" && $history['distance'] != null)
                     <p>{{$md['70代男性']}}</p>
                    
                    @elseif($history['age'] == "40~44" && $history['gender'] == "女" && $history['distance'] != null)
                     <p>{{$md['60代女性']}}</p>
                    @elseif($history['age'] == "45~49" && $history['gender'] == "女" && $history['distance'] != null)
                     <p>{{$md['60代女性']}}</p> 
                    @elseif($history['age'] == "50~54" && $history['gender'] == "女" && $history['distance'] != null)
                     <p>{{$md['60代女性']}}</p>
                    @elseif($history['age'] == "55~59" && $history['gender'] == "女" && $history['distance'] != null)
                     <p>{{$md['60代女性']}}</p>
                    @elseif($history['age'] == "60~64" && $history['gender'] == "女" && $history['distance'] != null)
                     <p>{{$md['60代女性']}}</p> 
                    @elseif($history['age'] == "65~69" && $history['gender'] == "女" && $history['distance'] != null)
                     <p>{{$md['60代女性']}}</p>
                    @elseif($history['age'] == "70~74" && $history['gender'] == "女" && $history['distance'] != null)
                     <p>{{$md['70代女性']}}</p>
                    @elseif($history['age'] == "75~79" && $history['gender'] == "女" && $history['distance'] != null)
                     <p>{{$md['70代女性']}}</p>
                    @elseif($history['age'] == "80~84" && $history['gender'] == "女" && $history['distance'] != null)
                     <p>{{$md['70代女性']}}</p>
                    @elseif($history['age'] == "85~89" && $history['gender'] == "女" && $history['distance'] != null)
                     <p>{{$md['70代女性']}}</p>
                    @elseif($history['age'] == "90~94" && $history['gender'] == "女" && $history['distance'] != null)
                     <p>{{$md['70代女性']}}</p>
                     
                     
                    @endif
                    
                    @if($history['distance'] < "300" && $history['distance'] >= "0")
                     <p>{{$md['300m未満']}}</p>
                    @elseif($history['distance'] >= "300")
                     <p>{{$md['300m以上']}}</p>
                    @endif
                  </div>
            </div> 
            <div class="col-md-8 mx-auto">
                  <div class="syuuryoubotton">
                <a href="{{ action('Operation\UserController@select') }}" role="button" class="btn btn-primary">検査終了</a>
                {{ csrf_field() }}   
                  </div>
            </div> 
        </div>        
    </div>
@endsection