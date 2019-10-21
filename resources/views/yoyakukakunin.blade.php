@extends('master')
@section('title', 'お問い合わせ')

@section('stylesheet')
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="assets/css/yoyakukakunin.css" rel="stylesheet" type="text/css">
    <title>予約確認画面</title>
@endsection('stylesheet')

@section('content')
    {{Form::open(['url'=>'kakutei', 'action'=>'ValiController@postKakutei'])}}
        
    
<!--
    #
    #foreach(){
    #   <input type="hidden" >
    #}
    #
-->
    
    
        <h3>予約内容の確認をお願いします。</h3>
        <div class="main">
            <table>
                <tr>
                    <th>ご予約者名</th>
                    <td>{{$data1['goyoyakumei']}}&nbsp;様</td>
                </tr>
                <tr>
                    <th>ご連絡先</th>
                    <td>{{$data1['telnumber']}}</td>
                </tr>
                <tr>
                    <th>ご来店日時</th>
                    <td>{{$data1['goyoyakubi']}}.{{$data1['goraitenjikan']}}</td>
                </tr>
                <tr>
                    <th>ご来店者数</th>
                    <td>{{$data1['goyoyakuninzu']}}&nbsp;名様</td>
                </tr>
                <tr>
                    <th>コース</th>
                    <td>{{$data1['plan']}}</td>
                </tr>
                <tr>
                    <th>ご要望</th>
                    <td>{{$data1['goyobo']}}</td>
                </tr>
            </table>
        </div>
        <p>以上の内容でよろしければ仮予約ボタンを押してください。</p>
        <button  type="submit" class="btn btn-info" id="submit">仮予約</button>
    
    {{ Form::close() }}
@endsection('content')

