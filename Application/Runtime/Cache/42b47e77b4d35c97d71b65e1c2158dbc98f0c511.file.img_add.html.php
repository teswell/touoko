<?php /* Smarty version Smarty-3.1.6, created on 2016-09-08 15:31:10
         compiled from "./Application/Home/View\House\img_add.html" */ ?>
<?php /*%%SmartyHeaderCode:168057c63dc71d25b5-29284177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42b47e77b4d35c97d71b65e1c2158dbc98f0c511' => 
    array (
      0 => './Application/Home/View\\House\\img_add.html',
      1 => 1473319867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168057c63dc71d25b5-29284177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c63dc72301d',
  'variables' => 
  array (
    'tse_zyup' => 0,
    'imgs' => 0,
    'val' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c63dc72301d')) {function content_57c63dc72301d($_smarty_tpl) {?><!doctype html>
<html>
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

<link rel="stylesheet" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_zyup']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
zyUpload.css" type="text/css">
<script type="text/javascript" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_zyup']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
jquery-1.7.2.js"></script>
<script type="text/javascript" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_zyup']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>
zyFile.js"></script>
<script type="text/javascript" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_zyup']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>
zyUpload.js"></script>
<script type="text/javascript" src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tse_zyup']->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>
demo.js"></script>
<body>
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>

<div class="container clearfix">
    <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>

    <div class="main-wrap">
        <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('comm/navi.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>

        <div class="result-wrap">
            <div class="result-content">
                <table class="insert-tab" width="100%">
                    <tbody>
                    <tr>
                        <th>上传图片：</th>
                        <td>
                            <div id="demo" class="demo" style="float: left"></div>
                        </td>
                    </tr>
                    <tr>
                        <th>图文详情(点击删除)：</th>
                        <td>
                            <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['imgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>

                            <?php ob_start();?><?php if (strstr($_smarty_tpl->tpl_vars['val']->value['img'],'http')){?><?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>

                            <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>
&width=100&height=66" style="width: 100px;height: 66px" onclick="remove_delete(<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>
,'/home/house/img_delete')">&nbsp;&nbsp;
                            <?php ob_start();?><?php }else{ ?><?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>

                            <img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['img']->value;?>
<?php $_tmp15=ob_get_clean();?><?php echo $_tmp15;?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>
" style="width: 100px;height: 66px" onclick="remove_delete(<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php $_tmp17=ob_get_clean();?><?php echo $_tmp17;?>
,'/home/house/img_delete')">&nbsp;&nbsp;
                            <?php ob_start();?><?php }?><?php $_tmp18=ob_get_clean();?><?php echo $_tmp18;?>


                            <?php ob_start();?><?php } ?><?php $_tmp19=ob_get_clean();?><?php echo $_tmp19;?>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>








<?php }} ?>