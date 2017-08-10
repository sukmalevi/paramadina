<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 08:19:14
         compiled from "application/views/portal/jadwalPasca.html" */ ?>
<?php /*%%SmartyHeaderCode:208217547558df0012be4750-38085159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe6b417d271a81fd83fbe266ea1a038c0d65cfac' => 
    array (
      0 => 'application/views/portal/jadwalPasca.html',
      1 => 1490243238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208217547558df0012be4750-38085159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'cmb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df0012c814b1_40409425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df0012c814b1_40409425')) {function content_58df0012c814b1_40409425($_smarty_tpl) {?><div id="bar" style="border: 1px solid;margin-bottom: 20px;" class="hidden-print"></div>
<div class="row col-md-2"></div>
<div class="row col-md-8">
    <div class="invoice  col-xs-12">
        <div class="row invoice-logo">
            <div class="col-xs-12 invoice-logo-space" style="text-align: center;">
                <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logop.png" alt="" height="50px"/> -->
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12" style="text-align: center;">
                <h3 class="page-title">Informasi Jadwal Ujian</h3>
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
            <div class="col-xs-8" style="font-size:14px">
				
					<font class="col-xs-4">Nama Lengkap</font>
					<font class="col-xs-8">: <?php echo $_smarty_tpl->tpl_vars['cmb']->value->nama_cm;?>
</font>				
				
					<font class="col-xs-4">Nomor Formulir</font>
					<font class="col-xs-8">: <?php echo $_smarty_tpl->tpl_vars['cmb']->value->no_smb;?>
</font>				
				
					<font class="col-xs-4">Program Studi</font>
					<font class="col-xs-8">: <?php echo $_smarty_tpl->tpl_vars['cmb']->value->progdi;?>
</font>				
				
					<font class="col-xs-4">Jalur Seleksi</font>
					<font class="col-xs-8">: <?php echo $_smarty_tpl->tpl_vars['cmb']->value->n_jalur;?>
</font>
						
				
				
				<div class="col-xs-12"  style="font-size:13px"><br><br><br><br><br>
					Terimakasih telah melengkapi berkas pendaftaran S2 Paramadina Graduate Schools. Humas kami akan menghubungi anda melalui email dan atau via telepon terkait Jadwal Interview dan test PEPT.
				</div>
            </div>
		</div><br>
        <div class="row" style="font-size:13px">
            <div class=" col-xs-12">
				<b>(*) Dokumen yang harus dilengkapi oleh pendaftar Jalur Reguler:</b>
				<ul class="list-unstyled">
					<li>1. Foto Copi Ijasah dan Legalisir yang sudah di legalisir cap basah.</li>
					<li>2. Kartu Keluarga / Akte kelahiran</li>
					<li>3. KTP / Pasport</li>
					<li>4. CV</li>
					<li>5. Surat Rekomendasi dari akademik dan profesional</li>
					<li>6. TOEFL (yang masih berlaku minimal untuk 2 tahun)</li>
				</ul>
				
				<b>(*) Untuk pendaftar program fellowship harus melengkapi formulir khusus Fellowship yang 
				dapat di unduh pada link berikut :</b>
				<br>
				<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/files/pdf/formulir.pdf" target="_blank">Download Formulir Fellowship</a>
				<br><br>
				<b>(*) Tanggal ujian : </b>
				<div class="col-xs-12" style="text-align: center;"> 
					<h4 class="center"><b>Gelombang 1</b></h4>
				</div>
				<table border='1' cellpadding='3' width="100%" >
					<tr><td><h5><b>Agenda</b></h5></td> <td width="25%"><h5><b>Tanggal</b></h5></td></tr>
					<tr><td>Pendaftaran Periode Ujian I</td> <td>3 Januari – 3 Maret 2017</td></tr>
					<tr><td>PEPT Periode Ujian I</td> <td>9 Maret 2017</td></tr>
					<tr><td>Interview Fellowship Tahap I</td> <td>13 – 16 Maret 2017</td></tr>
					<tr><td>Interview Reguler Periode Ujian I</td> <td>13 – 16 Maret 2017</td></tr>
					<tr><td>Pengumuman Penerimaan Mahasiswa Reguler Periode Ujian I</td> <td>22 Maret 2017</td></tr>
					<tr><td>Pengumuman Kelulusan Fellowship ke Tahap Kedua Periode Ujian I</td> <td>22 Maret 2017</td></tr>
					<tr><td>Daftar Ulang Jalur Reguler dan Pelunasan Cicilan Tahap I</td> <td>7 April 2017</td></tr>
				</table><br>
				<div class="col-xs-12" style="text-align: center;"> 
					<h4 class="center"><b>Gelombang 2</b></h4>
				</div>
				<table border='1' cellpadding='3' width="100%" >
					<tr><td><h5><b>Agenda</b></h5></td> <td width="25%"><h5><b>Tanggal</b></h5></td></tr>
					<tr><td>Pendaftaran Periode Ujian II</td> <td>6 Maret – 10 Juli 2017</td></tr>
					<tr><td>PEPT Periode Ujian II</td> <td>13 Juli 2017</td></tr>
					<tr><td>Interview Fellowship Tahap I Periode Ujian II</td> <td>17 – 20 Juli 2017</td></tr>
					<tr><td>Interview Reguler Periode Ujian II</td> <td>17 – 20 Juli 2017</td></tr>
					<tr><td>Pengumuman Penerimaan Mahasiswa Reguler Periode Ujian II</td> <td>26 Agustus 2017</td></tr>
					<tr><td>Pengumuman Kelulusan Fellowship ke Tahap Kedua Periode Ujian II</td> <td>26 Agustus 2017</td></tr>
					<tr><td>Interview Fellowship Tahap Kedua oleh Tim Panel</td> <td>7 – 11 Agustus 2017</td></tr>
					<tr><td>Pengumuman Kelulusan Fellowship Tahap Kedua</td> <td>21 Agustus 2017</td></tr>
					<tr><td>Daftar Ulang Jalur Reguler dan Pelunasan Cicilan Tahap I</td> <td>22 – 4 September 2017</td></tr>
				</table><br>
				<div class="col-xs-12" style="text-align: center;"> 
					<h4 class="center"><b>Gelombang 3</b></h4>
					<b>(Dimungkinkan dibuka apabila kapasitas kelas masih tersedia )</b>
				</div>
				<table border='1' cellpadding='3' width="100%" >
					<tr><td><h5><b>Agenda</b></h5></td> <td width="25%"><h5><b>Tanggal</b></h5></td></tr>
					<tr><td>Pekan Orientasi</td> <td>4 – 7 September 2017</td></tr>
					<tr><td>Kuliah Perdana Bersama Rektor</td> <td>8 September 2017</td></tr>
					<tr><td>Perkuliahan Dimulai</td> <td>11 September 2017</td></tr>
				</table>
				<br>
				<b>(*) Lokasi Ujian :</b><br>
				Paramadina Graduate Schools<br>
				Gedung Tempo Lantai 7<br>
				Jalan Palmerah Barat no 8, Kebayoran Lama.<br>
				Hotline : 0815-9181187
				<br>
			</div>
        </div>
        
    </div><br><br><br>
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
	</div><br><br><br><br><br><br><br><br>
    <div class="col-xs-12">
	<br>
	<br>
        <div class="row hidden-print">
            <div class=" col-xs-12 invoice-block"> 
                <ul class="list-unstyled amounts">
                   
                    <a class="btn btn-sm blue hidden-print" onclick="javascript:window.print();">Print <i class="icon-print"></i> </a>
                  
                    <span> Note : Gunakan browser Chrome untuk lebih mudah memodifikasi halaman print</span>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row col-md-2"></div>
<?php }} ?>