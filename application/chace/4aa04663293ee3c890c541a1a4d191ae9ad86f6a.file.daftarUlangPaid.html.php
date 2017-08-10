<?php /* Smarty version Smarty-3.1.14, created on 2014-11-04 13:24:12
         compiled from "application/views/portal/daftarUlangPaid.html" */ ?>
<?php /*%%SmartyHeaderCode:1864526353536321574d88f6-65654836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa04663293ee3c890c541a1a4d191ae9ad86f6a' => 
    array (
      0 => 'application/views/portal/daftarUlangPaid.html',
      1 => 1400840694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1864526353536321574d88f6-65654836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53632157667e99_65948626',
  'variables' => 
  array (
    'host' => 0,
    'nama' => 0,
    'cmb' => 0,
    'jalur' => 0,
    'saudara' => 0,
    'statusSaudara' => 0,
    'method' => 0,
    'biaya' => 0,
    'total' => 0,
    'transPaid' => 0,
    'diskonSau' => 0,
    'totalAll' => 0,
    'sisaAng' => 0,
    'bankAkun' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53632157667e99_65948626')) {function content_53632157667e99_65948626($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<!-- BEGIN FORM-->
<div class="row">
    <div class="col-md-12" style="padding-bottom: 15px; padding-top: 5px; padding-right: 0px;">
        <ul class="timeline" style="left:0">
            <li class="timeline-red">
                <div class="timeline-body" style="margin-left:0">
                    <h4>Mohon tunggu, pembayaran daftar ulang Anda belum dikonfirmasi oleh bagian keuangan.
                        </a>
                    </h4>

                </div>


            </li>
        </ul>
    </div>
</div>
<form action="#" enctype="multipart/form-data" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">
    <div class="portlet box grey">
        <div class="portlet-body form" style="border-top: 1px double #4682B4;">
            <div class="form-body" style="font-size:bold">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">DATA DIRI</h3>
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Lengkap
                    </label>
                    <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</h4>
                        </label>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
" name="kode" hidden>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Program Studi
                    </label>
                    <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->progdi;?>
</h4>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Transaksi Pembayaran</h3>
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Metode Pembayaran
                    </label>
                    <div class="col-md-3" style="width: 862px;; padding-left: 35px; padding-top: 5px;">
                        <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?>
                        <div class="checkbox-list">
                            <label>
                                <?php if ($_smarty_tpl->tpl_vars['saudara']->value>0&&$_smarty_tpl->tpl_vars['statusSaudara']->value=='7'){?>
                                <input type="checkbox" name="yes" checked="true" disabled>Memiliki Saudara Kandung
                                <input name="sau" id="sau" value="1" hidden><?php }elseif($_smarty_tpl->tpl_vars['saudara']->value>0&&$_smarty_tpl->tpl_vars['statusSaudara']->value=='9'){?>
                                <input type="checkbox" name="no" disabled>Memiliki Saudara Kandung
                                <input name="sau" id="sau" value="0" hidden><?php }elseif($_smarty_tpl->tpl_vars['saudara']->value==0){?>
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
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Rincian Biaya
                    </label>
                    <div class="detailBiaya col-md-9" style="width: 862px; padding-left: 35px; padding-top: 5px;">
                        <!-- <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
													<label style="width:140px"><h4>Uang Masuk</h4></label> <label><h4>: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->uangMasuk;?>
</font></h4></label> <br>
													<?php }else{ ?>
													<label style="width:140px"><h4>Uang Masuk</h4></label> <label><h4>: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->uangMasuk;?>
</font> <?php echo $_smarty_tpl->tpl_vars['biaya']->value->tempoAngsuran;?>
x Angsuran, Total yang harus dibayar : Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->totalAngsuran;?>
</font></h4></label> <br>
													<?php }?>
													<label style="width:140px"><h4>SPP Semester 1</h4></label> <label><h4>: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->spp;?>
</font></h4></label> <br>
													<label style="width:140px"><h4>SKS Semester 1</h4></label> <label><h4>: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->sks;?>
</font> (21 x Rp.200.000,00)</h4></label> <br>
													<label style="width:140px"><h4>Biaya Orientasi</h4></label> <label><h4>: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->bpp;?>
</font> (Hanya 1x) </h4></label>
													<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
													<br><label style="width:140px"><h4>Diskon</h4></label> <label><h4>: Rp <font class="biaya">1000000</font></h4></label>
													<?php }?>
													<hr>
													<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
													<label style="width:140px"><h4>Total Biaya</h4></label> <label><h4>: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font></h4></label><br>
													<?php }else{ ?>
													<label style="width:230px"><h4>Total Biaya Daftar Ulang</h4></label> <label><h4>: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->total;?>
</font></h4></label><br>
													<?php }?> -->

                        <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
                        <label style="width:140px">
                            <h4>Uang Masuk</h4>
                        </label>
                        <label>
                            <h4>: Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->uangMasuk;?>
</font>
                            </h4>
                        </label>
                        <br><?php }else{ ?>
                        <label style="width:140px">
                            <h4>Uang Masuk</h4>
                        </label>
                        <label>
                            <h4>: Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->uangMasuk;?>
</font>(<?php echo $_smarty_tpl->tpl_vars['biaya']->value->tempoAngsuran;?>
x angsuran)dar total yang harus dibayar, yaitu sebesar : Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->totalAngsuran;?>
</font>
                            </h4>
                        </label>
                        <br><?php }?>
                        <label style="width:140px">
                            <h4>SPP Semester 1</h4>
                        </label>
                        <label>
                            <h4>: Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->spp;?>
</font>
                            </h4>
                        </label>
                        <br>
                        <label style="width:140px">
                            <h4>SKS Semester 1</h4>
                        </label>
                        <label>
                            <h4>: Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->sks;?>
</font>(21 x Rp 200.000)</h4>
                        </label>
                        <br>
                        <label style="width:140px">
                            <h4>Biaya Orientasi</h4>
                        </label>
                        <label>
                            <h4>: Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->bpp;?>
</font>(Hanya 1x)</h4>
                        </label>
                        <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
                        <br>
                        <label style="width:140px">
                            <h4>Diskon</h4>
                        </label>
                        <label>
                            <h4>
                                <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->kodeProdi!='1204'){?> : Rp
                                <font class="biaya">1000000</font>
                                <?php if ($_smarty_tpl->tpl_vars['saudara']->value>'0'){?> + Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonSau']->value;?>
</font>
                                <?php }?> <?php }else{ ?> : - <?php }?>
                            </h4>
                        </label>
                        <?php }else{ ?>
                        <br>
                        <label style="width:140px">
                            <h4>Diskon</h4>
                        </label>
                        <label>
                            <h4>
                                <?php if ($_smarty_tpl->tpl_vars['saudara']->value>'0'){?> : Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonSau']->value;?>
</font>
                                <?php }else{ ?> : - <?php }?>
                            </h4>
                        </label>
                        <?php }?>
                        <hr><?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
                        <label style="width:140px">
                            <h4 style="font-size:19px;font-family: Arial,sans-serif;">Total Biaya</h4>
                        </label>
                        <label>
                            <h4 style="font-size:19px;font-family: Arial,sans-serif;">: Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font>
                            </h4>
                        </label>
                        <br>
                        <input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" hidden><?php }else{ ?>

                        <label style="width:230px">
                            <h4 style="font-size:19px;font-family: Arial,sans-serif;">Total Biaya Daftar Ulang</h4>
                        </label>
                        <label>
                            <h4 style="font-size:19px;font-family: Arial,sans-serif;">: Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font>
                            </h4>
                        </label>
                        <br>

                        <label style="width:230px">
                            <h4 style="font-size:19px;font-family: Arial,sans-serif;">Total yang harus dibayar</h4>
                        </label>
                        <label>
                            <h4 style="font-size:19px;font-family: Arial,sans-serif;">: Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>
</font>
                            </h4>
                        </label>
                        <br>

                        <input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value->total;?>
" hidden>
                        <hr>
                        <h3>Detail Angsuran</h3>
                        <hr>
                        <div class="row col-md-6">
                            <label class="col-md-8">
                                <h4>Angsuran Pertama(UM)</h4>
                            </label>
                            <label>
                                <h4>: Rp
                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran1;?>
</font>
                                </h4>
                            </label>
                            <br>
                            <label class="col-md-8">
                                <h4>Angsuran Kedua</h4>
                            </label>
                            <label>
                                <h4>: Rp
                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran2;?>
</font>
                                </h4>
                            </label>
                            <br>
                            <label class="col-md-8">
                                <h4>Angsuran Ketiga</h4>
                            </label>
                            <label>
                                <h4>: Rp
                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran3;?>
</font>
                                </h4>
                            </label>
                            <br>
                            <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?> 
                            <?php if ($_smarty_tpl->tpl_vars['cmb']->value->kodeProdi=='1208'||$_smarty_tpl->tpl_vars['cmb']->value->kodeProdi=='1206'){?>
                            <label class="col-md-8">
                                <h4>Angsuran Keempat</h4>
                            </label>
                            <label>
                                <h4>: Rp
                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran4;?>
</font>
                                </h4>
                            </label>
                            <?php }?>
                            <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?> 
                        <?php if ($_smarty_tpl->tpl_vars['cmb']->value->kodeProdi=='1208'){?>
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
                        <br>
                        <label class="col-md-8">
                            <h4>Total Uang Masuk</h4>
                        </label>
                        <label class="col-md-4">
                            <h4>: Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->totalAngsuran;?>
</font>
                            </h4>
                        </label>
                        <br>

                        <label class="col-md-8">
                            <h4 style="font-size:19px;font-family: Arial,sans-serif;">Sisa Angsuran</h4>
                        </label>
                        <label class="col-md-4">
                            <h4 style="font-size:19px;font-family: Arial,sans-serif;">: Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['sisaAng']->value;?>
</font>
                            </h4>
                        </label>
                        <br><?php }?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Jumlah Pembayaran
                    </label>
                    <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                        <label>
                            <h4>Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->reapplyBankTransferAmount;?>
</font>
                            </h4>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Tanggal Pembayaran
                    </label>
                    <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
                            <input type="text" style="text-align:left" class="form-control" name="tanggalBayar" value="<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->tanggal_trans;?>
" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Metode Pembayaran
                    </label>
                    <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                        <select class="form-control" name="typeTrans" id="jenjang" disabled>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->kode_typeTrans;?>
"><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->typeTrans;?>
</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">No Kartu ATM
                    </label>
                    <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                        <input type="text" class="form-control" name="noAtmCard" value="<?php if ($_smarty_tpl->tpl_vars['transPaid']->value->noAtmCardDaftarulang=='0'){?>-<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->noAtmCardDaftarulang;?>
<?php }?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Rekening Tujuan
                    </label>
                    <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->nama;?>
</h4>
                        </label>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->kode;?>
" name="bankAkun" hidden>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">No. Rek. Pengirim
                    </label>
                    <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                        <input type="text" class="form-control" name="no_rek_cmb" value="<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->noRekPengirimDaftarUlang;?>
" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Rek. Pengirim
                    </label>
                    <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                        <input type="text" class="form-control" name="nama_rek_cmb" value="<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->namaRekPengirimDaftarUlang;?>
" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Bukti Pembayaran
                    </label>
                    <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                        <input type="text" class="form-control" name="tanggalBayar" value="<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->buktiBayarDaftarUlang;?>
" disabled>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    $('.biaya').formatCurrency();
});
</script>
<?php }} ?>