<?php /* Smarty version Smarty-3.1.14, created on 2013-09-16 07:50:16
         compiled from "application\views\cuti\form_confirm.html" */ ?>
<?php /*%%SmartyHeaderCode:2838952301e65ba4633-03253473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e21ed447139f7dc00350f4ea0fe83244dce772' => 
    array (
      0 => 'application\\views\\cuti\\form_confirm.html',
      1 => 1379317781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2838952301e65ba4633-03253473',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52301e65cb0a29_75042484',
  'variables' => 
  array (
    'host' => 0,
    'cuti' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52301e65cb0a29_75042484')) {function content_52301e65cb0a29_75042484($_smarty_tpl) {?>					<div class="primary-head">
						<h3 class="page-header">Pengajuan Cuti</h3>
					</div>
					<div class="content-widgets white">
						<div style="position: inherit;text-align:center">
							<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/assets/img/logo_biru.jpg"></img>
						</div>
						<div class="widget-head brown">
							<h3 style="text-align:center">FORM PENGAJUAN CUTI KARYAWAN/DOSEN</h3>
						</div>
									<div class="widget-container" style="display:table;margin-left: auto;margin-right: auto; margin-top: -10px;">
										<form class="form-horizontal" style="border: 1px double;margin-top: -10px;width: 600px;padding-left: 35px;padding-top:10px">
											<div class="control-group">
												<label class="right-label" >Nama</label>
												<div class="controls">
													<input type="text" name="id_peg" id="id_peg" style="display:none" value="<?php echo $_smarty_tpl->tpl_vars['cuti']->value->id_cuti;?>
">
													<label class="control-label" id="nama"><?php echo $_smarty_tpl->tpl_vars['cuti']->value->nama;?>
</label>
												</div>
											</div>
											<div class="control-group">
												<label class="right-label" >Bagian</label>
												<div class="controls">
													<label class="control-label" id="depart" style="width:auto"><?php echo $_smarty_tpl->tpl_vars['cuti']->value->depart;?>
</label>
												</div>
											</div>
											<div class="control-group">
												<label class="right-label" >Jabatan</label>
												<div class="controls">
													<label class="control-label" id="jabatan"><?php echo $_smarty_tpl->tpl_vars['cuti']->value->jabatan;?>
</label>
												</div>
											</div>
											<div class="control-group">
												<label class="right-label" >Jenis Cuti</label>
												<div class="controls">
													<label class="control-label" id="jabatan"><?php echo $_smarty_tpl->tpl_vars['cuti']->value->jenis_cuti;?>
</label>
												</div>
											</div>
											<div class="control-group">
												<div style="width:300px;float:left">
													<label style="font-weight:bold;float: left;">Periode Cuti	:</label></br></br>
													<div class="control-group">
														<label class="kecil">Mulai Cuti</label>
														<div class="controls">
															<label class="right-kecil" id="jabatan"><?php echo $_smarty_tpl->tpl_vars['cuti']->value->tgl_cuti;?>

														</div>												
														<label class="kecil">Selesai Cuti</label>
														<div class="controls">
															<label class="right-kecil"><?php echo $_smarty_tpl->tpl_vars['cuti']->value->tgl_selesai_cuti;?>
</label>
														</div>
													</div>
												</div>
												<!-- 
												<div class="control-group">
													<label class="control-label" >Jumlah Hari</label>
													<div class="controls">
														<input type="text" name="total" id="total" value="5">
													</div>
												</div> -->	
												<div style="width:300px;float:left">
													<label style="font-weight:bold;float: left;">Kembali Bekerja	:</label></br></br>
													<div class="control-group">
														<label class="kecil" >Tanggal</label>
														<div class="controls">
															<label class="right-kecil" id="jabatan"><?php echo $_smarty_tpl->tpl_vars['cuti']->value->tgl_kembali;?>
</label>
														</div>
													</div>
												</div>
											</div>
											<div class="control-group">
												<label class="right-label" >Alasan</label>
												<div class="controls">										
													<textarea rows="4" class="span4" cols="50" name="alasan" id="alasan" style="margin-left:-30px;" disabled><?php echo $_smarty_tpl->tpl_vars['cuti']->value->alasan;?>
</textarea>
												</div>
											</div>
											<div class="control-group">
												<label class="right-label" >Alamat Sewaktu Cuti</label>
												<div class="controls">										
													<textarea rows="2" class="span4" cols="50" name="al_cuti" id="al_cuti" style="margin-left:-30px;" disabled><?php echo $_smarty_tpl->tpl_vars['cuti']->value->alamat_cuti;?>
</textarea>
												</div>
											</div>	
											<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cuti/tabelCuti">OK</a></br></br>
										</form>
									</div>
						</div>

<script type="text/javascript">
$(document).ready(function(){
		$("#datetimepicker5s, #datetimepicker51s").on('changeDate',function(ev){
		var d1 = $('#tgl_mulai').datepicker('getDate'), 
		d2 = $('#tgl_selesai').datepicker('getDate'),
		diff=0;
		
		alert(d2);
		
		d1 = Date.parse(d1);
		d2 = Date.parse(d2);
			diff = Math.floor((d2.getTime() - d1.getTime()) / 86400000);
		
		alert(diff);
		});
	});
</script><?php }} ?>