<?php /* Smarty version Smarty-3.1.14, created on 2016-06-13 13:26:57
         compiled from "application/views/portal/buktiBayar.html" */ ?>
<?php /*%%SmartyHeaderCode:375572625535625cae974c1-29194194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21151a9172135c4557fdd04fb4f5bbb12ce5f944' => 
    array (
      0 => 'application/views/portal/buktiBayar.html',
      1 => 1465795365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '375572625535625cae974c1-29194194',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535625caf12917_90514102',
  'variables' => 
  array (
    'host' => 0,
    'nama' => 0,
    'cmb' => 0,
    'transPaid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535625caf12917_90514102')) {function content_535625caf12917_90514102($_smarty_tpl) {?><div class="row">								
        <div class="col-md-12" style="padding-bottom: 15px; padding-top: 5px; padding-right: 0px;">
                <ul class="timeline" style="left:0">
                        <li class="timeline-blueDark">
                        <div class="timeline-body" style="margin-left:0">
                                <h4>Terima Kasih,  pembayaran pendaftaran Anda telah kami terima. 
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
<form action="#" enctype="multipart/form-data" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" >	
        <div class="portlet box grey">
           <div class="portlet-body form" style="border-top: 1px double #4682B4;">
                         <div class="form-body" style="font-size:bold">
                                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">DATA DIRI</h3>
                                <div class="form-group">
                                   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Lengkap
                                   </label>
                                   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                        <label><h4><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</h4></label>
                                        <input value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
" hidden>
                                   </div>
                                </div>
                                <div class="form-group">
                                   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Program Studi
                                   </label>
                                   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                          <label><h4><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->progdi;?>
</h4></label>
                                   </div>
                                </div>	
                         </div>
                         <div class="form-body">
                                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Transaksi Pembayaran</h3>	
                                <div class="form-group">
                                   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Jumlah Pembayaran
                                   </label>
                                   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                          <label><h4>Rp. <?php echo $_smarty_tpl->tpl_vars['transPaid']->value->biaya;?>
</h4></label>
                                   </div>
                                </div>
                                <div class="form-group">
                                   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Tanggal Pembayaran
                                   </label>
                                   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                                <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
                                                        <label><h4><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->hari_trans;?>
, <?php echo $_smarty_tpl->tpl_vars['transPaid']->value->tanggal_trans;?>
</h4></label>
                                           </div>
                                   </div>
                                </div>
                                <div class="form-group">
                                   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Metode Pembayaran
                                   </label>
                                   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                          <label><h4><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->typeTrans;?>
</h4></label>
                                   </div>
                                </div>	
                                <div class="form-group" >
                                   <label class="control-label col-md-3" style="text-align:left;width: 220px;">No Kartu ATM
                                   </label>
                                   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                         <label><h4><?php if ($_smarty_tpl->tpl_vars['transPaid']->value->noAtmCardPendaftaran=='0'){?>-<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->noAtmCardPendaftaran;?>
<?php }?> </h4></label>												  
                                        </div>
                                </div>										
                                <div class="form-group">
                                   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Rekening Tujuan
                                   </label>
                                   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                          <label><h4><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->typeAccount;?>
</h4></label>
                                   </div>
                                </div>	
                                <div class="form-group">
                                   <label class="control-label col-md-3" style="text-align:left;width: 220px;">No. Rek. Pengirim
                                   </label>
                                   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                                <label><h4><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->noRekPengirimPendaftaran;?>
 </label></h4>
                                   </div>
                                </div>		
                                <div class="form-group">
                                   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Rek. Pengirim
                                   </label>
                                   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                                <label><h4><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->namaRekPengirimPendaftaran;?>
</label></h4>
                                   </div>
                                </div>	
                                <div class="form-group">
                                   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Bukti Pembayaran
                                   </label>
                                   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                          <label><h4><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->buktiBayarPendaftaran;?>
</h4></label>
                                   </div>
                                </div>
                        </div>
                </div>
        </div>
   </form>
							  
<?php }} ?>