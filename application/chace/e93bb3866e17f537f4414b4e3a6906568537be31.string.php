<?php /* Smarty version Smarty-3.1.14, created on 2014-01-03 17:49:18
         compiled from "e93bb3866e17f537f4414b4e3a6906568537be31" */ ?>
<?php /*%%SmartyHeaderCode:375552c6f81edefab8-22374967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e93bb3866e17f537f4414b4e3a6906568537be31' => 
    array (
      0 => 'e93bb3866e17f537f4414b4e3a6906568537be31',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '375552c6f81edefab8-22374967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kab' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c6f81ee8f5c7_73802289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6f81ee8f5c7_73802289')) {function content_52c6f81ee8f5c7_73802289($_smarty_tpl) {?>	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->kodepos;?>
</option>
					<?php } ?><?php }} ?>