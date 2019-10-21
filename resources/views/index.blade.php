@extends('master')
@section('title', '予約内容入力画面')

@section('stylesheet')
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('assets/css/main.css')}} " rel="stylesheet" type="text/css">
    <title>予約内容入力画面</title>
@endsection('stylesheet')

@section('content')
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        

        
        <div class="main">
            <div class="main02">
    <!--        バリデーションチェックの結果を表示する-->
    <!--        バリデーションエラーがある場合-->
                @if ($errors->any())
                <div class="errors">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
<!--            バリデーションチェックOKの場合-->
                @isset($status)
                <div class="compleate">
                    <p>バリデーションを通過しました。</p>
                </div>
                @endisset
                
                <h3 class="subtitle">ご予約内容入力フォーム</h3><br/>
                <p　class="text-lowercase">ご予約の内容を入力して下さい。</p>

                <form action="" method="post">
                                        <!--                この記述を入れないとpost送信時にエラー（bladeではない場合の記述）-->
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <!--                登録内容の項目を表示する-->
                    <table>
                        <tr>
                            <th valign="top">
                                <font>※</font><font color="black">ご予約枠</font>
                            </th>
                            <td>
                                <!-- 項目：予約日時 -->
                                <?php
                                    #翌日の日付を取得
                                    $nextday=date("y年m月d日",strtotime("+1 day"));
                                    #翌日の日付から2か月後の日付を取得
                                    $twomonlateday=date("y年m月d日",strtotime("+2 month"));
                                ?>
                                <select class="waku" name="goyoyakubi">
                                    <?php
                                        $nextday = date("y-m-d",strtotime("+1 day"));
                                        $twomondalateday = date("y-m-d",strtotime("+2 month"));
                                        for($i=$nextday; $i<=$twomondalateday; $i=date("y-m-d",strtotime($i."+1 day"))){
                                        echo '<option>'.$i.'</option>';
                                        }
                                    ?>
                                </select><br/>
                            </td>
                        </tr>
                        <!--項目：予約時間-->
                        <tr>
                            <th valign="top">
                                <font >※</font><font>ご来店時刻</font>
                            </th>
                            <td>
                                <?php
                                    #予約開始時間
                                    $starttime="10:00";
                                    #最終予約時間
                                    $endtime="21:00";
                                ?>
                                <select class="waku" name="goraitenjikan">
                                    <?php
                                        for($i=$starttime ; $i<=$endtime; $i=date("H:i",strtotime($i."+30 minute"))){
                                        echo '<option>'.$i.'</option>';
                                    }
                                    ?>
                                </select><br/>
                            </td>
                        </tr>
                        <!--項目：予約人数-->
                        <tr>
                            <th valign="top">
                                <font>※</font><font>ご予約人数</font>
                            </th>
                            <td>
                                <input class="waku" name="goyoyakuninzu" type="text" value="" /><br />
                            </td>
                        </tr>
                        <!--項目：ご予約名-->
                        <tr>
                            <th><font>※</font><font>ご予約名</font></th>
                            <td>
                                <input class="waku" type="text" name="goyoyakumei" id="goyoyakumei">
                            </td>    
                        </tr>
                        <!--項目：電話番号-->
                        <tr align=left>
                            <th><font>※</font><font>TEL</font></th>
                            <td>
                                <input class="waku" name="telnumber" type="text" value="" /><br />
                            </td>
                        </tr>
                        <tr>
                            <th><font>※</font><font>コース</font></th>
                            <td>
                                <select class="waku" name="plan">
                                    <option>女子会プラン</option>
                                    <option>歓送迎会プラン</option>
                                    <option>飲み放題プラン</option>
                                </select><br>
                            </td>
                        </tr>
                        <tr>
                            <th><font>ご要望</font></th>
                            <td>
                                <textarea name="goyobo" cols="60" rows="10" placeholder="その他ご要望があればご記入ください"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th><font>キャンセル</font></th>
                            <td>
                                <input type="checkbox" name="cansel">
                            </td>
                            </tr>
                    </table>

                    <div class="text"><font size="2"><a>※キャンセルにあったっての注意事</a><br/><br/>
                        <a>時間、人数変更について...　</a><br/>
                        再度当画面から予約をお願いします。<前回予約については、当店でキャンセルします。<br/><br/>
                        <a>キャンセルについて... </a><br/>
                        キャンセルにチェックし、お名前、ご連絡先、日時をお知らせください。<br/><br/>
                        <a>当日キャンセルについて... </a><br/>
                        当日予約時間３０分を超えて起こし頂けない場合はキャンセル料が発生いたします。
                    </font></div>
                    <br/><br/>
                    <button type="submit" class="btn btn-info" id="submit">次へ</button>
                    <br/><br/><br/><br/><br/><br/>
                
                </form>


            </div>
        </div>
@endsection('content')