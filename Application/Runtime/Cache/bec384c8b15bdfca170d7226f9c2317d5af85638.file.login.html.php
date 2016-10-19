<?php /* Smarty version Smarty-3.1.6, created on 2016-09-23 09:50:47
         compiled from "./Application/Index/View\Member\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2930957e488ae226f54-42012648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bec384c8b15bdfca170d7226f9c2317d5af85638' => 
    array (
      0 => './Application/Index/View\\Member\\login.html',
      1 => 1474595438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2930957e488ae226f54-42012648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57e488ae278ff',
  'variables' => 
  array (
    'tse_css' => 0,
    'tse_js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e488ae278ff')) {function content_57e488ae278ff($_smarty_tpl) {?>

<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>登录 - 优客逸家</title>
    <link href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_css']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
common.min.css" rel="stylesheet"/>
    <link href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_css']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
Member.css" rel="stylesheet"/>
</head>
<body>
<div class="bk10"></div>
<div class="container">

    <div class="signUp">
        <div class="signUp_top">
            <a href="/" class="signUp_logo"></a>
            <div class="signUp_bg"></div>
        </div>
        <div class="signUp_form">
            <form action="/index/member/login" class="form-horizontal" method="post" role="form">            <div class="signUp_form_title">立即加入成为优客</div>
                <div class="signUp_list">
                    <div class="regin-name">
                        <input class="signUp_number step" data-val="true" data-val-regex="手机号码错误" data-val-regex-pattern="^1[34578]\d<?php echo 9;?>
$" data-val-required="手机号不能为空" id="Phone" name="Phone" placeholder="手机号" tabindex="1" type="text" value="" />
                        <span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>                </div>
                    <div class="regin-pas">
                        <input class="signUp_password step" data-val="true" data-val-regex="登录密码错误" data-val-required="密码不能为空" id="Password" name="Password" placeholder="密码" tabindex="2" type="password" />
                        <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                    </div>
                    <input type="submit" class="signUp_btn" value="登 录" />
                </div>
                <div class="signUp_sen"><a href="/index/member/forget">忘记密码？</a></div>
                <div id="tips_error"></div>
            </form>    </div>
    </div>


    <div class="copyright-menber">
        <p>租房热线：400-000-4170 </p>
        <p>Copyright © 2012-2015 uoko.com ,All Right Reserved 蜀ICP备13015638号-1</p>
    </div>
</div>
<div class="bk30"></div>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
jquery-1.9.1.js"></script>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>
base.min.js"></script>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>
common.js"></script>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>
g.js"></script>

<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
jquery.validate.js"></script>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>
jquery.validate.unobtrusive.js"></script>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>
Member.js"></script>


<script type="text/javascript">
    $(function () {
        $("#VerifyCode").val("");
    });
</script>

</body>
</html>


<?php }} ?>