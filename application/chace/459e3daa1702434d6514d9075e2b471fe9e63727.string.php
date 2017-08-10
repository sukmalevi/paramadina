<?php /* Smarty version Smarty-3.1.14, created on 2013-12-29 14:41:28
         compiled from "459e3daa1702434d6514d9075e2b471fe9e63727" */ ?>
<?php /*%%SmartyHeaderCode:1437252c0349890c880-49633681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '459e3daa1702434d6514d9075e2b471fe9e63727' => 
    array (
      0 => '459e3daa1702434d6514d9075e2b471fe9e63727',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1437252c0349890c880-49633681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jalur' => 0,
    'row' => 0,
    'periode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c03498a15ee0_01029681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c03498a15ee0_01029681')) {function content_52c03498a15ee0_01029681($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jalur']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kodejalur;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->namajalur;?>
</option>
						<input value="<?php echo $_smarty_tpl->tpl_vars['periode']->value;?>
">
				 <?php } ?><?php }} ?>