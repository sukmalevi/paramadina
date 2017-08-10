<?php /* Smarty version Smarty-3.1.14, created on 2014-04-16 12:29:40
         compiled from "application\views\master\kontenMasterPeriode.html" */ ?>
<?php /*%%SmartyHeaderCode:9959534dfdce2c73d9-89547953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '742213e51b85c75237cf67d56757843bd3a6e2e8' => 
    array (
      0 => 'application\\views\\master\\kontenMasterPeriode.html',
      1 => 1397626177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9959534dfdce2c73d9-89547953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_534dfdce492eb7_46145738',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
    'masterPeriode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534dfdce492eb7_46145738')) {function content_534dfdce492eb7_46145738($_smarty_tpl) {?>
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
                           <tr >
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tahun;?>
</td>
							  <td><?php if ($_smarty_tpl->tpl_vars['row']->value->jenjangType=='1'){?>S1<?php }else{ ?>S2<?php }?></td>
							  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tanggalMulai;?>
 s/d <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggalSelesai;?>
</td>
							  <td>
								<?php if ($_smarty_tpl->tpl_vars['row']->value->status=='1'){?>
									<a class="nonaktif" href="#" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
">AKTIF</a>
								<?php }else{ ?>
									<a class="aktif" href="#" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
">NON AKTIF</a>
								<?php }?></td>
                              <td><a class="editer" href="#formEdit" data-toggle="modal" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
">Edit</a></td>
                              <td><a class="deleter" href="#verifikasi" data-toggle="modal" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
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
                                 <h4 class="modal-title">Tambah Sesi Periode</h4>
                              </div>
                              <div class="modal-body">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterPeriode/add" class="form-horizontal" method="post">
									<div class="form-body">
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Kode</label>
                                             <div class="input-group col-md-6">
                                                <input type="text" class="form-control" placeholder="Kode Jalur Seleksi[Automatic]" id="kode" name="kode" disabled>
                                             </div>
                                          </div>
										  <div class="form-group">
											<label  class="control-label col-md-3">Periode</label>
												<div class="col-md-9">
													<select class="form-control" id="periode"  name="periode" class="periode">
													<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['masterPeriode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                             <label  class="control-label col-md-3">Sesi Ke-</label>
                                             <div class="input-group col-md-3">
                                                <input type="text" class="form-control" placeholder="Sesi Ke-" id="sesi" name="sesi" pattern="\d+">
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
master/masterPeriode/edit", {'opt':opt, 'val':val},function(resp){
			$('#form').html(resp);
		});
	});
	});


$(".deleter").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterPeriode/delete", {'opt':opt, 'val':val},function(resp){
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
master/masterPeriode/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
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
master/masterPeriode/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
			location.reload();
		});
	});
});

</script><?php }} ?>