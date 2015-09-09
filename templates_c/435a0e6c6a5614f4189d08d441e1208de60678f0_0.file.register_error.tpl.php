<?php /* Smarty version 3.1.28-dev/18, created on 2015-07-15 00:41:34
         compiled from "/Applications/MAMP/htdocs/tw2015/templates/register_error.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:85471399655a52dae672fe1_99733602%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '435a0e6c6a5614f4189d08d441e1208de60678f0' => 
    array (
      0 => '/Applications/MAMP/htdocs/tw2015/templates/register_error.tpl',
      1 => 1435039452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85471399655a52dae672fe1_99733602',
  'variables' => 
  array (
    'if_error_user_id_must' => 0,
    'if_error_user_name_must' => 0,
    'if_error_pw_must' => 0,
    'if_error_pw2_must' => 0,
    'if_error_user_id_alnum' => 0,
    'if_error_user_name_long' => 0,
    'if_error_pw_long' => 0,
    'if_error_pw_mismatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/18',
  'unifunc' => 'content_55a52dae6f9359_62896429',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a52dae6f9359_62896429')) {
function content_55a52dae6f9359_62896429 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '85471399655a52dae672fe1_99733602';
?>
<html>
<meta charset="UTF-8">

なんかエラーです<br/>
<br/>
<?php if (true == $_smarty_tpl->tpl_vars['if_error_user_id_must']->value) {?>user_idは必須入力です！<br/><?php }?>

<?php if (true == $_smarty_tpl->tpl_vars['if_error_user_name_must']->value) {?>user_nameは必須入力です<br/><?php }?>

<?php if (true == $_smarty_tpl->tpl_vars['if_error_pw_must']->value) {?>pwは必須入力です<br/><?php }?>

<?php if (true == $_smarty_tpl->tpl_vars['if_error_pw2_must']->value) {?>pw2は必須入力です<br/><?php }?>

<?php if (true == $_smarty_tpl->tpl_vars['if_error_user_id_alnum']->value) {?>user_idは半角英数で入力<br/><?php }?>

<?php if (true == $_smarty_tpl->tpl_vars['if_error_user_name_long']->value) {?>user_nameは八文字以内<br/><?php }?>

<?php if (true == $_smarty_tpl->tpl_vars['if_error_pw_long']->value) {?>pwは6文字以上72文字以内<br/><?php }?>

<?php if (true == $_smarty_tpl->tpl_vars['if_error_pw_mismatch']->value) {?>pwとpw2同じではない<br/><?php }?>

<br/>

</html>

<?php }
}
?>