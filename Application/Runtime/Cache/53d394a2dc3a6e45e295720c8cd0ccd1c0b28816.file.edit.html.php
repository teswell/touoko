<?php /* Smarty version Smarty-3.1.6, created on 2016-09-08 15:23:43
         compiled from "./Application/Home/View\House\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:984357c63dc2d47008-50668807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53d394a2dc3a6e45e295720c8cd0ccd1c0b28816' => 
    array (
      0 => './Application/Home/View\\House\\edit.html',
      1 => 1473319420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '984357c63dc2d47008-50668807',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c63dc2e48d4',
  'variables' => 
  array (
    'info' => 0,
    'province' => 0,
    'val' => 0,
    'provinceid' => 0,
    'city' => 0,
    'cityid' => 0,
    'area' => 0,
    'areaid' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c63dc2e48d4')) {function content_57c63dc2e48d4($_smarty_tpl) {?><!doctype html>
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
                <form action="/home/house/edit" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>房子标题：</th>
                            <td>
                                <input class="common-text required" id="title" name="house[title]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
<?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>
" type="text">
                                <input type="hidden" name="house[id]" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
"/>
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
?><?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>

                                    <option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['provinceid'];?>
<?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>
" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['provinceid']->value==$_smarty_tpl->tpl_vars['val']->value['provinceid']){?><?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
selected<?php ob_start();?><?php }?><?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>
><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['province'];?>
<?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>
</option>
                                    <?php ob_start();?><?php } ?><?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>

                                </select>
                                <select name="city">
                                    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>

                                    <option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['cityid'];?>
<?php $_tmp15=ob_get_clean();?><?php echo $_tmp15;?>
" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['cityid']->value==$_smarty_tpl->tpl_vars['val']->value['cityid']){?><?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>
selected<?php ob_start();?><?php }?><?php $_tmp17=ob_get_clean();?><?php echo $_tmp17;?>
><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['city'];?>
<?php $_tmp18=ob_get_clean();?><?php echo $_tmp18;?>
</option>
                                    <?php ob_start();?><?php } ?><?php $_tmp19=ob_get_clean();?><?php echo $_tmp19;?>

                                </select>
                                <select name="house[area_id]">
                                    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['area']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp20=ob_get_clean();?><?php echo $_tmp20;?>

                                    <option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['areaid'];?>
<?php $_tmp21=ob_get_clean();?><?php echo $_tmp21;?>
" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['areaid']->value==$_smarty_tpl->tpl_vars['val']->value['areaid']){?><?php $_tmp22=ob_get_clean();?><?php echo $_tmp22;?>
selected<?php ob_start();?><?php }?><?php $_tmp23=ob_get_clean();?><?php echo $_tmp23;?>
><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['area'];?>
<?php $_tmp24=ob_get_clean();?><?php echo $_tmp24;?>
</option>
                                    <?php ob_start();?><?php } ?><?php $_tmp25=ob_get_clean();?><?php echo $_tmp25;?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>房子类型：</th>
                            <td>
                                <input type="checkbox" name="house[type][]" value="1" <?php ob_start();?><?php if (strstr($_smarty_tpl->tpl_vars['info']->value['type'],'1')){?><?php $_tmp26=ob_get_clean();?><?php echo $_tmp26;?>
checked<?php ob_start();?><?php }?><?php $_tmp27=ob_get_clean();?><?php echo $_tmp27;?>
/>标间 &nbsp;
                                <input type="checkbox" name="house[type][]" value="2" <?php ob_start();?><?php if (strstr($_smarty_tpl->tpl_vars['info']->value['type'],'2')){?><?php $_tmp28=ob_get_clean();?><?php echo $_tmp28;?>
checked<?php ob_start();?><?php }?><?php $_tmp29=ob_get_clean();?><?php echo $_tmp29;?>
/>主卧带独卫 &nbsp;
                                <input type="checkbox" name="house[type][]" value="3" <?php ob_start();?><?php if (strstr($_smarty_tpl->tpl_vars['info']->value['type'],'3')){?><?php $_tmp30=ob_get_clean();?><?php echo $_tmp30;?>
checked<?php ob_start();?><?php }?><?php $_tmp31=ob_get_clean();?><?php echo $_tmp31;?>
/>标间套一 &nbsp;
                                <input type="checkbox" name="house[type][]" value="4" <?php ob_start();?><?php if (strstr($_smarty_tpl->tpl_vars['info']->value['type'],'4')){?><?php $_tmp32=ob_get_clean();?><?php echo $_tmp32;?>
checked<?php ob_start();?><?php }?><?php $_tmp33=ob_get_clean();?><?php echo $_tmp33;?>
/>整租 &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>详细地址：</th>
                            <td>
                                <input class="common-text required"  name="house[address]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['address'];?>
<?php $_tmp34=ob_get_clean();?><?php echo $_tmp34;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>上传封面图片：</th>
                            <td>
                                <div id="preview">
                                    <?php ob_start();?><?php if (strstr($_smarty_tpl->tpl_vars['info']->value['img'],'http')){?><?php $_tmp35=ob_get_clean();?><?php echo $_tmp35;?>

                                    <img id="imghead" width=100% height=auto border=0 src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['img'];?>
<?php $_tmp36=ob_get_clean();?><?php echo $_tmp36;?>
&width=260&height=190">
                                    <?php ob_start();?><?php }else{ ?><?php $_tmp37=ob_get_clean();?><?php echo $_tmp37;?>
}
                                    <img id="imghead" width=100% height=auto border=0 src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['img']->value;?>
<?php $_tmp38=ob_get_clean();?><?php echo $_tmp38;?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['img'];?>
<?php $_tmp39=ob_get_clean();?><?php echo $_tmp39;?>
">
                                    <?php ob_start();?><?php }?><?php $_tmp40=ob_get_clean();?><?php echo $_tmp40;?>

                                </div>
                                <input class="common-text required" name="img" size="50" value="" type="file" onchange="previewImage(this)">
                            </td>
                        </tr>
                        <tr>
                            <th>附近商圈：</th>
                            <td>
                                <input class="common-text required"  name="house[business]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['business'];?>
<?php $_tmp41=ob_get_clean();?><?php echo $_tmp41;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>适合人群：</th>
                            <td>
                                <input class="common-text required"  name="house[crowd]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['crowd'];?>
<?php $_tmp42=ob_get_clean();?><?php echo $_tmp42;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>出行地铁：</th>
                            <td>
                                <input class="common-text required"  name="house[train]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['train'];?>
<?php $_tmp43=ob_get_clean();?><?php echo $_tmp43;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>公交：</th>
                            <td>
                                <input class="common-text required"  name="house[bus]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['bus'];?>
<?php $_tmp44=ob_get_clean();?><?php echo $_tmp44;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>超市：</th>
                            <td>
                                <input class="common-text required"  name="house[market]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['market'];?>
<?php $_tmp45=ob_get_clean();?><?php echo $_tmp45;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>菜市：</th>
                            <td>
                                <input class="common-text required"  name="house[food_market]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['food_market'];?>
<?php $_tmp46=ob_get_clean();?><?php echo $_tmp46;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>银行：</th>
                            <td>
                                <input class="common-text required"  name="house[bank]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['bank'];?>
<?php $_tmp47=ob_get_clean();?><?php echo $_tmp47;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>餐馆：</th>
                            <td>
                                <input class="common-text required"  name="house[restaurant]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['restaurant'];?>
<?php $_tmp48=ob_get_clean();?><?php echo $_tmp48;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>医院：</th>
                            <td>
                                <input class="common-text required"  name="house[hospital]" size="50" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['hospital'];?>
<?php $_tmp49=ob_get_clean();?><?php echo $_tmp49;?>
" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>是否激活：</th>
                            <td>
                                <input class="common-text required"  name="house[status]" value="1" type="radio" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['status']==1){?><?php $_tmp50=ob_get_clean();?><?php echo $_tmp50;?>
checked<?php ob_start();?><?php }?><?php $_tmp51=ob_get_clean();?><?php echo $_tmp51;?>
>激活 &nbsp;
                                <input class="common-text required"  name="house[status]" value="-1" type="radio" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['status']==-1){?><?php $_tmp52=ob_get_clean();?><?php echo $_tmp52;?>
checked<?php ob_start();?><?php }?><?php $_tmp53=ob_get_clean();?><?php echo $_tmp53;?>
>未激活 &nbsp;
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