<?php /* Smarty version Smarty-3.1.6, created on 2016-09-12 10:24:15
         compiled from "./Application/Index/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2562857c64dba451331-50111099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '114b671a9aacd43fc2c3e063330dd75fee80711a' => 
    array (
      0 => './Application/Index/View\\Index\\index.html',
      1 => 1473647053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2562857c64dba451331-50111099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c64dba60e89',
  'variables' => 
  array (
    'ad' => 0,
    'val' => 0,
    'img' => 0,
    'house' => 0,
    'tse_img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c64dba60e89')) {function content_57c64dba60e89($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('share/header_url.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

</head>
<body data-spy="scroll">
    <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('share/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>

<div class="jum-banner">
    <div class="shuff">
        <ul class="rslides f426x240">
            <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>

            <li style="background-color:<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['back_color'];?>
<?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>
">
                <a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
<?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>
" target="_blank">
                    <img data-src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['img']->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['img']->value;?>
<?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>
" alt="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
<?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
" />
                </a>
            </li>
            <?php ob_start();?><?php } ?><?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>

        </ul>
    </div>
</div>
<div class="i-search">
    <div class="search-main">
        <div class="i-search-box">
            <input type="text" class="form-control" placeholder="请输入关键字查找" id="KKW2">
            <i class="i-spring-ice"></i>
        </div>
        <div class="btn-jixue"></div>
        <button class="btn  search-btn" id="btnSearch" type="submit"></button>
        <a class="home-map-serach" href="/search_map/" title="地图找房" target="_blank"></a>
        <div class="clearfix"></div>
        <div class="search-keywords">
            <!--全局变量-->
            <span><strong>热门区域：</strong></span>
            <a href="/rent/cdjnq/h56/">九里堤</a>&nbsp;<a href="/rent/cdqyq/h234/">内光华</a>&nbsp;<a href="/rent/cdwhq/h6/">红牌楼</a>&nbsp;<a href="/rent/cdgxq/h68a1//">火车南站</a>&nbsp;<a href="/rent/cdjjq/h242a1/">静居寺</a>
        </div>

    </div>
</div>
<div class="i-list container-min">
    <div class="list-name">今日精选房源</div>
    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['house']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>

    <div class="thumb-box">
        <a href="/index/rent/detail/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>
" target="_blank">
            <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>
loading.gif" data-original="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php $_tmp15=ob_get_clean();?><?php echo $_tmp15;?>
&amp;width=318&amp;height=212" width=" 318" height="212" alt="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
<?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>
" />
        </a>
        <h4 class="title">
            <span style="padding: 0 2px; font-size: 12px; color: #fff; background-color: #02a39b; border: 1px solid #02a39b; border-radius: 3px;">自营</span>
            <a href="/index/rent/detail/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php $_tmp17=ob_get_clean();?><?php echo $_tmp17;?>
" target="_blank">
                <strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
<?php $_tmp18=ob_get_clean();?><?php echo $_tmp18;?>
</strong>
            </a>
        </h4>
        <div class="price">
            <span>¥</span>
            <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['val']->value['min_price']==$_smarty_tpl->tpl_vars['val']->value['max_price']){?><?php $_tmp19=ob_get_clean();?><?php echo $_tmp19;?>

            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['min_price'];?>
<?php $_tmp20=ob_get_clean();?><?php echo $_tmp20;?>

            <?php ob_start();?><?php }else{ ?><?php $_tmp21=ob_get_clean();?><?php echo $_tmp21;?>

            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['min_price'];?>
<?php $_tmp22=ob_get_clean();?><?php echo $_tmp22;?>
<span>~</span><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['max_price'];?>
<?php $_tmp23=ob_get_clean();?><?php echo $_tmp23;?>

            <?php ob_start();?><?php }?><?php $_tmp24=ob_get_clean();?><?php echo $_tmp24;?>

            <span class="price-months">元/月</span>
        </div>
        <p class="des"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['address'];?>
<?php $_tmp25=ob_get_clean();?><?php echo $_tmp25;?>
</p>
        <div class="clearfix"></div>
    </div>
    <?php ob_start();?><?php } ?><?php $_tmp26=ob_get_clean();?><?php echo $_tmp26;?>

</div>

<div class="jum-choose">
    <!--全局变量-->
    <img class="center-block" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp27=ob_get_clean();?><?php echo $_tmp27;?>
i-choose_title.png" alt="选择优客的5项理由" />
    <div class="i-choose-list">
        <div class="box">
            <img class="center-block" width="90" height="90" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp28=ob_get_clean();?><?php echo $_tmp28;?>
_blank.gif" data-original="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp29=ob_get_clean();?><?php echo $_tmp29;?>
i-choose_01.png" alt="无中介费 网上看房 拎包入住" />
            <h4 class="title">无中介费</h4>
            <p>网上看房 拎包入住</p>
        </div>
        <div class="box">
            <img class="center-block" width="90" height="90" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp30=ob_get_clean();?><?php echo $_tmp30;?>
_blank.gif" data-original="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp31=ob_get_clean();?><?php echo $_tmp31;?>
i-choose_02.png" alt="年轻人 生活品质" />
            <h4 class="title">年轻人</h4>
            <p>我们追求 生活品质</p>
        </div>
        <div class="box">
            <img class="center-block" width="90" height="90" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp32=ob_get_clean();?><?php echo $_tmp32;?>
_blank.gif" data-original="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp33=ob_get_clean();?><?php echo $_tmp33;?>
i-choose_03.png" alt="真实房源 凭证齐全 一房一价" />
            <h4 class="title">真实房源</h4>
            <p>凭证齐全 一房一价</p>
        </div>
        <div class="box">
            <img class="center-block" width="90" height="90" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp34=ob_get_clean();?><?php echo $_tmp34;?>
_blank.gif" data-original="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp35=ob_get_clean();?><?php echo $_tmp35;?>
i-choose_05.png" alt="光纤网络 免费wifi" />
            <h4 class="title">免费wifi</h4>
            <p>光纤网络 基情LOL</p>
        </div>
        <div class="box">
            <img class="center-block" width="90" height="90" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp36=ob_get_clean();?><?php echo $_tmp36;?>
_blank.gif" data-original="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp37=ob_get_clean();?><?php echo $_tmp37;?>
i-choose_04.png" alt="提供维修保洁等各类管理服务" />
            <h4 class="title">维修保洁</h4>
            <p>提供各类管理服务</p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="i-custom">
    <div class="custom-box">
        <!--底部广告位1-->
        <a href="/aboutus/join/" target="_blank"><img src="http://images.uoko.com/Upload/ShareImages/2015-12-31/07018c73-4a6f-46ff-9593-8846b8d97548.jpg" width="525" height="300" alt="优客逸家招聘精英人才" /></a>
    </div>
    <div class="custom-box">
        <!--底部广告位2-->
        <a href="/special/corporate/" target="_blank"><img src="http://images.uoko.com/Upload/ShareImages/2014-12-31/062240a2-a477-409e-a6c9-4477743448b8.jpg" width="525" height="150" alt="优客逸家企业客户" /></a>

        <!--底部广告位3-->
        <a href="/special/feature/14/02/index.aspx" target="_blank"><img src="http://images.uoko.com/Upload/ShareImages/2016-05-27/38965bb6-4e43-460a-b102-aaf8b31f2639.jpg" width="525" height="150" alt="搬家赠送搬家券" /></a>
    </div>

    <div class="custom-box">
        <div class="playVideo" data-url="uoko2015.flv" id="i-media" title="点击视频播放"> <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp38=ob_get_clean();?><?php echo $_tmp38;?>
i-custom_06.jpg" width="525" height="330" alt="优客宣传视频" /> </div>
    </div>
    <div class="custom-box">
        <a href="http://www.uoko.com" target="_blank"><img src="http://images.uoko.com/Upload/ShareImages/2014-12-31/2a5af010-dc19-49ed-931d-9f01e671b55a.jpg" width="525" height="330" alt="优客逸家" /></a>
    </div>
    <div class="clearfix"></div>
</div>
<div class="i-record">
    <div class="container">

        <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp39=ob_get_clean();?><?php echo $_tmp39;?>
i-show-cd.png" width="1070" alt="优客逸家品质服务" />
    </div>
</div>
<div class="clearfix"></div>
<script type="text/javascript">
    var _py = _py || [];
    _py.push(['a', '_9..NtyJOxoLuOT37thIPb_NOP']);
    _py.push(['domain', 'stats.ipinyou.com']);
    _py.push(['e', '']);
    -function (d) {
        var s = d.createElement('script'),
                e = d.body.getElementsByTagName('script')[0]; e.parentNode.insertBefore(s, e),
                f = 'https:' == location.protocol;
        s.src = (f ? 'https' : 'http') + '://' + (f ? 'fm.ipinyou.com' : 'fm.p0y.cn') + '/j/adv.js';
    }(document);
</script>
<noscript><img src=" " style="display:none;" /></noscript>

<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('share/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp40=ob_get_clean();?><?php echo $_tmp40;?>

</body>

</html>
<?php }} ?>