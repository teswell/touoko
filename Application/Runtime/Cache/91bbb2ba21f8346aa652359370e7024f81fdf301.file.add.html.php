<?php /* Smarty version Smarty-3.1.6, created on 2016-08-31 11:46:47
         compiled from "./Application/Home/View\House\add.html" */ ?>
<?php /*%%SmartyHeaderCode:3078257c653279ec9e0-78119843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91bbb2ba21f8346aa652359370e7024f81fdf301' => 
    array (
      0 => './Application/Home/View\\House\\add.html',
      1 => 1471399961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3078257c653279ec9e0-78119843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'province' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c65327a84f8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c65327a84f8')) {function content_57c65327a84f8($_smarty_tpl) {?><!doctype html>
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
                <form action="/home/house/add" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>房子标题：</th>
                            <td>
                                <input class="common-text required" id="title" name="house[title]" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>所属地区：</th>
                            <td>
                                <select name="province">
                                    <option value=" ">请选择</option>
                                    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['province']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>

                                    <option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['provinceid'];?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['province'];?>
<?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>
</option>
                                    <?php ob_start();?><?php } ?><?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>

                                </select>
                                <select name="city"></select>
                                <select name="house[area_id]"></select>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>房子类型：</th>
                            <td>
                                <input type="checkbox" name="house[type][]" value="1"/>标间 &nbsp;
                                <input type="checkbox" name="house[type][]" value="2"/>主卧带独卫 &nbsp;
                                <input type="checkbox" name="house[type][]" value="3"/>标间套一 &nbsp;
                                <input type="checkbox" name="house[type][]" value="4"/>整租 &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>详细地址：</th>
                            <td>
                                <input class="common-text required"  name="house[address]" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>上传封面图片：</th>
                            <td>
                                <div id="preview">
                                    <img id="imghead" width=100% height=auto border=0 src="">
                                </div>
                                <input class="common-text required" name="img" size="50" value="" type="file" onchange="previewImage(this)">
                            </td>
                        </tr>
                        <tr>
                            <th>附近商圈：</th>
                            <td>
                                <input class="common-text required"  name="house[business]" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>适合人群：</th>
                            <td>
                                <input class="common-text required"  name="house[crowd]" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>出行地铁：</th>
                            <td>
                                <input class="common-text required"  name="house[train]" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>公交：</th>
                            <td>
                                <input class="common-text required"  name="house[bus]" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>超市：</th>
                            <td>
                                <input class="common-text required"  name="house[market]" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>菜市：</th>
                            <td>
                                <input class="common-text required"  name="house[food_market]" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>银行：</th>
                            <td>
                                <input class="common-text required"  name="house[bank]" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>餐馆：</th>
                            <td>
                                <input class="common-text required"  name="house[restaurant]" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>医院：</th>
                            <td>
                                <input class="common-text required"  name="house[hospital]" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>是否激活：</th>
                            <td>
                                <input class="common-text required"  name="house[status]" value="1" type="radio" checked>激活 &nbsp;
                                <input class="common-text required"  name="house[status]" value="-1" type="radio">未激活 &nbsp;
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
                    $("select[name='house[area_id]'] option").remove();
                    var html = '<option value=" ">请选择</option>';
                    for (var i=0;i<data.list.length;i++) {
                        html += '<option value='+data.list[i].areaid+'>'+data.list[i].area+'</option>>';
                    }
                    $("select[name='house[area_id]']").append(html);
                }
            }
        });
    });
</script>
</body>
</html><?php }} ?>