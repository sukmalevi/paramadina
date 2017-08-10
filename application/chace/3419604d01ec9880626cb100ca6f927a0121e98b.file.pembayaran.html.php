<?php /* Smarty version Smarty-3.1.14, created on 2014-04-17 09:51:37
         compiled from "application\views\portal\pembayaran.html" */ ?>
<?php /*%%SmartyHeaderCode:1929352c435bcbf7211-72558814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3419604d01ec9880626cb100ca6f927a0121e98b' => 
    array (
      0 => 'application\\views\\portal\\pembayaran.html',
      1 => 1397703083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1929352c435bcbf7211-72558814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c435bcd2ace9_77774661',
  'variables' => 
  array (
    'host' => 0,
    'nama' => 0,
    'cmb' => 0,
    'typeBayar' => 0,
    'row' => 0,
    'bankAkun' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c435bcd2ace9_77774661')) {function content_52c435bcd2ace9_77774661($_smarty_tpl) {?>   
					<!-- BEGIN FORM-->
                              <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/confirmPembayaran/add" enctype="multipart/form-data" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">	
								<div class="portlet box grey">
								   <div class="portlet-body form" style="border-top: 1px double #4682B4;">
										 <div class="form-body" style="font-size:bold">
											<h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">DATA DIRI</h3>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Lengkap
											   </label>
											   <div class="col-md-9" style="height: 46px; padding-left: 35px; padding-top: 5px;">
												<label><h4><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</h4></label>
												<input value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
" name="kode" hidden>
											   </div>
											</div>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Program Studi
											   </label>
											   <div class="col-md-9" style="height: 46px; padding-left: 35px; padding-top: 5px;">
												  <label><h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->progdi;?>
</h4></label>
											   </div>
											</div>	
										 </div>
										 <div class="form-body">
											<h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Transaksi Pembayaran</h3>	
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Jumlah Pembayaran
											   </label>
											   <div class="col-md-5" style="height: 46px; padding-left: 35px; padding-top: 5px;">
												  <!-- <label><h4>Rp. 200.000</h4></label> -->
												  <input type="text" class="form-control" name="totalBiaya" style="text-align: left;">
											   </div>
											</div>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Tanggal Pembayaran
											   </label>
											   <div class="col-md-9" style="height: 46px; padding-left: 35px; padding-top: 5px;">
													<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
														<input type="text" class="form-control" name="tanggalBayar" style="text-align: left;">
												   </div>
											   </div>
											</div>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Metode Pembayaran
											   </label>
											   <div class="col-md-3" style="height: 46px; padding-left: 35px; padding-top: 5px;">
												  <select  class="form-control" name="typeTrans" id="typeTrans">
													 <option>Pilih Tipe Pembayaran..</option>
													<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typeBayar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
											<div class="form-group" >
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">No Kartu ATM
											   </label>
											   <div class="col-md-5" style="height: 65px; padding-left: 35px; padding-top: 5px;">
												  <input type="text" class="form-control" name="noAtmCard" id="noAtmCard" disabled>												  
												  <p class="help-block" style="display:none;" id="helpAtm">Masukan 16 digit No. kartu ATM Anda</p>								  
												  <p class="help-block" style="display:none;" id="helpAtmno">Lewati jika transaksi pembayaran  Tunai/Tunai Via Bank</p>
											   </div>
											</div>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Rekening Tujuan
											   </label>
											   <div class="col-md-9" style="height: 46px; padding-left: 35px; padding-top: 5px;">
												  <label><h4><?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->nama;?>
</h4></label>
												  <input value="<?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->kode;?>
" name="bankAkun" hidden>
											   </div>
											</div>	
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">No. Rek. Pengirim
											   </label>
											   <div class="col-md-5" style="height: 46px; padding-left: 35px; padding-top: 5px;">
													<input type="text" class="form-control" name="no_rek_cmb">
											   </div>
											</div>		
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Rek. Pengirim
											   </label>
											   <div class="col-md-5" style="height: 46px; padding-left: 35px; padding-top: 5px;">
													<input type="text" class="form-control" name="nama_rek_cmb">
											   </div>
											</div>										
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Bukti Pembayaran
											   </label>
											   <div class="col-md-9" style="height: 46px; padding-left: 35px; padding-top: 0px;">
												  <input type="file" id="bukti" name="bukti">
												  <p class="help-block">Format : pdf|jpg|png|gif</p>
											   </div>
											</div>
											<div class="col-md-12" style="padding-bottom: 15px; padding-top: 5px; padding-right: 0px;">
											<ul class="timeline" style="left:0">
											  <li class="timeline-grey">
												 <div class="timeline-body" style="margin-left:0">
													<input type="checkbox" name="setuju" value="setuju">Centang Jika Anda Sudah Yakin dengan Transaksi Di atas.
												 </div>
											  </li>
											</ul>
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
$("#typeTrans").change(function(){	
	val = $(this).val();
	//alert (val);
	if (val == '04.2' || val == '04.4'){
		document.getElementById('helpAtmno').style.display = 'none';
		document.getElementById('helpAtm').style.display = 'block';
		$("#noAtmCard").prop('disabled', false);
	}else{
		document.getElementById('helpAtmno').style.display = 'block';
		document.getElementById('helpAtm').style.display = 'none';
		$("#noAtmCard").prop('disabled', true);
	}
});	
</script><?php }} ?>