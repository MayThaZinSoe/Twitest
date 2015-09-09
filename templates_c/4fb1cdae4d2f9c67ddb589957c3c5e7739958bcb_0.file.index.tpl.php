<?php /* Smarty version 3.1.28-dev/18, created on 2015-07-21 18:51:58
         compiled from "/Applications/MAMP/htdocs/tw2015/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:77302970155ae163e564820_22968401%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb1cdae4d2f9c67ddb589957c3c5e7739958bcb' => 
    array (
      0 => '/Applications/MAMP/htdocs/tw2015/templates/index.tpl',
      1 => 1437472310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77302970155ae163e564820_22968401',
  'variables' => 
  array (
    'auth_flg' => 0,
    'if_error_mutter' => 0,
    'pre_page' => 0,
    'current_page' => 0,
    'next_page' => 0,
    'mutter' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/18',
  'unifunc' => 'content_55ae163e63cf62_74253612',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ae163e63cf62_74253612')) {
function content_55ae163e63cf62_74253612 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/Applications/MAMP/htdocs/tw2015/smarty/libs/plugins/function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '77302970155ae163e564820_22968401';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="./style.css"/>
</head>
<body>

<div id="wrapper">
<div id="box">

<?php if (true == $_smarty_tpl->tpl_vars['auth_flg']->value) {?>
<img src="./img/sea.jpg">
<table>
  <tr>
    <th><a href="#">Mypage</a></th>
    <th><a href="./mutter.php">timelime</a></th>
<th><a href="./logout.php">Logout</a></th>
<?php }?>
  </tr>
</table>
<?php if (false == $_smarty_tpl->tpl_vars['auth_flg']->value) {?>
<div id="si">
<h1>New-SignUp</h1>

<form action="./register_fin.php" method="post" class="form form--login">
  <div class="form__field">
  <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
<input type="text" name="user_id" class="form form--login" placeholder="UserID" required><br/>
</div>
<div class="form__field">
<label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
<input type="text" name="user_name" placeholder="User Name" required><br/>
</div>
<div class="form__field">
  <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>

<input type="password" name="pw" class="form__input" placeholder="password" required><br/>
</div>
<div class="form__field">
  <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
<input type="password" name="pw2" class="form__input" placeholder="comfirm password" required><br/>
</div>
<div class="form__field">
<input type="submit" value="Signup"><br/>
</form>
</div>
</div>
<?php }?>

<?php if (false == $_smarty_tpl->tpl_vars['auth_flg']->value) {?>
<div id="lo">
<h1>Login</h1>
<form action="./login.php" method="post" class="form form--login">
  <div class="form__field">
  <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
<input type="text" name="id" class="form__input" placeholder="UserID" required><br/>
</div>
<div class="form__field">
  <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>

<input type="password" name="pw" class="form__input" placeholder="password" required><br/>
<br/>
</div>
 <div class="form__field">
<input type="submit" value="Login"><br/>
</form>
</div>
</div>
<?php }?>



<?php if (true == $_smarty_tpl->tpl_vars['auth_flg']->value) {?>

<?php if (true == $_smarty_tpl->tpl_vars['if_error_mutter']->value) {?>
  文字数は1～140文字でお願いします。<br/>
<?php }?>
<form action="./mutter.php" method="post">
<textarea name="mutter" id="textarea" placeholder="How about Your felling today?" required></textarea>


  <input type="submit" value="Post" id="btn">

</form>

<?php }?>
</div>
<?php if (true == $_smarty_tpl->tpl_vars['auth_flg']->value) {?>

<h2>Timeline</h2>
<?php if ($_smarty_tpl->tpl_vars['pre_page']->value == true) {?>
<a href="./index.php?page=<?php echo smarty_function_math(array('equation'=>'x-y','x'=>$_smarty_tpl->tpl_vars['current_page']->value,'y'=>1),$_smarty_tpl);?>
">pre</a>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['next_page']->value == true) {?>
<a href="./index.php?page=<?php echo smarty_function_math(array('equation'=>'x+y','x'=>$_smarty_tpl->tpl_vars['current_page']->value,'y'=>1),$_smarty_tpl);?>
">next</a>
<?php }?>
<table border="1" id="tbl">
  <tr>
   <th class="th">USERNAME</th>
   <th class="th">POST</th>
   <th class="th">DATE&TIME</th>
 </tr>

<?php
$_from = $_smarty_tpl->tpl_vars['mutter']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>

<tr>
<td class="tdid"><?php echo $_smarty_tpl->tpl_vars['i']->value['login_id'];?>
</td>
<td class="example"><?php echo $_smarty_tpl->tpl_vars['i']->value['mutter_body'];?>
</td>
<td class="tdid"><?php echo $_smarty_tpl->tpl_vars['i']->value['mutter_date'];?>
</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
</table>
<?php }?>

</div>
</body>
<div id="footer">
<h2>Post by MayThazinsoe</h2>
<h3>Thanks you</h3>

</div>
</html>
<?php }
}
?>