<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 16:39:29
         compiled from "application\views\master\selectKabs.html" */ ?>
<?php /*%%SmartyHeaderCode:3219252b07e41624801-13521091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72da45cfae0edf3d5d210b332d477bdc1236c5d6' => 
    array (
      0 => 'application\\views\\master\\selectKabs.html',
      1 => 1387298249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3219252b07e41624801-13521091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kab' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b07e416b0605_64290138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b07e416b0605_64290138')) {function content_52b07e416b0605_64290138($_smarty_tpl) {?>												  <div class="form-group">
													 <label class="control-label col-md-3">Kabupaten</label>
													 <div class="col-md-9">														
														<select class="form-control" id="kab"  name="kab"> 
															<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?> 
															<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
															<?php } ?> 
														</select>
													 </div>
												  </div><?php }} ?>