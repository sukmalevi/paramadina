<?php /* Smarty version Smarty-3.1.14, created on 2014-04-16 11:34:20
         compiled from "application\views\admisi\formEvent.html" */ ?>
<?php /*%%SmartyHeaderCode:234552bb0136bb1554-78599750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '481d67f3ed200eb0cc92c576c33b8bcfd5ea55ee' => 
    array (
      0 => 'application\\views\\admisi\\formEvent.html',
      1 => 1397621687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234552bb0136bb1554-78599750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bb0137010066_71836057',
  'variables' => 
  array (
    'host' => 0,
    'event' => 0,
    'periode' => 0,
    'row' => 0,
    'jalur' => 0,
    'ruang' => 0,
    'petugas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bb0137010066_71836057')) {function content_52bb0137010066_71836057($_smarty_tpl) {?>								<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiJadwalSeleksi/edit/do" class="form-horizontal" method="post">
									<div class="form-body">
										<div class = "row">
										 <div class="col-md-6">
											  <div class="form-group">
												 <label  class="control-label col-md-5">Kode</label>
												 <div class="input-group col-md-7">
													<input  name="kode" value="<?php echo $_smarty_tpl->tpl_vars['event']->value->id_event;?>
" hidden>
													<input type="text" class="form-control" placeholder="Kode[Automatic]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value->id_event;?>
" disabled>
												 </div>
											  </div>
										 </div>
										 <div class="col-md-6">
											  <div class="form-group">
												 <label  class="control-label col-md-2">Nama</label>
												 <div class="input-group col-md-10">
													<input type="text" class="form-control" placeholder="Nama Jadwal Seleksi" id="nama" name="nama" value="<?php echo $_smarty_tpl->tpl_vars['event']->value->nama_event;?>
">
												 </div>
											  </div>
										 </div>
										</div>
										<div class = "row">
										 <div class="col-md-10">
											  <div class="form-group">
												<label  class="control-label col-md-3">Periode</label>
													<div class="col-md-9">
														<select class="form-control" id="periode"  name="periode" class="periode">
																<option value="<?php echo $_smarty_tpl->tpl_vars['event']->value->periode;?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value->nama_periode;?>
</option>
															<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
										 <div class="col-md-6">
											  <div class="form-group">
												<label  class="control-label col-md-5">Jalur</label>
													<div class="col-md-7">
														<select class="form-control" id="jalur"  name="jalur" class="jalur">
																<option value="<?php echo $_smarty_tpl->tpl_vars['event']->value->jalur;?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value->nama_jalur;?>
</option>
															<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jalur']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
										 <div class="col-md-6">
											  <div class="form-group">
												<label  class="control-label col-md-2">Ruang</label>
													<div class="col-md-9">
														<select class="form-control" id="ruang"  name="ruang" class="ruang">
																<option value="<?php echo $_smarty_tpl->tpl_vars['event']->value->ruang;?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value->nama_ruang;?>
</option>
															<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ruang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
										 <div class="col-md-6">
											  <div class="form-group">
												   <label class="control-label col-md-5">Tanggal</label>
												   <div class="col-md-7">
												   <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
														<input type="text" class="form-control" name="tanggal" value="<?php echo $_smarty_tpl->tpl_vars['event']->value->tanggal;?>
">
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
														<input type="text" class="form-control timepicker-24" name="pukulMasuk" value="<?php echo $_smarty_tpl->tpl_vars['event']->value->jamMasuk;?>
">
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
														<input type="text" class="form-control timepicker-24" name="pukulKeluar" value="<?php echo $_smarty_tpl->tpl_vars['event']->value->jamKeluar;?>
">
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
												<label  class="control-label col-md-3">Petugas</label>
													<div class="col-md-9">
														<select class="form-control" id="petugas"  name="petugas" class="petugas" >
																<option value="<?php echo $_smarty_tpl->tpl_vars['event']->value->petugas;?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value->nama_petugas;?>
</option>
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
												<label  class="control-label col-md-3">Pewawancara 1</label>
												<div class="col-md-9">
														<select class="form-control" id="pww1"  name="pww1" class="pww1">
																<option value="<?php echo $_smarty_tpl->tpl_vars['event']->value->pewawancara;?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value->nama_pww;?>
</option>
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
															<option value="<?php echo $_smarty_tpl->tpl_vars['event']->value->pewawancara2;?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value->nama_pww2;?>
</option>
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
										 <div class="col-md-6">
										  <div class="form-group">
											<label  class="control-label col-md-5">Status</label>
												<div class="col-md-7">
													<select class="form-control" id="status"  name="status" class="status">
														<?php if ($_smarty_tpl->tpl_vars['event']->value->status=='1'){?><option value="1">AKTIF</option><?php }else{ ?><option value="0">TIDAK AKTIF</option><?php }?>
														<option value="1">AKTIF</option>
														<option value="0">TIDAK AKTIF</option>
													</select>
												</div>
										  </div>
										 </div>									 
										 <div class="col-md-6">
										  <div class="form-group">
											<label  class="control-label col-md-5">Prioritas</label>
												<div class="col-md-7">
													<input type="number" class="form-control" name="prioritas" placeholder="Prioritas Pengisian Kelas" required value="<?php echo $_smarty_tpl->tpl_vars['event']->value->prioritas;?>
">
												</div>
										  </div>
										 </div>
										</div>
									  <div class="modal-footer">
										 <button type="button" class="btn default" data-dismiss="modal">Close</button>
										 <button type="submit" class="btn blue" id="save" value="edit" name="opt"> Tambah <i class="icon-plus"></i></a>
									  </div>
								</form>
<script>
jQuery(document).ready(function() {       
         // initiate layout and plugins
         FormComponents.init();
	});
</script><?php }} ?>