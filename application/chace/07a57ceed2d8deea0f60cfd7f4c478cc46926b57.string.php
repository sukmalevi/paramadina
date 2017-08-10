<?php /* Smarty version Smarty-3.1.14, created on 2013-12-27 07:50:44
         compiled from "07a57ceed2d8deea0f60cfd7f4c478cc46926b57" */ ?>
<?php /*%%SmartyHeaderCode:904652bd31544c6468-55585061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07a57ceed2d8deea0f60cfd7f4c478cc46926b57' => 
    array (
      0 => '07a57ceed2d8deea0f60cfd7f4c478cc46926b57',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '904652bd31544c6468-55585061',
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
  'unifunc' => 'content_52bd315455c781_10597857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bd315455c781_10597857')) {function content_52bd315455c781_10597857($_smarty_tpl) {?><select  class="form-control" name="prodi" id="prodi">
					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
					<?php } ?></select><?php }} ?>