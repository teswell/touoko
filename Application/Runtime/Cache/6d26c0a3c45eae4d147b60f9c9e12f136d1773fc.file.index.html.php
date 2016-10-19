<?php /* Smarty version Smarty-3.1.6, created on 2016-09-08 13:52:22
         compiled from "./Application/Home/View\House\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1489457c63d212e5c97-96144880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d26c0a3c45eae4d147b60f9c9e12f136d1773fc' => 
    array (
      0 => './Application/Home/View\\House\\index.html',
      1 => 1473313939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1489457c63d212e5c97-96144880',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c63d21366b2',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'img' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c63d21366b2')) {function content_57c63d21366b2($_smarty_tpl) {?><!doctype html>
<html>
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

<body>
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>

<div class="container clearfix">
    <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>

    <div class="main-wrap">
        <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/navi.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>

        <div class="search-wrap">
            <div class="search-content">
                <form action="/home/house/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择房子类型:</th>
                            <td>
                                <select name="type__IN">
                                    <option value="">请选择</option>
                                    <option value="1">单间</option>
                                    <option value="2">主卧带独卫</option>
                                    <option value="3">标间套一</option>
                                    <option value="4">整租</option>
                                </select>
                            </td>
                            <th width="70">房子标题:</th>
                            <td><input class="common-text" placeholder="关键字" name="title__LIKE" type="text"></td>
                            <th width="70">详细地址:</th>
                            <td><input class="common-text" placeholder="关键字" name="address__LIKE" type="text"></td>
                            <td><input class="btn btn-primary btn2" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <div class="short-wrap">
                    <a href="/home/house/add"><i class="icon-font"></i>填加租房</a>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="#" method="post">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>封面图片</th>
                            <th>标题</th>
                            <th>详细地址</th>
                            <th>类型</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?><?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>

                        <tr>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                            <!--url格式兼容-->
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['img'];?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php if (strstr($_tmp6,'http')){?><?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>

                            <td class= "first-cell"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['img'];?>
&width=60&height=60" style="height: 60px"></td>
                            <?php ob_start();?><?php }else{ ?><?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>

                            <td class= "first-cell"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['img'];?>
" style="height: 60px"></td>
                            <?php ob_start();?><?php }?><?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>

                            <td class= "first-cell"><a href="/home/room/index/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
</td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
</td>
                            <td class= "first-cell"><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==1){?><?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>
激活<?php ob_start();?><?php }else{ ?><?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>
未激活<?php ob_start();?><?php }?><?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>
</td>
                            <td align= "center">
                                <a href= "/home/house/edit/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>
" title= "编辑"> 编辑 </a> |
                                <a href= "/home/house/img_add/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp15=ob_get_clean();?><?php echo $_tmp15;?>
" title= "编辑"> 图文详情 </a> |
                                <a class="ajax_delete" href= "javascript:void(0)" title="移除" onclick="remove_delete(<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>
,'/home/house/delete')"> 移除 </a>
                            </td>
                        </tr>
                        <?php ob_start();?><?php } ?><?php $_tmp17=ob_get_clean();?><?php echo $_tmp17;?>

                    </table>
                </form>
                <div class="list-page"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp18=ob_get_clean();?><?php echo $_tmp18;?>
</div>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }} ?>