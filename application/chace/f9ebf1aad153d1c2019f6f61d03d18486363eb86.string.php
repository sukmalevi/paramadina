<?php /* Smarty version Smarty-3.1.14, created on 2015-11-12 19:16:28
         compiled from "f9ebf1aad153d1c2019f6f61d03d18486363eb86" */ ?>
<?php /*%%SmartyHeaderCode:12647346065644831c019e13-57338551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9ebf1aad153d1c2019f6f61d03d18486363eb86' => 
    array (
      0 => 'f9ebf1aad153d1c2019f6f61d03d18486363eb86',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '12647346065644831c019e13-57338551',
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
  'unifunc' => 'content_5644831c06ac04_26210255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5644831c06ac04_26210255')) {function content_5644831c06ac04_26210255($_smarty_tpl) {?><option value="0">--Pilih Program Studi--</option>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
				<?php } ?><?php }} ?>