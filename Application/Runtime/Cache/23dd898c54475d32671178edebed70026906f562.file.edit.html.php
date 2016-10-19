<?php /* Smarty version Smarty-3.1.6, created on 2016-10-13 13:42:38
         compiled from "./Application/Home/View\Admin\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:3256357ff1ece92b9e0-95774373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23dd898c54475d32671178edebed70026906f562' => 
    array (
      0 => './Application/Home/View\\Admin\\edit.html',
      1 => 1472020534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3256357ff1ece92b9e0-95774373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'position' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57ff1ecea315a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ff1ecea315a')) {function content_57ff1ecea315a($_smarty_tpl) {?><!doctype html>
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
                <form action="/home/admin/edit" method="post" id="myform" name="myform">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>登录账号：</th>
                            <td>
                                <input class="common-text required" id="title" name="admin[username]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
<?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>
" type="text">
                                <input type="hidden" name="admin[id]" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
<?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>
"/>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>登录密码：</th>
                            <td>
                                <input class="common-text required" name="admin[password]" size="50" value="" type="password">
                            </td>
                        </tr>
                        <tr>
                            <th width="120"><i class="require-red">*</i>职位：</th>
                            <td>
                                <select name="admin[position_id]" id="catid" class="required">
                                    <option value="">请选择</option>
                                    <option value="-1" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['position_id']==-1){?><?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
selected<?php ob_start();?><?php }?><?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>
>超级管理员</option>
                                    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['position']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>

                                    <option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['position_id']==$_smarty_tpl->tpl_vars['val']->value['id']){?><?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>
selected<?php ob_start();?><?php }?><?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>
><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>
</option>
                                    <?php ob_start();?><?php } ?><?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>是否激活：</th>
                            <td>
                                <input name="admin[status]" value="1" type="radio" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['status']==1){?><?php $_tmp15=ob_get_clean();?><?php echo $_tmp15;?>
checked<?php ob_start();?><?php }?><?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>
/>是 &nbsp;&nbsp;
                                <input name="admin[status]" value="-1" type="radio" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['status']==-1){?><?php $_tmp17=ob_get_clean();?><?php echo $_tmp17;?>
checked<?php ob_start();?><?php }?><?php $_tmp18=ob_get_clean();?><?php echo $_tmp18;?>
/>否
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }} ?>