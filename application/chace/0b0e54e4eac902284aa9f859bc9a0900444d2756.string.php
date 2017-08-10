<?php /* Smarty version Smarty-3.1.14, created on 2013-12-27 07:39:32
         compiled from "0b0e54e4eac902284aa9f859bc9a0900444d2756" */ ?>
<?php /*%%SmartyHeaderCode:686452bd2eb4916dc6-35049763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b0e54e4eac902284aa9f859bc9a0900444d2756' => 
    array (
      0 => '0b0e54e4eac902284aa9f859bc9a0900444d2756',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '686452bd2eb4916dc6-35049763',
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
  'unifunc' => 'content_52bd2eb49bc983_10214735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bd2eb49bc983_10214735')) {function content_52bd2eb49bc983_10214735($_smarty_tpl) {?><select  class="form-control" name="prodi">
					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
					<?php } ?></select><?php }} ?>