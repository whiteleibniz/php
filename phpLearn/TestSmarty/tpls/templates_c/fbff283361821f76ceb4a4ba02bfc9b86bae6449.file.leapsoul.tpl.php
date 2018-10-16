<?php /* Smarty version Smarty-3.1.12, created on 2017-05-16 03:14:27
         compiled from "tpls\templates\leapsoul.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7251591a5273b843a0-69526586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbff283361821f76ceb4a4ba02bfc9b86bae6449' => 
    array (
      0 => 'tpls\\templates\\leapsoul.tpl',
      1 => 1494897070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7251591a5273b843a0-69526586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_591a5273c94290_95494266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591a5273c94290_95494266')) {function content_591a5273c94290_95494266($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\phpLearn\\TestSmarty\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


<div align="center">
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["sec"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['name'] = "sec";
$_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["sec"]['total']);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['title'];?>
</h1>
    <div align="center">
        <?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['content'];?>

    </div>
    <div align="right">
        发表时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['time'],"%Y-%m-%d %H:%I:%S");?>

    </div>
    <?php endfor; endif; ?>
</div>
</body>
</html><?php }} ?>