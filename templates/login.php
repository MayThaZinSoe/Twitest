<?php
//login.php
require_once('init.php');

//form����ID��PASSWORD���擾
$id = (string)@$_POST['id'];
$id = (string)@$_POST['pw'];
//var_dump($id);

//�ǂ��炪��Ȃ�A�ⓚ���p�œ˂��Ԃ�
if((''===$id)||(''===$pw)){
	header('location:./index.php');
	return;
}

//DB�̏��Ɠ˂����킹
$sql = 'SELECT * FROM users WHERE login_id = :login_id;';
$pre = $dbh->prepare($sql);

$pre->bindValue(':login_id', $id);

$res = $pre->execute();
$data = $pre->fetch();

//var_dump($res);
var_dump($data);

$auth_flg = false;
if(false===empty($data)){
  //�p�X���[�h�`�F�b�N
  $auth_flg=
    password_verify($pw, $data['password']);
}

//var_dump($auth_flg);

//������v���Ă���u���O�C����ԁv�ɂ���

if(true===$auth_flg){
  //���O�C������ێ�
  $_SESSION['uid'] = $id;
  $_SESSION['uname'] = $data['name'];

  //���O�C�������̎��ɂ͕K��
  session_regenerate_id(true);
}
//$smarty->display('login.tpl');
header('Location: ./index.php');
