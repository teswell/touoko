<?php /* Smarty version Smarty-3.1.6, created on 2016-09-08 15:36:52
         compiled from "./Application/Home/View\Room\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:3103457c63dbd658582-76935908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cf97be57558cfd416451a84fc60c3548ad7ac2e' => 
    array (
      0 => './Application/Home/View\\Room\\edit.html',
      1 => 1473320209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3103457c63dbd658582-76935908',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c63dbd6f0b2',
  'variables' => 
  array (
    'info' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c63dbd6f0b2')) {function content_57c63dbd6f0b2($_smarty_tpl) {?><!doctype html>
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
                <form action="/home/room/edit" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>房间标题：</th>
                            <td>
                                <input class="common-text required" id="title" name="room[name]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
<?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>
" type="text">
                                <input  name="room[id]" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
" type="hidden">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>价钱：</th>
                            <td>
                                <input class="common-text required"  name="room[price]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['price'];?>
<?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>面积：</th>
                            <td>
                                <input class="common-text required"  name="room[size]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['size'];?>
<?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>上传房间图片：</th>
                            <td>
                                <div id="preview">
                                    <?php ob_start();?><?php if (strstr($_smarty_tpl->tpl_vars['info']->value['img'],'http')){?><?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>

                                    <img id="imghead" width=100% height=auto border=0 src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['img'];?>
<?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>
&width=260&height=190">
                                    <?php ob_start();?><?php }else{ ?><?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>

                                    <img id="imghead" width=100% height=auto border=0 src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['img']->value;?>
<?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['img'];?>
<?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>
">
                                    <?php ob_start();?><?php }?><?php $_tmp15=ob_get_clean();?><?php echo $_tmp15;?>

                                </div>
                                <input class="common-text required" name="img" size="50" value="" type="file" onchange="previewImage(this)">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>房间类型：</th>
                            <td>
                                <input type="checkbox" name="room[type][]" value="1" <?php ob_start();?><?php if (strstr($_smarty_tpl->tpl_vars['info']->value['type'],'1')){?><?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>
checked<?php ob_start();?><?php }?><?php $_tmp17=ob_get_clean();?><?php echo $_tmp17;?>
/>飘窗 &nbsp;
                                <input type="checkbox" name="room[type][]" value="2" <?php ob_start();?><?php if (strstr($_smarty_tpl->tpl_vars['info']->value['type'],'2')){?><?php $_tmp18=ob_get_clean();?><?php echo $_tmp18;?>
checked<?php ob_start();?><?php }?><?php $_tmp19=ob_get_clean();?><?php echo $_tmp19;?>
/>阳台 &nbsp;
                                <input type="checkbox" name="room[type][]" value="3" <?php ob_start();?><?php if (strstr($_smarty_tpl->tpl_vars['info']->value['type'],'3')){?><?php $_tmp20=ob_get_clean();?><?php echo $_tmp20;?>
checked<?php ob_start();?><?php }?><?php $_tmp21=ob_get_clean();?><?php echo $_tmp21;?>
/>独卫 &nbsp;
                                <input type="checkbox" name="room[type][]" value="4" <?php ob_start();?><?php if (strstr($_smarty_tpl->tpl_vars['info']->value['type'],'4')){?><?php $_tmp22=ob_get_clean();?><?php echo $_tmp22;?>
checked<?php ob_start();?><?php }?><?php $_tmp23=ob_get_clean();?><?php echo $_tmp23;?>
/>两人 &nbsp;
                                <input type="checkbox" name="room[type][]" value="5" <?php ob_start();?><?php if (strstr($_smarty_tpl->tpl_vars['info']->value['type'],'4')){?><?php $_tmp24=ob_get_clean();?><?php echo $_tmp24;?>
checked<?php ob_start();?><?php }?><?php $_tmp25=ob_get_clean();?><?php echo $_tmp25;?>
/>空调 &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>状态：</th>
                            <td>
                                <input class="common-text required"  name="room[status]" value="-1" type="radio" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['status']==-1){?><?php $_tmp26=ob_get_clean();?><?php echo $_tmp26;?>
checked<?php ob_start();?><?php }?><?php $_tmp27=ob_get_clean();?><?php echo $_tmp27;?>
>下架 &nbsp;
                                <input class="common-text required"  name="room[status]" value="1" type="radio" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['status']==1){?><?php $_tmp28=ob_get_clean();?><?php echo $_tmp28;?>
checked<?php ob_start();?><?php }?><?php $_tmp29=ob_get_clean();?><?php echo $_tmp29;?>
>已入住 &nbsp;
                                <input class="common-text required"  name="room[status]" value="2" type="radio" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['status']==2){?><?php $_tmp30=ob_get_clean();?><?php echo $_tmp30;?>
checked<?php ob_start();?><?php }?><?php $_tmp31=ob_get_clean();?><?php echo $_tmp31;?>
>未入住 &nbsp;
                                <input class="common-text required"  name="room[status]" value="3" type="radio" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['status']==3){?><?php $_tmp32=ob_get_clean();?><?php echo $_tmp32;?>
checked<?php ob_start();?><?php }?><?php $_tmp33=ob_get_clean();?><?php echo $_tmp33;?>
>正在装修 &nbsp;
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