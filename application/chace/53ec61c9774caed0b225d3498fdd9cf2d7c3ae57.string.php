<?php /* Smarty version Smarty-3.1.14, created on 2014-01-03 17:43:59
         compiled from "53ec61c9774caed0b225d3498fdd9cf2d7c3ae57" */ ?>
<?php /*%%SmartyHeaderCode:387752c6f6df4415d2-91405611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53ec61c9774caed0b225d3498fdd9cf2d7c3ae57' => 
    array (
      0 => '53ec61c9774caed0b225d3498fdd9cf2d7c3ae57',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '387752c6f6df4415d2-91405611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prop' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c6f6df4ea826_15960124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6f6df4ea826_15960124')) {function content_52c6f6df4ea826_15960124($_smarty_tpl) {?>	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prop']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
					<?php } ?><?php }} ?>