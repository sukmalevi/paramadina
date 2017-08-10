<?php /* Smarty version Smarty-3.1.14, created on 2015-08-14 10:36:34
         compiled from "application/views/smb/kontenMundur.html" */ ?>
<?php /*%%SmartyHeaderCode:20197634755363267c6ec7e6-05718511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12c884e490f88d8fd0176093420c9944eb01d7da' => 
    array (
      0 => 'application/views/smb/kontenMundur.html',
      1 => 1436517623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20197634755363267c6ec7e6-05718511',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5363267c798cf4_24062578',
  'variables' => 
  array (
    'host' => 0,
    'cmb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5363267c798cf4_24062578')) {function content_5363267c798cf4_24062578($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
		<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/mundurDiri/<?php echo $_smarty_tpl->tpl_vars['cmb']->value->no_smb;?>
/mundur/save" enctype="multipart/form-data" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">	
			<div class="portlet box grey">
			   <div class="portlet-body form" style="border-top: 1px double #4682B4;">
					 <div class="form-body" style="font-size:bold">
						<h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">DATA MAHASISWA</h3>
						<div class="form-group">
						   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Lengkap
						   </label>
						   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
							<label><h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->nama_cm;?>
</h4></label>
							<input value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
" name="kode" hidden>
						   </div>
						</div>
						<div class="form-group">
						   <label class="control-label col-md-3" style="text-align:left;width: 220px;">No. Registrasi
						   </label>
						   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
							  <label><h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->no_smb;?>
</h4></label>
						   </div>
						</div>	
						<div class="form-group">
						   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Program Studi
						   </label>
						   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
							  <label><h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->progdi;?>
</h4></label>
						   </div>
						</div>	
						<div class="form-group">
						   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Tanggal Pendaftaran
						   </label>
						   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
							  <label><h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->hari;?>
, <?php echo $_smarty_tpl->tpl_vars['cmb']->value->cDay;?>
 <?php echo $_smarty_tpl->tpl_vars['cmb']->value->cMonth;?>
 <?php echo $_smarty_tpl->tpl_vars['cmb']->value->cYear;?>
</h4></label>
						   </div>
						</div>	
						<div class="form-group">
						   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Periode
						   </label>
						   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
							  <label><h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->namaPeriode;?>
</h4></label>
						   </div>
						</div>
					 </div>
					 <div class="form-body">
						<h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">
						Detail Biaya Daftar Ulang</h3>	
						<div class="form-group">
						   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Alasan Mengundurkan Diri 
						   </label>
						   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
							  <select  class="form-control" name="alasan" id="alasan" required>
								 <option value="-">-</option>													
								 <option value="Tidak lulus Ujian Nasional (UN)">Tidak lulus Ujian Nasional (UN)</option>												
								 <option value="Lulus Seleksi Penerimaan Mahasiswa Baru (SPMB)">Lulus Seleksi Penerimaan Mahasiswa Baru (SPMB)</option>												
								 <option value="Program Penelusuran Minat dan Kemampuan (PPMK)">Program Penelusuran Minat dan Kemampuan (PPMK)</option>												
								 <option value="Meninggal Dunia">Meninggal Dunia</option>
								 <option value="Lainnya">Lainnya</option>													
							  </select>
						   </div>
						</div>
						<div class="form-group">
						   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Alasan Lainnya
						   </label>
						   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
								<input type="text" class="form-control" name="alasanLain" id="alasanLain" required>
						   </div>
						</div>	
						<div class="form-group">
						   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Pembayaran Daftar Ulang
						   </label>
						   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
							  <select  class="form-control" name="typeTrans" id="typeTrans" required>
								 <option>Pilih Tipe Pembayaran..</option>
								 <option value="1">Lunas</option>
								 <option value="0">Angsuran</option>
							  </select>
						   </div>
						</div>											
						<div class="form-group">
						   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Jumlah Yang Dibayarkan
						   </label>
						   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
								<input type="text" class="biaya form-control" name="jumlahBayar" required>
						   </div>
						</div>
						<h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">
						Pengembalian Pembayaran Uang Daftar Ulang</h3>	
						<div class="form-group">
						   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Bank
						   </label>
						   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
								<input type="text" class="form-control" name="bank" required>
						   </div>
						</div>	
						<div class="form-group">
						   <label class="control-label col-md-3" style="text-align:left;width: 220px;">KCP/KU
						   </label>
						   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
								<input type="text" class="form-control" name="kcp" required>
						   </div>
						</div>	
						<div class="form-group">
						   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nomor Rekening
						   </label>
						   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
								<input type="text" class="form-control" name="noRek" required>
						   </div>
						</div>	
						<div class="form-group">
						   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Atas Nama
						   </label>
						   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
								<input type="text" class="form-control" name="an" required>
						   </div>
						</div>	
						
					  <div class="modal-footer">
						 <button type="reset" class="btn default" data-dismiss="modal">Reset</button>
						 <button type="submit" class="btn blue" id="save" value="save" name="opt"> Simpan <i class="icon-save"></i></button>
					  </div>
					</div>
				</div>
			</div>
		   </form>
<script>
$(document).ready(function(){
	$('.biaya').blur(function()
			{
				$('.biaya').formatCurrency();
			});
	
});
</script><?php }} ?>