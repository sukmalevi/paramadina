<?php /* Smarty version Smarty-3.1.14, created on 2016-09-06 11:39:44
         compiled from "application/views/cmb/kontenDaftarUlangPascaConfirmed.html" */ ?>
<?php /*%%SmartyHeaderCode:182341869055e558b8e61009-79877587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac9271978e73afdd82ef593fcc9e8f5c21bb3c3c' => 
    array (
      0 => 'application/views/cmb/kontenDaftarUlangPascaConfirmed.html',
      1 => 1473136523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182341869055e558b8e61009-79877587',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55e558b90f6193_75658397',
  'variables' => 
  array (
    'host' => 0,
    'prof' => 0,
    'nama' => 0,
    'alumni' => 0,
    'method' => 0,
    'uangMasuk' => 0,
    'biayaSpp' => 0,
    'biayaSks' => 0,
    'jalur' => 0,
    'biaya' => 0,
    'diskonLunas' => 0,
    'transPaid' => 0,
    'earlybird' => 0,
    'diskonAlum' => 0,
    'klgCivitas' => 0,
    'klgDlb' => 0,
    'totalAll' => 0,
    'bankAkun' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e558b90f6193_75658397')) {function content_55e558b90f6193_75658397($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<!-- BEGIN FORM-->
<div class="row">
    <div class="col-md-12" style="padding-bottom: 15px; padding-top: 5px; padding-right: 0px;">

    </div>
</div>
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/confirm_keu/do" enctype="multipart/form-data" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">
    <div class="portlet box grey">
        <div class="portlet-body form" style="border-top: 1px double #4682B4;">
            <div class="form-body" style="font-size:bold">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">DATA DIRI</h3>
                <div class="form-group">
                    <label class="control-label col-md-2" >Nama Lengkap
                    </label>
                    <div class="col-md-10" >
                        <label>
                            <h5><?php echo $_smarty_tpl->tpl_vars['prof']->value->nama_cm;?>
</h5>
                        </label>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['prof']->value->kode_smb;?>
" name="kode" hidden>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['prof']->value->kode_jalur;?>
" name="kode_jalur" hidden>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
" name="nama_operator" hidden>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">No Registrasi
                    </label>
                    <div class="col-md-10">
                        <label>
                            <h5><?php echo $_smarty_tpl->tpl_vars['prof']->value->no_smb;?>
</h5>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Program Studi
                    </label>
                    <div class="col-md-10">
                        <label>
                            <h5><?php echo $_smarty_tpl->tpl_vars['prof']->value->progdi;?>
</h5>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jalur Masuk
                    </label>
                    <div class="col-md-10">
                        <label>
                            <h5><?php echo $_smarty_tpl->tpl_vars['prof']->value->n_jalur;?>
</h5>
                        </label>
                    </div>
                </div>
            </div>
           <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Transaksi Pembayaran</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Metode Pembayaran
                    </label>
                    <div class="col-md-3">
						<div class="checkbox-list">
                            <label>
                                <?php if ($_smarty_tpl->tpl_vars['alumni']->value==1){?>
                                <input type="checkbox" name="yes" checked="true" disabled>Alumni Paramadina
                                <input name="alumni" id="alumni" value="1" hidden>
								<?php }elseif($_smarty_tpl->tpl_vars['alumni']->value==0){?>
                                <input type="checkbox" name="no" disabled>Alumni Paramadina
                                <input name="alumni" id="alumni" value="0" hidden>
								<?php }?>
                            </label>
                        </div>
                        <div class="radio-list">
                            <label>
                                <input type="radio" name="metodBayar" class="mBayar" value="1" <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>checked="true"<?php }?> disabled>Pembayaran Lunas
                            </label>
                            <label>
                                <input type="radio" name="metodBayar" class="mBayar" value="0" <?php if ($_smarty_tpl->tpl_vars['method']->value!='1'){?>checked="true"<?php }?> disabled>Pembayaran Angsuran
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Rincian Biaya
                    </label>
                    <div class="detailBiaya col-md-10">
						
                        <a class="man list-group-item">
                                <label class="col-md-4">
                                        Uang Masuk
                                </label>
                                <label>
                                        : Rp
                                        <?php if ($_smarty_tpl->tpl_vars['method']->value==1){?>
                                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value;?>
</font>
                                        <?php }else{ ?>
                                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value;?>
</font>
                                        <?php }?>
                                </label>
                        </a>							
                        <a class="man list-group-item">
                                <label class="col-md-4">
                                        SPP 
                                </label>
                                <label >
                                        : Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biayaSpp']->value;?>
</font>
                                </label>
                        </a>		
                        <a class="man list-group-item">
                                <label class="col-md-4">
                                        SKS 
                                </label>
                                <label >
                                        : Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biayaSks']->value;?>
</font> 
                                        <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='10'){?>
                                        (<?php echo $_smarty_tpl->tpl_vars['biaya']->value->jumlahSksSemester1;?>
 x Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->biayaPerSks;?>
</font>)
                                        <?php }?>
                                </label>
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>						
                            <a class="man list-group-item">
                                    <label class="col-md-4">
                                            Diskon<br>
                                    </label>
                                    <label>
                                             : Rp 
                                             <?php if ($_smarty_tpl->tpl_vars['method']->value==1){?><font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonLunas']->value;?>
</font> (Potongan Uang Masuk)<br><?php }?> 
                                             <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->earlybirdS2==1){?>&nbsp;&nbsp;Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['earlybird']->value;?>
</font> (Potongan Uang Masuk)<br><?php }?>
                                             <?php if ($_smarty_tpl->tpl_vars['alumni']->value==1){?>&nbsp;&nbsp;&nbsp;<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonAlum']->value;?>
</font>  (Potongan Uang Masuk)<br><?php }?>
                                             <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->keluargacivitas==1){?>&nbsp;&nbsp;&nbsp;<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['klgCivitas']->value;?>
</font> (Potongan Uang Masuk)<br><?php }?>
                                             <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->keluargadlb==1){?>&nbsp;&nbsp;&nbsp;<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['klgDlb']->value;?>
</font> (Potongan Uang Masuk)<br><?php }?>
                                    </label>
                            </a>
                        <?php }else{ ?>                        
                            <a class="man list-group-item">
                                    <label class="col-md-4">
                                            Diskon
                                    </label>
                                    <label>
                                            : Rp 
                                             <?php if ($_smarty_tpl->tpl_vars['alumni']->value==1){?> <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonAlum']->value;?>
 </font> (Alumni),<?php }?>
                                             <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->keluargacivitas==1){?> <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['klgCivitas']->value;?>
</font> (Potongan Uang Masuk),<?php }?>
                                             <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->keluargadlb==1){?> <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['klgDlb']->value;?>
</font> (Potongan Uang Masuk),<?php }?>
                                             <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->earlybirdS2==1){?> <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['earlybird']->value;?>
</font> (Potongan Uang Masuk - Gel 1),<?php }?>
                                    </label>
                            </a>
                        <?php }?>
						<br>
                        <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>			
                        <a class="man list-group-item">
                                <label  class="col-md-4" >Biaya Sebelum Diskon</label>
                                <label >: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->totalBiaya;?>
</font></label>
                        </a>					
                        <a class="man list-group-item">
                                <label class="col-md-4" >
                                        Biaya Setelah Diskon
                                </label>
                                <label >
                                        : Rp
                                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>
</font> 

                                </label>
                        </a>
                        <input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>
" hidden>
                        <?php }else{ ?>
						
<!--                        <a class="man list-group-item">
                                <label  class="col-md-4" >Biaya Sebelum Diskon</label>
                                <label >: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->totalBiaya;?>
</font></label>
                        </a>
                        <a class="man list-group-item">
                                <label class="col-md-4" >Biaya Setelah Diskon</label>
                                <label >: Rp 
                                    <font class="biaya">
                                        <?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>

                                    </font>
                                </label>
                        </a>-->
                        
                        <h4>Angsuran Semester 1</h4>
                        <a class="man list-group-item">
                                <label  class="col-md-4" >Angsuran 1</label>
                                <label >: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biayaSks']->value;?>
</font></label>
                        </a>
                        <a class="man list-group-item">
                                <label class="col-md-4" >Angsuran 2</label>
                                <label >: Rp 
                                    <font class="biaya">
                                        <?php echo $_smarty_tpl->tpl_vars['biayaSpp']->value+$_smarty_tpl->tpl_vars['uangMasuk']->value;?>

                                    </font>
                                </label>
                        </a>

                        <input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['biayaSks']->value;?>
" hidden>
                        <hr>
                        <?php }?>
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-md-2" >Jumlah Pembayaran
                    </label>
                    <div class="col-md-10">
                        <h5>Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->reapplyBankTransferAmount;?>
</font>
                        </h5>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Tanggal Pembayaran
                    </label>
                    <div class="col-md-10">
                        <h5><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['transPaid']->value->tanggal_trans,"%e - %m - %Y");?>
</h5>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jenis Pembayaran
                    </label>
                    <div class="col-md-10">
                        <h5><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->typeTrans;?>
</h5>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">No Kartu ATM
                    </label>
                    <div class="col-md-10">
                        <h5><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->noAtmCardPendaftaran;?>
</h5>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Rekening Tujuan
                    </label>
                    <div class="col-md-10">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->nama;?>
</h4>
                        </label>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->kode;?>
" name="bankAkun" hidden>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">No. Rek. Pengirim
                    </label>
                    <div class="col-md-10">
                        <h5><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->noRekPengirimDaftarUlang;?>
</h5>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Rek. Pengirim
                    </label>
                    <div class="col-md-10">
                        <h5><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->namaRekPengirimDaftarUlang;?>
</h5>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Bukti Pembayaran
                    </label>
                    <div class="col-md-10">
                         <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/assets/upload/bukti_bayar/<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->buktiBayarDaftarUlang;?>
" class="btn default"><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->buktiBayarDaftarUlang;?>
 <i class=" icon-eye-open"></i> </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark" data-dismiss="modal" onClick="window.history.back();"><i class=" icon-chevron-left"></i> Back</button>
                    <button type="submit" class="btn green" id="save" value="save" name="opt">Approve <i class="icon-ok"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
$(document).ready(function() {
    $('.biaya').formatCurrency();
});


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
	if (val == '04.3'){
		$("#no_rek_cmb").prop('required', false);
		$("#nama_rek_cmb").prop('required', false);
		$("#bukti").prop('required', false);
	}else{
		$("#no_rek_cmb").prop('required', true);
		$("#nama_rek_cmb").prop('required', true);
		$("#bukti").prop('required', true);
	}
});	

</script>
<?php }} ?>