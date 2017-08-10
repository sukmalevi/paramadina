<?php /* Smarty version Smarty-3.1.14, created on 2015-09-07 10:45:14
         compiled from "application/views/cmb/kontenDaftarUlangKP.html" */ ?>
<?php /*%%SmartyHeaderCode:81033372255ed084a021c03-01232921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '727f9971c0588b6702cd2419e8d33e2e3492f66a' => 
    array (
      0 => 'application/views/cmb/kontenDaftarUlangKP.html',
      1 => 1436515165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81033372255ed084a021c03-01232921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'prof' => 0,
    'transPaid' => 0,
    'method' => 0,
    'biaya' => 0,
    'total' => 0,
    'sisaAng' => 0,
    'jalur' => 0,
    'typeBayar' => 0,
    'row' => 0,
    'bankAkun' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55ed084a25d8a4_33103634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ed084a25d8a4_33103634')) {function content_55ed084a25d8a4_33103634($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
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
				<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1208'){?>
                <div class="form-group">
                    <label class="control-label col-md-2">Lulusan
                    </label>
                    <div class="col-md-10">
                        <label>
                            <h5><?php if ($_smarty_tpl->tpl_vars['transPaid']->value->lulusan=='SMA'){?>SMA<?php }elseif($_smarty_tpl->tpl_vars['transPaid']->value->lulusan=='D3'){?>D3<?php }?></h5>
                        </label>
                    </div>
                </div>
				<?php }?>
            </div>
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Transaksi Pembayaran</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Metode Pembayaran
                    </label>
                    <div class="col-md-3">
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

                        <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>								
						<a class="man list-group-item">
							<label class="col-md-4">
								Uang Masuk
							</label>
							<label>
								: Rp
									<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->uangMasuk;?>
</font>
								
							</label>
                        </a>
						<?php }else{ ?>								
						<a class="man list-group-item">
							<label class="col-md-4">
								Uang Masuk
							</label>
							<label >
								: Rp
									<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->uangMasuk;?>
</font>
								
							</label>
                        </a>
						<?php }?>								
						<a class="man list-group-item">
							<label class="col-md-4">
								SPP Semester 1
							</label>
							<label >
								: Rp
									<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->spp;?>
</font>
								
							</label>
                        </a>		
						<a class="man list-group-item">
							<label class="col-md-4">
								SKS Semester 1
							</label>
							<label >
								: Rp
									<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->sks;?>
</font> (<?php echo $_smarty_tpl->tpl_vars['biaya']->value->jumlahSks;?>
 x Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->sks/$_smarty_tpl->tpl_vars['biaya']->value->jumlahSks;?>
</font>)
							</label>
                        </a>
						<a class="man list-group-item">						
							<label  class="col-md-4">
								Biaya Orientasi (BPP)
							</label>
							<label >
								: Rp
									<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->bpp;?>
</font>
							</label>
						</a>
                        <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
						
						<a class="man list-group-item">
							<label class="col-md-4">
								Diskon<br>
							</label>
							<label>
								 : Rp <font class="biaya">1000000</font> (Lunas)
							</label>
						</a>
                        <?php }else{ ?>                        
						<a class="man list-group-item">
							<label class="col-md-4">
								Diskon
							</label>
							<label>
								: -
							</label>
						</a>
                        <?php }?>
						<br>
						<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>						
						<a class="man list-group-item">
							<label class="col-md-4" style="font-size:16px;font-family: Arial,sans-serif;">
								Total Biaya Keseluruhan
							</label>
							<label style="font-size:16px;font-family: Arial,sans-serif;">
								: Rp
									<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font> 
								
							</label>
                        </a>
                        <input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" hidden>
						<?php }else{ ?>
						
						<a class="man list-group-item">
							<label class="col-md-4" style="font-size:16px;font-family: Arial,sans-serif;">Total Pembayaran Daftar Ulang</label>
							<label style="font-size:19px;font-family: Arial,sans-serif;">: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font></label>
                        </a>
						<a class="man list-group-item">
							<label  class="col-md-4" style="font-size:16px;font-family: Arial,sans-serif;">Total yang harus dibayar</label>
							<label style="font-size:19px;font-family: Arial,sans-serif;">: Rp
									<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font></label>
                        </a>

                        <input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" hidden>
                        <hr>
                        <h3>Detail Angsuran Uang Masuk</h3>
                        <hr>
                        <div class="row col-md-12">		
						<a class="man list-group-item">
                            <label class="col-md-4">Angsuran Pertama (UM)</label>
                            <label>: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran1;?>
</font>
                            </label> 
							<label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date1,"%e %b %Y");?>
</label>
                        </a>		
						<a class="man list-group-item">
                            <label class="col-md-4">
								Angsuran Kedua
							</label>
                            <label >
								: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran2;?>
</font>,
                            </label>
							<label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date2,"%e %b %Y");?>
</label>
                        </a>		
						<a class="man list-group-item">
                            <label class="col-md-4">
                                Angsuran Ketiga
                            </label>
                            <label >
                                : Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran3;?>
</font>,
                            </label>
							<label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date3,"%e %b %Y");?>
</label>
                        </a>		
						<a class="man list-group-item">
                            <label class="col-md-4">
                                Angsuran Keempat
                            </label>
                            <label  >
                                : Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran4;?>
</font>,
                            </label>
							<label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date4,"%e %b %Y");?>
</label>
                        </a>		
						<a class="man list-group-item">
                            <label class="col-md-4">
                                Angsuran Kelima
                            </label>
                            <label  >
                                : Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran5;?>
</font>,
                            </label>
							<span style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date5,"%e %b %Y");?>
</span>
                        </a>
                        </div>
                        <br>		
						<a class="man list-group-item">
                            <label class="col-md-4"  style="font-size:16px;font-family: Arial,sans-serif;">
                                Total Uang Masuk
                            </label>
                            <label  style="font-size:16px;font-family: Arial,sans-serif;">
                                : Rp
                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->uangMasuk+$_smarty_tpl->tpl_vars['sisaAng']->value;?>
</font>
                            </label>
                        </a>		
						<a class="man list-group-item">
                            <label class="col-md-4" style="font-size:16px;font-family: Arial,sans-serif;">Sisa Angsuran
                            </label>
                            <label style="font-size:16px;font-family: Arial,sans-serif;">: Rp
                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['sisaAng']->value;?>
</font>
                            </label>
                        </a>
							<?php }?>
                        </div>
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-md-2" >Jumlah Pembayaran
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="biaya form-control" name="jumlahBayar" id="jumlahBayar" value="<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
<?php }?>" >
                        <!-- <input class="biaya" name="jumlahBayar" id="jumlahDataBayar" value="<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
<?php }?>" hidden> -->
                    </div>
                </div>
				<?php if ($_smarty_tpl->tpl_vars['jalur']->value=='01'||$_smarty_tpl->tpl_vars['jalur']->value=='02'||$_smarty_tpl->tpl_vars['jalur']->value=='KP'){?>
                <div class="form-group">
                    <label class="control-label col-md-2">Tanggal Pembayaran
                    </label>
                    <div class="col-md-10">
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
                            <input type="text" class="form-control" name="tanggalBayar" style="text-align: left;" placeholder="DD-MM-YYYY" required>
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
				<?php }?>
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

$('.biaya').blur(function()
{
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