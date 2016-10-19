<?php /* Smarty version Smarty-3.1.6, created on 2016-08-31 10:12:44
         compiled from "./Application/Home/View\comm\top.html" */ ?>
<?php /*%%SmartyHeaderCode:3030357c63d1c8b5081-64658553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '638612845fcca67f84ef49732914b8b55cbafcfa' => 
    array (
      0 => './Application/Home/View\\comm\\top.html',
      1 => 1470376097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3030357c63d1c8b5081-64658553',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c63d1c8e7d1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c63d1c8e7d1')) {function content_57c63d1c8e7d1($_smarty_tpl) {?><div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/home/index/index">Tsewell</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="/home/index/changePwd" class="change_pwd">修改密码</a></li>
                <li><a href="javascript:void(0)" class="logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<script>
    //个人账号登出
    $(".logout").click(function(){
        var txt =  "确定退出登录?";
        var option = { onOk: function(){ adminLogout() }};
        window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.warning,option);
    });

    function adminLogout(){
        window.location.href = '/home/index/logout';
    }
</script><?php }} ?>