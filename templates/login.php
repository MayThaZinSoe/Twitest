<?php
//login.php
require_once('init.php');

//formからIDとPASSWORDを取得
$id = (string)@$_POST['id'];
$id = (string)@$_POST['pw'];
//var_dump($id);

//どちらが空なら、問答無用で突き返す
if((''===$id)||(''===$pw)){
	header('location:./index.php');
	return;
}

//DBの情報と突き合わせ
$sql = 'SELECT * FROM users WHERE login_id = :login_id;';
$pre = $dbh->prepare($sql);

$pre->bindValue(':login_id', $id);

$res = $pre->execute();
$data = $pre->fetch();

//var_dump($res);
var_dump($data);

$auth_flg = false;
if(false===empty($data)){
  //パスワードチェック
  $auth_flg=
    password_verify($pw, $data['password']);
}

//var_dump($auth_flg);

//もし一致してたら「ログイン状態」にする

if(true===$auth_flg){
  //ログイン情報を保持
  $_SESSION['uid'] = $id;
  $_SESSION['uname'] = $data['name'];

  //ログイン処理の時には必ず
  session_regenerate_id(true);
}
//$smarty->display('login.tpl');
header('Location: ./index.php');
