<?php /* Smarty version Smarty-3.1.6, created on 2016-08-31 10:12:44
         compiled from "./Application/Home/View\comm\left.html" */ ?>
<?php /*%%SmartyHeaderCode:1837957c63d1c8efa10-15592294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eb577047ee14d1a23282d2ca4332566d9579e56' => 
    array (
      0 => './Application/Home/View\\comm\\left.html',
      1 => 1471418313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1837957c63d1c8efa10-15592294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'left_menu' => 0,
    'val' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c63d1c9320a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c63d1c9320a')) {function content_57c63d1c9320a($_smarty_tpl) {?><div class="sidebar-wrap">
    <div class="sidebar-title">
        <h1>菜单</h1>
    </div>
    <div class="sidebar-content">
        <ul class="sidebar-list">
            <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['left_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

            <li>
                <a href="javascript:void(0);" onclick="getmenu(<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
)"><i class="icon-font">&#xe003;</i><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
</a>
                <ul class="sub-menu-<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>
" style="display: none">
                    <?php ob_start();?><?php if (!empty($_smarty_tpl->tpl_vars['val']->value['child'])){?><?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>

                    <?php ob_start();?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>

                    <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
"><i class="icon-font">&#xe008;</i><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>
</a></li>
                    <?php ob_start();?><?php } ?><?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>

                    <?php ob_start();?><?php }?><?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>

                </ul>
            </li>
            <?php ob_start();?><?php } ?><?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>

        </ul>
    </div>
</div>
<script>
    function getmenu(id) {
        if ( $(".sub-menu-"+id).css("display") == 'none' ) {
            $(".sub-menu-"+id).css("display","block");
        }else {
            $(".sub-menu-"+id).css("display","none");
        }

    }
</script><?php }} ?>