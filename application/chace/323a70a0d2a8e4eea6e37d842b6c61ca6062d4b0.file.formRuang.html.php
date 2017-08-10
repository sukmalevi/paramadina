<?php /* Smarty version Smarty-3.1.14, created on 2015-02-13 14:12:44
         compiled from "application/views/master/formRuang.html" */ ?>
<?php /*%%SmartyHeaderCode:29046493254dda3ec91b838-11486349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '323a70a0d2a8e4eea6e37d842b6c61ca6062d4b0' => 
    array (
      0 => 'application/views/master/formRuang.html',
      1 => 1398153918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29046493254dda3ec91b838-11486349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'ruang' => 0,
    'sql' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54dda3ec9ea625_96873181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dda3ec9ea625_96873181')) {function content_54dda3ec9ea625_96873181($_smarty_tpl) {?>										<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterRuang/edit/do" class="form-horizontal" method="post">
											<div class="form-body">
												  <div class="form-group">
													 <label  class="control-label col-md-3">Pilih Gedung</label>
													 <div class="col-md-9">
														<select class="form-control" id="props"  name="gedung" class="gedung">
															<option value="<?php echo $_smarty_tpl->tpl_vars['ruang']->value->gedung;?>
"><?php echo $_smarty_tpl->tpl_vars['ruang']->value->nama_gedung;?>
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
													 <label  class="control-label col-md-3">Kode Ruang</label>
													 <div class="input-group col-md-6">
														<input type="text" class="form-control" placeholder="Kode Ruang" id="kode" name="kode" value="<?php echo $_smarty_tpl->tpl_vars['ruang']->value->kode_r;?>
">
													 </div>
												  </div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Nama Ruang</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Nama Ruang" id="ruang" name="ruang" value="<?php echo $_smarty_tpl->tpl_vars['ruang']->value->nama_r;?>
">
													 </div>
												  </div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Lantai</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Posisi Lantai" id="lantai" name="lantai" value="<?php echo $_smarty_tpl->tpl_vars['ruang']->value->lantai;?>
">
													 </div>
												  </div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Kursi Umum</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Jumlah Kursi Umum" id="umum" name="umum" value="<?php echo $_smarty_tpl->tpl_vars['ruang']->value->kursiUmum;?>
">
													 </div>
												  </div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Kursi Tes</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Jumlah Kursi Tes" id="tes" name="tes" value="<?php echo $_smarty_tpl->tpl_vars['ruang']->value->kursiTes;?>
">
													 </div>
												  </div>
											</div>
										  <div class="modal-footer">
											 <button type="button" class="btn default" data-dismiss="modal">Close</button>
											 <button type="submit" class="btn blue" id="edit" value="edit" name="opt"> Tambah <i class="icon-plus"></i></a>
										  </div>
										</form><?php }} ?>