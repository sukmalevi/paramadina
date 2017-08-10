<?php /* Smarty version Smarty-3.1.14, created on 2016-04-18 16:09:47
         compiled from "50968cf2bcac77fe03c65817a9aa8ca000d877a7" */ ?>
<?php /*%%SmartyHeaderCode:267434235714a45bee7233-66534843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50968cf2bcac77fe03c65817a9aa8ca000d877a7' => 
    array (
      0 => '50968cf2bcac77fe03c65817a9aa8ca000d877a7',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '267434235714a45bee7233-66534843',
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
  'unifunc' => 'content_5714a45bf30d69_93164011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5714a45bf30d69_93164011')) {function content_5714a45bf30d69_93164011($_smarty_tpl) {?><option value="">--Pilih Jalur Seleksi--</option>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jalur']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kodejalur;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->namajalur;?>
</option>
				<?php } ?><?php }} ?>