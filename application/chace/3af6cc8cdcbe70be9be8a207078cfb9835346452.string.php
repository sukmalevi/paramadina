<?php /* Smarty version Smarty-3.1.14, created on 2014-01-04 08:29:33
         compiled from "3af6cc8cdcbe70be9be8a207078cfb9835346452" */ ?>
<?php /*%%SmartyHeaderCode:2757252c7c66d3eda54-81917954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af6cc8cdcbe70be9be8a207078cfb9835346452' => 
    array (
      0 => '3af6cc8cdcbe70be9be8a207078cfb9835346452',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2757252c7c66d3eda54-81917954',
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
  'unifunc' => 'content_52c7c66d498c69_05426459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c7c66d498c69_05426459')) {function content_52c7c66d498c69_05426459($_smarty_tpl) {?>	<select  class="form-control" name="kabkota" id="kabkota">
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prop']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
					<?php } ?></select><?php }} ?>