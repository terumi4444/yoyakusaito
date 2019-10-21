<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="assets/css/yoyakukakunin.css" rel="stylesheet" type="text/css">
    <title>予約確認画面</title>
</head>
<body>
    <form action="kakutei" method="post">
        <!--        この記述を入れないとpost送信時にエラー（bladeではない場合の記述）-->
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <h3>予約内容の確認をお願いします。</h3>
        <table>
            <tr>
                <th>ご予約者名</th>
                <td><?= $_POST['goyoyakuninzu'] ?></td>
            </tr>
            <tr>
                <th>ご連絡先</th>
                <td><?= $_POST['telnumber'] ?></td>
            </tr>
            <tr>
                <th>ご来店日時</th>
                <td><?= $_POST['goyoyakubi'] ?></td>
            </tr>
            <tr>
                <th>ご来店者数</th>
                <td><?= $_POST['goyoyakuninzu'] ?></td>
            </tr>
            <tr>
                <th>コース</th>
                <td><?= $_POST['goyoyakuninzu'] ?></td>
            </tr>
            <tr>
                <th>ご要望</th>
                <td><?= $_POST['goyoyakuninzu'] ?></td>
            </tr>
        </table>
        <p>以上の内容でよろしければ仮予約ボタンを押してください。</p>
        <button type="submit" name="kariyoyaku" id="kariyoyaku">仮予約</button>
    </form>
    
</body>
