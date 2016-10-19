<?php /* Smarty version Smarty-3.1.6, created on 2016-08-31 10:12:44
         compiled from "./Application/Home/View\comm\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1192757c63d1c8729f9-95619815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baf144b1483158280d0536d529f10c1cea2767ab' => 
    array (
      0 => './Application/Home/View\\comm\\header.html',
      1 => 1471317695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1192757c63d1c8729f9-95619815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tse_css' => 0,
    'tse_js' => 0,
    'bootstrap_css' => 0,
    'bootstrap_js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c63d1c8a950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c63d1c8a950')) {function content_57c63d1c8a950($_smarty_tpl) {?><head>
    <meta charset="UTF-8">
    <title>Tsewell后台管理</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tse_css']->value;?>
common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tse_css']->value;?>
main.css"/>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
common.js"></script>
    <!--后台模板的js-->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['bootstrap_css']->value;?>
bootstrap.min.css"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['bootstrap_js']->value;?>
bootstrap.min.js"></script>
    <!--弹出层样式的js和css-->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
xcConfirm.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_css']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
xcConfirm.css"/>
</head><?php }} ?>