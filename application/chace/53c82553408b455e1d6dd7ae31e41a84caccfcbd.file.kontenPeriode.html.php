<?php /* Smarty version Smarty-3.1.14, created on 2017-03-27 13:45:17
         compiled from "application/views/master/kontenPeriode.html" */ ?>
<?php /*%%SmartyHeaderCode:15741323553586eea0513b2-96251798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53c82553408b455e1d6dd7ae31e41a84caccfcbd' => 
    array (
      0 => 'application/views/master/kontenPeriode.html',
      1 => 1489978406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15741323553586eea0513b2-96251798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53586eea12ffa2_30983890',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53586eea12ffa2_30983890')) {function content_53586eea12ffa2_30983890($_smarty_tpl) {?>
			<div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="portlet box purple">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-user"></i>Table Periode SMB</div>
                     <div class="actions">
                        <a class="btn blue" href="#add" data-toggle="modal"><i class="icon-pencil"></i> Add</a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th>Tahun</th>
                              <th>Semester</th>	
                              <th>Jenjang Studi</th>							  
                              <th>Nama Periode</th>								  
                              <th>Tanggal Periode</th>							  
                              <th>Status</th>
                              <th>Edit</th>
                              <th>Delete</th>
                           </tr>
                        </thead>
                        <tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                           <tr class="<?php if ($_smarty_tpl->tpl_vars['row']->value->status=='1'){?> active<?php }?>">
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tahun;?>
 - <?php echo $_smarty_tpl->tpl_vars['row']->value->tahunSelesai;?>
</td>
							  <td>Semester <?php echo $_smarty_tpl->tpl_vars['row']->value->semester;?>
</td>
							  <td><?php if ($_smarty_tpl->tpl_vars['row']->value->jenjangType=='1'){?>S1<?php }else{ ?>S2<?php }?></td>
							  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tanggalMulai;?>
 s/d <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggalSelesai;?>
</td>
							  <td>
								<?php if ($_smarty_tpl->tpl_vars['row']->value->status=='1'){?>
									<a class="nonaktif" href="#" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">AKTIF</a>
								<?php }else{ ?>
									<a class="aktif" href="#" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">NON AKTIF</a>
								<?php }?></td>
                              <td><a class="editer" href="#formEdit" data-toggle="modal" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">Edit</a></td>
                              <td><a class="deleter" href="#verifikasi" data-toggle="modal" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">Delete</a></td>
                           </tr>
						<?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- END EXAMPLE TABLE PORTLET-->
            </div>
					<div class="modal fade" id="add" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Tambah Jalur Seleksi</h4>
                              </div>
                              <div class="modal-body">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/periode/add" class="form-horizontal" method="post">
									<div class="form-body">
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Kode</label>
                                             <div class="input-group col-md-6">
                                                <input type="text" class="form-control" placeholder="Kode Jalur Seleksi[Automatic]" id="kode" name="kode" disabled>
                                             </div>
                                          </div>
                                          <div class="form-group">
											<label  class="control-label col-md-3">Jenjang Pendidikan</label>
												<div class="col-md-9">
													<select class="form-control" id="jenjang"  name="jenjang" class="jenjang">
														<option value="1">S1</option>
														<option value="2">S2</option>
													</select>
												</div>
										  </div>
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Tahun Periode</label>
                                             <div class="input-group col-md-4">
                                                <input type="text" class="form-control" placeholder="Tahun Mulai" id="startYear" name="startYear">
                                             </div>
											 <div class="input-group col-md-4">
                                                <input type="text" class="form-control" placeholder="Tahun Selesai" id="endYear" name="endYear">
                                             </div>
                                          </div>
										  <div class="form-group">
											  <label class="control-label col-md-3">Date Range</label>
											  <div class="col-md-4">
												 <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
													<input type="text" class="form-control" name="from">
													<span class="input-group-addon">to</span>
													<input type="text" class="form-control" name="to"  >
												 </div>
												 <!-- /input-group -->
												 <span class="help-block">Select date range</span>
											  </div>
										   </div>
										  <div class="form-group">
											<label  class="control-label col-md-3">Semester</label>
												<div class="col-md-9">
													<select class="form-control" id="semester"  name="semester" class="semester">
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
                                                <input type="text" class="form-control" placeholder="[Tahun Mulai]-[Tahun Selesai]-[Jenjang]-[Semester]" id="nama" name="nama">
                                             </div>
                                          </div>
										  <div class="form-group">
											<label  class="control-label col-md-3">Status</label>
												<div class="col-md-9">
													<select class="form-control" id="status"  name="status" class="status">
														<option value="1">AKTIF</option>
														<option value="0">TIDAK AKTIF</option>
													</select>
												</div>
										  </div>
									  <div class="modal-footer">
										 <button type="button" class="btn default" data-dismiss="modal">Close</button>
										 <button type="submit" class="btn blue" id="save" value="save" name="opt"> Tambah <i class="icon-plus"></i></a>
									  </div>
								</form>
                              </div>
                           </div>
						  </div>
                           <!-- /.modal-content -->
                    </div>
				</div>
				</div>
					<div class="modal fade" id="formEdit" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Edit Periode Seleksi</h4>
                              </div>
                              <div class="modal-body">
								<div id="form"></id>							  
                              </div>
                           </div>
						  </div>
                           <!-- /.modal-content -->
                        </div>
					</div>
					<div id="verifikasi" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Confirmation</h4>
                              </div>
							  <div id="verifikasiRuang">
							  </div>
                           </div>
                        </div>
                    </div>
<script>
jQuery(document).ready(function() {       
         // initiate layout and plugins
         FormComponents.init();
	});

	$(".editer").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/periode/edit", {'opt':opt, 'val':val},function(resp){
			$('#form').html(resp);
		});
	});
	});


$(".deleter").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/periode/delete", {'opt':opt, 'val':val},function(resp){
			$('#verifikasiRuang').html(resp);
		});
	});
});


$(".nonaktif").each(function (i, v){
	$(this).click( function() {	
			id = "nonaktif";
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/periode/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
			location.reload();
		});
	});
});


$(".aktif").each(function (i, v){
	$(this).click( function() {	
			id = "aktif";
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/periode/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
			location.reload();
		});
	});
});

</script><?php }} ?>