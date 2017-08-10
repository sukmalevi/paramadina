<?php /* Smarty version Smarty-3.1.14, created on 2013-12-27 08:06:44
         compiled from "8260dd2cf19285fa9f9ff4a7e8bcc8d311c531af" */ ?>
<?php /*%%SmartyHeaderCode:511652bd35149d44c5-23458739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8260dd2cf19285fa9f9ff4a7e8bcc8d311c531af' => 
    array (
      0 => '8260dd2cf19285fa9f9ff4a7e8bcc8d311c531af',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '511652bd35149d44c5-23458739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prodi' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bd3514a6fcf5_82346509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bd3514a6fcf5_82346509')) {function content_52bd3514a6fcf5_82346509($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
					<?php } ?><?php }} ?>