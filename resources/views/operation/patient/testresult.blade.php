@extends('layouts.operation')
@section('title', '結果判断')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>結果判断</h2>
                
                <h2>10m歩行結果</h2>
                    @if($form_blade['age']=="50" )
                     <p>{{$gait['50代']}}</p>
                    @elseif($form_blade['age']=="60" )
                     <p>{{$gait['60代']}}</p>
                    @elseif($form_blade['age']=="65" && $form_blade['gender']=="男")
                     <p>{{$gait['65～69歳男性']}}</p>
                    @elseif($form_blade['age']=="65" && $form_blade['gender']=="女")
                     <p>{{$gait['65～69歳女性']}}</p>
                    @elseif($form_blade['age']=="70" && $form_blade['gender']=="男")
                     <p>{{$gait['70～74歳男性']}}</p>
                    @elseif($form_blade['age']=="70" && $form_blade['gender']=="女")
                     <p>{{$gait['70～74歳女性']}}</p>
                    @elseif($form_blade['age']=="75" && $form_blade['gender']=="男")
                     <p>{{$gait['75～79歳男性']}}</p>
                    @elseif($form_blade['age']=="75" && $form_blade['gender']=="女")
                     <p>{{$gait['75～79歳女性']}}</p>
                    @elseif($form_blade['age']=="80" && $form_blade['gender']=="男")
                     <p>{{$gait['80～84歳男性']}}</p>
                    @elseif($form_blade['age']=="80" && $form_blade['gender']=="女")
                     <p>{{$gait['80～84歳女性']}}</p>
                    @endif
                    
                    @if($form_blade['comfortable'] >= "10")
                     <p>{{$gait['x>=10秒']}}</p>
                    @endif
                    
                    @if($form_blade['comfortable'] <= "12")
                     <p>{{$gait['x<=12.5秒']}}</p>
                    @elseif($form_blade['comfortable'] <= "25" && $form_blade['comfortable'] > "12")
                     <p>{{$gait['12<x<=25']}}</p>
                    @elseif($form_blade['comfortable'] > "25")
                     <p>{{$gait['25<x']}}</p> 
                    @endif
                    
                     
              　<h2>6分間歩行距離結果</h2>
                    @if($form_blade['age'] >= "60" && $form_blade['age'] <= "69" && $form_blade['gender'] == "男")
                     <p>{{$md['60代男性']}}</p>
                    @elseif($form_blade['age'] >= "60" && $form_blade['age'] <= "69" && $form_blade['gender'] == "女")
                     <p>{{$md['60代女性']}}</p>
                    @elseif($form_blade['age'] >= "70" && $form_blade['age'] <= "79" && $form_blade['gender'] == "男")
                     <p>{{$md['70代男性']}}</p>
                    @elseif($form_blade['age'] >= "70" && $form_blade['age'] <= "79" && $form_blade['gender'] == "女")
                     <p>{{$md['70代女性']}}</p>
                    @endif
                    
                   
                    
                @foreach($md as $key => $value)
                    <p>{{$key}}->{{$value}}</p>
                @endforeach
            </div>    
        </div>        
    </div>
@endsection