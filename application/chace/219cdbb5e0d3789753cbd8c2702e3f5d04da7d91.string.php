<?php /* Smarty version Smarty-3.1.14, created on 2013-12-27 07:52:31
         compiled from "219cdbb5e0d3789753cbd8c2702e3f5d04da7d91" */ ?>
<?php /*%%SmartyHeaderCode:1421852bd31bfa3d8a0-86843123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '219cdbb5e0d3789753cbd8c2702e3f5d04da7d91' => 
    array (
      0 => '219cdbb5e0d3789753cbd8c2702e3f5d04da7d91',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1421852bd31bfa3d8a0-86843123',
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
  'unifunc' => 'content_52bd31bfaff3e0_63630317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bd31bfaff3e0_63630317')) {function content_52bd31bfaff3e0_63630317($_smarty_tpl) {?><select  class="form-control" name="jalur" id="jalur">
					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jalur']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kodejalur;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->namajalur;?>
</option>
					<?php } ?></select><?php }} ?>