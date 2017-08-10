<?php /* Smarty version Smarty-3.1.14, created on 2014-05-02 15:09:50
         compiled from "application/views/smb/formViaPhone.html" */ ?>
<?php /*%%SmartyHeaderCode:296977870536352ce404ab0-48239515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11c6949df41932560ea29722e2749d63e3602ae9' => 
    array (
      0 => 'application/views/smb/formViaPhone.html',
      1 => 1398153920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296977870536352ce404ab0-48239515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'calon' => 0,
    'petugas' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536352ce470307_12479627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536352ce470307_12479627')) {function content_536352ce470307_12479627($_smarty_tpl) {?>								<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/viaPhone/simpan/do" class="form-horizontal" method="post">
									<div class="form-body">
										<div class = "row">
										 <div class="col-md-10">
											  <div class="form-group">
												 <label  class="control-label col-md-3">Nama</label>
												 <div class="input-group col-md-9">
													<input  name="kode" value="<?php echo $_smarty_tpl->tpl_vars['calon']->value->kode;?>
" hidden>
													<input type="text" class="form-control" placeholder="Kode[Automatic]" value="<?php echo $_smarty_tpl->tpl_vars['calon']->value->nama;?>
" disabled>
												 </div>
											  </div>
										 </div>
										</div>
										<div class = "row">
										 <div class="col-md-6">
											  <div class="form-group">
												   <label class="control-label col-md-5">Tanggal</label>
												   <div class="col-md-7">
												   <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
														<input type="text" class="form-control" name="tanggal" >
												   </div>
												   </div>
											  </div>
										 </div>
										</div>
										<div class = "row">
										 <div class="col-md-6">
											  <div class="form-group">
												   <label class="control-label col-md-5">Jam Mulai</label>
												   <div class="col-md-7">
												     <div class="input-group bootstrap-timepicker">                                       
														<input type="text" class="form-control timepicker-24" name="jamMulai">
														<span class="input-group-btn">
														<button class="btn default" type="button"><i class="icon-time"></i></button>
														</span>
													 </div>
												   </div>
											  </div>
										 </div>
										</div>
										<div class = "row">
										 <div class="col-md-6">
											  <div class="form-group">
												   <label class="control-label col-md-5">Jam Selesai</label>
												   <div class="col-md-7">
												     <div class="input-group bootstrap-timepicker">                                       
														<input type="text" class="form-control timepicker-24" name="jamSelesai" >
														<span class="input-group-btn">
														<button class="btn default" type="button"><i class="icon-time"></i></button>
														</span>
													 </div>
												   </div>
											  </div>
										 </div>
										</div>
										<div class = "row">
										 <div class="col-md-10">
											  <div class="form-group">
												<label  class="control-label col-md-3">Pewawancara 1</label>
												<div class="col-md-9">
														<select class="form-control" id="pww1"  name="pww1" class="pww1">
															<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['petugas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
										 </div>
										</div>
										<div class = "row">
										 <div class="col-md-10">										  
										  <div class="form-group">
											<label  class="control-label col-md-3">Pewawancara 2</label>
												<div class="col-md-9">
													<select class="form-control" id="pww2"  name="pww2" class="pww2">
														<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['petugas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
										 </div>
										</div>										
										<div class = "row">
										 <div class="col-md-10">
											  <div class="form-group">
												<label  class="control-label col-md-3">No Telp</label>
												<div class="col-md-9">
													<input type="text" class="form-control" placeholder="No Telp" name="noTelp">
												</div>
											  </div>
										 </div>
										</div>
										
										<div class = "row">
										 <div class="col-md-10">
											  <div class="form-group">
												<label  class="control-label col-md-3">No HP</label>
												<div class="col-md-9">
													<input type="text" class="form-control" placeholder="No Handphone" name="noHp">
												</div>
											  </div>
										 </div>
										</div>
										<div class = "row">
										 <div class="col-md-6">
										  <div class="form-group">
											<label  class="control-label col-md-5">Status</label>
												<div class="col-md-7">
													<select class="form-control" id="status"  name="status" class="status">
														<option value="1">AKTIF</option>
														<option value="0">TIDAK AKTIF</option>
													</select>
												</div>
										  </div>
										 </div>	
										</div>
									  <div class="modal-footer">
										 <button type="button" class="btn default" data-dismiss="modal">Close</button>
										 <button type="submit" class="btn blue" id="save" value="edit" name="opt"> Simpan <i class="icon-plus"></i></a>
									  </div>
								</form>
<script>
jQuery(document).ready(function() {       
         // initiate layout and plugins
         FormComponents.init();
	});
</script><?php }} ?>