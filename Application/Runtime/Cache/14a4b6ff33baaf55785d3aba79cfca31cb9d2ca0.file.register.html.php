<?php /* Smarty version Smarty-3.1.6, created on 2016-09-23 14:15:40
         compiled from "./Application/Index/View\Member\register.html" */ ?>
<?php /*%%SmartyHeaderCode:2310157e37e905fb6f6-30269967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14a4b6ff33baaf55785d3aba79cfca31cb9d2ca0' => 
    array (
      0 => './Application/Index/View\\Member\\register.html',
      1 => 1474611338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2310157e37e905fb6f6-30269967',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57e37e906af22',
  'variables' => 
  array (
    'tse_css' => 0,
    'server_name' => 0,
    'tse_js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e37e906af22')) {function content_57e37e906af22($_smarty_tpl) {?>

<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>注册 - 优客逸家</title>
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
    <div class="regin">
        <div class="regin_top">
            <a href="/index/index/index" class="regin_logo"></a>
            <div class="regin_bg"></div>
        </div>
        <div class="regin_main">
            <div class="regin_main_title">Welcome ! 立即加入成为优客 !</div>
            <form action="index/member/register" class="form-horizontal" method="post" role="form">
                <input name="__RequestVerificationToken" type="hidden" value="OjtAssHkpkU2FxdTbFBexMlbQqrcUWb2Sv37FdsUk-GYCsjtq25FHaa_YFte6yv0-ONYC3EoQ0ur1Ieo078Fxcz5c9fZNRP8flzq5dVmjdU1" />
                <div class="regin-name">
                <input class="step" data-val="true" data-val-regex="手机号码错误" data-val-regex-pattern="^1[34578]\d<?php echo 9;?>
$" data-val-remote="手机号码已存在，请直接登录" data-val-remote-additionalfields="*.Phone" data-val-remote-url="/member_check/username" data-val-required="手机号不能为空" id="Phone" name="member[mobile]" placeholder="手机号" type="text" value="" />
                <span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>            </div>
                <div class="regin-num">
                    <input Value="" class="signUp_number" data-val="true" data-val-length="验证码错误" data-val-length-max="6" data-val-length-min="6" data-val-required="验证码不能为空" id="SmsCode" name="SmsCode" placeholder="验证码" style="display: none" type="text" value="" />
                    <span class="field-validation-valid" data-valmsg-for="SmsCode" data-valmsg-replace="true"></span>
                    <input class="signUp_number " id="verfycode" name="member[verify]" placeholder="图形验证码" type="text" value="" />
                    <!--<img src="/member/captcha" onclick="javascript:var time = new Date().getTime(); this.src=this.src + '?' + time;" id="imgcode" />-->
                    <img src="http://<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['server_name']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
/index.php/index/Ath/verify" id="imgcode" style="height: 45px">
                    <button type="button" id="smscode_send" class="regin_send hide">发送手机验证码</button>
                <span class="field-validation-error hide" id="imgcodeERR" >
                    <span class="" for="verfycode" id="imgcodeErrVal">图形验证码错误</span>
                </span>
                </div>
                <div class="regin-pas">
                    <input class="step signUp_password" data-val="true" data-val-regex="密码不符合规则" data-val-required="密码不能为空" id="Password" name="member[password]" placeholder="密码" type="password" />
                    <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                </div>
                <div class="regin-conpas">
                    <input class="step signUp_password" data-val="true" data-val-equalto="两次密码不一致" data-val-equalto-other="*.Password" id="ConfirmPassword" name="ConfirmPassword" placeholder="密码确认" type="password" />
                    <span class="field-validation-valid" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span>
                </div>
                <div class="regin-footer">
                    <div id="tips_error"></div>
                    <input type="submit" class="regin_btn" value="注 册" />
                    <div class="res_check">
                        <input type="checkbox" id="c-checked" ischeck="true" value="1" name="sample-radio" checked="checked" /><a href="#" data-toggle="modal" data-target="#myModal" id="finish-btn">同意网站服务条款</a>
                    </div>
                    <div class="bill-showClause">
                        <div class="bill-show-poptit2">
                            <a href="javascript:;" title="关闭" class="bill-close">×</a>
                            <h4>网站服务条款</h4>
                        </div>
                        <p>
                            尊敬的用户，欢迎您注册成为本网站用户。在注册前请您仔细阅读如下服务条款：
                            本网站（域名：www.uoko.com）为四川优客投资管理有限公司（下简称优客）运营的网站本服务协议双方为优客与网站用户，本服务协议具有合同效力。
                            您确认本服务协议后，本服务协议即在您和本网站之间产生法律效力。请您务必在注册之前认真阅读全部服务协议内容，如有任何疑问，可向本网站咨询。
                            无论您事实上是否在注册之前认真阅读了本服务协议，只要您点击协议正本下方的"注册"按钮并按照本网站注册程序成功注册为用户，您的行为仍然表示您同意并签署了本服务协议。
                            您承诺接受并遵守本协议的约定。如果您不同意本协议的约定，您应立即停止注册程序或停止使用本网站服务。
                        </p>
                        <p>1．本网站服务条款的确认和接纳</p>

                        <p>本网站各项服务的所有权和运作权归优客拥有。</p>
                        <p>2．用户必须：</p>
                        <p>(1)自行配备上网的所需设备， 包括个人电脑、调制解调器或其他必备上网装置。</p>
                        <p>(2)自行负担个人上网所支付的与此服务有关的电话费用、 网络费用。</p>
                        <p> 3．用户在本网站交易平台上不得发布下列违法信息：</p>
                        <p>(1)反对宪法所确定的基本原则的；</p>
                        <p>(2)危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；</p>
                        <p>(3)损害国家荣誉和利益的；</p>
                        <p>(4)煽动民族仇恨、民族歧视，破坏民族团结的；</p>
                        <p>(5)破坏国家宗教政策，宣扬邪教和封建迷信的；</p>
                        <p>(6)散布谣言，扰乱社会秩序，破坏社会稳定的；</p>
                        <p>(7)散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；</p>
                        <p>(8)侮辱或者诽谤他人，侵害他人合法权益的；</p>
                        <p>(9)含有法律、行政法规禁止的其他内容的。</p>
                        <p>4． 有关个人资料 用户同意：</p>
                        <p>(1) 提供及时、详尽及准确的个人资料。</p>
                        <p>(2)同意接收来自本网站的信息。</p>
                        <p>(3) 不断更新注册资料，符合及时、详尽准确的要求。所有原始键入的资料将引用为注册资料。</p>
                        <p>(4)优客不公开用户的姓名、地址、电子邮箱和笔名，以下情况除外：</p>
                        <p>（a）用户授权优客透露这些信息。</p>
                        <p>（b）相应的法律及程序要求优客提供用户的个人资料。如果用户提供的资料包含有不正确的信息，优客保留结束用户使用本网站信息服务资格的权利。</p>
                        <p> 5． 用户在注册时应当选择稳定性及安全性相对较好的电子邮箱，并且同意接受并阅读优客发往用户的各类电子邮件。如用户未及时从自己的电子邮箱接受电子邮件或因用户电子邮箱或用户电子邮件接收及阅读程序本身的问题使电子邮件无法正常接收或阅读的，只要优客成功发送了电子邮件，应当视为用户已经接收到相关的电子邮件。电子邮件在发信服务器上所记录的发出时间视为送达时间。</p>

                        <p> 6． 服务条款的修改</p>
                        <p>
                            优客有权在必要时增加或修改服务条款，本网站服务条款一旦发生变动，将会在本网站页面上提示修改内容。变更后的条款一经在本网站公布后，立即自动生效。如果不同意所改动的内容，用户可以主动取消获得的本网站信息服务。如果用户继续享用本网站信息服务，则视为接受服务条款的变动。优客保留随时修改或中断本网站服务而不需通知用户的权利。优客行使修改或中断服务的权利，不需对用户或第三方负责。
                        </p>
                        <p> 7． 用户隐私制度</p>
                        <p>
                            尊重用户个人隐私是优客的一项基本政策。所以，优客一定不会在未经合法用户授权时公开、编辑或透露其注册资料及保存在本网站中的非公开内容，除非有法律许可要求或优客在诚信的基础上认为透露这些信息在以下几种情况是必要的：
                        </p>
                        <p>(1)、事先获得用户的明确授权；自行支付与此服务有关的费用；</p>
                        <p>(2)、遵守有关法律规定，遵从优客合法服务程序</p>
                        <p>(3)、按照相关政府主管部门的要求；</p>
                        <p>(4)、在紧急情况下，为维护用户及公众的权益；</p>
                        <p>(5)、为维护优客的合法权益；</p>
                        <p>(6)、其他需要公开、编辑或透露个人信息的情况。</p>
                        <p>(7)、保持维护优客的商标所有权。</p>
                        <p>本网站保留发布会员人口分析咨询的权利。</p>
                        <p>8．用户的账号、密码和安全性</p>
                        <p>您一旦注册成功成为用户，您将得到一个密码和账号。您应该保管好自己的帐号和密码安全，并对您的账号和密码的安全，以及对通过您的账户和密码实施的行为负责。您可随时根据指示改变您的密码，也可以结束旧的账号重开一个新账号。用户同意若发现任何非法使用用户账号或安全漏洞的情况，请立即通告本网站。</p>
                        <p>9． 拒绝提供担保</p>
                        <p>用户明确同意信息服务的使用由用户个人承担风险。 优客不担保服务不会受中断，对服务的及时性，安全性，出错发生都不作担保，但会在能力范围内，避免出错。</p>
                        <p>10．有限责任</p>
                        <p>优客对本网站任何直接、间接、偶然、特殊及继起的损害不负责任，这些损害来自：不正当使用本网站服务，或用户传送的信息不符合规定等。这些行为都有可能导致优客或本网站形象受损，所以本网站事先提出这种损害的可能性，同时会尽量避免这种损害的发生。</p>
                        <p>11．信息的储存及限制</p>
                        <p>优客有判定用户的行为是否符合本网站服务条款的要求和精神的权利，如果用户违背本网站服务条款的规定，优客有权终止向用户提供服务或注销该用户的账号。</p>
                        <p>12．用户管理</p>
                        <p>用户必须遵循：</p>
                        <p> 在使用本网站过程中的所有行为均遵守国家法律、法规等规范性文件及本网站所发布的其他规则的规定和要求，不违背社会公共利益或公共道德，不损害他人的合法权益，不违反本协议及相关规则， 不干扰或混乱网络服务。</p>
                        <p>13．保障</p>
                        <p>其它人使用用户的电脑、账号和其它知识产权的追索费。</p>
                        <p>用户超出服务范围或违反服务条款给优客或第三人造成损害的，用户应赔偿经济损失包括但不限于诉讼费、保全费、交通费、律师费等。</p>

                        <p>14．结束服务</p>
                        <p>用户或优客可随时根据实际情况中断一项或多项服务。优客不需对任何个人或第三方负责而可以随时中断服务。用户若反对任何服务条款的建议或对后来的条款修改有异议，或对本网站服务不满，用户可以行使如下权利：</p>
                        <p>(1)	不再使用本网站信息服务。</p>
                        <p>(2)	通知优客停止对该用户账号的服务。</p>
                        <p>结束用户服务后，用户使用本网站服务的权利马上终止。从那时起，用户没有权利，本网站也没有义务传送任何未处理的信息或未完成的服务给用户或第三方。</p>

                        <p>15．通告</p>
                        <p> 所有发给用户的通告都可通过重要页面的公告或电子邮件或常规的信件传送。服务条款的修改、服务变更、或其它重要事件的通告都会以此形式进行。</p>

                        <p>16．信息内容的所有权</p>
                        <p>本网站定义的信息内容包括：文字、软件、声音、相片、录像、图表；在广告中全部内容；本网站为用户提供的其它信息。所有这些内容受版权、商标、标签和其它财产所有权法律或知识产权相关法律的保护。所以，用户只能在优客和广告商授权下才能使用这些内容，而不能擅自复制、再造这些内容、或创造与内容有关的派生产品。</p>
                        <p>17．法律</p>
                        <p> 本网站信息服务条款要与中华人民共和国的法律解释一致。用户和优客一致同意服从优客所在地有管辖权的法院管辖。如发生本网站服务条款与中华人民共和国法律相抵触时，则这些条款将完全按法律规定重新解释，同时这些条款则依旧保持对用户的约束力。</p>

                        <a class="finish-btn finish-close">确 定</a>
                    </div>
                    <div class="bill-mask"></div>
                </div>
            </form>    </div>
    </div>

    <div class="copyright-menber">
        <p>租房热线：400-000-4170 </p>
        <p>Copyright © 2012-2015 uoko.com ,All Right Reserved 蜀ICP备13015638号-1</p>
    </div>
</div>
<div class="bk30"></div>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>
jquery-1.9.1.js"></script>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>
base.min.js"></script>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>
common.js"></script>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
g.js"></script>

<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>
jquery.validate.js"></script>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>
jquery.validate.unobtrusive.js"></script>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
Member.js"></script>


<script type="text/javascript">
    var sec = parseInt('0');
    var smscode_send_tmr;
    $(function () {
        if (sec > 0) {
            smscode_send_tmr = setInterval("SmscodeCountdown()", 1000);
        }

        $("#verfycode").bind("blur", function () {

            var inputcode = $(this).val();
            if (!inputcode) {
                return;
            }

            $.ajax({
                type: "POST",
                url: "/Member/CheckCode",
                data: JSON.stringify({ 'inputcode': inputcode }),
                contentType: "application/json",
                dataType: "json",
                success: function (data) {
                    var rs = data.result;
                    if (rs == undefined || rs == "fail") {
                        $("#imgcodeERR").removeClass("hide");
                        $("#verfycode").select();
                    } else if (rs == "success") {
                        $("#verfycode").hide();
                        $("#imgcodeERR").hide();
                        $("#imgcode").hide();
                        $("#SmsCode").show();
                        $("#SmsCode").focus();
                        $("#smscode_send").show();
                        $("#smscode_send").removeClass("hide");
                    }
                }
            });
        });

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
                    url: "/member/signup_smscode",
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