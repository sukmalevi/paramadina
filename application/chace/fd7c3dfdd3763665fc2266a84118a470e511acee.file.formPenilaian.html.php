<?php /* Smarty version Smarty-3.1.14, created on 2014-04-21 14:48:48
         compiled from "application\views\smb\formPenilaian.html" */ ?>
<?php /*%%SmartyHeaderCode:2858252ad87522f9db3-57248884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd7c3dfdd3763665fc2266a84118a470e511acee' => 
    array (
      0 => 'application\\views\\smb\\formPenilaian.html',
      1 => 1398066501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2858252ad87522f9db3-57248884',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ad8752352978_01242387',
  'variables' => 
  array (
    'hasil' => 0,
    'opt' => 0,
    'hadirUjian' => 0,
    'hadirWwc' => 0,
    'hasilAkhir' => 0,
    'recomended' => 0,
    'lulusTidak' => 0,
    'host' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ad8752352978_01242387')) {function content_52ad8752352978_01242387($_smarty_tpl) {?>									<div class="portlet-body form">
										 <form class="formSeleksi form-horizontal" role="form" method="post" action="#">
											<div class="form-body">												
											   <div class="form-group">
												  <label  class="col-md-3 control-label">TPA</label>
												  <div class="col-md-6">
													 <div class="radio-list">													 
													 <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->kode_smb;?>
" name="kode" hidden>
													 <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
														<label class="radio-inline">														
														<input type="radio" name="tpaAda" id="tpaAda" value="1" <?php if ($_smarty_tpl->tpl_vars['hadirUjian']->value=='1'){?>checked<?php }?> disabled> Hadir
														</label>
														<label class="radio-inline">
														<input type="radio" name="tpaAda" id="tpaAda" value="0" <?php if ($_smarty_tpl->tpl_vars['hadirUjian']->value=='0'){?>checked<?php }?> disabled> Tidak Hadir
													<?php }else{ ?>														
														<label class="radio-inline">
														<input type="radio" name="tpaAda" id="tpaAda" value="1" <?php if ($_smarty_tpl->tpl_vars['hadirUjian']->value=='1'){?>checked<?php }?>> Hadir
														</label>
														<label class="radio-inline">
														<input type="radio" name="tpaAda" id="tpaAda" value="0" <?php if ($_smarty_tpl->tpl_vars['hadirUjian']->value=='0'){?>checked<?php }?>> Tidak Hadir														
														</label>
													<?php }?>
													 </div>
												  </div>
											   </div>
											   <div class="form-group">
												  <label  class="col-md-3 control-label">Wawancara</label>
												  <div class="col-md-9">
													 <div class="radio-list">
													 <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
														<label class="radio-inline">														
														<input type="radio" name="wwAda" id="wwAda" value="1" <?php if ($_smarty_tpl->tpl_vars['hadirWwc']->value=='1'){?>checked<?php }?> disabled> Hadir
														</label>
														<label class="radio-inline">
														<input type="radio" name="wwAda" id="wwAda" value="0" <?php if ($_smarty_tpl->tpl_vars['hadirWwc']->value=='0'){?>checked<?php }?> disabled> Tidak Hadir
														</label>
													<?php }else{ ?>
														<label class="radio-inline">														
														<input type="radio" name="wwAda" id="wwAda" value="1" <?php if ($_smarty_tpl->tpl_vars['hadirWwc']->value=='1'){?>checked<?php }?>> Hadir
														</label>
														<label class="radio-inline">
														<input type="radio" name="wwAda" id="wwAda" value="0" <?php if ($_smarty_tpl->tpl_vars['hadirWwc']->value=='0'){?>checked<?php }?>> Tidak Hadir
														</label>
													<?php }?>
													 </div>
												  </div>
											   </div>
											  <!--  <div class="form-group">
												  <label  class="col-md-3 control-label">PEPT</label>
												  <div class="col-md-4">
													<?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
													 <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->resultPept;?>
" disabled>
													<?php }else{ ?>
													 <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->resultPept;?>
" name="pept">
													<?php }?>
												  </div>
											   </div> -->
											   <div class="form-group">
												  <label  class="col-md-3 control-label">TPA</label>
												  <div class="col-md-4">
													<?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
													 <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->hasilUsm;?>
" disabled>
													<?php }else{ ?>
													 <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->hasilUsm;?>
" name="tpa">
													<?php }?>
												  </div>
											   </div>
											   <div class="form-group">
												  <label  class="col-md-3 control-label">Wawancara</label>
												  <div class="col-md-4">
													<?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
													 <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->hasilWwc;?>
" disabled>
													<?php }else{ ?>
													 <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->hasilWwc;?>
"  name="wawancara">
													<?php }?>
												  </div>
											   </div>
											   <div class="form-group">
												  <label  class="col-md-3 control-label">Grade</label>
												  <div class="col-md-4">
													<?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
													 <select  class="form-control" disabled>
														<option>-</option>
														<option value="1" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='1'){?>selected<?php }?>>Ke-1</option>
														<option value="2" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='2'){?>selected<?php }?>>Ke-2</option>
														<option value="3" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='3'){?>selected<?php }?>>Ke-3</option>
														<option value="0" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='0'){?>selected<?php }?>>Tidak Ada</option>
													 </select>
													<?php }else{ ?>
													 <select  class="form-control" name="grade">
														<option>-</option>
														<option value="1" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='1'){?>selected<?php }?>>Ke-1</option>
														<option value="2" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='2'){?>selected<?php }?>>Ke-2</option>
														<option value="3" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='3'){?>selected<?php }?>>Ke-3</option>
														<option value="0" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='0'){?>selected<?php }?>>Tidak Ada</option>
													 </select>
													<?php }?>
												  </div>
											   </div>
											   <div class="form-group">
												  <label  class="col-md-4 control-label">Recomended</label>
												  <div class="col-md-8">
													 <div class="radio-list">
													<?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
														<label class="radio-inline">														
														<input type="radio" name="recoYa" id="recoYa" value="1" <?php if ($_smarty_tpl->tpl_vars['recomended']->value=='1'){?>checked<?php }?> disabled> Ya
														</label>
														<label class="radio-inline">
														<input type="radio" name="recoYa" id="recoYa" value="0" <?php if ($_smarty_tpl->tpl_vars['recomended']->value=='0'){?>checked<?php }?> disabled> Tidak
														</label>
													<?php }else{ ?>
														<label class="radio-inline">														
														<input type="radio" name="recoYa" id="recoYa" value="1" <?php if ($_smarty_tpl->tpl_vars['recomended']->value=='1'){?>checked<?php }?>> Ya
														</label>
														<label class="radio-inline">
														<input type="radio" name="recoYa" id="recoYa" value="0" <?php if ($_smarty_tpl->tpl_vars['recomended']->value=='0'){?>checked<?php }?>> Tidak
														</label>
													<?php }?>
													 </div>
												  </div>
											   </div>
											   <div class="form-group">
												  <label  class="col-md-4 control-label">Lulus</label>
												  <div class="col-md-8">
													<div class="radio-list">
													<?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
														<label class="radio-inline">
														<input type="radio" name="luYa" id="luYa" value="1" <?php if ($_smarty_tpl->tpl_vars['lulusTidak']->value=='1'){?>checked<?php }?> disabled> Ya
														</label>
														<label class="radio-inline">
														<input type="radio" name="luYa" id="luYa" value="0" <?php if ($_smarty_tpl->tpl_vars['lulusTidak']->value=='0'){?>checked<?php }?> disabled> Tidak
														</label>
													<?php }else{ ?>
														<label class="radio-inline">
														<input type="radio" name="luYa" id="luYa" value="1" <?php if ($_smarty_tpl->tpl_vars['lulusTidak']->value=='1'){?>checked<?php }?>> Ya
														</label>
														<label class="radio-inline">
														<input type="radio" name="luYa" id="luYa" value="0" <?php if ($_smarty_tpl->tpl_vars['lulusTidak']->value=='0'){?>checked<?php }?>> Tidak
														</label>													
													<?php }?>
													 </div>
												  </div>
											   </div>
											   <div class="form-group">
												  <label  class="col-md-3 control-label">Keterangan</label>
												  <div class="col-md-9">
													<?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
													 <textarea class="form-control" rows="2" disabled><?php echo $_smarty_tpl->tpl_vars['hasil']->value->ket;?>
</textarea>
													<?php }else{ ?>
													 <textarea class="form-control" rows="2" name="ket"><?php echo $_smarty_tpl->tpl_vars['hasil']->value->ket;?>
</textarea>
													<?php }?>
												  </div>
											   </div>
											</div>
											<?php if ($_smarty_tpl->tpl_vars['opt']->value!="view"){?>											
											 <div class="form-actions fluid">
											   <div class="col-md-offset-3 col-md-9">
												  <button type="submit" class="btn green">Submit</button>
												  <button type="button" class="btn default">Cancel</button>                              
											   </div>
											</div>
											<?php }?>
										</form>
										</div>
<script>

$(".formSeleksi").submit( function() {	
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/konfirmHasilSeleksi/save",$(this).serialize(),function(resp){
		val = "<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
";
			$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbSeleksiForm/form",{
				'val': val,
				'opt': "view"
					},function(resp){
					$('#formPenilaian'+val).html(resp);
				}); 
		});
		return false;
		
	});
	

</script><?php }} ?>