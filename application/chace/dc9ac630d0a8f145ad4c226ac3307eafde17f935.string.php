<?php /* Smarty version Smarty-3.1.14, created on 2013-12-27 08:00:02
         compiled from "dc9ac630d0a8f145ad4c226ac3307eafde17f935" */ ?>
<?php /*%%SmartyHeaderCode:2320452bd3382eab302-03319725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc9ac630d0a8f145ad4c226ac3307eafde17f935' => 
    array (
      0 => 'dc9ac630d0a8f145ad4c226ac3307eafde17f935',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2320452bd3382eab302-03319725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jalur' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bd3383052409_38162710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bd3383052409_38162710')) {function content_52bd3383052409_38162710($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jalur']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kodejalur;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->namajalur;?>
</option>
				 <?php } ?><?php }} ?>