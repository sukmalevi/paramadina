<?php /* Smarty version Smarty-3.1.14, created on 2017-06-09 11:16:55
         compiled from "application/views/smb/kontenFormulir.html" */ ?>
<?php /*%%SmartyHeaderCode:469209254535a07af5edf99-01059631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80f1b13e63defb07f4e253c8862591aefba5d716' => 
    array (
      0 => 'application/views/smb/kontenFormulir.html',
      1 => 1496981809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469209254535a07af5edf99-01059631',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535a07af84e7c5_27809964',
  'variables' => 
  array (
    'host' => 0,
    'prof' => 0,
    'prodi' => 0,
    'row' => 0,
    'eduList' => 0,
    'organisasi' => 0,
    'prestasi' => 0,
    'ortu' => 0,
    'saudara' => 0,
    'rapor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535a07af84e7c5_27809964')) {function content_535a07af84e7c5_27809964($_smarty_tpl) {?>
		<div class="invoice">
            <div class="row invoice-logo" style="border-bottom: 2px solid rgb(0, 0, 0);">
               <div class="col-xs-8 invoice-logo-space">
				<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logoupm.png" alt="" style="margin-top: -17px;"/> 
				<h2 style="margin-top: 10px; margin-left: 12px;">REGISTRATION FORM (S<?php echo $_smarty_tpl->tpl_vars['prof']->value->jenjang;?>
)</h2>
			   </div>
               <div class="col-xs-4">
			   <?php if ($_smarty_tpl->tpl_vars['prof']->value->jenjang==1){?>
			   <ul class="list-unstyled">
					<li>Jl. Gatot Subroto Kav. 97 Mampang, 12790</li>
					<li>T. +62 21 7918 1188 ext. 200 , 888</li>
					<li>F. +62 21 799 3375</li>
					<li>SMS 0815 9181 188</li>
					<p></p>
					<li>info@paramadina.ac.id</li>
					<li>www.paramadina.ac.id</li>				
			   </ul>
			   <?php }else{ ?>
			   <ul class="list-unstyled">
					<li>Gedung Tempo, Lt. 7</li>
					<li>Jl. Palmerah Barat No.8, Kebayoran Baru</li><br>
					<li>Phone. : +62 21 7918 1188 ext. 242</li>
					<li>HP. : 0815-918-1187</li>	
					<li>F. +62 21 799 3375</li>		
			   </ul>
			   <?php }?>
               </div>
            </div>
            <div class="row">
               <div class="col-xs-4">
			    <ul class="list-unstyled">
					<?php if ($_smarty_tpl->tpl_vars['prof']->value->jenjang=='1'){?><h4>PROGRAM STUDI PILIHAN</h4><?php }else{ ?><h4>MAJOR </h4><?php }?>
					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['row']->value->jenjang==$_smarty_tpl->tpl_vars['prof']->value->jenjang){?>
							<li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode==$_smarty_tpl->tpl_vars['row']->value->kode){?><?php }else{ ?>-empty<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
 </li>
						<?php }?>
					<?php } ?>
						<!-- <li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1202'){?><?php }else{ ?>-empty<?php }?>"></i> Desain Produk Industri </li> -->
						<!-- <li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1204'){?><?php }else{ ?>-empty<?php }?>"></i> Falsafah dan Agama </li> -->
						<!-- <li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1205'){?><?php }else{ ?>-empty<?php }?>"></i> Hubungan Internasional </li> -->
						<!-- <li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1206'){?><?php }else{ ?>-empty<?php }?>"></i> Ilmu Komunikasi </li> -->
						<!-- <li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1208'){?><?php }else{ ?>-empty<?php }?>"></i> Manajemen </li> -->
						<!-- <li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1207'){?><?php }else{ ?>-empty<?php }?>"></i> Psikologi </li> -->
						<!-- <li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1203'){?><?php }else{ ?>-empty<?php }?>"></i> Teknik Informatika </li> -->
				
				</ul>
               </div>
               <div class="col-xs-3">
				<?php if ($_smarty_tpl->tpl_vars['prof']->value->foto!=''){?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['prof']->value->foto;?>
" width="120px" style="margin-top:35px"/>
				<?php }else{ ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/ava.png"  width="120px" style="margin-top:35px"/>
				<?php }?>
               </div>
               <div class="col-xs-5">
				  <?php if ($_smarty_tpl->tpl_vars['prof']->value->jenjang==1){?>
                  <h4>LAMPIRAN DOKUMEN</h4>
					<ul class="list-unstyled">
						<li><i class="icon-check-empty"></i> Fotokopi Ijazah SMA yang sudah dilegalisir </li>
						<li><i class="icon-check-empty"></i> Fotokopi rapor SMA dari kelas 1 s.d kelas 3 SMA </li>
						<li><i class="icon-check-empty"></i> Fotokopi KTP Orangtua/Wali </li>
						<li><i class="icon-check-empty"></i> Foto 3x4 berwarna 2 lembar </li>
						<li><i class="icon-check-empty"></i> ..................................... </li>
					</ul>
					<?php }else{ ?>
                  <h4>REQUIRED DOCUMENTS</h4>
					<ul class="list-unstyled">
						<li><i class="icon-check-empty"></i> Copy of bachelor degree Diploma (Certified by University)* </li>
						<li><i class="icon-check-empty"></i> Photo 3x4 (Color, 2 pcs) </li>
						<li><i class="icon-check-empty"></i> Family register (KK) or birth certicate</li>
						<li><i class="icon-check-empty"></i> Copy of valid ID (KTP) or Passport</li>
						<li><i class="icon-check-empty"></i> Curriculum vitae</li>
						<li><i class="icon-check-empty"></i> Transcript*</li>
						<li><i class="icon-check-empty"></i> Letter of recomendation (from 2 source : academic & profesional)</li>
						<li><i class="icon-check-empty"></i> Statement of purpose</li>
						<li><i class="icon-check-empty"></i> Copy of TOEFL result (taken in the last 2 years)</li>
						<li> <i>* Or submit a copy of document and show the original on admission day</i> </li>
						<li> <i>Foreign graduates must get certification of degree from Dikti</i> </li>
					</ul>					
					<?php }?>
               </div>
            </div>
			<br>
			<div class="row">
				<div class="col-xs-12">
					<h4>NO. REGISTRASI : <?php echo $_smarty_tpl->tpl_vars['prof']->value->no_smb;?>
</h4>
				</div>
			</div>
            <div class="row">
				<div class="col-xs-12">
					<h4>DATA PRIBADI</h4>
				</div>
               <div class="col-xs-12">
                  <table class="table table-striped table-hover">
                     <thead>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>Nama Lengkap </th>
                           <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->nama_cm;?>
</td>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>Jenis Kelamin</th>
                           <td>
							   <i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->kodeGender=='03.W'){?>-empty<?php }?>"></i> Laki-laki 
							   <i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->kodeGender=='03.P'){?>-empty<?php }?>"></i> Perempuan
						   </td>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>Tempat/Tanggal Lahir</th>
                           <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->tempatLahir;?>
, <?php echo $_smarty_tpl->tpl_vars['prof']->value->tLahir;?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value->bLahir;?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value->yLahir;?>
</td>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>Agama</th>
                           <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->agamaName;?>
</td>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>No KTP/SIM/KTS/Paspor</th>
                           <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->nomorKtp;?>
</td>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>Asal Sekolah</th>
                           <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->namaEdu;?>
</td>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
						   <th>Jurusan</th>
                           <td>
							 <i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->jurusan=='IPA'){?><?php }else{ ?>-empty<?php }?>"></i> IPA 
							 <i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->jurusan=='IPS'){?><?php }else{ ?>-empty<?php }?>"></i> IPS
							 <i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->jurusan=='Bahasa'){?><?php }else{ ?>-empty<?php }?>"></i> Bahasa
							 <i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->jurusan!='IPA'||$_smarty_tpl->tpl_vars['prof']->value->jurusan!='IPS'||$_smarty_tpl->tpl_vars['prof']->value->jurusan!='Bahasa'){?>-empty<?php }else{ ?><?php }?>"></i> Lainnya
						   </td>
                        </tr>
						<tr style="border-bottom: 1px solid #DDDDDD;">
							<td></td>
						</tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
						   <th>Alamat Rumah </th>
                           <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->rumahAlamat;?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value->kabKotaNama;?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value->propNama;?>
, <?php echo $_smarty_tpl->tpl_vars['prof']->value->kodePos;?>
</td>
                        </tr>						
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
						   <th>Telpon/Fax</th>
                           <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->rumahTel;?>
 / <?php echo $_smarty_tpl->tpl_vars['prof']->value->rumahFax;?>
</td>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
						   <th>Kontak</th>
                           <td><b>Hp</b> : <?php echo $_smarty_tpl->tpl_vars['prof']->value->rumahCell;?>
 <b>e-mail</b> : <?php echo $_smarty_tpl->tpl_vars['prof']->value->kode_smb;?>
</td>
                        </tr>
						<tr style="border-bottom: 1px solid #DDDDDD;">
							<td></td>
						</tr>
						<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
						   <th>Alamat Surat </th>
                           <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->suratAlamat;?>
, <?php echo $_smarty_tpl->tpl_vars['prof']->value->suratProp;?>
, <?php echo $_smarty_tpl->tpl_vars['prof']->value->suratKodPos;?>
</td>
                        </tr>						
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
						   <th>Telpon/Fax</th>
                           <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->suratTel;?>
 / <?php echo $_smarty_tpl->tpl_vars['prof']->value->suratFax;?>
</td>
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
			<br>
			<div class="row">
				<div class="col-xs-12">
					<h4>RIWAYAT PENDIDIKAN FORMAL</h4>
				</div>
               <div class="col-xs-12">
                  <table class="table table-striped table-hover">
                     <thead>
                        <tr style="border: 1px solid #DDDDDD;">
                           <th></th>
                           <th>Nama Sekolah</th>
                           <th>Kota</th>
                           <th>Tahun Lulus</th>
                           <th>Jurusan</th>
                           <th>NIM/IPK</th>
                        </tr>
					 </thead>
					 <tbody>
                      <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eduList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<tr style="border: 1px solid #DDDDDD;">
						   <td><b><?php echo $_smarty_tpl->tpl_vars['row']->value->sekolahNama;?>
</b></td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->sekolah;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->kabNama;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tahunLulus;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->jurusan;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nilai;?>
</td>
                        </tr>
					  <?php } ?>
					 </tbody>
				  </table>
			   </div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12">
					<h4>KEGIATAN ORGANISASI & EKSTRAKURIKULER</h4>
				</div>
               <div class="col-xs-12">
                  <table class="table table-striped table-hover">
                     <thead>
                        <tr style="border: 1px solid #DDDDDD;">
                           <th>Nama Kegiatan</th>
                           <th>Jabatan</th>
                           <th>Tempat</th>
                           <th>Tahun Mulai</th>
                           <th>Tahun Selesai</th>
                        </tr>
					 </thead>
					 <tbody>
					 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['organisasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<tr style="border: 1px solid #DDDDDD;">
                           <td><?php echo $_smarty_tpl->tpl_vars['row']->value->namaKegiatan;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->jabatan;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tempat;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->dariTahun;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->sampaiTahun;?>
</td>
                        </tr>
					 <?php } ?>
					 </tbody>
				  </table>
			   </div>
			</div>			
			<br>
			<div class="row">
				<div class="col-xs-12">
					<h4>PRESTASI ATAU PENGHARGAAN YANG PERNAH DIPEROLEH</h4>
				</div>
               <div class="col-xs-12">
                  <table class="table table-striped table-hover">
                     <thead>
                        <tr style="border: 1px solid #DDDDDD;">
                           <th>Nama Penghargaan</th>
                           <th>Intuisi Pemberi & Tempat</th>
                           <th>Tahun</th>
                        </tr>
					 </thead>
					 <tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prestasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<tr style="border: 1px solid #DDDDDD;">
                           <td><?php echo $_smarty_tpl->tpl_vars['row']->value->namaPrestasi;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->namaInstitusi;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tahun;?>
</td>
                        </tr>
						<?php } ?>
					 </tbody>
				  </table>
			   </div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12">
					<h4>DATA KELUARGA</h4>
				</div>
               <div class="col-xs-12">
                  <table class="table table-striped table-hover">
                     <thead>
						<tr >
                           <th><h5>AYAH/WALI</h5></th>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>Nama Ayah/Wali</th>
                           <td><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahNama;?>
<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliNama;?>
</td>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>Email Ayah/Wali</th>
                           <td><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahEmail;?>
<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliEmail;?>
</td>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>Alamat Rumah</th>
                           <td><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahAlamat;?>
, <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahPropNama;?>
, <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahKodePosNama;?>
</td>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>Kontak</th>
                           <td><b>Telp</b> : <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahTel;?>
 <b>Hp</b> : <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahCell;?>
</td>
                        </tr>
						<tr style="border-bottom: 1px solid #DDDDDD;">
							<td></td>
						</tr>	
						<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>Nama Ibu</th>
                           <td><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuNama;?>
</td>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>Email Ibu</th>
                           <td><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuEmail;?>
</td>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>Alamat Rumah</th>
                           <td><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuAlamat;?>
, <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuPropNama;?>
, <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuKodePosNama;?>
</td>
                        </tr>
                        <tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
                           <th>Kontak</th>
                           <td><b>Telp</b> : <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuTel;?>
 <b>Hp</b> : <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuCell;?>
</td>
                        </tr>
					 </thead>
				  </table>
			   </div>
			   <br>
			   <div class="col-xs-12">
					<h4>Saudara yang pernah/sedang berkuliah di Universitas Paramadina</h4>
			   </div>
			   <div class="col-xs-12">
                  <table class="table table-striped table-hover">
                     <thead>
                        <tr style="border: 1px solid #DDDDDD;">
                           <th>Nama</th>
                           <th>Program Studi</th>
                           <th>NIM</th>
                           <th>Tahun</th>
                        </tr>
					 </thead>
					 <tbody>
					  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['saudara']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<tr style="border: 1px solid #DDDDDD;">
                           <td><?php echo $_smarty_tpl->tpl_vars['row']->value->namaSaudara;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->prodi;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nim;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->angkatan;?>
</td>
                        </tr>
					   <?php } ?>
					 </tbody>
				  </table>
			   </div>
			</div>
			<br>
			<div class="row">	   
				<div class="col-xs-12">
					<h4><b>LAMPIRAN</b></h4>
				</div>
				<div class="col-xs-12">
                  <div class="well">
						<?php if ($_smarty_tpl->tpl_vars['prof']->value->file_ijazah!=''){?>
							<h4>Ijazah</h4>					
							<object data="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/berkas/<?php echo $_smarty_tpl->tpl_vars['prof']->value->file_ijazah;?>
"  style="width:100%; height:640px;">
							  <p>Alternative text - include a link <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/berkas/<?php echo $_smarty_tpl->tpl_vars['prof']->value->file_ijazah;?>
">to the PDF!</a></p>
							</object>
						<?php }?>
						<?php if (!empty($_smarty_tpl->tpl_vars['rapor']->value)){?>
							<h4>Rapor</h4>
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rapor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>				
								<object data="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/berkas/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
"  style="width:100%; height:640px;">
								  <p>Alternative text - include a link <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/berkas/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
">to the PDF!</a></p>
								</object>
							<?php } ?>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['prestasi']->value)){?>
							<h4>Bukti Penghargaan</h4>	
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prestasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>		
								<h5><?php echo $_smarty_tpl->tpl_vars['row']->value->namaPrestasi;?>
</h5>
								<object data="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/berkas/<?php echo $_smarty_tpl->tpl_vars['row']->value->file_prestasi;?>
"  style="width:100%; height:640px;">
								  <p>Alternative text - include a link <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/berkas/<?php echo $_smarty_tpl->tpl_vars['row']->value->file_prestasi;?>
">to the PDF!</a></p>
								</object>
							<?php } ?>
						<?php }?>
				  </div>
				</div>
			</div>
            <div class="row">			   
			   <div class="col-xs-12">
					<h4><b>PERNYATAAN</b></h4>
			   </div>
               <div class="col-xs-12">
                  <div class="well">
                     <address>
                        Dengan ini Saya menyatakan mendaftarkan diri menjadi calon mahasiswa Universitas Paramadina
						dan bersedia mengikuti seleksi masuk. Saya menjamin keterangan yang saya cantumkan dalam formulir pendaftaran
						serta berkas pendukung yang Saya lampirkan adalah benar.
                     </address>
                     <address style="text-align:right;width: 970px;">
                        <strong>Jakarta,.................. </strong><br />
						<br />
						<br />
						<br />
						<br />
                        <strong><?php echo $_smarty_tpl->tpl_vars['prof']->value->nama_cm;?>
</strong><br />
                     </address>
                  </div>
               </div>
               <div class="col-xs-8 invoice-block">
                  <br />
                  <a class="btn btn-lg blue hidden-print" onclick="javascript:window.print();">Print <i class="icon-print"></i></a>
				  <p> * Gunakan Chrome untuk konfigurasi halaman print yang lebih mudah</p>
               </div>
            </div>
         </div><?php }} ?>