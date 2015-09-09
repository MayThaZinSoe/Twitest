<?php
//mutter.php
require_once('init.php');

//非ログイン状態なら　　index.phpに突き返し

if(false === $auth_flg){
   header('Location: ./index.php');
   return;
}
//つぶやきを受け取る
$mutter = $_POST['mutter'];

//validate: 1~140文字

$len = mb_strlen($mutter, 'UTF-8');
//var_dump($len);
//エラーなら
if((1>$len)||(140<$len)){
   //エラー表示入れてindex.phpに表示される
   $smarty->assign('if_error_mutter', true);
   require_once('index.php');
   return;
}

//DBに書きこむ

$sql = 'INSERT INTO mutter(login_id, mutter_body, mutter_date)
         VALUES(:login_id, :mutter_body, now());';
$pre = $dbh->prepare($sql);

//値をbindする
$pre->bindValue(':login_id', $_SESSION['uid']);
$pre->bindValue(':mutter_body', $mutter);

//SQLを実行する
$res = $pre->execute();


//index.phpに戻す
header('Location:./index.php');