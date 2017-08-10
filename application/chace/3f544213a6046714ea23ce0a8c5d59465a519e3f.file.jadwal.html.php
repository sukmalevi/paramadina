<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 16:08:01
         compiled from "application/views/portal/jadwal.html" */ ?>
<?php /*%%SmartyHeaderCode:1170664751535625cdd67848-47099035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f544213a6046714ea23ce0a8c5d59465a519e3f' => 
    array (
      0 => 'application/views/portal/jadwal.html',
      1 => 1479266499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1170664751535625cdd67848-47099035',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535625cde1fbe8_83527745',
  'variables' => 
  array (
    'host' => 0,
    'cmb' => 0,
    'jadwal' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535625cde1fbe8_83527745')) {function content_535625cde1fbe8_83527745($_smarty_tpl) {?><div id="bar" style="border: 1px solid;margin-bottom: 20px;" class="hidden-print"></div>
<div class="row col-md-2"></div>
<div class="row col-md-8">
    <div class="invoice  col-xs-12">
        <div class="row invoice-logo">
            <div class="col-xs-12 invoice-logo-space" style="text-align: center;">
                <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logop.png" alt="" height="50px"/>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12" style="text-align: center;">
                <h3 class="page-title">KARTU TANDA PESERTA UJIAN</h3>
            </div>
        </div>
        <hr>
        <div class="row" style="font-size:12px">
            <div class="col-xs-3">
                <?php if ($_smarty_tpl->tpl_vars['cmb']->value->foto==''){?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/ava.png" class="img-responsive" alt="" width="150px"/><?php }else{ ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['cmb']->value->foto;?>
" style="border:5px solid #E6E2EB" alt="" width="150px"/>
				<?php }?>
            </div>
            <div class="col-xs-8 invoice-payment" style="font-size:14px">
                <ul class="list-unstyled">
                    <li><font class="col-xs-4">Nama </font>
                        <font class="col-xs-8">: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->namaCmb;?>
</font>
                    </li>
                    <li>
                        <font class="col-xs-4">Nomor Formulir</font>
                        <font class="col-xs-8">: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->nomor;?>
</font>
                    </li>
                    <li>
                        <font class="col-xs-4">Periode</font>
                        <font class="col-xs-8">: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->namaEvent;?>
</font>
                    </li>
                    <li>
                        <font class="col-xs-4">Program Studi</font>
                        <font class="col-xs-8">: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->progdi;?>
</font>
                    </li>
                    <li>
                        <font class="col-xs-4">Jalur Seleksi</font>
                        <font class="col-xs-8">: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->jalurCmb;?>
</font>
                    </li>
                </ul>
            </div>
		</div>
        <div class="row" style="font-size:12px">
            <div class="col-xs-5">
                <h4>Tanggal Ujian</h4>
                <ul class="list-unstyled">
                    <li style="border: 1px solid;padding: 10px;"><?php echo $_smarty_tpl->tpl_vars['jadwal']->value->hari;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->days;?>
 <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->bulan;?>
 <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->tahun;?>
</li>
                </ul>
                <ul class="list-unstyled">
                    <li style="border: 1px solid;padding: 10px;"><?php echo $_smarty_tpl->tpl_vars['jadwal']->value->jamMasuk;?>
 - <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->jamKeluar;?>
</li>
                </ul>
            </div>
            <div class="col-xs-7">
                <h4>Lokasi Ujian</h4>
				<ul class="list-unstyled">
                    <li style="border: 1px solid;padding: 10px;">
						<?php echo $_smarty_tpl->tpl_vars['jadwal']->value->namaGedung;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->namaRuang;?>
<br>
						Universitas Paramadina <br>
						<?php echo $_smarty_tpl->tpl_vars['jadwal']->value->prop;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->kabKota;?>
 <br>
						<?php echo $_smarty_tpl->tpl_vars['jadwal']->value->alamat;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->kodePos;?>

					</li>
                </ul>
                <!-- <ul class="list-unstyled"> -->
                    <!-- <li><?php echo $_smarty_tpl->tpl_vars['jadwal']->value->prop;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->kabKota;?>
</li> -->
                    <!-- <li><?php echo $_smarty_tpl->tpl_vars['jadwal']->value->alamat;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->kodePos;?>
</li> -->
                    <!-- <li>Tlp. <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->tel;?>
</li> -->
                    <!-- <li>Fax. <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->fax;?>
</li> -->
                    <!-- <li>admission@paramadina.ac.id</li> -->
                <!-- </ul> -->
            </div>
        </div>
        <div class="well col-xs-12">
            <h4>Berkas yang harus dibawa :</h4>
			<?php if ($_smarty_tpl->tpl_vars['jadwal']->value->jalur=='JP'){?>
            <ul class="list-unstyled">
                <li>1. Fotocopy KTP Ibu</li>
                <li>2. Fotocopy rapor dari kelas 1-3 yang terakhir</li>
                <li>3. Fotocopy Kartu Keluarga</li>
                <li>4. Fotocopy Akte Kelahiran</li>
                <li>5. Fotocopy Ijazah SMA Legalisir</li><br>
                <li><strong>Copy seluruh data kelengkapan untuk dibawa pada saat ujian masuk.</strong>
                </li>
                <li><strong>Perlengkapan persyaratan ujian diserahkan ke kampus saat ujian, 
					atau bisa di scan dan dikirim via email ke admission@paramadina.ac.id.
					</strong>
                </li>
            </ul>
			<?php }else{ ?>
            <ul class="list-unstyled">       
                <li>1. Fotocopy KTP Ibu</li>
                <li>2. Fotocopy rapor dari kelas 1-3 yang terakhir</li>
                <li>3. Fotocopy Kartu Keluarga</li>
                <li>4. Fotocopy Akte Kelahiran</li>
                <li>5. Fotocopy Ijazah SMA Legalisir</li><br>
                <li><strong>Copy seluruh data kelengkapan untuk dibawa pada saat ujian masuk.</strong>
                </li>
                <li><strong>Perlengkapan persyaratan ujian diserahkan ke kampus saat ujian, 
					atau bisa di scan dan dikirim via email ke admission@paramadina.ac.id.
					</strong>
                </li>
            </ul>
			<?php }?>
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
	</div>
    <div class="col-xs-12">
	<br>
	<br>
        <div class="row hidden-print">
            <div class=" col-xs-12 invoice-block">
                <ul class="list-unstyled amounts">
                    <br>
                    <a class="btn btn-sm blue hidden-print" onclick="javascript:window.print();">Print <i class="icon-print"></i></a>
                  
                    <span>Note : Gunakan browser Chrome untuk lebih mudah memodifikasi halaman print</span>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row col-md-2"></div>
<?php }} ?>