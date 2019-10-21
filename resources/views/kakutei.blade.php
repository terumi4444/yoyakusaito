<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="assets/css/yoyakukakunin.css" rel="stylesheet" type="text/css">
    <title>予約完了画面</title>
    </head>
    <body>
        <?php 
//        一時的にコメントアウト start
//            session_start();
//            
//            $dbinfo='mysql:host=sddb0040079504.cgidb;dbname=sddb0040079504;charset=utf8';
//            $username='sd_dba_OTUzMDU0';
//            $password='$hp52vdv';
//            
//            try{
//                $str="1";
//                $pdo=new PDO($dbinfo, $username, $password);
//                $sql=$pdo->prepare('insert into RESERV_FLAME(STATUS) values(:col1)');
//                $sql->bindParam(':col1',$str,PDO::PARAM_STR);
////                $hantei=$sql->execute([]);
//                if($sql->execute()){
//                    echo 'reserv_flameの登録完了しました。'."<br/>";
//                }else{
//                    echo 'reserv_flameの登録はありません。'."<br/>";
//                }
//                #最後に登録したIDを取得する
//                $last_id=$pdo->lastInsertId();
//
//                $reserv_id=$last_id;
//                $name="あああ";
//                $number="123";
//                $tel_number="09000000000";
//                $reserv_day="20191010";
//                $course="a_course";
//                $memo=null;
//                $cancel_flag=null;
//                $sql=$pdo->prepare('insert into RESERV_INFO(RESERV_ID, NAME, NUMBER, TEL_NUMBER, RESERV_DAY, COURSE, MEMO, CANSELL_FLAG) values (:col1,:col2,:col3,:col4,:col5,:col6,:col7,:col8)');
//                $sql->bindParam(':col1',$reserv_id,PDO::PARAM_STR);
//                $sql->bindParam(':col2',$name,PDO::PARAM_INT);
//                $sql->bindParam(':col3',$number,PDO::PARAM_INT);
//                $sql->bindParam(':col4',$tel_number,PDO::PARAM_INT);
//                $sql->bindParam(':col5',$reserv_day,PDO::PARAM_INT);
//                $sql->bindParam(':col6',$course,PDO::PARAM_INT);
//                $sql->bindParam(':col7',$memo,PDO::PARAM_INT);
//                $sql->bindParam(':col8',$cancel_flag,PDO::PARAM_INT);
////                $hantei=$sql->execute();
//                if($sql->execute()){
//                    echo 'reserv_infoの登録完了しました。'."<br/>";
//                }else{
//                    echo 'reserv_infoの登録はありません。'."<br/>";
//                }
//            }catch(PDOException $e){
//                echo 'reserv_flame登録時にエラーが発生しました。'."<br/>";
//                var_dump($e->getMessage());
//            }
//        end

        
//一時的にコメントアウト start
//            foreach($sql as $row){
//                $_SESSION['DATE']=['id'=>$row['RESERV_ID'],
//                'status'=>$row['STATUS']];
//                echo $_SESSION['DATE']['id']."</br>";
//                echo $_SESSION['DATE']['status']."</br>";
//            }
//        end

        ?>
        
<!--        予約内容をお客様へ送信-->
        
        <h3>仮予約が完了しました。</h3>
        <p>予約はまだ完了しておりません。翌営業日以内にスタッフより予約確認のご連絡をいたします。<br/>.
        ※3営業日以内に連絡が来ない場合はお手数ですが 、店舗へご連絡ください。</p>
        
        <table>
            <tr>
                <th>ご予約者名</th>
                <td><?php $goyoyakumei ?></td>
            </tr>
            <tr>
                <th>ご連絡先</th>
                <td><?php $telnumber ?></td>
            </tr>
            <tr>
                <th>ご来店日時</th>
                <td><?php $goyoyakubi ?></td>
            </tr>
            <tr>
                <th>ご来店者数</th>
                <td><?php $goyoyakuninzu ?></td>
            </tr>
            <tr>
                <th>コース</th>
                <td><?php $plan ?></td>
            </tr>
            <tr>
                <th>ご要望</th>
                <td><?php $goyobo ?></td>
            </tr>
        </table>
    </body>
</html>