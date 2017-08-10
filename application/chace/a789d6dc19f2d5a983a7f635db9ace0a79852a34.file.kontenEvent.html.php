<?php /* Smarty version Smarty-3.1.14, created on 2014-04-16 11:25:51
         compiled from "application\views\admisi\kontenEvent.html" */ ?>
<?php /*%%SmartyHeaderCode:2383552a6a06be80a37-13225567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a789d6dc19f2d5a983a7f635db9ace0a79852a34' => 
    array (
      0 => 'application\\views\\admisi\\kontenEvent.html',
      1 => 1397622346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2383552a6a06be80a37-13225567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a6a06c035a57_30039068',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
    'periode' => 0,
    'jalur' => 0,
    'ruang' => 0,
    'petugas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a6a06c035a57_30039068')) {function content_52a6a06c035a57_30039068($_smarty_tpl) {?>				<div class="tab-pane" id="tab_1_4">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="add-portfolio" style="margin-bottom:10px">
                                 <span>Jadwal Penyelenggaraan Seleksi Universitas Paramadina</span>  
								 <a href="#add" class="btn" style="float:right;" data-toggle="modal"><i class="icon-plus"> </i> Tambah</a>
                              </div>							  
							   <div class="col-md-12" style="margin-bottom:10px;margin-left: -13px;">
									<select  class="form-control" name="periode" id="periode">
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
							<div id="selectJalur"> </div>
                           </div>						   
                        </div>
						<div id="tblJadwal" name="tblJadwal">
						</div>
				</div>
					<div class="modal fade" id="add" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog modal-wide">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Tambah Jadwal Seleksi</h4>
                              </div>
                              <div class="modal-body">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiJadwalSeleksi/add" class="form-horizontal" method="post">
									<div class="form-body">
										<div class = "row">
										 <div class="col-md-6">
											  <div class="form-group">
												 <label  class="control-label col-md-5">Kode</label>
												 <div class="input-group col-md-7">
													<input type="text" class="form-control" placeholder="Kode[Automatic]" id="kode" name="kode" disabled>
												 </div>
											  </div>
										 </div>
										 <div class="col-md-6">
											  <div class="form-group">
												 <label  class="control-label col-md-2">Nama</label>
												 <div class="input-group col-md-10">
													<input type="text" class="form-control" placeholder="Nama Jadwal Seleksi" id="nama" name="nama">
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
														<input type="text" class="form-control" name="tanggal">
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
														<input type="text" class="form-control timepicker-24" name="pukulMasuk">
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
														<input type="text" class="form-control timepicker-24" name="pukulKeluar">
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
														<select class="form-control" id="petugas"  name="petugas" class="petugas">
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
										 <div class="col-md-6">
										  <div class="form-group">
											<label  class="control-label col-md-5">Prioritas</label>
												<div class="col-md-7">
													<input type="number" class="form-control" name="prioritas" placeholder="Prioritas Pengisian Kelas" required>
												</div>
										  </div>
										 </div>
										</div>
									  <div class="modal-footer">
										 <button type="button" class="btn default" data-dismiss="modal">Close</button>
										 <button type="submit" class="btn blue" id="save" value="add" name="opt"> Tambah <i class="icon-plus"></i></a>
									  </div>
								</form>
                              </div>
                           </div>
						  </div>
                           <!-- /.modal-content -->
                    </div>
				</div>
<script>

jQuery(document).ready(function() {       
         // initiate layout and plugins
         FormComponents.init();
		 id = "admisiJadwalSeleksi";
		 $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiJalur",{
					'periode':$('#periode').val(), 'fungsi':id					
				},function(resp){
                $('#selectJalur').html(resp);
            });
      });

	$("#periode").change(function(){
		id = "admisiJadwalSeleksi";
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiJalur",{
					'periode':$('#periode').val(), 'fungsi':id					
				},function(resp){
                $('#selectJalur').html(resp);
            });
	});

</script>
 <?php }} ?>