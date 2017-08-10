<?php /* Smarty version Smarty-3.1.14, created on 2013-12-27 07:21:05
         compiled from "application\views\pendaftaran\select.html" */ ?>
<?php /*%%SmartyHeaderCode:1724052bd27a67929d4-62175871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fac26a0286cc4f2fbf67e6965154ecf7cd756e06' => 
    array (
      0 => 'application\\views\\pendaftaran\\select.html',
      1 => 1388128855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1724052bd27a67929d4-62175871',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bd27a681fba2_32181989',
  'variables' => 
  array (
    'prodi' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bd27a681fba2_32181989')) {function content_52bd27a681fba2_32181989($_smarty_tpl) {?>
												  <select  class="form-control" name="prodi">
													<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option><?php } ?>
												  </select><?php }} ?>