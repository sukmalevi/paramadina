<?php /* Smarty version Smarty-3.1.14, created on 2014-05-26 17:39:56
         compiled from "application/views/master/formMasterPeriode.html" */ ?>
<?php /*%%SmartyHeaderCode:96144220453586ef2aabd49-03541774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fba56f28c1fe93d48f73437464850ff0a1946b3f' => 
    array (
      0 => 'application/views/master/formMasterPeriode.html',
      1 => 1400840693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96144220453586ef2aabd49-03541774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53586ef2b661b5_95366897',
  'variables' => 
  array (
    'host' => 0,
    'periode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53586ef2b661b5_95366897')) {function content_53586ef2b661b5_95366897($_smarty_tpl) {?>                                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/periode/edit/do" class="form-horizontal" method="post">
									<div class="form-body">
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Kode</label>
                                             <div class="input-group col-md-6">
												<input type="text" id="kode" name="kode" hidden value="<?php echo $_smarty_tpl->tpl_vars['periode']->value->kode;?>
">
                                                <input type="text" class="form-control" placeholder="Kode Jalur Seleksi[Automatic]" id="kode" name="kode" disabled value="<?php echo $_smarty_tpl->tpl_vars['periode']->value->kode;?>
">
                                             </div>
                                          </div>
                                          <div class="form-group">
											<label  class="control-label col-md-3">Jenjang Pendidikan</label>
												<div class="col-md-9">
													<select class="form-control" id="jenjang"  name="jenjang" class="jenjang">
														<?php if ($_smarty_tpl->tpl_vars['periode']->value->jenjangType=='1'){?>
														<option value="1">S1</option>
														<?php }else{ ?>
														<option value="2">S2</option>
														<?php }?>
														<option value="1">S1</option>
														<option value="2">S2</option>
													</select>
												</div>
										  </div>
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Tahun Periode</label>
                                             <div class="input-group col-md-4">
                                                <input type="text" class="form-control" placeholder="Tahun Mulai" id="startYear" name="startYear" value="<?php echo $_smarty_tpl->tpl_vars['periode']->value->tahun;?>
">
                                             </div>
											 <div class="input-group col-md-4">
                                                <input type="text" class="form-control" placeholder="Tahun Selesai" id="endYear" name="endYear" value="<?php echo $_smarty_tpl->tpl_vars['periode']->value->tahunSelesai;?>
">
                                             </div>
                                          </div>
										  <div class="form-group">
											  <label class="control-label col-md-3">Date Range</label>
											  <div class="col-md-4">
												 <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
													<input type="text" class="form-control" name="from" value="<?php echo $_smarty_tpl->tpl_vars['periode']->value->tanggalMulai;?>
">
													<span class="input-group-addon">to</span>
													<input type="text" class="form-control" name="to" value="<?php echo $_smarty_tpl->tpl_vars['periode']->value->tanggalSelesai;?>
">
												 </div>
												 <!-- /input-group -->
												 <span class="help-block">Select date range</span>
											  </div>
										   </div>
										  <div class="form-group">
											<label  class="control-label col-md-3">Semester</label>
												<div class="col-md-9">
													<select class="form-control" id="semester"  name="semester" class="semester">
														<?php if ($_smarty_tpl->tpl_vars['periode']->value->semester=='1'){?>
															<option value="1">Semester <?php echo $_smarty_tpl->tpl_vars['periode']->value->semester;?>
</option>
														<?php }elseif($_smarty_tpl->tpl_vars['periode']->value->semester=='2'){?>
															<option value="2">Semester <?php echo $_smarty_tpl->tpl_vars['periode']->value->semester;?>
</option>
														<?php }elseif($_smarty_tpl->tpl_vars['periode']->value->semester=='3'){?>
															<option value="3">Semester <?php echo $_smarty_tpl->tpl_vars['periode']->value->semester;?>
</option>
														<?php }elseif($_smarty_tpl->tpl_vars['periode']->value->semester=='4'){?>
															<option value="4">Semester <?php echo $_smarty_tpl->tpl_vars['periode']->value->semester;?>
</option>
														<?php }else{ ?>
															<option value="5">Semester <?php echo $_smarty_tpl->tpl_vars['periode']->value->semester;?>
</option>
														<?php }?>
														<option value="1">Semester 1</option>
														<option value="2">Semester 2</option>
														<option value="3">Semester 3</option>
														<option value="4">Semester 4</option>
														<option value="5">Semester 5</option>
														<option value="6">Semester 6</option>
														<option value="7">Semester 7</option>
														<option value="8">Semester 8</option>
													</select>
												</div>
										  </div>
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Nama Periode</label>
                                             <div class="input-group col-md-9">
                                                <input type="text" class="form-control" placeholder="[Tahun Mulai]-[Tahun Selesai]-[Jenjang]-[Semester]" id="nama" name="nama" value="<?php echo $_smarty_tpl->tpl_vars['periode']->value->nama;?>
">
                                             </div>
                                          </div>
										  <div class="form-group">
											<label  class="control-label col-md-3">Status</label>
												<div class="col-md-9">
													<select class="form-control" id="status"  name="status" class="status">
														<?php if ($_smarty_tpl->tpl_vars['periode']->value->status=='1'){?>
															<option value="1">AKTIF</option>
														<?php }else{ ?>
															<option value="0">TIDAK AKTIF</option>
														<?php }?>
														<option value="1">AKTIF</option>
														<option value="0">TIDAK AKTIF</option>
													</select>
												</div>
										  </div>
									  <div class="modal-footer">
										 <button type="button" class="btn default" data-dismiss="modal">Close</button>
										 <button type="submit" class="btn blue" id="edit" value="edit" name="opt"> Save </a>
									  </div>
								</form>
<script>
	jQuery(document).ready(function() {       
         // initiate layout and plugins
         FormComponents.init();
	});
</script><?php }} ?>