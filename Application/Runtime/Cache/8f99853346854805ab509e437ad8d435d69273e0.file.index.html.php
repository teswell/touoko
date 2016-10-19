<?php /* Smarty version Smarty-3.1.6, created on 2016-10-13 11:48:36
         compiled from "./Application/Home/View\Admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2666657ff04140ba033-54022802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f99853346854805ab509e437ad8d435d69273e0' => 
    array (
      0 => './Application/Home/View\\Admin\\index.html',
      1 => 1472095411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2666657ff04140ba033-54022802',
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
  'unifunc' => 'content_57ff041413ed5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ff041413ed5')) {function content_57ff041413ed5($_smarty_tpl) {?><!doctype html>
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
                    <a href="/home/admin/add"><i class="icon-font"></i>添加账号</a>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="#" method="post">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>账号</th>
                            <th>职位</th>
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
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['position'];?>
</td>
                            <td class= "first-cell"><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==1){?><?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>
激活<?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==-1){?><?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
未激活<?php ob_start();?><?php }?><?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>
</td>
                            <td align= "center">
                                <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['row']->value['id']!=1){?><?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>

                                <a href= "/home/admin/edit/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
" title= "编辑"> 编辑 </a> |
                                <a class="ajax_delete" href= "javascript:void(0)" title="移除" onclick="remove_delete(<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>
,'/home/admin/delete')"> 移除 </a>
                                <?php ob_start();?><?php }?><?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>

                            </td>
                        </tr>
                        <?php ob_start();?><?php } ?><?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>

                    </table>
                </form>
                <div class="list-page"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>
</div>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }} ?>