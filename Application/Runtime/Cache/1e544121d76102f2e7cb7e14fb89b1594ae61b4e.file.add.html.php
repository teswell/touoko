<?php /* Smarty version Smarty-3.1.6, created on 2016-10-13 13:57:01
         compiled from "./Application/Home/View\Admin\add.html" */ ?>
<?php /*%%SmartyHeaderCode:479357ff0417a731b9-95811001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e544121d76102f2e7cb7e14fb89b1594ae61b4e' => 
    array (
      0 => './Application/Home/View\\Admin\\add.html',
      1 => 1476338177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '479357ff0417a731b9-95811001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57ff0417b1b15',
  'variables' => 
  array (
    'position' => 0,
    'val' => 0,
    'province' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ff0417b1b15')) {function content_57ff0417b1b15($_smarty_tpl) {?><!doctype html>
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
                <form action="/home/admin/add" method="post" id="myform" name="myform">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>登录账号：</th>
                            <td>
                                <input class="common-text required" id="title" name="admin[username]" size="50" value="" type="text">
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
                                    <option value="-1">超级管理员</option>
                                    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['position']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                        </tr>
                        <tr>
                            <th width="120"><i class="require-red">*</i>负责区域：</th>
                            <td>
                                <select name="province">
                                    <option value=" ">请选择</option>
                                    <option value=1>全部</option>
                                    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['province']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>

                                    <option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['provinceid'];?>
<?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['province'];?>
<?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>
</option>
                                    <?php ob_start();?><?php } ?><?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>

                                </select>
                                <select name="city"></select>
                                <select name="admin[area_id]"></select>
                            </td>
                        </tr>
                        <tr>
                            <th>是否激活：</th>
                            <td>
                                <input name="admin[status]" value="1" type="radio" checked>是 &nbsp;&nbsp;
                                <input name="admin[status]" value="-1" type="radio">否
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
<script>
    //省 to 市
    $("select[name='province']").change(function(){
        var id = $(this).find("option:selected").val();
        $.ajax({
            type: "POST",
            url: "/home/Ath/threeAjax",
            data: { 'provinceid':id },
            dataType: "json",
            success: function(data){
                if (data.status == 1) {
                    $("select[name='city'] option").remove();
                    var html = '<option value=" ">请选择</option>';
                    for (var i=0;i<data.list.length;i++) {
                        html += '<option value='+data.list[i].cityid+'>'+data.list[i].city+'</option>>';
                    }
                    $("select[name='city']").append(html);
                }
            }
        });
    });

    $("select[name='city']").change(function(){
        var id = $(this).find("option:selected").val();
        $.ajax({
            type: "POST",
            url: "/home/Ath/threeAjax",
            data: { 'cityid':id },
            dataType: "json",
            success: function(data){
                if (data.status == 1) {
                    $("select[name='admin[area_id]'] option").remove();
                    var html = '<option value=" ">请选择</option>';
                    for (var i=0;i<data.list.length;i++) {
                        html += '<option value='+data.list[i].areaid+'>'+data.list[i].area+'</option>>';
                    }
                    $("select[name='admin[area_id]']").append(html);
                }
            }
        });
    });
</script>
</body>
</html><?php }} ?>