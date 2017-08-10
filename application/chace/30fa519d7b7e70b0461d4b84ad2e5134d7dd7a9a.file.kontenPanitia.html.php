<?php /* Smarty version Smarty-3.1.14, created on 2013-12-19 04:14:58
         compiled from "application\views\master\kontenPanitia.html" */ ?>
<?php /*%%SmartyHeaderCode:1712452a52b89078551-11566283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30fa519d7b7e70b0461d4b84ad2e5134d7dd7a9a' => 
    array (
      0 => 'application\\views\\master\\kontenPanitia.html',
      1 => 1387426428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1712452a52b89078551-11566283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a52b891eed76_01777475',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
    'jabatan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a52b891eed76_01777475')) {function content_52a52b891eed76_01777475($_smarty_tpl) {?>
			<div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="portlet box purple">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-edit"></i>Tabel Panitia SMB</div>
                     <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="table-toolbar">
                        <div class="btn-group">
                           <button id="sample_editable_1_new" class="btn green" href="#add" data-toggle="modal" >
                           Add New <i class="icon-plus"></i>
                           </button>
                        </div>
                        <div class="btn-group pull-right">
                           <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                           </button>
                           <ul class="dropdown-menu pull-right">
                              <li><a href="#">Print</a></li>
                              <li><a href="#">Save as PDF</a></li>
                              <li><a href="#">Export to Excel</a></li>
                           </ul>
                        </div>
                     </div>
                     <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th>Kode</th>
							  <th>Nama</th>
                              <th>Jabatan</th>	
							  <th>Dosen</th>	
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
                              <td>S<?php echo $_smarty_tpl->tpl_vars['row']->value->inisial;?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->panitia;?>
</td>							  
							  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->jab;?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->ps;?>
</td>
							  <td><?php if ($_smarty_tpl->tpl_vars['row']->value->status=='0'){?>AKTIF<?php }else{ ?>TIDAK AKTIF<?php }?></td>
                              <td><a class="editing" href="#formEdit" data-toggle="modal" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->inisial;?>
">Edit</a></td>
                              <td><a class="deleting" href="#verifikasi" data-toggle="modal" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->inisial;?>
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
                                 <h4 class="modal-title">Tambah Karyawan/Dosen</h4>
                              </div>
                              <div class="modal-body">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterPanitia/add" class="form-horizontal" method="post">
									<div class="form-body">
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Kode</label>
                                             <div class="input-group col-md-6">
                                                <input type="text" class="form-control" placeholder="Kode Karyawan/Dosen" id="kode" name="kode">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label  class="control-label col-md-3">Nama</label>
                                             <div class="input-group col-md-9">
                                                <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama">
                                             </div>
                                          </div>
										  <div class="form-group">
                                             <label  class="control-label col-md-3">NIP</label>
                                             <div class="input-group col-md-4">
                                                <input type="text" class="form-control" placeholder="NIP" id="nip" name="nip">
                                             </div>
                                          </div>
										  <div class="form-group">
											  <label  class="col-md-3 control-label">Status</label>
											  <div class="col-md-9">
												 <div class="radio-list">
													<label class="radio-inline">
													<input type="radio" name="optionsRadios" id="kar" value="0" checked> Karyawan
													</label>
													<label class="radio-inline">
													<input type="radio" name="optionsRadios" id="dosen" value="1" checked> Dosen
													</label>
												 </div>
											  </div>
										   </div>
										  <div class="form-group">
											<label  class="control-label col-md-3">Pilih Jabatan</label>
												<div class="col-md-9">
													<select class="form-control" id="props"  name="jabatan" class="jabatan">
														<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jabatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?> 
															<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
														<?php } ?>
													</select>
												</div>
										  </div>									</div>
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
					<div class="modal fade" id="formEdit" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Edit Karyawan/Dosen</h4>
                              </div>
                              <div class="modal-body">
								<div id="formPanitia"></id>							  
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

	$(".editing").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterPanitia/edit", {'opt':opt, 'val':val},function(resp){
			$('#formPanitia').html(resp);
		});
	});
	});


$(".deleting").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterPanitia/delete", {'opt':opt, 'val':val},function(resp){
			$('#verifikasiRuang').html(resp);
		});
	});
});

</script><?php }} ?>