<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 07:17:01
         compiled from "application\views\master\tblRuang.html" */ ?>
<?php /*%%SmartyHeaderCode:2155052a52556cdf5a6-61806111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f5dc9fa8b47792a051616f4ba769bb989240edd' => 
    array (
      0 => 'application\\views\\master\\tblRuang.html',
      1 => 1387351016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2155052a52556cdf5a6-61806111',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a52556da1326_66892746',
  'variables' => 
  array (
    'gdg' => 0,
    'ruang' => 0,
    'row' => 0,
    'host' => 0,
    'sql' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a52556da1326_66892746')) {function content_52a52556da1326_66892746($_smarty_tpl) {?>						<div class="row">
                           <div class="col-md-12">
                              <div class="add-portfolio">
                                 <span><?php echo $_smarty_tpl->tpl_vars['gdg']->value->nama;?>
, Universitas Paramadina</span>  	
								 <a class=" btn default" href="#add" data-toggle="modal" style="float:right">
									Tambah <i class="icon-plus"></i>
								 </a> 
                              </div>
                           </div>
                        </div>
			<div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
              <div class="portlet box red">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-edit"></i>Tabel Ruangan</div>
                     <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th>Kode</th>
                              <th>Nama</th>
                              <th>Lantai</th>
                              <th>Kapasitas Ruangan</th>
                              <th>Kapasitas Ujian</th>
                              <th>Edit</th>
                              <th>Delete</th>
                           </tr>
                        </thead>
                        <tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ruang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                           <tr >
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->lantai;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->kursiUmum;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->kursiTes;?>
</td>
                              <td><a class="edites" href="#editRuang" data-toggle="modal" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" name="edit">Edit</a></td>
                              <td><a class="deletes" href="#verifikasi" data-toggle="modal" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" name="delete">Delete</a></td>
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
                                 <h4 class="modal-title">Tambah Ruangan Gedung</h4>
                              </div>
								  <div class="modal-body">
									<div class="modal-body">
										<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterRuang/add" class="form-horizontal" method="post">
											<div class="form-body">
												  <div class="form-group">
													 <label  class="control-label col-md-3">Pilih Gedung</label>
													 <div class="col-md-9">
														<select class="form-control" id="props"  name="gedung" class="gedung">
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
														<input type="text" class="form-control" placeholder="Kode Ruang" id="kode" name="kode">
													 </div>
												  </div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Nama Ruang</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Nama Ruang" id="ruang" name="ruang">
													 </div>
												  </div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Lantai</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Posisi Lantai" id="lantai" name="lantai">
													 </div>
												  </div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Kursi Umum</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Jumlah Kursi Umum" id="umum" name="umum">
													 </div>
												  </div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Kursi Tes</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Jumlah Kursi Tes" id="tes" name="tes">
													 </div>
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
                           </div>
                           <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                     </div>
					 <div class="modal fade" id="editRuang" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Tambah Ruangan Gedung</h4>
                              </div>
								  <div class="modal-body">
									<div id="formRuang"></id>	
								  </div>
								</div>
							</div>
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

$(".edites").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterRuang/edit", {'opt':opt, 'val':val},function(resp){
			$('#formRuang').html(resp);
		});
	});
});


$(".deletes").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterRuang/delete", {'opt':opt, 'val':val},function(resp){
			$('#verifikasiRuang').html(resp);
		});
	});
});

</script><?php }} ?>