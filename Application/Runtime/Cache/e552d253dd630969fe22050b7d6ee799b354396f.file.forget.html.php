<?php /* Smarty version Smarty-3.1.6, created on 2016-09-23 09:51:56
         compiled from "./Application/Index/View\Member\forget.html" */ ?>
<?php /*%%SmartyHeaderCode:448957e48a8e2402c4-75070611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e552d253dd630969fe22050b7d6ee799b354396f' => 
    array (
      0 => './Application/Index/View\\Member\\forget.html',
      1 => 1474595507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '448957e48a8e2402c4-75070611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57e48a8e2a9a6',
  'variables' => 
  array (
    'tse_css' => 0,
    'tse_js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e48a8e2a9a6')) {function content_57e48a8e2a9a6($_smarty_tpl) {?>

<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>忘记密码 - 优客逸家</title>
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

    <div class="act-up">
        <div class="act-top">
            <a href="/" class="actTop-logo"></a>
            <div class="actTop-bg"></div>
        </div>
        <form action="/index/member/forget" class="form-horizontal" method="post" role="form"><input name="__RequestVerificationToken" type="hidden" value="brOQC2PHpez2tsRwg3kMg5iFtAHQ7ZLcgxgE2YBwOBGEn3xc0DTSYQT8MAxeqN7PBSoKycBK10vWcxqj-DH-1YUzooEBEqZNj75JxPkITs41" />                <div class="act-main">
            <div class="form-group">
                <label for="" class="act-na">手机号</label>
                <div class="col">
                    <input class="form-control act-b" data-val="true" data-val-regex="手机号码错误" data-val-regex-pattern="^1[34578]\d<?php echo 9;?>
$" data-val-remote="手机号码不存在" data-val-remote-additionalfields="*.Phone" data-val-remote-url="/member_check/hasusername" data-val-required="手机号不能为空" id="Phone" name="Phone" type="text" value="" />
                    <span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="act-na">验证码</label>
                <div class="col">
                    <input class="act-number act-b" data-val="true" data-val-length="验证码错误" data-val-length-max="6" data-val-length-min="6" data-val-required="验证码不能为空" id="SmsCode" name="SmsCode" type="text" value="" />
                    <span class="field-validation-valid" data-valmsg-for="SmsCode" data-valmsg-replace="true"></span>
                    <button type="button" id="smscode_send" class="act-send">发送手机验证码</button>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="act-na">密码</label>
                <div class="col">
                    <input class="form-control act-b" data-val="true" data-val-regex="密码不符合规则" data-val-required="密码不能为空" id="Password" name="Password" type="password" />
                    <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="act-na">密码确认</label>
                <div class="col">
                    <input class="form-control act-b" data-val="true" data-val-equalto="两次密码不一致" data-val-equalto-other="*.Password" id="ConfirmPassword" name="ConfirmPassword" type="password" />
                    <span class="field-validation-valid" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span>
                </div>
            </div>

        </div>
            <div class="act--footer">
                <input type="submit" class="act--btn" value="激 活" />
                <a href="/member/login/" class="act--btn">返回</a>
            </div>
        </form></div>

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
    var sec =parseInt('0');
    var smscode_send_tmr;
    $(function () {
        if (sec > 0) {
            smscode_send_tmr = setInterval("SmscodeCountdown()", 1000);
        }

        $("#smscode_send").click(function () {
            $("#Phone").trigger("blur");
            if ($("#Phone").not(".valid").length == 1) {
                var msg = $("span[for='Phone']").html();
                if (msg == undefined) msg = "手机号不能为空";
                alert(msg);
                return;
            }
            if (sec == 0) {
                if (smscode_send_tmr != undefined) {
                    clearInterval(smscode_send_tmr);
                }
                $("#smscode_send").attr("disabled", "disabled");
                $.ajax({
                    type: "POST",
                    url: "/member/activation_smscode",
                    data: JSON.stringify({ 'phone': $("#Phone").val() }),
                    contentType: "application/json",
                    dataType: "json",
                    success: function (data) {
                        sec = data.countdown;
                        if (sec == undefined || sec == -1) {
                            alert(data.message);
                        } else {
                            smscode_send_tmr = setInterval("SmscodeCountdown()", 1000);
                        }
                        $("#smscode_send").removeAttr("disabled");
                    }
                });
            }
        });
    });

    function SmscodeCountdown() {
        if (sec == 0) {
            clearInterval(smscode_send_tmr);
            $("#smscode_send").html("发送手机验证码");

        } else {
            $("#smscode_send").html("请" + sec-- + "秒之后再试");
        }

    }
</script>

</body>
</html>


<?php }} ?>