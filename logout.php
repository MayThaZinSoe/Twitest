<?php
require_once ('init.php');
//ログイン状態を削除する
unset($_SESSION['uid']);
unset($_SESSION['uname']);
//index に戻す
header('Location:./index.php');
