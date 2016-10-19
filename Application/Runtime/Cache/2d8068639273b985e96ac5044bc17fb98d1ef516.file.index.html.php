<?php /* Smarty version Smarty-3.1.6, created on 2016-08-31 10:12:44
         compiled from "./Application/Home/View\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1467057c63d1c7af4d2-96204633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d8068639273b985e96ac5044bc17fb98d1ef516' => 
    array (
      0 => './Application/Home/View\\index\\index.html',
      1 => 1470382558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1467057c63d1c7af4d2-96204633',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c63d1c866e7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c63d1c866e7')) {function content_57c63d1c866e7($_smarty_tpl) {?><!doctype html>
<html>
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

<body>
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>

<div class="container clearfix">
    <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>

       <h1>假装这里有个很帅的封面</h1>
</div>
</body>
</html><?php }} ?>