<?php /* Smarty version Smarty-3.1.14, created on 2013-12-27 07:38:04
         compiled from "33078d891b2c60832d567d784c406f91de874566" */ ?>
<?php /*%%SmartyHeaderCode:2547452bd2e5c4c7ba6-76183732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33078d891b2c60832d567d784c406f91de874566' => 
    array (
      0 => '33078d891b2c60832d567d784c406f91de874566',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2547452bd2e5c4c7ba6-76183732',
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
  'unifunc' => 'content_52bd2e5c5d2039_41546517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bd2e5c5d2039_41546517')) {function content_52bd2e5c5d2039_41546517($_smarty_tpl) {?><div class="col-md-9" style="width: 878px;">
					<select  class="form-control" name="prodi">
					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
					<?php } ?></select></div><?php }} ?>