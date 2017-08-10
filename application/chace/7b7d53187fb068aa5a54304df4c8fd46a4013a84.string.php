<?php /* Smarty version Smarty-3.1.14, created on 2015-11-12 19:16:28
         compiled from "7b7d53187fb068aa5a54304df4c8fd46a4013a84" */ ?>
<?php /*%%SmartyHeaderCode:12276609275644831ce8db33-01109820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b7d53187fb068aa5a54304df4c8fd46a4013a84' => 
    array (
      0 => '7b7d53187fb068aa5a54304df4c8fd46a4013a84',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '12276609275644831ce8db33-01109820',
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
  'unifunc' => 'content_5644831cedb7e4_03390777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5644831cedb7e4_03390777')) {function content_5644831cedb7e4_03390777($_smarty_tpl) {?><option value="0">--Pilih Jalur Seleksi--</option>
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jalur']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kodejalur;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->namajalur;?>
</option>
                        <?php } ?><?php }} ?>