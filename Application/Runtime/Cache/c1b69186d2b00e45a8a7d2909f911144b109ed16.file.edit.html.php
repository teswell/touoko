<?php /* Smarty version Smarty-3.1.6, created on 2016-08-31 14:50:21
         compiled from "./Application/Home/View\Ad\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2590657c67d6d2b8b24-60547745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1b69186d2b00e45a8a7d2909f911144b109ed16' => 
    array (
      0 => './Application/Home/View\\Ad\\edit.html',
      1 => 1472626198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2590657c67d6d2b8b24-60547745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c67d6d37435',
  'variables' => 
  array (
    'info' => 0,
    'adspace' => 0,
    'val' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c67d6d37435')) {function content_57c67d6d37435($_smarty_tpl) {?><!doctype html>
<html>
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/upload_js.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>

<body>
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>

<div class="container clearfix">
    <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>

    <div class="main-wrap">
        <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/navi.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>

        <div class="result-wrap">
            <div class="result-content">
                <form action="/home/ad/edit" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>广告标题：</th>
                            <td>
                                <input class="common-text required" id="title" name="ad[title]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
<?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>
" type="text">
                                <input type="hidden" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
" name="ad[id]"/>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>所属广告位：</th>
                            <td>
                                <select name="ad[adspace_id]">
                                    <option value=" ">请选择</option>
                                    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['adspace']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>

                                    <option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>
" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['val']->value['id']==$_smarty_tpl->tpl_vars['info']->value['adspace_id']){?><?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
selected<?php ob_start();?><?php }?><?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>
><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>
</option>
                                    <?php ob_start();?><?php } ?><?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>跳转URL：</th>
                            <td>
                                <input class="common-text required" name="ad[url]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['url'];?>
<?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>排序：</th>
                            <td>
                                <input class="common-text required" name="ad[sort]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
<?php $_tmp15=ob_get_clean();?><?php echo $_tmp15;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>上传图片：</th>
                            <td>
                                <div id="preview">
                                    <img id="imghead" width=100% height=auto border=0 src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['img']->value;?>
<?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['img'];?>
<?php $_tmp17=ob_get_clean();?><?php echo $_tmp17;?>
">
                                </div>
                                <input class="common-text required" name="img" size="50" value="" type="file" onchange="previewImage(this)">
                            </td>
                        </tr>
                        <tr>
                            <th>广告背景颜色：</th>
                            <td>
                                <input class="common-text required" name="ad[back_color]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['back_color'];?>
<?php $_tmp18=ob_get_clean();?><?php echo $_tmp18;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>是否激活：</th>
                            <td>
                                <input name="ad[status]" value="1" type="radio" checked>是 &nbsp;&nbsp;
                                <input name="ad[status]" value="-1" type="radio">否
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html><?php }} ?>