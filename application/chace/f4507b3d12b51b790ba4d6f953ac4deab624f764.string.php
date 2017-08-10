<?php /* Smarty version Smarty-3.1.14, created on 2016-12-05 08:22:06
         compiled from "f4507b3d12b51b790ba4d6f953ac4deab624f764" */ ?>
<?php /*%%SmartyHeaderCode:11024947565844c13ebc5c08-19906016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4507b3d12b51b790ba4d6f953ac4deab624f764' => 
    array (
      0 => 'f4507b3d12b51b790ba4d6f953ac4deab624f764',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '11024947565844c13ebc5c08-19906016',
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
  'unifunc' => 'content_5844c13ec71ac1_33203387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5844c13ec71ac1_33203387')) {function content_5844c13ec71ac1_33203387($_smarty_tpl) {?><option value="">--Pilih Jalur Seleksi --</option>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jalur']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kodesmb;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->namajalur;?>
</option>
				<?php } ?><?php }} ?>