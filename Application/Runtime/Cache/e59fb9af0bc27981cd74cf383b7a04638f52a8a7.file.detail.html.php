<?php /* Smarty version Smarty-3.1.6, created on 2016-10-13 10:47:26
         compiled from "./Application/Index/View\Rent\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:1567257d25686b0f527-90059726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e59fb9af0bc27981cd74cf383b7a04638f52a8a7' => 
    array (
      0 => './Application/Index/View\\Rent\\detail.html',
      1 => 1476326697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1567257d25686b0f527-90059726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57d25686d49aa',
  'variables' => 
  array (
    'tse_css' => 0,
    'tse_img' => 0,
    'tse_js' => 0,
    'room' => 0,
    'val' => 0,
    'key' => 0,
    'house' => 0,
    'houseImgs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d25686d49aa')) {function content_57d25686d49aa($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
<head>
    <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('share/header_url.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

    <style>
        html, body {
            background: #fff;
        }
        .room_slide {
            width: auto;
        }
        .btn_show {
            position:relative;
        }
        .btn_tip {
            position: absolute;
            top: -22px;
            display: none;
        }
        .half_tip div:nth-child(2){
            display:block;
        }
        .free_tip div:last-child{
            display:block;
        }
    </style>
    <link href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_css']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
Imagefocus.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
favicon.ico" type="image/x-icon" />
    <script type="text/javascript">
        var zd = '0';
        if (zd == 0 && getCookie("zd") == null) {
            document.write('<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>
p.mini.js?v=20141230"><\/script>');
        } else {
            if (zd == 1 && getCookie("zd") == null)
                addCookie(1);
        }

        function addCookie(objHours) {
            var str = "zd=1";
            var date = new Date();
            var ms = 1000 * 60 * 10;
            date.setTime(date.getTime() + ms);
            str += "; expires=" + date.toGMTString();
            document.cookie = str;
        }
        function getCookie(name) {
            var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
            if (arr != null) return unescape(arr[2]); return null;
        }
        function delCookie(name) {
            var exp = new Date();
            exp.setTime(exp.getTime() - 1);
            var cval = getCookie(name);
            if (cval != null) document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();
        }
        var mlik = document.getElementsByTagName("mLink");
        mlik.onclick = function () {
            delCookie("zd");
        }
    </script>
</head>
<body data-spy="scroll">
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('share/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>

<div class="container">
    <div class="bk20"></div>
    <input type="hidden" id="roomCode" />
    <div class="room-slide-image pull-left">
        <div class="r-slider">
            <div class="slide-image-big">
                <ul class="list-unstyled">
                    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['room']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>

                    <li class="diagram-img-big">
                        <a title="D (3).jpg" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
&amp;width=800&amp;height=447&amp;w=1">
                            <img class="mfp-zoom" alt="" title="" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>
loading.gif" data-src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>
&amp;width=450&amp;height=300" />
                        </a>
                    </li>
                    <?php ob_start();?><?php } ?><?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>

                </ul>

            </div>
            <div class="slide-image-small">
                <div class="image-prev img-navigation">上一张</div>
                <div class="image-list">
                    <ul class="image-list-content list-unstyled">
                        <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['room']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>

                        <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['key']->value==0){?><?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>

                        <li><img class="current" width="66" height="44" title="" alt="" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>
&amp;width=60&amp;height=38" /></li>
                        <?php ob_start();?><?php }else{ ?><?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>

                        <li><img class="" width="66" height="44" title="" alt="" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php $_tmp15=ob_get_clean();?><?php echo $_tmp15;?>
&amp;width=60&amp;height=38" /></li>
                        <?php ob_start();?><?php }?><?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>

                        <?php ob_start();?><?php } ?><?php $_tmp17=ob_get_clean();?><?php echo $_tmp17;?>

                    </ul>
                </div>
                <div class="image-next img-navigation">下一张</div>
            </div>
        </div>
        <div class="room_slide_share pull-right">
            <div class="slide_share_box">
                <div class="share_ws share_info pull-left">分享到：</div>
                <div class="bdsharebuttonbox">
                    <a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a>
                    <a title="分享到QQ好友" href="#" class="bds_sqq" data-cmd="sqq"></a>
                    <a title="分享到豆瓣网" href="#" class="bds_douban" data-cmd="douban"></a>
                    <a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a>
                    <a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a>
                    <a href="#" class="bds_more" data-cmd="more"></a>
                </div>

            </div>
            <button class="btn btn-default pro_share_button" type="button"><i class="fa fa-caret-right"></i></button>


        </div>
        <div class="clearfix"></div>
    </div>

    <div class="product_intro pull-left">
        <h1 class="intro_title"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['title'];?>
<?php $_tmp18=ob_get_clean();?><?php echo $_tmp18;?>
</h1>
        <h5 class="intro_title_sale text-orange">管家服务 费用代缴 定期保洁</h5>
        <div class="bk10"></div>
        <div class="intro_table">
            <div class="table_lh bar">
                <div class="pro_name"><span class="pa">编</span>号：</div>
                <div class="pro_content">
                    <span class="pro_number">NO.<span>CD<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['id'];?>
<?php $_tmp19=ob_get_clean();?><?php echo $_tmp19;?>
</span></span>
                    <div class="move_house">
                        <div class="move_box">
                            <div class="move_info">
                                <p>首次当天看房缴定金（一个月房租）,优客立即赠送您搬家抵金券。</p>
                                <a href="/special/feature/14/02/index.aspx" target="_blank">怎么用？</a>
                                <div class="sprite sprite_move_info"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table_lh bar hidden">
                <div class="pro_name text-orange">促&nbsp;销&nbsp;&nbsp;价：</div>
                <div class="pro_contet">
                    <div class="pro_price">
                        ￥<span id="brental">
                        <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['house']->value['min_price']==$_smarty_tpl->tpl_vars['house']->value['max_price']){?><?php $_tmp20=ob_get_clean();?><?php echo $_tmp20;?>

                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['min_price'];?>
<?php $_tmp21=ob_get_clean();?><?php echo $_tmp21;?>

                        <?php ob_start();?><?php }else{ ?><?php $_tmp22=ob_get_clean();?><?php echo $_tmp22;?>

                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['min_price'];?>
<?php $_tmp23=ob_get_clean();?><?php echo $_tmp23;?>
-<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['max_price'];?>
<?php $_tmp24=ob_get_clean();?><?php echo $_tmp24;?>

                        <?php ob_start();?><?php }?><?php $_tmp25=ob_get_clean();?><?php echo $_tmp25;?>

                    </span> 元/月
                    </div>
                </div>
            </div>
            <div class="table_lh bar">
                <div class="pro_name text-orange"><span class="pa">租</span>金：</div>
                <div class="pro_contet">
                    <div class="pro_price">￥<span id="rental">
                        <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['house']->value['min_price']==$_smarty_tpl->tpl_vars['house']->value['max_price']){?><?php $_tmp26=ob_get_clean();?><?php echo $_tmp26;?>

                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['min_price'];?>
<?php $_tmp27=ob_get_clean();?><?php echo $_tmp27;?>

                        <?php ob_start();?><?php }else{ ?><?php $_tmp28=ob_get_clean();?><?php echo $_tmp28;?>

                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['min_price'];?>
<?php $_tmp29=ob_get_clean();?><?php echo $_tmp29;?>
-<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['max_price'];?>
<?php $_tmp30=ob_get_clean();?><?php echo $_tmp30;?>

                        <?php ob_start();?><?php }?><?php $_tmp31=ob_get_clean();?><?php echo $_tmp31;?>

                    </span> 元/月</div>
                    <a class="yayi_info"  data-toggle="modal">
                        <span class="sprite sprite_pro_info_1">房租月付</span>
                    </a>
                </div>
            </div>
            <div class="table_lh bar">
                <div class="pro_name"><span class="pa">地</span>址：</div>
                <div class="pro_content">
                    <span class="pro_area"><a href="/rent/cdjjq/"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['area_name'];?>
<?php $_tmp32=ob_get_clean();?><?php echo $_tmp32;?>
</a></span>
                    <span class="pro_addr"><a class="ImageMapNav"><span class="sprite sprite_map_marker-o"></span><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['address'];?>
<?php $_tmp33=ob_get_clean();?><?php echo $_tmp33;?>
</a></span>
                </div>
            </div>
            <div class="table_lh bar">
                <div class="pro_name"><span class="pa">类</span>型：</div>
                <div class="pro_content">
                    <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['house']->value['type']==1){?><?php $_tmp34=ob_get_clean();?><?php echo $_tmp34;?>

                    单间
                    <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['house']->value['type']==2){?><?php $_tmp35=ob_get_clean();?><?php echo $_tmp35;?>

                    标间
                    <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['house']->value['type']==3){?><?php $_tmp36=ob_get_clean();?><?php echo $_tmp36;?>

                    整租
                    <?php ob_start();?><?php }?><?php $_tmp37=ob_get_clean();?><?php echo $_tmp37;?>

                </div>
            </div>
            <div class="table_lh bar">
                <div class="pro_name"><span class="pa">房</span>间：</div>
                <div class="pro_content pro_select pro_room_num" style="width:580px;float:left;">
                    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['room']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp38=ob_get_clean();?><?php echo $_tmp38;?>

                    <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['val']->value['status']==2){?><?php $_tmp39=ob_get_clean();?><?php echo $_tmp39;?>

                    <button type="button" class="btn_room btn btn-default btn_show" price="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
<?php $_tmp40=ob_get_clean();?><?php echo $_tmp40;?>
" sales="0" y=" 0" d="A" s="0" r="CDR03824A" t="0" bprice="0">
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<?php $_tmp41=ob_get_clean();?><?php echo $_tmp41;?>
  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
<?php $_tmp42=ob_get_clean();?><?php echo $_tmp42;?>
元 <b></b>
                    </button>
                    <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['val']->value['status']==1){?><?php $_tmp43=ob_get_clean();?><?php echo $_tmp43;?>

                    <button type="button" class="btn_room btn btn-default disabled" price="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
<?php $_tmp44=ob_get_clean();?><?php echo $_tmp44;?>
" sales="0" y=' 0' d="C" s="0">
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<?php $_tmp45=ob_get_clean();?><?php echo $_tmp45;?>
 已租出<b></b>
                    </button>
                    <?php ob_start();?><?php }?><?php $_tmp46=ob_get_clean();?><?php echo $_tmp46;?>

                    <?php ob_start();?><?php } ?><?php $_tmp47=ob_get_clean();?><?php echo $_tmp47;?>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="table_lh ">
                <div class="pro_name">电话咨询：</div>
                <div class="pro_content pro_tel">
                    400-000-4170
                </div>
            </div>
            <div class="table_lh ">
                <div class="pro-submit">
                    <button type="button" class="btn btn-orange btn-pro-order btn-pro-valid click_order_kanfang" id="click_order_kanfang" data-toggle="modal" data-target="#Room_box">我要看房</button>

                    <a id="QQMessageOnlick" class="btn btn-yellow btn-pro-con" href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzgwMDA3Mjc2NF8yMjY4MzRfODAwMDcyNzY0XzJf" rel="nofollow" target="_blank">QQ咨询</a>
                    <a href="/questions" target="_blank" class="btn btn-link btn-pro-info hidden"><i class="fa fa-question-circle"></i>租前须知</a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="nav-site">
    <nav id="product_nav" class="navbar navbar-room" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="glyphicon glyphicon-align-justify"></span>

                </button>
                <input type="hidden" id="sourceNum" value="60331824" />
            </div>

            <div class="collapse navbar-collapse   bs-js-navbar-scrollspy  ">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#pro_nav_0" class="l">
                            房子详情<div class="arrow-down"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#pro_nav_1">周边配套<div class="arrow-down"></div></a>
                    </li>
                    <li>
                        <a class="ImageMapNav">地理位置</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right pro_right_info hidden">
                    <li>
                        看房咨询：
                        <span class="pro_tel">400-000-4170</span>
                    </li>
                </ul>
                <input id="hidcity" type="hidden" class="hiddencityId" value="10000" />
            </div>
        </div>
    </nav>
</div>

<div class="modal fade room_select in" data-mark="ab" id="Room_box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" novalidate="novalidate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">
                    <b>
                        我要预约看房<br>
                        <small>APPOINTMENT FORM</small>
                    </b>
                </h4>
            </div>
            <div class="modal-body">
                <div class="pro_select hidden">
                    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['room']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp48=ob_get_clean();?><?php echo $_tmp48;?>

                    <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['val']->value['status']==2){?><?php $_tmp49=ob_get_clean();?><?php echo $_tmp49;?>

                    <button type="button" class="btn_room btn btn-default btn_show" price="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
<?php $_tmp50=ob_get_clean();?><?php echo $_tmp50;?>
" sales="0" y=" 0" d="A" s="0" r="CDR03824A" t="0" bprice="0">
                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<?php $_tmp51=ob_get_clean();?><?php echo $_tmp51;?>
  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
<?php $_tmp52=ob_get_clean();?><?php echo $_tmp52;?>
元 <b></b>
                    </button>
                    <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['val']->value['status']==1){?><?php $_tmp53=ob_get_clean();?><?php echo $_tmp53;?>

                    <button type="button" class="btn_room btn btn-default disabled" price="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
<?php $_tmp54=ob_get_clean();?><?php echo $_tmp54;?>
" sales="0" y=' 0' d="C" s="0">
                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<?php $_tmp55=ob_get_clean();?><?php echo $_tmp55;?>
 已租出<b></b>
                    </button>
                    <?php ob_start();?><?php }?><?php $_tmp56=ob_get_clean();?><?php echo $_tmp56;?>

                    <?php ob_start();?><?php } ?><?php $_tmp57=ob_get_clean();?><?php echo $_tmp57;?>

                </div>

                <div class="form-horizontal" role="form">
                    <p class="help-block">请如实填写信息，我们将尽快与您联系：</p><div class="bk6"></div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">您的名字：</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control pro_message_name" placeholder="" check-type="required">
                            <input type="hidden" class="form-house-id" name="house_id" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['id'];?>
<?php $_tmp58=ob_get_clean();?><?php echo $_tmp58;?>
"/>
                            <input type="hidden" class="form-area-id" name="area_id" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['area_id'];?>
<?php $_tmp59=ob_get_clean();?><?php echo $_tmp59;?>
"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">您的手机：</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control pro_message_tel" placeholder="" check-type="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">性别：</label>
                        <div class="col-sm-8">
                            <div class="radio-inline">
                                <label>
                                    <input type="radio" name="sex" value="1" checked="">
                                    男
                                </label>
                            </div>
                            <div class="radio-inline">
                                <label>
                                    <input type="radio" name="sex" value="2">
                                    女
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">入住人数：</label>
                        <div class="col-sm-8">
                            <div class="radio-inline">
                                <label>
                                    <input type="radio" name="people" value="1" checked="">
                                    1人
                                </label>
                            </div>
                            <div class="radio-inline">
                                <label>
                                    <input type="radio" name="people" value="2">
                                    2人
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">个人需求：</label>
                        <div class="col-sm-8">
                            <textarea class="form-control pro_message_remarks" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group hidden">
                        <label for="" class="col-sm-5 control-label">你是从哪个渠道知道我们的：</label>
                        <div class="col-sm-6">
                            <select class="form-control ddl_UserOrigin">
                                <option value="0">请选择</option>
                                <option value="71">QQ</option>
                                <option value="72">电话</option>
                                <option value="73">微信</option>
                            </select>

                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default padding30" data-dismiss="modal">取 消</button>
                <button type="button" class="btn btn-orange  btn-valid padding30">提 交</button>
            </div>
        </div>
    </div>
</div>

<!-- 预约看房反馈 -->
<div id="lookAtHouseSuccessContainer"></div>
<div class="modal fade in" id="modal_yayi_box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content  modal_yayi">
            <div class=" modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <div class="content">

                    <div class="row">
                        <div class="col-sm-5 con_left">
                            <h4 class="title"><strong>举个例子</strong></h4>
                            <p class="info">
                                以600元房子为例，需首次支付：<br>
                                押金:600元*2个月=1200元<br>
                                租金:600元*1个月=600元<br>
                                管理服务费:<br>
                                (600元*10%)60元*1个月=60元<br>
                                共计：1860元
                            </p>
                        </div>
                        <div class="col-sm-6 con_right">
                            <h4 class="title"><strong>支付方式</strong></h4>
                            <p class="p_tips email">
                                <strong>
                                    现场：与签约管家用POS机支付<br>
                                    预定：支付宝转款至sccaiwu@uoko.com
                                </strong>
                            </p>
                            <p class="p_con ">
                                后续支付：<br>
                                剩余11个月房租，按月按时存入银行即可！<br>
                                <i>(BTW：如个人有信用污点记录，无法享受月付~) </i>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="room-detail">
        <!-- data-target="#navbar-example2" data-offset="0"-->
        <div class="order-ico-group ">
            <div class="sprite sprite_probox_ico porbox-ico ">详</div>
            <div class="sprite sprite_probox_ico porbox-ico ">房</div>
            <div class="sprite sprite_probox_ico porbox-ico ">共</div>
            <div class="sprite sprite_probox_ico porbox-ico ">院</div>
            <div class="sprite sprite_probox_ico porbox-ico ico-s">WHY</div>
            <div class="sprite sprite_probox_ico porbox-ico ico-s">HOW</div>
            <div class="sprite sprite_probox_ico porbox-ico ">荐</div>
        </div>


        <!--pro_nav_1-->
        <div class="d_shuoshuo">
            <div class="row">
            </div>
        </div>

        <div id="pro_nav_0" class="probox">
            <div class="probox-heading">
                <div class="sprite sprite_probox_ico porbox-ico ">详</div>
                <div class="probox-title">房间基本情况</div>
            </div>
            <div class="probox-body-l">
                <div class="panel panel-default d_table">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>这套房子都有些啥？</strong></h3>
                    </div>
                    <div class="table-responsive relative">
                        <table class="table table_config">
                            <thead>
                            <tr class="config_title">
                                <th></th>
                                <th>室友</th>
                                <th>面积</th>
                                <th>飘窗</th>
                                <th>阳台</th>
                                <th>独卫</th>
                                <th>2人</th>
                                <th>空调</th>
                                <th>价格</th>
                                <th>最早入住日</th>
                                <th>更多</th>
                            </tr>
                            </thead>

                            <tbody class="config_content">

                            <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['room']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp60=ob_get_clean();?><?php echo $_tmp60;?>

                            <tr>
                                <td class="p_index"><strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<?php $_tmp61=ob_get_clean();?><?php echo $_tmp61;?>
</strong></td>
                                <td>
                                    <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['val']->value['status']==2){?><?php $_tmp62=ob_get_clean();?><?php echo $_tmp62;?>

                                    <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp63=ob_get_clean();?><?php echo $_tmp63;?>
100x100.png" width="30" height="30" class="tips" data-toggle="tooltip" data-original-title="就他了！" alt="就他了！" />
                                    <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['val']->value['status']==1){?><?php $_tmp64=ob_get_clean();?><?php echo $_tmp64;?>

                                    <!--<img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp65=ob_get_clean();?><?php echo $_tmp65;?>
member/headpic/small/pic-boy-01.png" width="30" height="30" class="tips" data-toggle="tooltip" data-original-title="我是男生！" alt="我是男生！" />-->
                                    <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp66=ob_get_clean();?><?php echo $_tmp66;?>
pic-girl-01.png" width="30" height="30" class="tips" data-toggle="tooltip" data-original-title="我是女生！" alt="我是女生！" />
                                    <?php ob_start();?><?php }?><?php $_tmp67=ob_get_clean();?><?php echo $_tmp67;?>

                                </td>
                                <td><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['size'];?>
<?php $_tmp68=ob_get_clean();?><?php echo $_tmp68;?>
<span class="arial">㎡</span></td>
                                <td>
                                    <?php ob_start();?><?php if (in_array(1,$_smarty_tpl->tpl_vars['val']->value['type'])){?><?php $_tmp69=ob_get_clean();?><?php echo $_tmp69;?>

                                    <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp70=ob_get_clean();?><?php echo $_tmp70;?>
greenright.jpg" style="width: 15px;height: 18px">
                                    <?php ob_start();?><?php }?><?php $_tmp71=ob_get_clean();?><?php echo $_tmp71;?>

                                </td>
                                <td>
                                    <?php ob_start();?><?php if (in_array(2,$_smarty_tpl->tpl_vars['val']->value['type'])){?><?php $_tmp72=ob_get_clean();?><?php echo $_tmp72;?>

                                    <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp73=ob_get_clean();?><?php echo $_tmp73;?>
greenright.jpg" style="width: 15px;height: 18px">
                                    <?php ob_start();?><?php }?><?php $_tmp74=ob_get_clean();?><?php echo $_tmp74;?>

                                </td>
                                <td>
                                    <?php ob_start();?><?php if (in_array(3,$_smarty_tpl->tpl_vars['val']->value['type'])){?><?php $_tmp75=ob_get_clean();?><?php echo $_tmp75;?>

                                    <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp76=ob_get_clean();?><?php echo $_tmp76;?>
greenright.jpg" style="width: 15px;height: 18px">
                                    <?php ob_start();?><?php }?><?php $_tmp77=ob_get_clean();?><?php echo $_tmp77;?>

                                </td>
                                <td>
                                    <?php ob_start();?><?php if (in_array(4,$_smarty_tpl->tpl_vars['val']->value['type'])){?><?php $_tmp78=ob_get_clean();?><?php echo $_tmp78;?>

                                    <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp79=ob_get_clean();?><?php echo $_tmp79;?>
greenright.jpg" style="width: 15px;height: 18px">
                                    <?php ob_start();?><?php }?><?php $_tmp80=ob_get_clean();?><?php echo $_tmp80;?>

                                </td>
                                <td>
                                    <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp81=ob_get_clean();?><?php echo $_tmp81;?>
greenright.jpg" style="width: 15px;height: 18px">
                                </td>
                                <td>
                                    <small style="margin-right:2px">¥</small><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
<?php $_tmp82=ob_get_clean();?><?php echo $_tmp82;?>
                                       </td>
                                <td>
                                    立即入住
                                </td>
                                <td>
                                </td>
                            </tr>
                            <?php ob_start();?><?php } ?><?php $_tmp83=ob_get_clean();?><?php echo $_tmp83;?>

                            </tbody>
                        </table>
                    </div>
                    <div class="config_room">
                        <span class="mr20 title"><strong>每个房间都有这些</strong></span>
                        <span class="mr20"><img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp84=ob_get_clean();?><?php echo $_tmp84;?>
greenright.jpg" style="width: 15px;height: 18px"> 床</span>
                        <span class="mr20"><img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp85=ob_get_clean();?><?php echo $_tmp85;?>
greenright.jpg" style="width: 15px;height: 18px"> 书桌</span>
                        <span class="mr20"><img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp86=ob_get_clean();?><?php echo $_tmp86;?>
greenright.jpg" style="width: 15px;height: 18px"> 衣柜</span>
                        <span class="mr20"><img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp87=ob_get_clean();?><?php echo $_tmp87;?>
greenright.jpg" style="width: 15px;height: 18px"> 折叠椅</span>
                        <span class="mr20"><img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp88=ob_get_clean();?><?php echo $_tmp88;?>
greenright.jpg" style="width: 15px;height: 18px"> 台灯</span>
                        <span class="mr20"><img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp89=ob_get_clean();?><?php echo $_tmp89;?>
greenright.jpg" style="width: 15px;height: 18px"> 穿衣镜</span>
                        <span class="mr20"><img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp90=ob_get_clean();?><?php echo $_tmp90;?>
greenright.jpg" style="width: 15px;height: 18px"> 挂钩</span>
                    </div>
                    <div class="config_public">
                        <div class="title">公共区域都有这些</div>
                        <div class="content">
                            <span class="mr20">
 无线WIFI                        </span>
                            <span class="mr20">公共储物区</span>
                            <span class="mr20">餐桌</span>
                            <span class="mr20">餐椅</span>
                            <span class="mr20">冰箱</span>
                            <span class="mr20">洗衣机</span>
                            <span class="mr20">热水器</span>
                            <span class="mr20">浴霸</span>
                            <span class="mr20">公用厨房</span>
                        </div>
                    </div>
                    <a class="table_weixin weixin_down" data-target="#weixin_home" href="/AllOther/WeixinFoot" data-toggle="modal"></a>
                </div>
            </div>
        </div>
        <!--无数据时不显示-->
        <div class="probox">
            <div class="probox-heading">
                <div class="sprite sprite_probox_ico porbox-ico ">房</div>
                <div class="probox-title">房间详情</div>
            </div>
            <div class="probox-body-l table_config">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="row row-5">
                            <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['room']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp91=ob_get_clean();?><?php echo $_tmp91;?>

                            <div class="col-md-6">
                                <div class="proinfo">
                                    <img data-original="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php $_tmp92=ob_get_clean();?><?php echo $_tmp92;?>
&amp;width=450&amp;height=320" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp93=ob_get_clean();?><?php echo $_tmp93;?>
loading.gif" class="img-responsive" alt="">
                                    <div class="sprite sprite_proinfo-pix proinfo-pix"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<?php $_tmp94=ob_get_clean();?><?php echo $_tmp94;?>
</div>
                                </div>
                            </div>
                            <?php ob_start();?><?php } ?><?php $_tmp95=ob_get_clean();?><?php echo $_tmp95;?>

                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>




        <!--无数据时不显示-->
        <div class="probox">
            <div class="probox-heading">
                <div class="sprite sprite_probox_ico porbox-ico ">共</div>
                <div class="probox-title">公共区域详情</div>
            </div>
            <div class="probox-body-l">
                <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['houseImgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp96=ob_get_clean();?><?php echo $_tmp96;?>

                <div class="pro_public_img">
                    <img data-original="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php $_tmp97=ob_get_clean();?><?php echo $_tmp97;?>
&amp;width=600&amp;height=400&amp;w=1" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp98=ob_get_clean();?><?php echo $_tmp98;?>
loading.gif" class="img-responsive" alt="公区.jpg">
                </div>
                <?php ob_start();?><?php } ?><?php $_tmp99=ob_get_clean();?><?php echo $_tmp99;?>

            </div>
        </div>


        <!--无数据时不显示-->
        <div class="probox" id="pro_nav_1">
            <div class="probox-heading">
                <div class="sprite sprite_probox_ico porbox-ico ">院</div>
                <div class="probox-title">这里是小区&周边配套</div>
            </div>
            <div class="probox-body-l">

                <!--无数据时也需要显示哦哦哦哦哦哦-->
                <div class="panel panel-default d_support">
                    <!---有小区数据时不显示开始-->
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>周边配套</strong></h3>
                    </div>
                    <!---有小区数据时不显示结束-->
                    <ul class="list-group">
                        <li class=" list-group-item">
                            <div class="row">
                                <div class="col-md-2 text-center "><small class="text-song">附近商圈</small></div>
                                <div class="col-md-10">
                                    <small class="text-song">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['business'];?>
<?php $_tmp100=ob_get_clean();?><?php echo $_tmp100;?>

                                    </small>
                                </div>
                            </div>
                        </li>
                        <li class=" list-group-item">
                            <div class="row">
                                <div class="col-md-2 text-center "><small class="text-song">此房特别适合</small></div>
                                <div class="col-md-10">
                                    <small class="text-song">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['crowd'];?>
<?php $_tmp101=ob_get_clean();?><?php echo $_tmp101;?>

                                    </small>
                                </div>
                            </div>
                        </li>
                        <li class=" list-group-item">
                            <div class="row">
                                <div class="col-md-2 text-center "><small class="text-song">附近地铁</small></div>
                                <div class="col-md-10">
                                    <small class="text-song">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['train'];?>
<?php $_tmp102=ob_get_clean();?><?php echo $_tmp102;?>

                                    </small>
                                </div>
                            </div>
                        </li>
                        <li class=" list-group-item">
                            <div class="row">
                                <div class="col-md-2 text-center "><small class="text-song">公交线路</small></div>
                                <div class="col-md-10">
                                    <small class="text-song">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['bus'];?>
<?php $_tmp103=ob_get_clean();?><?php echo $_tmp103;?>

                                    </small>
                                </div>
                            </div>
                        </li>
                        <li class=" list-group-item">
                            <div class="row">
                                <div class="col-md-2 text-center "><small class="text-song">超市</small></div>
                                <div class="col-md-10">
                                    <small class="text-song">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['market'];?>
<?php $_tmp104=ob_get_clean();?><?php echo $_tmp104;?>

                                    </small>
                                </div>
                            </div>
                        </li>
                        <li class=" list-group-item">
                            <div class="row">
                                <div class="col-md-2 text-center "><small class="text-song">菜市</small></div>
                                <div class="col-md-10">
                                    <small class="text-song">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['food_market'];?>
<?php $_tmp105=ob_get_clean();?><?php echo $_tmp105;?>

                                    </small>
                                </div>
                            </div>
                        </li>
                        <li class=" list-group-item">
                            <div class="row">
                                <div class="col-md-2 text-center "><small class="text-song">银行</small></div>
                                <div class="col-md-10">
                                    <small class="text-song">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['bank'];?>
<?php $_tmp106=ob_get_clean();?><?php echo $_tmp106;?>

                                    </small>
                                </div>
                            </div>
                        </li>
                        <li class=" list-group-item">
                            <div class="row">
                                <div class="col-md-2 text-center "><small class="text-song">餐饮</small></div>
                                <div class="col-md-10">
                                    <small class="text-song">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['restaurant'];?>
<?php $_tmp107=ob_get_clean();?><?php echo $_tmp107;?>

                                    </small>
                                </div>
                            </div>
                        </li>
                        <li class=" list-group-item">
                            <div class="row">
                                <div class="col-md-2 text-center "><small class="text-song">医院</small></div>
                                <div class="col-md-10">
                                    <small class="text-song">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['house']->value['hospital'];?>
<?php $_tmp108=ob_get_clean();?><?php echo $_tmp108;?>

                                    </small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="probox">
            <div class="probox-heading">
                <div class="sprite sprite_probox_ico porbox-ico ico-s">WHY</div>
                <div class="probox-title">为什么选择优客？</div>
            </div>
            <div class="probox-body-l">
                <img data-original="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp109=ob_get_clean();?><?php echo $_tmp109;?>
probox-why.jpg" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp110=ob_get_clean();?><?php echo $_tmp110;?>
loading.gif" class="img-responsive " width="805" height="649" />
            </div>
        </div>
        <div class="probox">
            <div class="probox-heading">
                <div class="sprite sprite_probox_ico porbox-ico ico-s">HOW</div>
                <div class="probox-title">怎么租房呐？</div>
            </div>
            <div class="probox-body-l">
                <img data-original="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp111=ob_get_clean();?><?php echo $_tmp111;?>
probox-setup.jpg" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp112=ob_get_clean();?><?php echo $_tmp112;?>
loading.gif" class="img-responsive " width="804" height="124" style="display: block;">
            </div>
        </div>
        <div id="pro_nav_2" class="d_dynamic hidden-xs hidden-sm hidden " style="padding-top: 25px;display:none">
            <div class="line_name text-center">
                <span class="label label-default">【每一间房子都有一段青春往事】</span>
                <i class="fa fa-caret-down"></i>
            </div>
            <div class="row" style="display:none">
                <div class="col-md-5 marg_top">

                    <div class="dynamic_message pull-right">
                        <div class="m_arrow_left">
                            <i class="fa fa-caret-right m_arrow m_arrow_c "></i>
                            <i class="fa fa-caret-right m_arrow m_arrow_b"></i>
                        </div>

                        <p class="message_info">C房间来了新的小伙伴，是天秤座，80后，职员，男性，心情顿时变好。</p>
                        <div class="text-muted text-right">2016-08</div>
                    </div>
                </div>
                <div class="col-md-2 line_time">
                    <div class="line_content center-block">
                        <div class="line_circle"><i class="fa fa-circle circle_c"></i><i class="fa fa-clock-o circle_b"></i></div>
                        <div class="line_circle"><i class="fa fa-circle circle_c"></i><i class="fa fa-clock-o circle_b"></i></div>
                    </div>
                    <div class="line_home ">
                        <img class="center-block" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp113=ob_get_clean();?><?php echo $_tmp113;?>
product/mushroom.png" width="61" height="55" alt="优客逸家租客互动" />
                    </div>
                </div>
                <div class="col-md-5 marg_top">
                    <div class="dynamic_message  marg_top_right">
                        <div class="m_arrow_right">
                            <i class="fa fa-caret-left m_arrow m_arrow_c "></i>
                            <i class="fa fa-caret-left m_arrow m_arrow_b "></i>
                        </div>
                        <p class="message_info">本府竣工，正式开放，欢迎小伙伴们前来入住。</p>
                        <div class="text-muted">2016-07</div>
                    </div>
                </div>
            </div>
            <div class="bk30"></div>
        </div>

    </div>
            <div class="slide_map_content ImageMapDiv" data-toggle="modal" data-target="#Room_map">
                <img id="imageMapShow" class="img-responsive" width="223" height="130" rel="nofollow" onerror="document.getElementById('imageMapDiv').className ='nomap';this.src = 'http://uoko.comstatics/img/common/detailmap_no.png';" realsrc="http://api.map.baidu.com/staticimage?width=223&amp;height=130&amp;zoom=14&amp;markers=104.090349,30.60392&amp;markerStyles=-1,http://uoko.comstatics/img/common/markers_icon.png" src="http://api.map.baidu.com/staticimage?width=223&amp;height=130&amp;zoom=14&amp;markers=104.090349,30.60392&amp;markerStyles=-1,http://uoko.comstatics/img/common/markers_icon.png">
                <a class="map_box"><i class="fa fa-search"></i>查看位置和路线</a>
            </div>
    <div class="clearfix"></div>
</div>

<div class="modal fade  modal-lg  modal_room_map in" id="Room_map" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><strong>地图查看</strong></h4>
            </div>
            <div class="modal-body">
                <div class="map-detail">
                    <div class="list" id="mapSearch">
                        <a id="eat" href="javascript:void(0)">餐饮</a><span>|</span><a id="supermarket" href="javascript:void(0)">超市</a><span>|</span><a id="movie" href="javascript:void(0)">影院</a><span>|</span><a id="hotel" href="javascript:void(0)">酒店</a><span>|</span><a id="subway" href="javascript:void(0)">地铁站</a><span>|</span><a id="school" href="javascript:void(0)">学校</a><span>|</span><a id="bank" href="javascript:void(0)">银行</a><span>|</span><a id="hospital" href="javascript:void(0)">医院</a><span>|</span><a id="scenic" href="javascript:void(0)">景点</a><span>|</span><a id="fillsta" href="javascript:void(0)">加油站</a>
                    </div>
                    <div class="map" style="width: 100%; height: 300px; overflow: hidden; position: relative; z-index: 0; color: rgb(0, 0, 0); text-align: left; background-color: rgb(243, 241, 236);" id="mapDiv"><div style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: url(http://api.map.baidu.com/images/openhand.cur) 8 8, default;"><div class="BMap_mask" style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; -webkit-user-select: none; width: 1290px; height: 300px;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;"><span class="BMap_Marker BMap_noprint" unselectable="on" "=" " style=" position absolute; padding 0px; margin 0px; border 0px; cursor pointer; width 19px; height 25px; left 635px; top 125px; z-index -6108810; background url(http />/api.map.baidu.com/images/blank.gif);" title=""></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;"><span class="BMap_Marker" unselectable="on" style="position: absolute; padding: 0px; margin: 0px; border: 0px; width: 0px; height: 0px; left: 635px; top: 125px; z-index: -6108810;"><div style="position: absolute; margin: 0px; padding: 0px; width: 19px; height: 25px; overflow: hidden; left: 0px; top: -13px;"><img src="http://api.map.baidu.com/images/marker_red_sprite.png" style="border:none;left:0px; top:0px; position:absolute;"></div></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300;"><span unselectable="on" style="position: absolute; padding: 0px; margin: 0px; border: 0px; width: 20px; height: 11px; left: 639px; top: 139px;"><div style="position: absolute; margin: 0px; padding: 0px; width: 20px; height: 11px; overflow: hidden; left: 10px; top: -10px;"><img src="http://api.map.baidu.com/images/marker_red_sprite.png" style="border:none;left:-19px; top:-13px; position:absolute;"></div></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div></div><div style="position: absolute; top: 0px; left: 0px; z-index: 1; -webkit-backface-visibility: hidden;"><div style="position: absolute; z-index: -100; left: 645px; top: 150px;"><img src="http://online3.map.bdimg.com/tile/?qt=tile&amp;x=11315&amp;y=3468&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -233px; top: -124px; opacity: 1;"><img src="http://online2.map.bdimg.com/tile/?qt=tile&amp;x=11314&amp;y=3468&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -489px; top: -124px; opacity: 1;"><img src="http://online4.map.bdimg.com/tile/?qt=tile&amp;x=11316&amp;y=3468&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 23px; top: -124px; opacity: 1;"><img src="http://online4.map.bdimg.com/tile/?qt=tile&amp;x=11315&amp;y=3469&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -233px; top: -380px; opacity: 1;"><img src="http://online2.map.bdimg.com/tile/?qt=tile&amp;x=11315&amp;y=3467&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -233px; top: 132px; opacity: 1;"><img src="http://online1.map.bdimg.com/tile/?qt=tile&amp;x=11313&amp;y=3468&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -745px; top: -124px; opacity: 1;"><img src="http://online0.map.bdimg.com/tile/?qt=tile&amp;x=11317&amp;y=3468&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 279px; top: -124px; opacity: 1;"><img src="http://online3.map.bdimg.com/tile/?qt=tile&amp;x=11316&amp;y=3467&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 23px; top: 132px; opacity: 1;"><img src="http://online3.map.bdimg.com/tile/?qt=tile&amp;x=11314&amp;y=3469&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -489px; top: -380px; opacity: 1;"><img src="http://online0.map.bdimg.com/tile/?qt=tile&amp;x=11316&amp;y=3469&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 23px; top: -380px; opacity: 1;"><img src="http://online1.map.bdimg.com/tile/?qt=tile&amp;x=11314&amp;y=3467&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -489px; top: 132px; opacity: 1;"><img src="http://online1.map.bdimg.com/tile/?qt=tile&amp;x=11318&amp;y=3468&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 535px; top: -124px; opacity: 1;"><img src="http://online4.map.bdimg.com/tile/?qt=tile&amp;x=11317&amp;y=3467&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 279px; top: 132px; opacity: 1;"><img src="http://online1.map.bdimg.com/tile/?qt=tile&amp;x=11317&amp;y=3469&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 279px; top: -380px; opacity: 1;"><img src="http://online0.map.bdimg.com/tile/?qt=tile&amp;x=11313&amp;y=3467&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -745px; top: 132px; opacity: 1;"><img src="http://online0.map.bdimg.com/tile/?qt=tile&amp;x=11318&amp;y=3467&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 535px; top: 132px; opacity: 1;"><img src="http://online2.map.bdimg.com/tile/?qt=tile&amp;x=11318&amp;y=3469&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 535px; top: -380px; opacity: 1;"><img src="http://online2.map.bdimg.com/tile/?qt=tile&amp;x=11313&amp;y=3469&amp;z=16&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -745px; top: -380px; opacity: 1;"></div></div><div style="position: absolute; top: 0px; left: 0px; z-index: 2;"></div></div><div class=" anchorBL" style="height: 32px; position: absolute; z-index: 10; bottom: 0px; right: auto; top: auto; left: 1px;"><a title="到百度地图查看此区域" target="_blank" href="http://map.baidu.com/?sr=1" style="outline: none;"><img style="border:none;width:77px;height:32px" src="http://api.map.baidu.com/images/copyright_logo.png"></a></div><div id="zoomer" style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:url(http://api.map.baidu.com/images/openhand.cur) 8 8,default"><div class="BMap_zoomer" style="top:0;left:0;"></div><div class="BMap_zoomer" style="top:0;right:0;"></div><div class="BMap_zoomer" style="bottom:0;left:0;"></div><div class="BMap_zoomer" style="bottom:0;right:0;"></div></div><div unselectable="on" class=" BMap_stdMpCtrl BMap_stdMpType0 BMap_noprint anchorTL" style="width: 62px; height: 204px; bottom: auto; right: auto; top: 10px; left: 10px; position: absolute; z-index: 1100;"><div class="BMap_stdMpPan"><div class="BMap_button BMap_panN" title="向上平移"></div><div class="BMap_button BMap_panW" title="向左平移"></div><div class="BMap_button BMap_panE" title="向右平移"></div><div class="BMap_button BMap_panS" title="向下平移"></div><div class="BMap_stdMpPanBg BMap_smcbg"></div></div><div class="BMap_stdMpZoom" style="height: 159px; width: 62px;"><div class="BMap_button BMap_stdMpZoomIn" title="放大一级"><div class="BMap_smcbg"></div></div><div class="BMap_button BMap_stdMpZoomOut" title="缩小一级" style="top: 138px;"><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSlider" style="height: 120px;"><div class="BMap_stdMpSliderBgTop" style="height: 120px;"><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSliderBgBot" style="top: 19px; height: 105px;"></div><div class="BMap_stdMpSliderMask" title="放置到此级别"></div><div class="BMap_stdMpSliderBar" title="拖动缩放" style="cursor: url(http://api.map.baidu.com/images/openhand.cur) 8 8, default; top: 19px;"><div class="BMap_smcbg"></div></div></div><div class="BMap_zlHolder"><div class="BMap_zlSt"><div class="BMap_smcbg"></div></div><div class="BMap_zlCity"><div class="BMap_smcbg"></div></div><div class="BMap_zlProv"><div class="BMap_smcbg"></div></div><div class="BMap_zlCountry"><div class="BMap_smcbg"></div></div></div></div></div><div unselectable="on" class=" BMap_cpyCtrl anchorBL" style="cursor: default; white-space: nowrap; color: black; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 11px; line-height: 15px; font-family: arial, sans-serif; bottom: 2px; right: auto; top: auto; left: 81px; position: absolute; z-index: 10; background: none;"><span _cid="1"><span style="font-size:11px">© 2014 Baidu&nbsp;- Data © <a target="_blank" href="http://www.navinfo.com/">NavInfo</a> &amp; <a target="_blank" href="http://www.cennavi.com.cn/">CenNavi</a> &amp; <a target="_blank" href="http://www.365ditu.com/">道道通</a></span></span></div></div>
                </div>

                <div class="traffic">
                    <div class="bk10"></div>
                    <div class="borhood">
                        <p>
                            所在小区：<span id="ctl00_ContentPlaceHolder1_CommunityName">凯丽香江</span>
                        </p>
                        <p>小区描述：</p>
                    </div>
                    <div class="bk10"></div>
                    <div class="traffic-des">
                        <div class="bus-way gongjiaoline">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <span id="this_houseposition" class="input-group-addon input-group-uk">从这里到</span>
                                        <input id="gongjiaoline_text" type="text" class="form-control ">
                                        <span class="input-group-btn">
                                            <button id="busline_querybutton" class="btn  btn-orange" type="button">查询路线</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="taxi">
                                        <span class="f12 fb">打车费用：</span>
                                        <span id="bytaxi_price" class="text-orange fb"></span>
                                        <span class="text">(按最短路程计费)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bk10"></div>
                            <div id="gjTips" class="alert alert-danger fade " style="display: none">
                                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                <strong>请您输入有效的精确地址描述</strong>
                            </div>
                        </div>
                        <div class="bk10"></div>
                        <!--bus-way-style -->
                        <div id="dvPolicy" class="bus-way-style">
                            <button type="button" class="btn btn-primary btn-sm selected" id="policy0">
                                较快捷
                                <span class="caret"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-sm" id="policy1">
                                不坐地铁
                                <span class="caret"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-sm" id="policy2">
                                少换乘
                                <span class="caret"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-sm" id="policy3">
                                少步行
                                <span class="caret"></span>
                            </button>
                        </div>

                        <div id="results" class="subway-result">
                        </div>
                        <!--gongjiaoreasult -->

                        <input type="hidden" id="hidlng" value='104.090349'>
                        <input type="hidden" id="hidlat" value='30.60392'>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>

<!-- 预约看房反馈 -->
<div class="modal fade room_select_callback" id="Room_box_callback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">
                    预约已经提交<br />
                    <small>SUCCESS</small>
                </h4>
            </div>
            <div class=" modal-body">
                <p class="room_callback"><b><span class="select_call_name text-info"></span></b>：<span class="room_callback_info">您的看房需求已收到！</span></p>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp114=ob_get_clean();?><?php echo $_tmp114;?>
footer-weixin-cd.png" alt="扫一扫加入优客逸家官方微信，有机会赢取大奖！" class="img-responsive" />

                    </div>
                    <div class="col-sm-6">
                        <h2 class="text-yellow">
                            别关！<br />
                            先扫描二维码！
                        </h2>
                        <p>
                            茫茫人海别轻易失去联系，扫二维码加UOKOHOME为微信好友方便随时勾兑！
                        </p>
                        <a class="link underline" href="/AboutUs/contact/">更多联系方式</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">确 定</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp115=ob_get_clean();?><?php echo $_tmp115;?>
image-margnific.min.js"></script>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp116=ob_get_clean();?><?php echo $_tmp116;?>
jquery.lazyload.min.js"></script>
<script src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_js']->value;?>
<?php $_tmp117=ob_get_clean();?><?php echo $_tmp117;?>
_product.js"></script>
<script>
    $(document).ready(function() {
        $("#QQMessageOnlick").click(pyRegisterCvt);
    });
    function pyRegisterCvt() {
        var w = window, d = document, e = encodeURIComponent;
        var b = location.href, c = d.referrer, f, g = d.cookie, h = g.match(/(^|;)\s*ipycookie=([^;]*)/), i = g.match(/(^|;)\s*ipysession=([^;]*)/);
        if (w.parent != w) { f = b; b = c; c = f; }; u = '//stats.ipinyou.com/cvt?a=' + e('_9.9S.5G5lCCr0Vxwm4mZGV0tbPP') + '&c=' + e(h ? h[2] : '') + '&s=' + e(i ? i[2].match(/jump\%3D(\d+)/)[1] : '') + '&u=' + e(b) + '&r=' + e(c) + '&rd=' + (new Date()).getTime() + '&e=';
        (new Image()).src = u;
    }
</script>
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('share/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp118=ob_get_clean();?><?php echo $_tmp118;?>

</body>

</html>
<?php }} ?>