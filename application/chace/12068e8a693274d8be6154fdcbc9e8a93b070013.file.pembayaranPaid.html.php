<?php /* Smarty version Smarty-3.1.14, created on 2014-04-17 10:06:35
         compiled from "application\views\portal\pembayaranPaid.html" */ ?>
<?php /*%%SmartyHeaderCode:1009452c4e46d8f4d61-25577042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12068e8a693274d8be6154fdcbc9e8a93b070013' => 
    array (
      0 => 'application\\views\\portal\\pembayaranPaid.html',
      1 => 1397703992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1009452c4e46d8f4d61-25577042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c4e46d9e7db6_65469386',
  'variables' => 
  array (
    'host' => 0,
    'nama' => 0,
    'cmb' => 0,
    'transPaid' => 0,
    'bankAkun' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c4e46d9e7db6_65469386')) {function content_52c4e46d9e7db6_65469386($_smarty_tpl) {?>   
					<!-- BEGIN FORM-->
							<div class="row">								
								<div class="col-md-12" style="padding-bottom: 15px; padding-top: 5px; padding-right: 0px;">
									<ul class="timeline" style="left:0">
										<li class="timeline-green">
										<div class="timeline-body" style="margin-left:0">
											<h4>Terima Kasih, transaksi anda menunggu konfirmasi dari bagian keuangan Paramdina. 
												<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir" class="nav-link" style="float:right;margin-top: 0;">
												Melengkapi Formulir <i class="m-icon-swapright m-icon-white"></i>                              
												</a>  
											</h4>
											
										</div>										
													
										</li>
									</ul>
								</div>
							</div>
                              <form action="#"  class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" >	
								<div class="portlet box grey">
								   <div class="portlet-body form" style="border-top: 1px double #4682B4;">
										 <div class="form-body" style="font-size:bold">
											<h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">DATA DIRI</h3>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Lengkap
											   </label>
											   <div class="col-md-9" style=" height: 46px; padding-left: 35px; padding-top: 5px;">
												<label><h4><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</h4></label>
												<input value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
" name="kode" hidden>
											   </div>
											</div>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Program Studi
											   </label>
											   <div class="col-md-9" style=" height: 46px; padding-left: 35px; padding-top: 5px;">
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
											   <div class="col-md-9" style=" height: 46px; padding-left: 35px; padding-top: 5px;">
												  <label><h4>Rp. <?php echo $_smarty_tpl->tpl_vars['transPaid']->value->biaya;?>
</h4></label>
											   </div>
											</div>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Tanggal Pembayaran
											   </label>
											   <div class="col-md-9" style=" height: 46px; padding-left: 35px; padding-top: 5px;">
													<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
														<input type="text" class="form-control" name="tanggalBayar" value="<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->tanggal_trans;?>
" style="text-align: left;" disabled>
												   </div>
											   </div>
											</div>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Metode Pembayaran
											   </label>
											   <div class="col-md-9" style=" height: 46px; padding-left: 35px; padding-top: 5px;">
												  <select  class="form-control" name="typeTrans" id="jenjang" disabled>
													 <option value="<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->kode_typeTrans;?>
"><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->typeTrans;?>
</option>
												  </select>
											   </div>
											</div>
											<div class="form-group" >
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">No Kartu ATM
											   </label>
											   <div class="col-md-9" style=" height: 46px; padding-left: 35px; padding-top: 5px;">
												  <input type="text" class="form-control" name="noAtmCard" 
													value="<?php if ($_smarty_tpl->tpl_vars['transPaid']->value->noAtmCardPendaftaran=='0'){?>-<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->noAtmCardPendaftaran;?>
<?php }?>" disabled>												  
												</div>
											</div>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Rekening Tujuan
											   </label>
											   <div class="col-md-9" style=" height: 46px; padding-left: 35px; padding-top: 5px;">
												  <label><h4><?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->nama;?>
</h4></label>
												  <input value="<?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->kode;?>
" name="bankAkun" hidden>
											   </div>
											</div>	
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">No. Rek. Pengirim
											   </label>
											   <div class="col-md-9" style=" height: 46px; padding-left: 35px; padding-top: 5px;">
													<input type="text" class="form-control" name="no_rek_cmb" value="<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->noRekPengirimPendaftaran;?>
" disabled>
											   </div>
											</div>		
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Rek. Pengirim
											   </label>
											   <div class="col-md-9" style=" height: 46px; padding-left: 35px; padding-top: 5px;">
													<input type="text" class="form-control" name="nama_rek_cmb" value="<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->namaRekPengirimPendaftaran;?>
" disabled>
											   </div>
											</div>														
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Bukti Pembayaran
											   </label>
											   <div class="col-md-9" style=" height: 46px; padding-left: 35px; padding-top: 5px;">
												  <input type="text" class="form-control" name="tanggalBayar" value="<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->buktiBayarPendaftaran;?>
" disabled>
											   </div>
											   
											</div>
										</div>
									</div>
								</div>
							   </form>
							  
<?php }} ?>