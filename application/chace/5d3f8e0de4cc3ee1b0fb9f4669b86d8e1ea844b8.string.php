<?php /* Smarty version Smarty-3.1.14, created on 2013-12-27 07:00:46
         compiled from "5d3f8e0de4cc3ee1b0fb9f4669b86d8e1ea844b8" */ ?>
<?php /*%%SmartyHeaderCode:270552bd259e752258-33306814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d3f8e0de4cc3ee1b0fb9f4669b86d8e1ea844b8' => 
    array (
      0 => '5d3f8e0de4cc3ee1b0fb9f4669b86d8e1ea844b8',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '270552bd259e752258-33306814',
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
  'unifunc' => 'content_52bd259e7f8a07_52447743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bd259e7f8a07_52447743')) {function content_52bd259e7f8a07_52447743($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option><?php } ?><?php }} ?>