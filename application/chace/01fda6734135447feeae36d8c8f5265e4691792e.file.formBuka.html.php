<?php /* Smarty version Smarty-3.1.14, created on 2017-03-27 14:08:27
         compiled from "application/views/admisi/formBuka.html" */ ?>
<?php /*%%SmartyHeaderCode:19546735775359bb8d5ba0a8-11619302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01fda6734135447feeae36d8c8f5265e4691792e' => 
    array (
      0 => 'application/views/admisi/formBuka.html',
      1 => 1489983237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19546735775359bb8d5ba0a8-11619302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5359bb8d6ae3c3_75151820',
  'variables' => 
  array (
    'host' => 0,
    'buka' => 0,
    'periode' => 0,
    'row' => 0,
    'prodi' => 0,
    'jalur' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359bb8d6ae3c3_75151820')) {function content_5359bb8d6ae3c3_75151820($_smarty_tpl) {?>								<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiOptBuka/edit/do" class="form-horizontal" method="post">
									<div class="form-body">
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Kode</label>
                                             <div class="input-group col-md-6">
												<input id="kode" name="kode" value="<?php echo $_smarty_tpl->tpl_vars['buka']->value->id_buka;?>
" hidden>
                                                <input type="text" class="form-control" placeholder="Kode[Automatic]" value="<?php echo $_smarty_tpl->tpl_vars['buka']->value->id_buka;?>
" disabled>
                                             </div>
                                          </div>
                                          <div class="form-group">
											<label  class="control-label col-md-3">Periode</label>
												<div class="col-md-9">
													<select class="form-control" id="fPeriode"  name="periode" class="periode" onchange="selectForm('fPeriode')">
														<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['buka']->value->periode_buka==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
														<?php } ?>
													</select>
												</div>
										  </div>
										  <div class="form-group">
											<label  class="control-label col-md-3">Program Studi</label>
												<div class="col-md-9">
													<select class="form-control" id="fProdi"  name="prodi" class="prodi">
														<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['buka']->value->kode_prodi==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
														<?php } ?>
													</select>
												</div>
										  </div>
										  <div class="form-group">
											<label  class="control-label col-md-3">Jalur</label>
												<div class="col-md-9">
													<select class="form-control" id="fJalur"  name="jalur" class="jalur">
														<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jalur']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['buka']->value->kode_jalur==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
														<?php } ?>
													</select>
												</div>
										  </div>
										   <div class="form-group">
											  <label class="control-label col-md-3">Date Range</label>
											  <div class="col-md-4">
												 <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
													<input type="text" class="form-control" name="from" value="<?php echo $_smarty_tpl->tpl_vars['buka']->value->tanggalBuka;?>
">
													<span class="input-group-addon">to</span>
													<input type="text" class="form-control" name="to" value="<?php echo $_smarty_tpl->tpl_vars['buka']->value->tanggalTutup;?>
" >
												 </div>
												 <!-- /input-group -->
												 <span class="help-block">Select date range</span>
											  </div>
										   </div>
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Nama</label>
                                             <div class="input-group col-md-9">
                                                <input type="text" class="form-control" placeholder="Nama [Automatic]" id="nama" name="nama" disabled value="<?php echo $_smarty_tpl->tpl_vars['buka']->value->nama_buka;?>
">
                                             </div>
                                          </div>
										  <div class="form-group">
											<label  class="control-label col-md-3">Status</label>
												<div class="col-md-9">
													<select class="form-control" id="status"  name="status" class="status">
													<?php if ($_smarty_tpl->tpl_vars['buka']->value->stsBuka=='1'){?><option value="1">AKTIF</option><?php }else{ ?>
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