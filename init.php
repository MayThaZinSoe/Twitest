<?php
//init.php
/*
 *初期処理
 */
//セッジョン開始
session_start();

//Smartフェイルのinclude

require_once('smarty/libs/Smarty.class.php');

//Smartyインすダンスの作成

$smarty = new Smarty();
$smarty->setTemplateDir('templates/');

//set directory name setting
$smarty->setCompileDir('templates_c/');



//DBへの接続
$dsn = "mysql:dbname=smarty;charset=utf8mb4";
$user ='root';
$pass ='thazin1990';


try {
	$dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $e){
	echo "エラーですよ<br/>";
	echo $e->getMessage();
	return;
}
//var_dump($dbh);

//ログイン状況の判定
if(false === empty($_SESSION['uid'])){
   //echo'ログイン中';
   $auth_flg = true;
}else {
   //echo'ログインしてない';
   $auth_flg = false;
}
$smarty->assign('auth_flg', $auth_flg);


