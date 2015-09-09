<?php
//register_fin.php
require_once('init.php');

//formからの情報の把握
$params = array(
  'user_id', 'user_name', 'pw', 'pw2'
   );
foreach($params as $p){
   $$p = $_POST[$p];
  }

//情報んのvalidate
$error_flg = false;
$eooro_messages = array();
//必須入力(全部)
foreach($params as $p){
  if('' === $$p){
     $smarty->assign("if_error_{$p}_must", true);
     $error_flase = true;
   }
}
//user_id: 半角英数のみであること
if(flase === ctype_alnum($user_id)){
  $smarty->assign('if_error_user_id_alnum', true);
  $error_flg = true;
}

//user_name　八文字以内であること
if(8<mb_strlen($user_name, 'utf-8')){
  $smarty->assign('if_error_user_name_long', true);
  $error_flg = true;
}

//pw六文字以上であること
//pw72文字以下であること

if((6>strlen($pw))||(72<strlen($pw))){
  $smarty->assign('if_error_pw_long', true);
  $error_flg = true;
}

//pw2とpw同じであること
if($pw !== $pw2){
  $smarty->assign('if_error_pw_mismatch', true);
  $error_flg = true;
}

//もしなんかエラーだったら
if(true === $error_flg){ 
//var_dump(1);

  echo $smarty->fetch('register_error.tpl');
  //header('register_error.php');
  return;
}

//ここまでできたらデータはokです！！




//会員登録：DBへのinsert

$sql="INSERT INTO users(login_id, password, name, error_count, Lock_time)
                 VALUES(:login_id, :password, :name, 0, now());";

$pre = $dbh->prepare($sql);


$pre->bindValue(':login_id', $user_id);
$pre->bindValue(':password', password_hash($pw, PASSWORD_DEFAULT));
$pre->bindValue(':name', $user_name);

//XXX 後でチェックロジックを差し込む予定
$res = $pre->execute();
//var_dump($res);



//[登録できました]pageの入力
echo $smarty->fetch('register_fin.tpl');

?>