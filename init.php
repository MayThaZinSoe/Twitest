<?php
//init.php
/*
 *��������
 */
//�Z�b�W�����J�n
session_start();

//Smart�t�F�C����include

require_once('smarty/libs/Smarty.class.php');

//Smarty�C�����_���X�̍쐬

$smarty = new Smarty();
$smarty->setTemplateDir('templates/');

//set directory name setting
$smarty->setCompileDir('templates_c/');



//DB�ւ̐ڑ�
$dsn = "mysql:dbname=smarty;charset=utf8mb4";
$user ='root';
$pass ='thazin1990';


try {
	$dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $e){
	echo "�G���[�ł���<br/>";
	echo $e->getMessage();
	return;
}
//var_dump($dbh);

//���O�C���󋵂̔���
if(false === empty($_SESSION['uid'])){
   //echo'���O�C����';
   $auth_flg = true;
}else {
   //echo'���O�C�����ĂȂ�';
   $auth_flg = false;
}
$smarty->assign('auth_flg', $auth_flg);


