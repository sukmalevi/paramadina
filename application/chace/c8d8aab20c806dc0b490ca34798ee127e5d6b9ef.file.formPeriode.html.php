<?php /* Smarty version Smarty-3.1.14, created on 2014-05-26 17:53:17
         compiled from "application/views/master/formPeriode.html" */ ?>
<?php /*%%SmartyHeaderCode:337792666536074a1612075-01648254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8d8aab20c806dc0b490ca34798ee127e5d6b9ef' => 
    array (
      0 => 'application/views/master/formPeriode.html',
      1 => 1400840693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '337792666536074a1612075-01648254',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536074a16993c4_57897103',
  'variables' => 
  array (
    'host' => 0,
    'periode' => 0,
    'masterPeriode' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536074a16993c4_57897103')) {function content_536074a16993c4_57897103($_smarty_tpl) {?>
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
										 <button type="submit" class="btn blue" id="edit" value="edit" name="opt"> Save </a>
									  </div>
								</form>
<script>
	jQuery(document).ready(function() {       
         // initiate layout and plugins
         FormComponents.init();
	});
</script><?php }} ?>