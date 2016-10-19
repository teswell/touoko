<?php /* Smarty version Smarty-3.1.6, created on 2016-10-17 14:21:29
         compiled from "./Application/Home/View\Task\keeper.html" */ ?>
<?php /*%%SmartyHeaderCode:754858046de9ec2a40-27384947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a0d00481ff6bb8703e7843f428396f9baa7bbf' => 
    array (
      0 => './Application/Home/View\\Task\\keeper.html',
      1 => 1472196764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '754858046de9ec2a40-27384947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'log' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58046dea18bdc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58046dea18bdc')) {function content_58046dea18bdc($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\tsewell\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!doctype html>
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
                <form action="/home/task/keeper" method="post" id="myform" name="myform">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>预约人姓名：</th>
                            <td>
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
<?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>

                                <input type="hidden" name="keeper[id]" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
<?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>
"/>
                                <input type="hidden" name="log[task_id]" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
"/>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>预约人电话：</th>
                            <td>
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['mobile'];?>
<?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>

                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>预约人性别：</th>
                            <td>
                                <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['sex']==1){?><?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>
男 <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['info']->value['sex']==2){?><?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
女<?php ob_start();?><?php }?><?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>

                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>入住人数：</th>
                            <td>
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['number'];?>
<?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>
人
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>预约的房子：</th>
                            <td>
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['house_title'];?>
<?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>

                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>任务生成时间：</th>
                            <td>
                                <?php ob_start();?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['submit_time'],'%Y-%m-%d %H:%M:%S');?>
<?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>

                            </td>
                        </tr>
                        <tr>
                            <th width="120"><i class="require-red">*</i>负责管家：</th>
                            <td>
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['keeper_name'];?>
<?php $_tmp15=ob_get_clean();?><?php echo $_tmp15;?>

                            </td>
                        </tr>
                        <tr>
                            <th width="120"><i class="require-red">*</i>结果反馈：</th>
                            <td>
                                <select name="keeper[status]">
                                    <option value="">请选择</option>
                                    <option value="1" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['status']==1){?><?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>
selected<?php ob_start();?><?php }?><?php $_tmp17=ob_get_clean();?><?php echo $_tmp17;?>
>待处理</option>
                                    <option value="2" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['status']==2){?><?php $_tmp18=ob_get_clean();?><?php echo $_tmp18;?>
selected<?php ob_start();?><?php }?><?php $_tmp19=ob_get_clean();?><?php echo $_tmp19;?>
>处理完成</option>
                                    <option value="-1" <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['info']->value['status']==-1){?><?php $_tmp20=ob_get_clean();?><?php echo $_tmp20;?>
selected<?php ob_start();?><?php }?><?php $_tmp21=ob_get_clean();?><?php echo $_tmp21;?>
>暂不处理</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>备注：</th>
                            <td><textarea name="log[remark]" style="width: 445px;height: 152px"></textarea></td>
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
        <div>
            <table width="100%" style="border-collapse:collapse; font-family: '微软雅黑'"  border="1">
                <tr>
                    <th colspan="4" align=center style="height: 64px"><font size="5">任务的操作日志记录</font></th>
                </tr>
                <tr>
                    <th>类型</th><th>操作人</th><th>操作时间</th><th>备注</th>
                </tr>
                <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['log']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp22=ob_get_clean();?><?php echo $_tmp22;?>

                <tr>
                    <td align=center>
                        <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['val']->value['type']==1){?><?php $_tmp23=ob_get_clean();?><?php echo $_tmp23;?>
重分配管家
                        <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['val']->value['type']==2){?><?php $_tmp24=ob_get_clean();?><?php echo $_tmp24;?>
带客户看房完成
                        <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['val']->value['type']==-1){?><?php $_tmp25=ob_get_clean();?><?php echo $_tmp25;?>
暂不做处理
                        <?php ob_start();?><?php }?><?php $_tmp26=ob_get_clean();?><?php echo $_tmp26;?>

                    </td>
                    <td align=center><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['user'];?>
<?php $_tmp27=ob_get_clean();?><?php echo $_tmp27;?>
</td>
                    <td align=center><?php ob_start();?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['time'],'%Y-%m-%d %H:%M:%S');?>
<?php $_tmp28=ob_get_clean();?><?php echo $_tmp28;?>
</td>
                    <td align=center><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['remark'];?>
<?php $_tmp29=ob_get_clean();?><?php echo $_tmp29;?>
</td>
                </tr>
                <?php ob_start();?><?php } ?><?php $_tmp30=ob_get_clean();?><?php echo $_tmp30;?>

            </table>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html><?php }} ?>