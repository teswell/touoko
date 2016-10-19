<?php /* Smarty version Smarty-3.1.6, created on 2016-08-31 10:12:49
         compiled from "./Application/Home/View\comm\navi.html" */ ?>
<?php /*%%SmartyHeaderCode:1952457c63d2137a3b3-73704680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '682e18915b3cebc99da4e3e7f8b4e14a17d2c273' => 
    array (
      0 => './Application/Home/View\\comm\\navi.html',
      1 => 1470124905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1952457c63d2137a3b3-73704680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c63d2138dc3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c63d2138dc3')) {function content_57c63d2138dc3($_smarty_tpl) {?><div class="crumb-wrap">
    <div class="crumb-list">
        <i class="icon-font"></i><a href="/home/index/index">首页</a>
        <?php ob_start();?><?php if (!empty($_smarty_tpl->tpl_vars['navi']->value)){?><?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

        <span class="crumb-step">&gt;</span>
        <span class="crumb-name"><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['navi']->value['url'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['navi']->value['name'];?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
</a></span>
        <?php ob_start();?><?php }?><?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>

    </div>
</div>
<?php }} ?>