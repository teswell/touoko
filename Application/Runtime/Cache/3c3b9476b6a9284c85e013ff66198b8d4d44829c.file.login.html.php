<?php /* Smarty version Smarty-3.1.6, created on 2016-08-31 10:12:28
         compiled from "./Application/Home/View\index\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2862157c63d0c1bc1b1-13944476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c3b9476b6a9284c85e013ff66198b8d4d44829c' => 
    array (
      0 => './Application/Home/View\\index\\login.html',
      1 => 1470880477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2862157c63d0c1bc1b1-13944476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tse_css' => 0,
    'server_name' => 0,
    'tse_js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c63d0c32f39',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c63d0c32f39')) {function content_57c63d0c32f39($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tsewell</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['tse_css']->value;?>
admin_login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>Tsewell</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="login" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="login[username]" id="user" size="40" class="admin_input_style" style="width:275px;"/>
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="login[password]" id="pwd" size="40" class="admin_input_style" style="width:275px;"/>
                    </li>
                    <li>
                        <label for="pwd">验证码：</label>
                        <input type="text" name="login[verify]" size="40" class="admin_input_style" style="width:275px;"/>
                    </li>
                    <li>
                        <img src="http://<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['server_name']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
/index.php/Home/Ath/verify" id="verify" style="width:275px;">
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
<script src="<?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
jquery-2.1.1.min.js"></script>
<script>
    // 验证码生成
    var captcha_img = $('#verify');
    var verifyimg = captcha_img.attr("src");
    captcha_img.attr('title', '点击刷新');
    captcha_img.click(function(){
        if( verifyimg.indexOf('?')>0){
            $(this).attr("src", verifyimg+'&random='+Math.random());
        }else{
            $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
        }
    });
</script>
</html><?php }} ?>