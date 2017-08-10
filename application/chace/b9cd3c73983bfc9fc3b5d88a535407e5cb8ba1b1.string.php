<?php /* Smarty version Smarty-3.1.14, created on 2017-03-27 13:47:21
         compiled from "b9cd3c73983bfc9fc3b5d88a535407e5cb8ba1b1" */ ?>
<?php /*%%SmartyHeaderCode:121952199458d8b579dd1f77-55135678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9cd3c73983bfc9fc3b5d88a535407e5cb8ba1b1' => 
    array (
      0 => 'b9cd3c73983bfc9fc3b5d88a535407e5cb8ba1b1',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '121952199458d8b579dd1f77-55135678',
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
  'unifunc' => 'content_58d8b579e16d24_99797123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d8b579e16d24_99797123')) {function content_58d8b579e16d24_99797123($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
							  <?php } ?><?php }} ?>