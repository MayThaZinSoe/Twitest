<?php
//index.php
require_once('init.php');

$current_page = abs((int)$_GET['page']);
$smarty->assign('current_page', $current_page);
/*
//var_dump($_SESSION);
//�Ԃ₫���e�擾
$sql ='SELECT * FROM mutter ORDER BY mutter_date DESC;';

$pre = $dbh->prepare($sql);

//SQL�����s����

$res = $pre->execute();

$data = array();
while($row = $pre->fetch(PDO::FETCH_ASSOC)){
    //var_dump($row);
    foreach($row as $k =>$v){
	$row[$k] = htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
    }

    $data[] = $row;
}

//var_dump($data);
//var_dump($mutter_cnt);
*/
$per_mutter_num = 7;

$sql = "SELECT * FROM mutter
        ORDER BY mutter_date DESC
        LIMIT :start,:per_mutter_num
      ";
$pre = $dbh->prepare($sql);
$pre->bindValue(':start',$per_mutter_num * $current_page,PDO::PARAM_INT);
$pre->bindValue(':per_mutter_num', $per_mutter_num,PDO::PARAM_INT);
$pre->execute();
$data = $pre->fetchAll();

$sql = "SELECT COUNT(*) FROM mutter";
$pre = $dbh->prepare($sql);
$pre->execute();
$numbers = $pre->fetch();

$mutter_total = $numbers[0];
$page_total = (int)($mutter_total / $per_mutter_num) - 1;
$smarty->assign('mutter', $data);

if($current_page < $page_total){
  $next_page = true;
}else{
  $next_page = false;
}
$smarty->assign('next_page',$next_page);
if($current_page !== 0){
  $pre_page = true;
}else{
  $pre_page = false;
}
$smarty->assign('pre_page',$pre_page);

//�o��
echo $smarty->fetch('index.tpl');
