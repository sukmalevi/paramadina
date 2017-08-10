<?php /* Smarty version Smarty-3.1.14, created on 2014-04-16 12:51:55
         compiled from "application\views\master\formPeriode.html" */ ?>
<?php /*%%SmartyHeaderCode:1080452b7d4dd7f3e68-41470800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54e1640eb38c74146ea4cd448e969fb1624a0dd9' => 
    array (
      0 => 'application\\views\\master\\formPeriode.html',
      1 => 1397627512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1080452b7d4dd7f3e68-41470800',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b7d4dd8b7b57_05396888',
  'variables' => 
  array (
    'host' => 0,
    'periode' => 0,
    'masterPeriode' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b7d4dd8b7b57_05396888')) {function content_52b7d4dd8b7b57_05396888($_smarty_tpl) {?>
                                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterPeriode/edit/do" class="form-horizontal" method="post">
									<div class="form-body">
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Kode</label>
                                             <div class="input-group col-md-6">
												<input type="text" id="kode" name="kode" hidden value="<?php echo $_smarty_tpl->tpl_vars['periode']->value->id;?>
">
                                                <input type="text" class="form-control" placeholder="Kode Jalur Seleksi[Automatic]" id="kode" name="kode" disabled value="<?php echo $_smarty_tpl->tpl_vars['periode']->value->id;?>
">
                                             </div>
                                          </div>										  
										  <div class="form-group">
											<label  class="control-label col-md-3">Periode</label>
												<div class="col-md-9">
													<select class="form-control" id="periode"  name="periode" class="periode">
														<option value="<?php echo $_smarty_tpl->tpl_vars['periode']->value->idMaster;?>
"><?php echo $_smarty_tpl->tpl_vars['periode']->value->periodeMaster;?>
</option>
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
                                             <label  class="control-label col-md-3">Sesi Ke-</label>
                                             <div class="input-group col-md-3">
                                                <input type="text" class="form-control" placeholder="Sesi Ke-" id="sesi" name="sesi" pattern="\d+" value="<?php echo $_smarty_tpl->tpl_vars['periode']->value->sesi;?>
">
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
										 <button type="submit" class="btn blue" id="edit" value="edit" name="opt"> Tambah <i class="icon-plus"></i></a>
									  </div>
								</form>
<script>
	jQuery(document).ready(function() {       
         // initiate layout and plugins
         FormComponents.init();
	});
</script><?php }} ?>