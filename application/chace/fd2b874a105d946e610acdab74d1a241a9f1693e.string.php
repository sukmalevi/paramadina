<?php /* Smarty version Smarty-3.1.14, created on 2016-04-18 16:09:47
         compiled from "fd2b874a105d946e610acdab74d1a241a9f1693e" */ ?>
<?php /*%%SmartyHeaderCode:3797024815714a45bf1c6e0-20414569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd2b874a105d946e610acdab74d1a241a9f1693e' => 
    array (
      0 => 'fd2b874a105d946e610acdab74d1a241a9f1693e',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3797024815714a45bf1c6e0-20414569',
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
  'unifunc' => 'content_5714a45c022742_66482535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5714a45c022742_66482535')) {function content_5714a45c022742_66482535($_smarty_tpl) {?><option value="">--Pilih Program Studi--</option>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
				<?php } ?><?php }} ?>