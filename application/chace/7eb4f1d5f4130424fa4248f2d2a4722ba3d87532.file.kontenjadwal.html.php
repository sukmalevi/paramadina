<?php /* Smarty version Smarty-3.1.14, created on 2016-01-09 10:40:23
         compiled from "application/views/smb/kontenjadwal.html" */ ?>
<?php /*%%SmartyHeaderCode:1318060197536352f46583c2-55051163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eb4f1d5f4130424fa4248f2d2a4722ba3d87532' => 
    array (
      0 => 'application/views/smb/kontenjadwal.html',
      1 => 1415872066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1318060197536352f46583c2-55051163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536352f4708ce7_06395069',
  'variables' => 
  array (
    'host' => 0,
    'jadwal' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536352f4708ce7_06395069')) {function content_536352f4708ce7_06395069($_smarty_tpl) {?><div class="row">
    <div id="bar" style="border: 1px solid;margin-bottom: 20px;" class="hidden-print"></div>
    <div class="row col-md-1"></div>
    <div class="row col-md-10">
        <div class="invoice col-xs-12">
            <div class="row invoice-logo">
                <div class="col-xs-12 invoice-logo-space" style="text-align: center;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logop.png" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12" style="text-align: center; font-weight: bold;">
                    <h3><b>KARTU TANDA PESERTA UJIAN</b>
                    </h3>
                </div>
            </div>
            <hr>
            <div class="row" style="font-size:12px">
                <div class="col-xs-3">
                    <?php if ($_smarty_tpl->tpl_vars['jadwal']->value->foto==''){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/ava.png" class="img-responsive" alt="" /><?php }else{ ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['jadwal']->value->foto;?>
" class="img-responsive" alt="" /><?php }?>
                </div>
                <div class="col-xs-8 invoice-payment">
                    <ul class="list-unstyled">
                        <li>
                            <label style="width: 165px;">Nama Lengkap</label>
                            <label>: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->namaCmb;?>
</label>
                        </li>
                        <li>
                            <label style="width: 165px;">Nomor Formulir</label>
                            <label>: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->nomor;?>
</label>
                        </li>
                        <li>
                            <label style="width: 165px;">Periode</label>
                            <label>: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->namaEvent;?>
</label>
                        </li>
                        <li>
                            <label style="width: 165px;">Program Studi</label>
                            <label>: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->progdi;?>
</label>
                        </li>
                        <li>
                            <label style="width: 165px;">Jalur Seleksi</label>
                            <label>: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->jalurCmb;?>
</label>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-4">
                    <h4>Tanggal Ujian</h4>
                    <ul class="list-unstyled">
                        <li style="border: 1px solid;width:170px;padding: 10px;"><?php echo $_smarty_tpl->tpl_vars['jadwal']->value->hari;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->days;?>
 <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->bulan;?>
 <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->tahun;?>
</li>
                    </ul>
                    <ul class="list-unstyled">
                        <li style="border: 1px solid;width:170px;padding: 10px;"><?php echo $_smarty_tpl->tpl_vars['jadwal']->value->jamMasuk;?>
 - <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->jamKeluar;?>
</li>
                    </ul>
                </div>
                <div class="col-xs-4">
                    <h4>Lokasi Ujian</h4>
                    <ul class="list-unstyled">
                        <li><?php echo $_smarty_tpl->tpl_vars['jadwal']->value->prop;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->kabKota;?>
</li>
                        <li><?php echo $_smarty_tpl->tpl_vars['jadwal']->value->alamat;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->kodePos;?>
</li>
                        <li>Tlp. <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->tel;?>
</li>
                        <li>Fax. <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->fax;?>
</li>
                        <li>admission@paramadina.ac.id</li>
                        <li><?php echo $_smarty_tpl->tpl_vars['jadwal']->value->namaGedung;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->namaRuang;?>
</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-9">
                <h4>Perlengkapan Persyaratan</h4>
                <ul class="list-unstyled">
                    <li>1. Foto</li>
                    <li>2. Foto Copy KTP Orang Tua</li>
                    <li>3. Rapor Kelas 1 s/d 3 SMA Sederajat</li>
                    <li><b>Copy Seluruh data Kelengkapan untuk dibawa pada saat ujian seleksi masuk.</b>
                    </li>
                    <li><b>Perlengkapan persyaratan ujian diserahkan ke kampus H-2 ujian atau bisa di 
                scan dan dikirim via email ke admission@paramadina.ac.id</b>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-4">
                <h4>Tanda Tangan,</h4>
                <ul class="list-unstyled">
                    <li>
                        <br>
                    </li>
                    <li>
                        <br>
                    </li>
                    <li>
                        <br>
                    </li>
                    <li>Pengawas</li>
                </ul>
            </div>
            <div class="col-xs-4">

            </div>
            <div class="col-xs-4">
                <h4>Tanda Tangan,</h4>
                <ul class="list-unstyled">
                    <li>
                        <br>
                    </li>
                    <li>
                        <br>
                    </li>
                    <li>
                        <br>
                    </li>
                    <li>Pewawancara</li>
                </ul>
            </div>
            <div class="row hidden-print">
                <div class="col-xs-8 invoice-block">
                    <ul class="list-unstyled amounts">
                        <br />
                        <a class="btn btn-lg blue hidden-print" onclick="javascript:window.print();">Print <i class="icon-print"></i></a>
                        </br>
                        <br>
                        <span>Note : Gunakan browser Chrome untuk lebih mudah memodifikasi halaman print</span>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>