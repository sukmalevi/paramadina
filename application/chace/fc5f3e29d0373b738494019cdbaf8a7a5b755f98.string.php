<?php /* Smarty version Smarty-3.1.14, created on 2013-12-27 07:22:06
         compiled from "fc5f3e29d0373b738494019cdbaf8a7a5b755f98" */ ?>
<?php /*%%SmartyHeaderCode:2587952bd2a9e890248-90922248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc5f3e29d0373b738494019cdbaf8a7a5b755f98' => 
    array (
      0 => 'fc5f3e29d0373b738494019cdbaf8a7a5b755f98',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2587952bd2a9e890248-90922248',
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
  'unifunc' => 'content_52bd2a9e917ae6_38463804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bd2a9e917ae6_38463804')) {function content_52bd2a9e917ae6_38463804($_smarty_tpl) {?><select  class="form-control" name="prodi">
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
				<?php } ?></select><?php }} ?>