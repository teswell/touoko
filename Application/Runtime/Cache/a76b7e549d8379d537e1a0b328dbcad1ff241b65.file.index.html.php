<?php /* Smarty version Smarty-3.1.6, created on 2016-10-17 14:13:22
         compiled from "./Application/Home/View\Task\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2543958046c02374832-45370633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a76b7e549d8379d537e1a0b328dbcad1ff241b65' => 
    array (
      0 => './Application/Home/View\\Task\\index.html',
      1 => 1472196827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2543958046c02374832-45370633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'list' => 0,
    'row' => 0,
    'position_id' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58046c024ff11',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58046c024ff11')) {function content_58046c024ff11($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\tsewell\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
                <form action="#" method="post">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>预约人姓名</th>
                            <th>预约人电话</th>
                            <th>预约的房子</th>
                            <th>任务状态</th>
                            <th>任务生成时间</th>
                            <th>负责管家</th>
                            <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['status']->value!=1){?><?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>

                            <th>处理完成时间</th>
                            <?php ob_start();?><?php }?><?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>

                            <th>操作</th>
                        </tr>
                        <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?><?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>

                        <tr>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                            <td class= "first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
                            <td class= "first-cell"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['house'];?>
<?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>
</td>
                            <td class= "first-cell"><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==1){?><?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>
待处理<?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==2){?><?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>
处理完成<?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==-1){?><?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>
暂不处理<?php ob_start();?><?php }?><?php $_tmp12=ob_get_clean();?><?php echo $_tmp12;?>
</td>
                            <td class= "first-cell"><?php ob_start();?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['submit_time'],'%Y-%m-%d %H:%M:%S');?>
<?php $_tmp13=ob_get_clean();?><?php echo $_tmp13;?>
</td>
                            <td class= "first-cell"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['finish_username'];?>
<?php $_tmp14=ob_get_clean();?><?php echo $_tmp14;?>
</td>
                            <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['status']->value!=1){?><?php $_tmp15=ob_get_clean();?><?php echo $_tmp15;?>

                            <td class= "first-cell"><?php ob_start();?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['finish_time'],"%Y-%m-%d %H:%I:%S");?>
<?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>
</td>
                            <?php ob_start();?><?php }?><?php $_tmp17=ob_get_clean();?><?php echo $_tmp17;?>

                            <td align= "center">
                                <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['position_id']->value==-1){?><?php $_tmp18=ob_get_clean();?><?php echo $_tmp18;?>

                                <!--管理员查看任务-->
                                <a href= "/home/task/administration/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp19=ob_get_clean();?><?php echo $_tmp19;?>
"> 查看任务详情 </a>
                                <?php ob_start();?><?php }elseif($_smarty_tpl->tpl_vars['position_id']->value==5){?><?php $_tmp20=ob_get_clean();?><?php echo $_tmp20;?>

                                <!--管家处理任务页面-->
                                <a href= "/home/task/keeper/id/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp21=ob_get_clean();?><?php echo $_tmp21;?>
"> 进入任务详情 </a>
                                <?php ob_start();?><?php }?><?php $_tmp22=ob_get_clean();?><?php echo $_tmp22;?>

                            </td>
                        </tr>
                        <?php ob_start();?><?php } ?><?php $_tmp23=ob_get_clean();?><?php echo $_tmp23;?>

                    </table>
                </form>
                <div class="list-page"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp24=ob_get_clean();?><?php echo $_tmp24;?>
</div>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }} ?>