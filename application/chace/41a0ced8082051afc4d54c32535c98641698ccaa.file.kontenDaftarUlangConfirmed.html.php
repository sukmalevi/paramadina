<?php /* Smarty version Smarty-3.1.14, created on 2016-11-11 11:30:00
         compiled from "application/views/portal/kontenDaftarUlangConfirmed.html" */ ?>
<?php /*%%SmartyHeaderCode:76647351458254948c89fa5-88714772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41a0ced8082051afc4d54c32535c98641698ccaa' => 
    array (
      0 => 'application/views/portal/kontenDaftarUlangConfirmed.html',
      1 => 1478584217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76647351458254948c89fa5-88714772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'prof' => 0,
    'nama' => 0,
    'jalur' => 0,
    'transPaid' => 0,
    'saudara' => 0,
    'method' => 0,
    'uangMasuk' => 0,
    'biaya' => 0,
    'prodi' => 0,
    'earlyBird' => 0,
    'diskonSau' => 0,
    'total' => 0,
    'totalAll' => 0,
    'angsuran' => 0,
    'pilihanBiaya' => 0,
    'val' => 0,
    'sql' => 0,
    'row' => 0,
    'rows' => 0,
    'choose' => 0,
    'pilih' => 0,
    'k' => 0,
    'keypilih' => 0,
    'rowd' => 0,
    'resTglTempo' => 0,
    'y' => 0,
    'totalUangMasuk' => 0,
    'bankAkun' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_582549491725b2_52718110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582549491725b2_52718110')) {function content_582549491725b2_52718110($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<!-- BEGIN FORM-->
<form action="#" enctype="multipart/form-data" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="#">
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
                <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?>
                <div class="form-group">
                    <label class="control-label col-md-2">Ranking Masuk
                    </label>
                    <div class="col-md-10">
                        <label>
                            <h5><?php if ($_smarty_tpl->tpl_vars['prof']->value->stsResultGrade=='1'){?>Pertama<?php }elseif($_smarty_tpl->tpl_vars['prof']->value->stsResultGrade=='2'){?>Kedua<?php }else{ ?>Ketiga<?php }?></h5>
                        </label>
                    </div>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?>
                <div class="form-group">
                    <label class="control-label col-md-2">Jenjang Masuk
                    </label>
                    <div class="col-md-10">
                        <label>
                            <h5><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->lulus_acc;?>
</h5>
                        </label>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Transaksi Pembayaran</h3>
                <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?>
                <div class="form-group">
                    <label class="control-label col-md-2">Metode Pembayaran
                    </label>
                    <div class="col-md-3">
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
                <?php }?>
                <div class="form-group">
                    <label class="control-label col-md-2">Rincian Biaya</label>
                    <div class="detailBiaya col-md-10">
                        <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>						
                        <a class="man list-group-item">
                            <label class="col-md-4">Uang Masuk</label>
                            <label>
                                : Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value;?>
</font>

                            </label>
                        </a>
                        <?php }else{ ?>
                        <a class="man list-group-item">
                            <label class="col-md-4">Uang Masuk</label>
                            <label >
                                    : Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value;?>
</font> 
                                    <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?><small>( <?php echo $_smarty_tpl->tpl_vars['biaya']->value->tempoAngsuran;?>
 X Angsuran )</small><?php }?>
                            </label>
                        </a>
                        <?php }?>
                        <a class="man list-group-item">
                                <label class="col-md-4">SPP <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?>Semester 1<?php }?></label>
                                <label>: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->spp;?>
</font></label>
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?>
                        <a class="man list-group-item">
                                <label class="col-md-4">
                                        SKS Semester 1
                                </label>
                                <label>
                                        : Rp
                                        <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->sks;?>
</font> (<?php echo $_smarty_tpl->tpl_vars['biaya']->value->jumlahSks;?>
 x Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->sks/$_smarty_tpl->tpl_vars['biaya']->value->jumlahSks;?>
</font>)
                                </label>
                        </a>
                        <?php }else{ ?>
                        <a class="man list-group-item">
                                <label class="col-md-4">
                                        SKS
                                </label>
                                <label>
                                        : Rp
                                        <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->biayaPerSks*$_smarty_tpl->tpl_vars['biaya']->value->jumlahSks;?>
</font> (<?php echo $_smarty_tpl->tpl_vars['biaya']->value->jumlahSks;?>
 x Rp <font class=""><?php echo number_format($_smarty_tpl->tpl_vars['biaya']->value->biayaPerSks,0,",",".");?>
</font>)
                                </label>
                        </a>
                        <?php }?>
						
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
                <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?>
                    <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>                        
                        <a class="man list-group-item">
                                <label class="col-md-4">
                                        Potongan 
                                </label>
                                <label>
                                    <?php if ($_smarty_tpl->tpl_vars['prodi']->value!='1204'){?> 
                                            <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='01'||$_smarty_tpl->tpl_vars['jalur']->value=='02'){?> 
                                                <?php if ($_smarty_tpl->tpl_vars['earlyBird']->value!='99'){?>
                                                : Rp <font class="biaya">1000000</font> (Lunas)
                                                <?php }else{ ?>
                                                : Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value*0.3;?>
</font> <i>(30%, Early Bird)</i>
                                                <?php }?>
                                                
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
                                    <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?>: -<?php }?>
                                </label>
                        </a>
                    <?php }?>
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
                        <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?>
                        <a class="man list-group-item">
                                <label class="col-md-4" style="font-size:16px;font-family: Arial,sans-serif;">Total Pembayaran Daftar Ulang</label>
                                <label style="font-size:16px;font-family: Arial,sans-serif;">: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font></label>
                        </a>
                        <?php }?>
                        <a class="man list-group-item">
                                <label class="col-md-4" style="font-size:16px;font-family: Arial,sans-serif;">
                                    <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?>Total Biaya Perkuliahan<?php }else{ ?>Total yang harus dibayar<?php }?>
                                </label>
                                <label style="font-size:16px;font-family: Arial,sans-serif;">: Rp <font class="biaya"><?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['totalAll']->value-$_smarty_tpl->tpl_vars['angsuran']->value['angsuran1'];?>
<?php }?></font></label>
                        </a>

                        <input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" hidden>
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?>            
            <div class="form-group">    
                <label class="control-label col-md-2">Pilihan Biaya Daftar Ulang
                </label>
                <div class="col-md-10">
                    <div class="radio-list">
                        <label>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pilihanBiaya']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['val']->key;
?>                                
                            <input type="radio" name="pilihDU" class="pilihDU" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value==$_smarty_tpl->tpl_vars['transPaid']->value->reapplyBankTransferAmount){?>checked<?php }?> disabled> Rp. <?php echo number_format($_smarty_tpl->tpl_vars['val']->value,0,",",".");?>
 
                        <?php } ?>
                        </label>
                    </div>
                </div>
            </div>
            <?php }?>
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Detail Angsuran Uang Masuk</h3>
                    
                    <div class="form-group">
                        <label class="control-label col-md-2">Rincian Angsuran</label>    
                        <div class="col-md-10">
                        <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?>   
                            <a class="man list-group-item">
                                    <label class="col-md-4">Angsuran Ke-1 </label>
                                    <label>: Rp <font class=" biaya"><?php echo $_smarty_tpl->tpl_vars['angsuran']->value['angsuran1'];?>
</font></label>
                                    <label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date1,"%e %b %Y");?>
</label>
                            </a>
                            <a class="man list-group-item">
                                    <label class="col-md-4">Angsuran Ke-2 </label>
                                    <label>: Rp <font class="biaya">
                                            <?php if ($_smarty_tpl->tpl_vars['angsuran']->value['angsuran3']<0){?><?php echo $_smarty_tpl->tpl_vars['angsuran']->value['angsuran2']+$_smarty_tpl->tpl_vars['angsuran']->value['angsuran3'];?>

                                            <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['angsuran']->value['angsuran2'];?>
<?php }?></font>
                                    </label>
                                    <label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date2,"%e %b %Y");?>
</label>
                            </a>
                            <a class="man list-group-item">
                                    <label class="col-md-4">Angsuran Ke-3 </label>
                                    <label>: Rp <font class="biaya">
                                            <?php if ($_smarty_tpl->tpl_vars['angsuran']->value['angsuran3']<0){?><?php echo $_smarty_tpl->tpl_vars['angsuran']->value['angsuran3'];?>
-<?php echo $_smarty_tpl->tpl_vars['angsuran']->value['angsuran3'];?>

                                            <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['angsuran']->value['angsuran3'];?>
<?php }?></font>
                                    </label>
                                    <label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date3,"%e %b %Y");?>
</label>
                            </a>
                        <?php }else{ ?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>                           
                                <table  class='table table-bordered  table-advance '>
                                    <thead>
                                        <tr>
                                            <th><h5>Pilihan Uang Masuk</h5></th>
                                            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['pilihanBiayaUM']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
$_smarty_tpl->tpl_vars['rows']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                            <th class=''><h5><?php if ($_smarty_tpl->tpl_vars['rows']->value==$_smarty_tpl->tpl_vars['choose']->value){?><b><?php echo number_format($_smarty_tpl->tpl_vars['rows']->value,0,",",".");?>
</b><?php }else{ ?><?php echo number_format($_smarty_tpl->tpl_vars['rows']->value,0,",",".");?>
<?php }?></h5></th>
                                            <?php } ?>
                                            <th><h5>Bulan Ke - </h5></th>
                                            <th><h5>Tanggal Jatuh Tempo</h5></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><h5>Angsuran Bulanan (<?php echo $_smarty_tpl->tpl_vars['row']->value['tempoAngsuran']-1;?>
 X)</h5></td>    
                                            <?php  $_smarty_tpl->tpl_vars['rowd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowd']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pilih']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowd']->key => $_smarty_tpl->tpl_vars['rowd']->value){
$_smarty_tpl->tpl_vars['rowd']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['rowd']->key;
?>   
                                            <td class='<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['keypilih']->value){?>active<?php }?>'>
                                                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rowd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                                                <?php echo number_format($_smarty_tpl->tpl_vars['val']->value,0,",",".");?>
<br>
                                                <?php } ?>
                                            </td>
                                            <?php } ?>
                                            <td  rowspan='2'>
                                                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resTglTempo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['val']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['val']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['y']->value = $_smarty_tpl->tpl_vars['val']->key;
 $_smarty_tpl->tpl_vars['val']->iteration++;
 $_smarty_tpl->tpl_vars['val']->last = $_smarty_tpl->tpl_vars['val']->iteration === $_smarty_tpl->tpl_vars['val']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ke']['last'] = $_smarty_tpl->tpl_vars['val']->last;
?>
                                                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['ke']['last']){?>
                                                   <br><br> Ke - <?php echo $_smarty_tpl->tpl_vars['y']->value+1;?>

                                                <?php }else{ ?>
                                                    Ke - <?php echo $_smarty_tpl->tpl_vars['y']->value+1;?>
<br>
                                                <?php }?>
                                                <?php } ?>
                                            </td>
                                            <td  rowspan='2'>
                                                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resTglTempo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['val']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['val']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['val']->iteration++;
 $_smarty_tpl->tpl_vars['val']->last = $_smarty_tpl->tpl_vars['val']->iteration === $_smarty_tpl->tpl_vars['val']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tgl']['last'] = $_smarty_tpl->tpl_vars['val']->last;
?>
                                                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tgl']['last']){?>
                                                    <br><br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value,'%d-%m-%Y');?>

                                                <?php }else{ ?>
                                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value,'%d-%m-%Y');?>
<br>
                                                <?php }?>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>Angsuran Terakhir (1 X)</td>
                                            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['biayaPembeda']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
$_smarty_tpl->tpl_vars['rows']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                            <td class='<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['keypilih']->value){?>active<?php }?>'><?php echo number_format($_smarty_tpl->tpl_vars['rows']->value,0,",",".");?>
</td>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php } ?>
                        <?php }?>
                            <br>
                    <?php }?>
                        <br> 
                        <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?>                      
                            <a class="man list-group-item">
                                <label>Total Uang Masuk</label>
                                <label style="float:right">Rp <font class="biaya">
                                    <?php echo $_smarty_tpl->tpl_vars['totalUangMasuk']->value;?>
</font></label>
                            </a>
                        <?php }?>
                    </div>
                    </div>
            </div>
            
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Detail Transaksi</h3>
				<div class="form-group">
                    <label class="control-label col-md-2">Jumlah Pembayaran
                    </label>
                    <div class="col-md-10">
                        <h5>Rp
                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['transPaid']->value->reapplyBankTransferAmount;?>
</font>
                        </h5>
                    </div>
                </div>
				<?php if ($_smarty_tpl->tpl_vars['jalur']->value=='01'||$_smarty_tpl->tpl_vars['jalur']->value=='02'||$_smarty_tpl->tpl_vars['jalur']->value=='KP'||$_smarty_tpl->tpl_vars['jalur']->value=='JP'){?>
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
				<?php }?>
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