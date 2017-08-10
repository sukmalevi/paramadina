<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 15:50:10
         compiled from "application\views\master\formWilayah.html" */ ?>
<?php /*%%SmartyHeaderCode:39152b06e32ce6a36-23409176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba997e41dbc25721eff47cf8d186bcc32c31fd77' => 
    array (
      0 => 'application\\views\\master\\formWilayah.html',
      1 => 1387295121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39152b06e32ce6a36-23409176',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b06e32daa9a1_10024363',
  'variables' => 
  array (
    'host' => 0,
    'prop' => 0,
    'sql' => 0,
    'row' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06e32daa9a1_10024363')) {function content_52b06e32daa9a1_10024363($_smarty_tpl) {?>							<div class="modal-body">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterWilayah/edit/do" class="form-horizontal" method="post">
									<div class="form-body">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Propinsi</label>
                                             <div class="col-md-9">
                                                <select class="form-control" id="prop"  name="prop">
												 <option value="<?php echo $_smarty_tpl->tpl_vars['prop']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['prop']->value->nama;?>
</option>
												<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                                   <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
												<?php } ?>
                                                </select>
                                             </div>
                                          </div>
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Kode</label>
                                             <div class="input-group col-md-9">
                                                <input type="text" class="form-control" placeholder="Kode Wilayah" id="kode" name="kode" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->kode;?>
">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label  class="control-label col-md-3">Kabupaten</label>
                                             <div class="input-group col-md-9">
                                                <input type="text" class="form-control" placeholder="Nama Kabupaten" id="kab" name="kab" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->nama;?>
">
                                             </div>
                                          </div>
									</div>
								  <div class="modal-footer">
									 <button type="button" class="btn default" data-dismiss="modal">Close</button>
									 <button type="submit" class="btn blue" id="save" value="edit" name="opt"> Update <i class="icon-plus"></i></a>
								  </div>
								</form>
                              </div>
                           </div><?php }} ?>