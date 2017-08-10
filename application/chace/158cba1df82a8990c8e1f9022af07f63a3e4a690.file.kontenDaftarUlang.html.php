<?php /* Smarty version Smarty-3.1.14, created on 2017-08-04 10:27:46
         compiled from "application/views/cmb/kontenDaftarUlang.html" */ ?>
<?php /*%%SmartyHeaderCode:132999752255c82d9c5f6891-01636848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '158cba1df82a8990c8e1f9022af07f63a3e4a690' => 
    array (
      0 => 'application/views/cmb/kontenDaftarUlang.html',
      1 => 1501817259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132999752255c82d9c5f6891-01636848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55c82d9c89cbc6_62545091',
  'variables' => 
  array (
    'host' => 0,
    'prof' => 0,
    'jalur' => 0,
    'saudara' => 0,
    'method' => 0,
    'uangMasuk' => 0,
    'biaya' => 0,
    'prodi' => 0,
    'diskonSau' => 0,
    'transPaid' => 0,
    'total' => 0,
    'totalAll' => 0,
    'angsuran1' => 0,
    'angsuran2' => 0,
    'angsuran3' => 0,
    'totalUangMasuk' => 0,
    'sisaAng' => 0,
    'typeBayar' => 0,
    'row' => 0,
    'bankAkun' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c82d9c89cbc6_62545091')) {function content_55c82d9c89cbc6_62545091($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
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
                    <label class="control-label col-md-2">Nama Lengkap
                    </label>
                    <div class="col-md-10">
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
                <div class="form-group">
                    <label class="control-label col-md-2">Ranking Masuk
                    </label>
                    <div class="col-md-10">
                        <label>
                            <h5><?php if ($_smarty_tpl->tpl_vars['prof']->value->stsResultGrade=='1'){?>Pertama<?php }elseif($_smarty_tpl->tpl_vars['prof']->value->stsResultGrade=='2'){?>Kedua<?php }else{ ?>Ketiga<?php }?></h5>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Transaksi Pembayaran</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Metode Pembayaran
                    </label>
                    <div class="col-md-3" style="width: 862px;; padding-left: 35px; padding-top: 5px;">
                        <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?>
                        <div class="checkbox-list">
                            <label>
                                <?php if ($_smarty_tpl->tpl_vars['saudara']->value>0){?>
                                <input type="checkbox" name="yes" checked="true" disabled>Memiliki Saudara Kandung
                                <input name="sau" id="sau" value="1" hidden><?php }elseif($_smarty_tpl->tpl_vars['saudara']->value==0){?>
                                <input type="checkbox" name="no" disabled>Memiliki Saudara Kandung
                                <input name="sau" id="sau" value="0" hidden><?php }?>
                            </label>
                        </div>
                        <?php }?> <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
                        <div class="radio-list">
                            <label>
                                <input type="radio" name="metodBayar" class="mBayar" value="1" checked="true" disabled>Pembayaran Lunas
                            </label>
                            <label>
                                <input type="radio" name="metodBayar" class="mBayar" value="0" disabled>Pembayaran Angsuran
                            </label>
                        </div>
                        <?php }else{ ?>
                        <div class="radio-list">
                            <label>
                                <input type="radio" name="metodBayar" class="mBayar" value="1" disabled>Pembayaran Lunas
                            </label>
                            <label>
                                <input type="radio" name="metodBayar" class="mBayar" value="0" checked="true" disabled>Pembayaran Angsuran
                            </label>
                        </div>
                        <?php }?>
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
                                <font class="biaya">
                                <?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value;?>

                                </font>

                            </label>
                        </a>
			<?php }else{ ?>						
                            <a class="man list-group-item">
                                    <label class="col-md-4">Uang Masuk</label>
                                    <label >
                                            : Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value;?>
</font> <small>( <?php echo $_smarty_tpl->tpl_vars['biaya']->value->tempoAngsuran;?>
 X Angsuran )</small>
                                    </label>
                            </a>
                        <?php }?>
                            <a class="man list-group-item">
                                    <label class="col-md-4">SPP Semester 1</label>
                                    <label>: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->spp;?>
</font></label>
                            </a>
                            <a class="man list-group-item">
                                    <label class="col-md-4">
                                            SKS Semester 1
                                    </label>
                                    <label>
                                            : Rp
                                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->sks;?>
</font> (<?php echo $_smarty_tpl->tpl_vars['biaya']->value->jumlahSks;?>
 x Rp <?php echo $_smarty_tpl->tpl_vars['biaya']->value->sks/number_format($_smarty_tpl->tpl_vars['biaya']->value->jumlahSks,2,",",".");?>
)
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
                                            Potongan<br>
                                    </label>
                                    <label>

                                                    <?php if ($_smarty_tpl->tpl_vars['prodi']->value!='1204'){?> 
                                                            <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='01'||$_smarty_tpl->tpl_vars['jalur']->value=='02'){?> 
                                                            : Rp <font class="biaya">1000000</font> (Lunas)
                                                                    <?php if ($_smarty_tpl->tpl_vars['saudara']->value>'0'){?> 
                                                                            + Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonSau']->value;?>
</font> (20%, Saudara)
                                                                    <?php }?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='02'){?>
                                                                            + Rp <font class="biaya">
                                                                            <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->sks_acc<40){?> <?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value*0;?>

                                                                            <?php }elseif($_smarty_tpl->tpl_vars['transPaid']->value->sks_acc>40&&$_smarty_tpl->tpl_vars['transPaid']->value->sks_acc<=80){?> <?php echo ($_smarty_tpl->tpl_vars['uangMasuk']->value-$_smarty_tpl->tpl_vars['diskonSau']->value)*(25/100);?>

                                                                            <?php }elseif($_smarty_tpl->tpl_vars['transPaid']->value->sks_acc>80){?> <?php echo ($_smarty_tpl->tpl_vars['uangMasuk']->value-$_smarty_tpl->tpl_vars['diskonSau']->value)*(50/100);?>
<?php }?></font> 
                                                                            (<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->sks_acc;?>
 SKS diterima)

                                                                    <?php }?>
                                                            <?php }else{ ?> 
                                                            : - 
                                                            <?php }?>
                                                    <?php }else{ ?> 
                                                    : - 
                                                    <?php }?>

                                    </label>
                            </a>
                        <?php }else{ ?>                        
                            <a class="man list-group-item">
                                    <label class="col-md-4">
                                            Potongan
                                    </label>
                                    <label>
                                                    <?php if ($_smarty_tpl->tpl_vars['prodi']->value!='1204'){?>
                                                            <?php if ($_smarty_tpl->tpl_vars['saudara']->value>'0'){?> : Rp
                                                            <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonSau']->value;?>
 </font> (20%, Saudara) 
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='02'){?>
                                                             + Rp <font class="biaya">
                                                                    <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->sks_acc<40){?> <?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value*0;?>

                                                                    <?php }elseif($_smarty_tpl->tpl_vars['transPaid']->value->sks_acc>40&&$_smarty_tpl->tpl_vars['transPaid']->value->sks_acc<=80){?> <?php echo ($_smarty_tpl->tpl_vars['uangMasuk']->value-$_smarty_tpl->tpl_vars['diskonSau']->value)*(25/100);?>

                                                                    <?php }elseif($_smarty_tpl->tpl_vars['transPaid']->value->sks_acc>80){?> <?php echo ($_smarty_tpl->tpl_vars['uangMasuk']->value-$_smarty_tpl->tpl_vars['diskonSau']->value)*(50/100);?>

                                                                    <?php }?>
                                                                    </font> (<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->sks_acc;?>
 SKS diterima)
                                                            <?php }?>
                                                    <?php }else{ ?>
                                                    : -
                                                    <?php }?>

                                    </label>
                            </a>
                        <?php }?>
                        <hr>
                        <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>						
                        <a class="man list-group-item">
                                <label class="col-md-4" style="font-size:16px;font-family: Arial,sans-serif;">Total Biaya Keseluruhan</label>
                                <label style="font-size:16px;font-family: Arial,sans-serif;">: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font> </label>
                        </a>
                        <input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" hidden>
						<?php }else{ ?>
						
						<a class="man list-group-item">
							<label class="col-md-4" style="font-size:16px;font-family: Arial,sans-serif;">Total Pembayaran Daftar Ulang</label>
							<label style="font-size:16px;font-family: Arial,sans-serif;">: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font></label>
                        </a>
						<a class="man list-group-item">
							<label class="col-md-4" style="font-size:16px;font-family: Arial,sans-serif;">Total yang harus dibayar</label>
							<label style="font-size:16px;font-family: Arial,sans-serif;">: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>
</font></label>
                        </a>

                        <input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" hidden>
					</div>
				</div>
			</div>
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Detail Angsuran Uang Masuk</h3>
                    <div class="form-group">
						<label class="control-label col-md-2">Rincian Angsuran</label>    
                        <div class="col-md-10">
							<a class="man list-group-item">
								<label class="col-md-4">Angsuran Pertama </label>
								<label>: Rp <font class=" biaya"><?php echo $_smarty_tpl->tpl_vars['angsuran1']->value;?>
</font></label>
								<label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date1,"%e %b %Y");?>
</label>
							</a>
							<a class="man list-group-item">
								<label class="col-md-4">Angsuran Kedua </label>
								<label>: Rp <font class="biaya">
									<?php echo $_smarty_tpl->tpl_vars['angsuran2']->value;?>
</font>
								</label>
								<label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date2,"%e %b %Y");?>
</label>
                            </a>
							<a class="man list-group-item">
								<label class="col-md-4">Angsuran Ketiga </label>
								<label>: Rp <font class="biaya">
									<?php echo $_smarty_tpl->tpl_vars['angsuran3']->value;?>
</font>
								</label>
								<label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date3,"%e %b %Y");?>
</label>
                            </a>
                            <br><?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?> <?php if ($_smarty_tpl->tpl_vars['prof']->value->kodeProdi=='1208'||$_smarty_tpl->tpl_vars['prof']->value->kodeProdi=='1206'){?>
                            <label class="col-md-4">
                                <h4>Angsuran Keempat</h4>
                            </label>
                            <label class="col-md-3">
                                <h4>: Rp
                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran4;?>
</font>
                                </h4>
                            </label>
                            <?php }?> <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?> <?php if ($_smarty_tpl->tpl_vars['prof']->value->kodeProdi=='1208'){?>
                        <div class="row col-md-6">
                            <label class="col-md-8">
                                <h4>Angsuran Kelima</h4>
                            </label>
                            <label>
                                <h4>: Rp
                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran5;?>
</font>
                                </h4>
                            </label>
                            <br>
                            <label class="col-md-8">
                                <h4>Angsuran Keenam</h4>
                            </label>
                            <label>
                                <h4>: Rp
                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran6;?>
</font>
                                </h4>
                            </label>
                            <br>
                            <label class="col-md-8">
                                <h4>Angsuran Ketujuh</h4>
                            </label>
                            <label>
                                <h4>: Rp
                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran7;?>
</font>
                                </h4>
                            </label>
                            <br>
                            <label class="col-md-8">
                                <h4>Angsuran Kedelapan</h4>
                            </label>
                            <label>
                                <h4>: Rp
                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran8;?>
</font>
                                </h4>
                            </label>
                        </div>
                        <?php }?> <?php }?>
                        <br>                       
							<a class="man list-group-item">
                                <label>Total Uang Masuk</label>
                                <label style="float:right">Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['totalUangMasuk']->value;?>
</font></label>
                            </a>
							<a class="man list-group-item">
								<label>Sisa Angsuran</label>
								<label style="float:right">Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['sisaAng']->value;?>
</font></label>
							</a>
                    </div><?php }?>
				</div>
            </div>			
			<input type="hidden" name='angsuran1' value='<?php echo $_smarty_tpl->tpl_vars['angsuran1']->value;?>
'>
			<input type="hidden" name='angsuran2' value='<?php echo $_smarty_tpl->tpl_vars['angsuran2']->value;?>
'>
			<input type="hidden" name='angsuran3' value='<?php echo $_smarty_tpl->tpl_vars['angsuran3']->value;?>
'>
			<div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Detail Transaksi</h3>
				<div class="form-group">
                    <label class="control-label col-md-2">Jumlah Pembayaran
                    </label>
                    <div class="col-md-9" >
                        <input type="text" class="biaya form-control" name="jumlahBayar" id="jumlahBayar" value="<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>
<?php }?>">
                        <!-- <input class="biaya" name="jumlahBayar" id="jumlahDataBayar" value="<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>
<?php }?>" hidden> -->
                    </div>
                </div>
				<?php if ($_smarty_tpl->tpl_vars['jalur']->value=='01'||$_smarty_tpl->tpl_vars['jalur']->value=='02'||$_smarty_tpl->tpl_vars['jalur']->value=='KP'||$_smarty_tpl->tpl_vars['jalur']->value=='CI'||$_smarty_tpl->tpl_vars['jalur']->value=='BM'){?>
                <div class="form-group">
                    <label class="control-label col-md-2">Tanggal Pembayaran
                    </label>
                    <div class="col-md-9" >
                        <div class="input-group input-large date-picker" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
                            <input type="text" class="form-control" name="tanggalBayar" style="text-align: left;" placeholder="DD-MM-YYYY" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jenis Pembayaran
                    </label>
                    <div class="col-md-9" >
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
                    <div class="col-md-9">
                        <input type="number" class="form-control" name="noAtmCard" id="noAtmCard" maxlength="16" disabled required>
                        <p class="help-block" style="display:none;" id="helpAtm">Masukan 16 digit No. kartu ATM Anda</p>
                        <p class="help-block" style="display:none;" id="helpAtmno">Lewati jika transaksi pembayaran Tunai/Tunai Via Bank</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Rekening Tujuan
                    </label>
                    <div class="col-md-9">
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
                    <div class="col-md-9" >
                        <input type="number" class="form-control" name="no_rek_cmb" id="no_rek_cmb" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Rek. Pengirim
                    </label>
                    <div class="col-md-9" >
                        <input type="text" class="form-control" name="nama_rek_cmb" id="nama_rek_cmb" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Bukti Pembayaran
                    </label>
                    <div class="col-md-9" >
                        <input type="file" id="bukti" name="bukti" required>
                        <p class="help-block">Format : pdf|jpg|png|gif</p>
                    </div>
                </div>
				<?php }?>
                <div class="modal-footer">
                    <button type="button" class="btn dark" data-dismiss="modal" onClick="window.history.back();"><i class=" icon-chevron-left"></i> Back</button>
                    <button type="submit" class="btn green" id="save" value="save" name="opt">Save <i class="icon-ok"></i>
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
		$("#noAtmCard").prop('maxlength', '16');
		
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