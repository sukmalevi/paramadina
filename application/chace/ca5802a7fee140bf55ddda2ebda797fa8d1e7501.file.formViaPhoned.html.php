<?php /* Smarty version Smarty-3.1.14, created on 2014-02-21 10:14:51
         compiled from "application\views\smb\formViaPhoned.html" */ ?>
<?php /*%%SmartyHeaderCode:114175306c333b76e36-86130016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca5802a7fee140bf55ddda2ebda797fa8d1e7501' => 
    array (
      0 => 'application\\views\\smb\\formViaPhoned.html',
      1 => 1392952489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114175306c333b76e36-86130016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5306c333c73868_26901331',
  'variables' => 
  array (
    'host' => 0,
    'calon' => 0,
    'phone' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5306c333c73868_26901331')) {function content_5306c333c73868_26901331($_smarty_tpl) {?>								<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
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
														<input type="text" class="form-control" name="tanggal" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value->tanggal;?>
" disabled>
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
														<input type="text" class="form-control timepicker-24" name="jamMulai"  value="<?php echo $_smarty_tpl->tpl_vars['phone']->value->jamMulai;?>
" disabled>
														
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
														<input type="text" class="form-control timepicker-24" name="jamSelesai"  value="<?php echo $_smarty_tpl->tpl_vars['phone']->value->jamSelesai;?>
" disabled>
														
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
														<select class="form-control" id="pww1"  name="pww1" class="pww1" disabled>
																<option><?php echo $_smarty_tpl->tpl_vars['phone']->value->pww1;?>
</option>
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
													<select class="form-control" id="pww2"  name="pww2" class="pww2" disabled>
															<option><?php echo $_smarty_tpl->tpl_vars['phone']->value->pww2;?>
</option>
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
													<input type="text" class="form-control" placeholder="No Telp" name="noTelp" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value->no_hp1;?>
" disabled>
												</div>
											  </div>
										 </div>
										</div>
										
										<div class = "row">
										 <div class="col-md-10">
											  <div class="form-group">
												<label  class="control-label col-md-3">No HP</label>
												<div class="col-md-9">
													<input type="text" class="form-control" placeholder="No Handphone" name="noHp" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value->no_hp1;?>
" disabled>
												</div>
											  </div>
										 </div>
										</div>
										<div class = "row">
										 <div class="col-md-6">
										  <div class="form-group">
											<label  class="control-label col-md-5">Status</label>
												<div class="col-md-7">
													<select class="form-control" id="status"  name="status" class="status" disabled>
													<?php if ($_smarty_tpl->tpl_vars['phone']->value->status=='1'){?>
														<option value="1">AKTIF</option>
													<?php }else{ ?>
														<option value="0">TIDAK AKTIF</option>
													<?php }?>
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