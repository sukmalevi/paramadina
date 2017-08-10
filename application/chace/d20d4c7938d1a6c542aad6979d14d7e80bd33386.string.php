<?php /* Smarty version Smarty-3.1.14, created on 2014-01-17 10:45:30
         compiled from "d20d4c7938d1a6c542aad6979d14d7e80bd33386" */ ?>
<?php /*%%SmartyHeaderCode:1493152d8a75a939fa7-97629434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd20d4c7938d1a6c542aad6979d14d7e80bd33386' => 
    array (
      0 => 'd20d4c7938d1a6c542aad6979d14d7e80bd33386',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1493152d8a75a939fa7-97629434',
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
  'unifunc' => 'content_52d8a75ab0a7f8_13218145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d8a75ab0a7f8_13218145')) {function content_52d8a75ab0a7f8_13218145($_smarty_tpl) {?><option>--Silahkan Pilih--</option>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
				<?php } ?><?php }} ?>