<?php /* Smarty version Smarty-3.1.14, created on 2015-08-10 11:20:45
         compiled from "a8be973b362148c80db69d813b1a8d3b2b99d649" */ ?>
<?php /*%%SmartyHeaderCode:94163381255c8269d7548f2-73498394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8be973b362148c80db69d813b1a8d3b2b99d649' => 
    array (
      0 => 'a8be973b362148c80db69d813b1a8d3b2b99d649',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '94163381255c8269d7548f2-73498394',
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
  'unifunc' => 'content_55c8269d79b699_79295293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c8269d79b699_79295293')) {function content_55c8269d79b699_79295293($_smarty_tpl) {?><option value="">-: Pilih Jalur Masuk :-</option>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jalur']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
				 <?php } ?><?php }} ?>