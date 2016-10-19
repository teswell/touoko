<?php /* Smarty version Smarty-3.1.6, created on 2016-08-31 14:46:56
         compiled from "./Application/Home/View\Ad\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1423157c67d60a57070-63341208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14969dea4cf7e7806a625309e49e806a3e414884' => 
    array (
      0 => './Application/Home/View\\Ad\\index.html',
      1 => 1472436896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1423157c67d60a57070-63341208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adspace' => 0,
    'val' => 0,
    'list' => 0,
    'row' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c67d60adfc1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c67d60adfc1')) {function content_57c67d60adfc1($_smarty_tpl) {?><!doctype html>
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
                <form action="/home/ad/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择广告位:</th>
                            <td>
                                <select name="adspace_id">
                                    <option value="">请选择</option>
                                    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['adspace']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>

                                    <option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>
"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
</option>
                                    <?php ob_start();?><?php } ?><?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>

                                </select>
                            </td>
                            <th width="70">广告标题:</th>
                            <td><input class="common-text" placeholder="关键字" name="title__LIKE" type="text"></td>
                            <td><input class="btn btn-primary btn2" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <div class="short-wrap">
                    <a href="/home/ad/add"><i class="icon-font"></i>新增广告</a>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="#" method="post">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>广告标题</th>
                            <th>所属广告位</th>
                            <th>跳转URL</th>
                            <th>排序</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?><?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>

                        <tr>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['adspace_name'];?>
</td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
</td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['sort'];?>
</td>
                            <td class= "first-cell"><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==1){?><?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
激活<?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==-1){?><?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>
未激活<?php ob_start();?><?php }?><?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>
</td>
                            <td align= "center">
                                <a href= "/home/ad/edit/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>
" title= "编辑"> 编辑 </a> |
                                <a class="ajax_delete" href= "javascript:void(0)" title="移除" onclick="remove_delete(<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>
,'/home/ad/delete')"> 移除 </a>
                            </td>
                        </tr>
                        <?php ob_start();?><?php } ?><?php $_tmp15=ob_get_clean();?><?php echo $_tmp15;?>

                    </table>
                </form>
                <div class="list-page"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>
</div>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }} ?>