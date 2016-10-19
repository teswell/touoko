<?php /* Smarty version Smarty-3.1.6, created on 2016-08-31 11:23:33
         compiled from "./Application/Home/View\Menu\index.html" */ ?>
<?php /*%%SmartyHeaderCode:904057c64db50065d2-96064140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8b63bd0fa3ca7daecc97729565fbd4ccb185b0d' => 
    array (
      0 => './Application/Home/View\\Menu\\index.html',
      1 => 1471317856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '904057c64db50065d2-96064140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c64db507f77',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c64db507f77')) {function content_57c64db507f77($_smarty_tpl) {?><!doctype html>
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
                    <a href="/home/menu/add"><i class="icon-font"></i>添加菜单</a>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="#" method="post">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>菜单名称</th>
                            <th>排序</th>
                            <th>链接URL</th>
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
                            <td class= "first-cell"><a href="index/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</a></td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['sort'];?>
</td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
</td>
                            <td class= "first-cell"><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==1){?><?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
激活<?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==-1){?><?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>
未激活<?php ob_start();?><?php }?><?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>
</td>
                            <td align= "center">
                                <a href= "/home/menu/edit/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
" title= "编辑"> 编辑 </a> |
                                <a class="ajax_delete" href= "javascript:void(0)" title="移除" onclick="remove_delete(<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>
,'/home/menu/delete')"> 移除 </a>
                            </td>
                        </tr>
                        <?php ob_start();?><?php } ?><?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>

                    </table>
                </form>
                <div class="list-page"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>
</div>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }} ?>