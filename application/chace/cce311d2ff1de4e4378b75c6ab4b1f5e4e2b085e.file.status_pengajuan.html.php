<?php /* Smarty version Smarty-3.1.14, created on 2013-11-05 05:21:52
         compiled from "application\views\cuti\status_pengajuan.html" */ ?>
<?php /*%%SmartyHeaderCode:4719523180da379b93-03734488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cce311d2ff1de4e4378b75c6ab4b1f5e4e2b085e' => 
    array (
      0 => 'application\\views\\cuti\\status_pengajuan.html',
      1 => 1383628907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4719523180da379b93-03734488',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523180da496b57_13094465',
  'variables' => 
  array (
    'host' => 0,
    'cuti' => 0,
    'atasan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523180da496b57_13094465')) {function content_523180da496b57_13094465($_smarty_tpl) {?>					<div class="content-widgets white">
									<div class="widget-container" style="display:table;margin-left: auto;margin-right: inherit; margin-top: -10px;">	
									<form class="form-horizontal" style="border: 1px double;margin-top: -15px;width: 690px;padding-left: 35px;padding-top:10px">
										<div style="position: inherit;text-align:center;margin-left: -35px;">
										<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/assets/img/logo_biru.jpg"></img>
										</div>
										<div class="widget-head brown" style="margin-left: -35px; border-bottom-width: 0px; margin-bottom: 5px;">
											<h3 style="margin: 0px; padding-left: 10px;">PENGAJUAN CUTI KARYAWAN/DOSEN</h3>
										</div>	
											<div class="control-group">
												<div class="left-form">
													<label class="form-label" >Nama</label>
													<div class="controls">
														<input type="text" name="id_peg" id="id_peg" style="display:none" value="<?php echo $_smarty_tpl->tpl_vars['cuti']->value->id_cuti;?>
">
														<label class="isi-label" id="nama">: <?php echo $_smarty_tpl->tpl_vars['cuti']->value->nama;?>
</label>
													</div>
												</div>
												<div class="right-form">
													<label class="form-label" >Jabatan</label>
													<div class="controls">
														<label class="isi-label" id="jabatan">: <?php echo $_smarty_tpl->tpl_vars['cuti']->value->jabatan;?>
</label>
													</div>
												</div>
											</div>
											<div class="control-group">
												<label class="form-label" >Bagian</label>
												<div class="controls">
													<label class="isi-label" id="depart" style="width:auto">: <?php echo $_smarty_tpl->tpl_vars['cuti']->value->depart;?>
</label>
												</div>
											</div>
											<div class="control-group">
												<label class="form-label" >Jenis Cuti</label>
												<div class="controls">
													<label class="isi-label" id="jabatan">: <?php echo $_smarty_tpl->tpl_vars['cuti']->value->jenis_cuti;?>
</label>
												</div>
											</div>
											<div class="control-group">
												<div style="width:300px;float:left;height: 80px;">
													<label style="font-weight:bold;float: left;">Periode Cuti	:</label></br></br>
													<div class="control-group">
														<label class="kecil">Mulai Cuti</label>
														<div class="controls">
															<label class="right-kecil" id="jabatan">: <?php echo $_smarty_tpl->tpl_vars['cuti']->value->tgl_cuti;?>

														</div>												
														<label class="kecil">Selesai Cuti</label>
														<div class="controls">
															<label class="right-kecil">: <?php echo $_smarty_tpl->tpl_vars['cuti']->value->tgl_selesai_cuti;?>
</label>
														</div>
													</div>
												</div>
												<div style="width:300px;float:left;height: 80px;">
													<label style="font-weight:bold;float: left;">Kembali Bekerja	:</label></br></br>
													<div class="control-group">
														<label class="kecil" >Tanggal</label>
														<div class="controls">
															<label class="right-kecil" id="jabatan">: <?php echo $_smarty_tpl->tpl_vars['cuti']->value->tgl_kembali;?>
</label>
														</div>
													</div>
												</div>
											</div> 
											<div class="control-group">
											<div class="left-form">
												<label class="form-label" >Jumlah Hari</label>
												<div class="controls">
													<label class="isi-label" name="total" id="total" style="width:auto">: <?php echo $_smarty_tpl->tpl_vars['cuti']->value->jumlah_cuti;?>
 Hari</label>
												</div>
											</div>
											<div class="right-form">
												<label class="form-label" >Status</label>
												<div class="controls">: 
													<?php if ($_smarty_tpl->tpl_vars['cuti']->value->isApproved=='0'){?><span class="label label-warning">Belum Dikonfirmasi</span>
													<?php }elseif($_smarty_tpl->tpl_vars['cuti']->value->isApproved=='1'){?><span class="label label-success">Disetujui</span>
													<?php }else{ ?><span class="label label-important">Tidak Disetujui</span><?php }?>
												</div>
											</div>												
											</div>	
											<div class="control-group">
												<label class="form-label" >Alasan</label>
												<div class="controls">										
													<textarea rows="2" class="span4" cols="50" name="alasan" id="alasan" style="margin-left:-30px;" disabled><?php echo $_smarty_tpl->tpl_vars['cuti']->value->alasan;?>
</textarea>
												</div>
											</div>
											<div class="control-group">
												<label class="form-label" >Alamat Sewaktu Cuti</label>
												<div class="controls">										
													<textarea rows="2" class="span4" cols="50" name="al_cuti" id="al_cuti" style="margin-left:-30px;" disabled><?php echo $_smarty_tpl->tpl_vars['cuti']->value->alamat_cuti;?>
</textarea>
												</div>
											</div>	
											<div class="control-group" style="float:right;margin-right: 60px;margin-top: 30px;">
												<legend >
														<?php if ($_smarty_tpl->tpl_vars['cuti']->value->isApproved=='0'){?>Belum Disetujui
														<?php }elseif($_smarty_tpl->tpl_vars['cuti']->value->isApproved=='1'){?>Disetujui
														<?php }else{ ?>Tidak Disetujui<?php }?> Oleh :
														</legend></br></br>
													<label style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['atasan']->value->nama;?>
</label>
												
											</div>	
											</br></br></br></br></br></br></br></br>
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