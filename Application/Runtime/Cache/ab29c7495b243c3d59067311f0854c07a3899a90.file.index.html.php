<?php /* Smarty version Smarty-3.1.6, created on 2016-09-30 15:44:28
         compiled from "./Application/Index/View\Rent\index.html" */ ?>
<?php /*%%SmartyHeaderCode:762857d11eac062a52-26211647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab29c7495b243c3d59067311f0854c07a3899a90' => 
    array (
      0 => './Application/Index/View\\Rent\\index.html',
      1 => 1475221465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '762857d11eac062a52-26211647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57d11eac35880',
  'variables' => 
  array (
    'area' => 0,
    'val' => 0,
    'house' => 0,
    'tse_img' => 0,
    'page' => 0,
    'promotion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d11eac35880')) {function content_57d11eac35880($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
<head>
    <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('share/header_url.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

    <style>
        body {
            background: #f4f4f4;
        }
    </style>
</head>
<body data-spy="scroll">
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('share/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>

<div class="search-box">
    <div class="container-min">
        <!--<ol class="breadcrumb">-->
            <!--<li><a href="/">首页</a></li>-->
            <!--<li class="active">我要租房</li>-->
        <!--</ol>-->
        <div class="nav-search-tabs search_title">
            <ul class="nav nav-tabs nav-search ">
                <li class="active">
                    <a href="/rent/" class="title_name title_1"><span class="sprite sprite_select_1"></span> 条件找房</a>
                </li>
                <li class="nav-new">
                    <a href="/search_map/" class=" title_name title_1"><span class="glyphicon glyphicon-map-marker text-yellow"></span> 地图找房 <span class=" sprite_search_new"></span></a>
                </li>
            </ul>
        </div>
        <div class="tab-content tab-seach">
            <div class="tab-pane fade in active">
                <div class="selection">
                    <div class="s-box">
                        <form action="/index/rent/index">
                        <div class="s-input input-group">
                            <input type="text" class="form-control search-input-1 top-search-keydown" value="" placeholder="输入商圈、地标、景点等" name="search[keyword]" />
                            <span class="input-group-btn">
                                <input class="btn btn-orange search-input-1 top-search-button" type="submit">搜 索</input>
                            </span>
                        </div>
                        </form>
                        <div class="bk20"></div>
                    </div>
                    <div class="s-box">
                        <div class="s-title">区域：</div>
                        <div class="s-l" style="float:left;width:90%;">
                            <a <?php ob_start();?><?php if (empty($_SESSION['search']['area'])){?><?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
 class="s-all  active" <?php ob_start();?><?php }else{ ?><?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>
 class="s-all" <?php ob_start();?><?php }?><?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>
 href="/index/rent/index/area/all">全部</a>
                            <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['area']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>

                            <a <?php ob_start();?><?php if ($_SESSION['search']['area']==$_smarty_tpl->tpl_vars['val']->value['areaid']){?><?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
 class="s-area active" <?php ob_start();?><?php }else{ ?><?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>
 class="s-area" <?php ob_start();?><?php }?><?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>
  href="/index/rent/index/area/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['areaid'];?>
<?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['area'];?>
<?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>
</a>
                            <?php ob_start();?><?php } ?><?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>

                        </div>
                    </div>
                    <div class="s-box">
                        <div class="s-title">租金：</div>
                        <div class="s-l">
                            <a <?php ob_start();?><?php if (empty($_SESSION['search']['money'])){?><?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>
 class="s-all active" <?php ob_start();?><?php }else{ ?><?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>
 class="s-all" <?php ob_start();?><?php }?><?php $_tmp15=ob_get_clean();?><?php echo $_tmp15;?>
 href="/index/rent/index/money/all">全部</a>
                            <a <?php ob_start();?><?php if ($_SESSION['search']['money']==1){?><?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>
 class="s-area active" <?php ob_start();?><?php }else{ ?><?php $_tmp17=ob_get_clean();?><?php echo $_tmp17;?>
 class="s-all" <?php ob_start();?><?php }?><?php $_tmp18=ob_get_clean();?><?php echo $_tmp18;?>
 href="/index/rent/index/money/1">500-700</a>
                            <a <?php ob_start();?><?php if ($_SESSION['search']['money']==2){?><?php $_tmp19=ob_get_clean();?><?php echo $_tmp19;?>
 class="s-area active" <?php ob_start();?><?php }else{ ?><?php $_tmp20=ob_get_clean();?><?php echo $_tmp20;?>
 class="s-all" <?php ob_start();?><?php }?><?php $_tmp21=ob_get_clean();?><?php echo $_tmp21;?>
 href="/index/rent/index/money/2">700-1000</a>
                            <a <?php ob_start();?><?php if ($_SESSION['search']['money']==3){?><?php $_tmp22=ob_get_clean();?><?php echo $_tmp22;?>
 class="s-area active" <?php ob_start();?><?php }else{ ?><?php $_tmp23=ob_get_clean();?><?php echo $_tmp23;?>
 class="s-all" <?php ob_start();?><?php }?><?php $_tmp24=ob_get_clean();?><?php echo $_tmp24;?>
 href="/index/rent/index/money/3">1000-1500</a>
                            <a <?php ob_start();?><?php if ($_SESSION['search']['money']==4){?><?php $_tmp25=ob_get_clean();?><?php echo $_tmp25;?>
 class="s-area active" <?php ob_start();?><?php }else{ ?><?php $_tmp26=ob_get_clean();?><?php echo $_tmp26;?>
 class="s-all" <?php ob_start();?><?php }?><?php $_tmp27=ob_get_clean();?><?php echo $_tmp27;?>
 href="/index/rent/index/money/4">1500-2000</a>
                            <a <?php ob_start();?><?php if ($_SESSION['search']['money']==5){?><?php $_tmp28=ob_get_clean();?><?php echo $_tmp28;?>
 class="s-area active" <?php ob_start();?><?php }else{ ?><?php $_tmp29=ob_get_clean();?><?php echo $_tmp29;?>
 class="s-all" <?php ob_start();?><?php }?><?php $_tmp30=ob_get_clean();?><?php echo $_tmp30;?>
 href="/index/rent/index/money/5">2000以上</a>
                        </div>
                    </div>
                    <div class="s-box">
                        <div class="s-title">户型：</div>
                        <div class="s-l">
                            <a <?php ob_start();?><?php if (empty($_SESSION['search']['type'])){?><?php $_tmp31=ob_get_clean();?><?php echo $_tmp31;?>
 class="s-all active" <?php ob_start();?><?php }else{ ?><?php $_tmp32=ob_get_clean();?><?php echo $_tmp32;?>
 class="s-all" <?php ob_start();?><?php }?><?php $_tmp33=ob_get_clean();?><?php echo $_tmp33;?>
 href="/index/rent/index/type/all">全部</a>
                            <a <?php ob_start();?><?php if ($_SESSION['search']['type']==1){?><?php $_tmp34=ob_get_clean();?><?php echo $_tmp34;?>
 class="s-area active" <?php ob_start();?><?php }else{ ?><?php $_tmp35=ob_get_clean();?><?php echo $_tmp35;?>
 class="s-all" <?php ob_start();?><?php }?><?php $_tmp36=ob_get_clean();?><?php echo $_tmp36;?>
 href="/index/rent/index/type/1">单间</a>
                            <a <?php ob_start();?><?php if ($_SESSION['search']['type']==2){?><?php $_tmp37=ob_get_clean();?><?php echo $_tmp37;?>
 class="s-area active" <?php ob_start();?><?php }else{ ?><?php $_tmp38=ob_get_clean();?><?php echo $_tmp38;?>
 class="s-all" <?php ob_start();?><?php }?><?php $_tmp39=ob_get_clean();?><?php echo $_tmp39;?>
 href="/index/rent/index/type/2">标间套一</a>
                            <a <?php ob_start();?><?php if ($_SESSION['search']['type']==3){?><?php $_tmp40=ob_get_clean();?><?php echo $_tmp40;?>
 class="s-area active" <?php ob_start();?><?php }else{ ?><?php $_tmp41=ob_get_clean();?><?php echo $_tmp41;?>
 class="s-all" <?php ob_start();?><?php }?><?php $_tmp42=ob_get_clean();?><?php echo $_tmp42;?>
 href="/index/rent/index/type/3">整租</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <a class="new_email email-c" href="/mail.aspx" title="有新房源邮件通知"></a>
    </div>
</div>


<div class="i-list container-min" style="overflow: visible;">
    <div class="tab-resources">
        <a class="current" href="#">自营房源</a>
        <a class="" href="#">托管房源</a>
        <a class="" href="#">全部</a>
    </div>


    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['house']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp43=ob_get_clean();?><?php echo $_tmp43;?>

    <div class="thumb-box ">
        <a href="/index/rent/detail/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php $_tmp44=ob_get_clean();?><?php echo $_tmp44;?>
" target="_blank">
            <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp45=ob_get_clean();?><?php echo $_tmp45;?>
loading.gif" data-original="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php $_tmp46=ob_get_clean();?><?php echo $_tmp46;?>
&width=318&height=212" width="318" height="212" alt="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
<?php $_tmp47=ob_get_clean();?><?php echo $_tmp47;?>
" />
        </a>

        <h4 class="title">
            <span style="padding: 0 2px; font-size: 12px; color: #fff; background-color: #02a39b; border: 1px solid #02a39b; border-radius: 3px;">自营</span>
            <a href="/index/rent/detail/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php $_tmp48=ob_get_clean();?><?php echo $_tmp48;?>
"><strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
<?php $_tmp49=ob_get_clean();?><?php echo $_tmp49;?>
</strong></a>
        </h4>
        <div class="price">
            <span>¥</span>
            <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['val']->value['min_price']==$_smarty_tpl->tpl_vars['val']->value['max_price']){?><?php $_tmp50=ob_get_clean();?><?php echo $_tmp50;?>

            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['min_price'];?>
<?php $_tmp51=ob_get_clean();?><?php echo $_tmp51;?>

            <?php ob_start();?><?php }else{ ?><?php $_tmp52=ob_get_clean();?><?php echo $_tmp52;?>

            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['min_price'];?>
<?php $_tmp53=ob_get_clean();?><?php echo $_tmp53;?>
<span>~</span><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['max_price'];?>
<?php $_tmp54=ob_get_clean();?><?php echo $_tmp54;?>

            <?php ob_start();?><?php }?><?php $_tmp55=ob_get_clean();?><?php echo $_tmp55;?>

            元/月
        </div>
        <p class="des"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['address'];?>
<?php $_tmp56=ob_get_clean();?><?php echo $_tmp56;?>
</p>
        <div class="clearfix"></div>
    </div>
    <?php ob_start();?><?php } ?><?php $_tmp57=ob_get_clean();?><?php echo $_tmp57;?>


    <div class="bk20"></div>
    <div class="paginator"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp58=ob_get_clean();?><?php echo $_tmp58;?>
</div>
    <div class="portlet">
        <div class="portlet-title">
            <h4 class="caption">管家推荐</h4>
        </div>
        <div class="portlet-body rec-list">
            <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['promotion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp59=ob_get_clean();?><?php echo $_tmp59;?>

            <div class="thumbnail">
                <a class="rec-p" href="/index/rent/detail/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php $_tmp60=ob_get_clean();?><?php echo $_tmp60;?>
" title="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['address'];?>
<?php $_tmp61=ob_get_clean();?><?php echo $_tmp61;?>
" target="_blank">
                    <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_img']->value;?>
<?php $_tmp62=ob_get_clean();?><?php echo $_tmp62;?>
loading.gif" data-original="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php $_tmp63=ob_get_clean();?><?php echo $_tmp63;?>
&width=158&height=105" width="158" height="105" alt="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['address'];?>
<?php $_tmp64=ob_get_clean();?><?php echo $_tmp64;?>
">
                </a>
                <p class="rec-info">
                    <a href="/index/rent/detail/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php $_tmp65=ob_get_clean();?><?php echo $_tmp65;?>
" title="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['address'];?>
<?php $_tmp66=ob_get_clean();?><?php echo $_tmp66;?>
" target="_blank"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['address'];?>
<?php $_tmp67=ob_get_clean();?><?php echo $_tmp67;?>
</a>
                </p>
                <div class="rec-price">
                    ￥<span class="text-orange">
                    <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['val']->value['min_price']==$_smarty_tpl->tpl_vars['val']->value['max_price']){?><?php $_tmp68=ob_get_clean();?><?php echo $_tmp68;?>

                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['min_price'];?>
<?php $_tmp69=ob_get_clean();?><?php echo $_tmp69;?>

                    <?php ob_start();?><?php }else{ ?><?php $_tmp70=ob_get_clean();?><?php echo $_tmp70;?>

                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['min_price'];?>
<?php $_tmp71=ob_get_clean();?><?php echo $_tmp71;?>
 - <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['max_price'];?>
<?php $_tmp72=ob_get_clean();?><?php echo $_tmp72;?>

                    <?php ob_start();?><?php }?><?php $_tmp73=ob_get_clean();?><?php echo $_tmp73;?>

                    </span>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php ob_start();?><?php } ?><?php $_tmp74=ob_get_clean();?><?php echo $_tmp74;?>

        </div>
    </div>
</div>
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('share/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp75=ob_get_clean();?><?php echo $_tmp75;?>

</body>

</html>
<?php }} ?>