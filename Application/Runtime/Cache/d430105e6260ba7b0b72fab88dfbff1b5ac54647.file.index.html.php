<?php /* Smarty version Smarty-3.1.6, created on 2016-09-08 15:33:46
         compiled from "./Application/Home/View\Room\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2457357c63d86b802a8-59274919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd430105e6260ba7b0b72fab88dfbff1b5ac54647' => 
    array (
      0 => './Application/Home/View\\Room\\index.html',
      1 => 1473320022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2457357c63d86b802a8-59274919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c63d86bfd2c',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'img' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c63d86bfd2c')) {function content_57c63d86bfd2c($_smarty_tpl) {?><!doctype html>
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

        <div class="result-wrap">
            <div class="result-content">
                <div class="short-wrap">
                    <a href="/home/room/add"><i class="icon-font"></i>填加房间</a>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="#" method="post">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>房间名称</th>
                            <th>图片</th>
                            <th>对应的房子</th>
                            <th>价格</th>
                            <th>面积</th>
                            <th>状态</th>
                            <th>类型</th>
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
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                            <td class= "first-cell">
                                <?php ob_start();?><?php if (strstr($_smarty_tpl->tpl_vars['row']->value['img'],'http')){?><?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>

                                <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['img'];?>
&width=60&height=60" style="height: 60px">
                                <?php ob_start();?><?php }else{ ?><?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>

                                <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['img'];?>
" style="height: 60px">
                                <?php ob_start();?><?php }?><?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>

                            </td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['house_name'];?>
</td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
￥/每月</td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['size'];?>
平米</td>
                            <td class= "first-cell">
                                <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==-1){?><?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>
下架
                                <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==1){?><?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
已入住
                                <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==2){?><?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>
未入住
                                <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==3){?><?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>
正在装修
                                <?php ob_start();?><?php }?><?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>

                            </td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
</td>
                            <td align= "center">
                                <a href= "/home/room/edit/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>
" title= "编辑"> 编辑 </a> |
                                <a class="ajax_delete" href= "javascript:void(0)" title="移除" onclick="remove_delete(<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp15=ob_get_clean();?><?php echo $_tmp15;?>
,'/home/room/delete')"> 移除 </a>
                            </td>
                        </tr>
                        <?php ob_start();?><?php } ?><?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>

                    </table>
                </form>
                <div class="list-page"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp17=ob_get_clean();?><?php echo $_tmp17;?>
</div>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }} ?>