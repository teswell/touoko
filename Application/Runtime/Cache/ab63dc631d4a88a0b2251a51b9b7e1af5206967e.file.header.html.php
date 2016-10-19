<?php /* Smarty version Smarty-3.1.6, created on 2016-09-23 09:41:02
         compiled from "./Application/Index/View\share\header.html" */ ?>
<?php /*%%SmartyHeaderCode:975757d24cc0171d49-14075501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab63dc631d4a88a0b2251a51b9b7e1af5206967e' => 
    array (
      0 => './Application/Index/View\\share\\header.html',
      1 => 1474594838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '975757d24cc0171d49-14075501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57d24cc0194fc',
  'variables' => 
  array (
    'tse_img' => 0,
    'tse' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d24cc0194fc')) {function content_57d24cc0194fc($_smarty_tpl) {?><input id="controller" type="hidden" value="Home" />
<input id="action" type="hidden" value="Index" />
<div class="header navbar navbar-default ">
    <div class="container">
        <div class="navbar-header">
            <div class="slogan">

                <a class="logo" style="width:218px" href="/index/index/index" title="优客逸家-租房时代的美好回忆！">
                    <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
logo.png" width="218" height="36" alt="优客逸家-租房时代的美好回忆！" />
                </a>

                <div id="switchcity" class="dropdown dropdown-city">
                    <a class="dropdown-toggle" id="DropdownMenuCity" data-toggle="dropdown" href="#">成都  <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="DropdownMenuCity">
                        <li role="presentation"><a city="chengdu" role="menuitem" tabindex="-1" href="http://chengdu.uoko.com">成都</a></li>
                    </ul>
                </div>
            </div>
            <div id="uoko-nav">
                <ul class="navbar navbar-left">
                    <li data-menu-active="controller_Home&&action_Index">
                        <a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
/index/index/index">首页</a>
                    </li>
                    <li data-menu-active="controller_Rent&&action_Index">
                        <a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
/index/rent/index">我要租房</a>
                    </li>
                    <li data-menu-active="controller_AboutUs&&action_Questions">
                        <a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>
/index/question/index">租前须知</a>
                    </li>
                    <li>
                        <a href="http://fd.uoko.com/" target="_blank">房东加盟</a>
                    </li>
                    <li data-menu-active="controller_AboutUs&&action_Index">
                        <a href="http://about.uoko.com">关于优客</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar navbar-right">
                <li class="loginbar">
                    <a href="/index/member/login/" rel="nofollow">登录</a>
                    <span class="">|</span>
                    <a href="/index/member/register/" rel="nofollow">注册</a>
                </li>
            </ul>

        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="clearfix"></div><?php }} ?>