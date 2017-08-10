<?php /* Smarty version Smarty-3.1.14, created on 2015-08-10 11:20:44
         compiled from "afb3a2e076f5f84a1311ad21f39e32aedc76cf00" */ ?>
<?php /*%%SmartyHeaderCode:204593409855c8269c73deb0-47079496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afb3a2e076f5f84a1311ad21f39e32aedc76cf00' => 
    array (
      0 => 'afb3a2e076f5f84a1311ad21f39e32aedc76cf00',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '204593409855c8269c73deb0-47079496',
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
  'unifunc' => 'content_55c8269c78b850_88191175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c8269c78b850_88191175')) {function content_55c8269c78b850_88191175($_smarty_tpl) {?><option value="">-: Pilih Program Studi :-</option>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
				<?php } ?><?php }} ?>