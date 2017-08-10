<?php /* Smarty version Smarty-3.1.14, created on 2016-10-03 13:57:22
         compiled from "application/views/cmb/kontenDaftarUlangPasca.html" */ ?>
<?php /*%%SmartyHeaderCode:158285732655e55718dcd947-58607631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1834f86dc9f3ba3e56020b224c2eab93a5e78897' => 
    array (
      0 => 'application/views/cmb/kontenDaftarUlangPasca.html',
      1 => 1475475282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158285732655e55718dcd947-58607631',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55e5571907a2c4_84418373',
  'variables' => 
  array (
    'host' => 0,
    'prof' => 0,
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
    'diskonMIAI' => 0,
    'totalAll' => 0,
    'typeBayar' => 0,
    'row' => 0,
    'bankAkun' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e5571907a2c4_84418373')) {function content_55e5571907a2c4_84418373($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<!-- BEGIN FORM-->
<div class="row">
    <div class="col-md-12" style="padding-bottom: 15px; padding-top: 5px; padding-right: 0px;">

    </div>
</div>
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/confirm_du/do" enctype="multipart/form-data" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">
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
                                <input type="radio" name="metodBayar" class="mBayar" value="69" <?php if ($_smarty_tpl->tpl_vars['method']->value!='1'){?>checked="true"<?php }?> disabled>Pembayaran Angsuran
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
</font> (Potongan Uang Masuk - Gel 1)<br><?php }?>
                                             <?php if ($_smarty_tpl->tpl_vars['alumni']->value==1){?>&nbsp;&nbsp;&nbsp;<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonAlum']->value;?>
</font>  (Potongan Uang Masuk)<br><?php }?>
                                             <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->keluargacivitas==1){?>&nbsp;&nbsp;&nbsp;<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['klgCivitas']->value;?>
</font> (Potongan Uang Masuk)<br><?php }?>
                                             <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->keluargadlb==1){?>&nbsp;&nbsp;&nbsp;<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['klgDlb']->value;?>
</font> (Potongan Uang Masuk)<br><?php }?>
                                             <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->miaiPindahan==1){?>&nbsp;&nbsp;&nbsp;<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonMIAI']->value;?>
</font> (Potongan MIAI)<br><?php }?>
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
                                             <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->miaiPindahan==1){?>&nbsp;&nbsp;&nbsp;<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonMIAI']->value;?>
</font> (Potongan MIAI)<br><?php }?>
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
                        <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
                        <input type="text" class="biaya form-control" id="jumlahBayar" name="jumlahBayar" value="<?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>
">
                        <input class="biaya" id="jumlahDataBayar"  value="<?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>
" hidden>
                        <?php }else{ ?>
                        <input type="text" class="biaya form-control" id="jumlahBayar" name="jumlahBayar" value="<?php echo $_smarty_tpl->tpl_vars['biayaSks']->value;?>
">
                        <input class="biaya" id="jumlahDataBayar"  value="<?php echo $_smarty_tpl->tpl_vars['biayaSks']->value;?>
" hidden>
                        <?php }?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Tanggal Pembayaran
                    </label>
                    <div class="col-md-10">
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
                            <input type="text" class="form-control" name="tanggalBayar" style="text-align: left;" placeholder="YYYY-MM-DD" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jenis Pembayaran
                    </label>
                    <div class="col-md-10">
                        <select class="form-control" name="typeTrans" id="typeTrans" required>
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
                <div class="form-group">
                    <label class="control-label col-md-2">No Kartu ATM
                    </label>
                    <div class="col-md-10">
                        <input type="number" class="form-control" name="noAtmCard" id="noAtmCard" maxlength="16" disabled required>
                        <p class="help-block" style="display:none;" id="helpAtm">Masukan 16 digit No. kartu ATM Anda</p>
                        <p class="help-block" style="display:none;" id="helpAtmno">Lewati jika transaksi pembayaran Tunai/Tunai Via Bank</p>
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
                        <input type="number" class="form-control" name="no_rek_cmb" id="no_rek_cmb" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Rek. Pengirim
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="nama_rek_cmb" id="nama_rek_cmb" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Bukti Pembayaran
                    </label>
                    <div class="col-md-10">
                        <input type="file" id="bukti" name="bukti" required>
                        <p class="help-block">Format : pdf|jpg|png|gif</p>
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