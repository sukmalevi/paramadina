<?php /* Smarty version Smarty-3.1.14, created on 2014-03-04 10:42:13
         compiled from "application\views\smb\kontenFormulir.html" */ ?>
<?php /*%%SmartyHeaderCode:2438553142235b71810-58915304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96e88b01a58a13b036a0fe838170815ac36346f7' => 
    array (
      0 => 'application\\views\\smb\\kontenFormulir.html',
      1 => 1393904524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2438553142235b71810-58915304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53142235bc4664_29531063',
  'variables' => 
  array (
    'host' => 0,
    'prof' => 0,
    'eduList' => 0,
    'row' => 0,
    'organisasi' => 0,
    'prestasi' => 0,
    'ortu' => 0,
    'saudara' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53142235bc4664_29531063')) {function content_53142235bc4664_29531063($_smarty_tpl) {?>		<div class="invoice">
            <div class="row invoice-logo" style="border-bottom: 2px solid rgb(0, 0, 0);">
               <div class="col-xs-8 invoice-logo-space">
				<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logoupm.png" alt="" style="margin-top: -17px;"/> 
				<h2 style="margin-top: 10px; margin-left: 12px;">Form Pendaftaran Mahasiswa Baru (S1)</h2>
			   </div>
               <div class="col-xs-4">
			   <ul class="list-unstyled">
				<li>Jl. Gatot Subroto Kav. 97 Mampang, 12790</li>
				<li>T. +62 21 7918 1188 ext. 200 , 888</li>
				<li>F. +62 21 799 3375</li>
				<li>SMS 0815 9181 188</li>
				<p></p>
				<li>info@paramadina.ac.id</li>
				<li>www.paramadina.ac.id</li>				
			   </ul>
               </div>
            </div>
            <div class="row">
               <div class="col-xs-4">
			    <ul class="list-unstyled">
                  <h4>PROGRAM STUDI PILIHAN</h4>
						<li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1201'){?><?php }else{ ?>-empty<?php }?>"></i> Desain Komunikasi Visual </li>
						<li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1202'){?><?php }else{ ?>-empty<?php }?>"></i> Desain Produk Industri </li>
						<li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1204'){?><?php }else{ ?>-empty<?php }?>"></i> Falsafah dan Agama </li>
						<li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1205'){?><?php }else{ ?>-empty<?php }?>"></i> Hubungan Internasional </li>
						<li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1206'){?><?php }else{ ?>-empty<?php }?>"></i> Ilmu Komunikasi </li>
						<li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1208'){?><?php }else{ ?>-empty<?php }?>"></i> Manajemen </li>
						<li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1207'){?><?php }else{ ?>-empty<?php }?>"></i> Psikologi </li>
						<li><i class="icon-check<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode=='1203'){?><?php }else{ ?>-empty<?php }?>"></i> Teknik Informatika </li>
				</ul>
               </div>
               <div class="col-xs-3">
				<?php if ($_smarty_tpl->tpl_vars['prof']->value->foto!=''){?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['prof']->value->foto;?>
" height="140px" width="120px" style="margin-top:35px"/>
				<?php }else{ ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/ava.png" height="140px" width="120px" style="margin-top:35px"/>
				<?php }?>
               </div>
               <div class="col-xs-5">
                  <h4>LAMPIRAN DOKUMEN</h4>
					<ul class="list-unstyled">
						<li><i class="icon-check-empty"></i> Fotokopi Ijazah SMA yang sudah dilegalisir </li>
						<li><i class="icon-check-empty"></i> Fotokopi rapor SMA dari kelas 1 s.d kelas 3 SMA </li>
						<li><i class="icon-check-empty"></i> Fotokopi KTP Orangtua/Wali </li>
						<li><i class="icon-check-empty"></i> Foto 3x4 berwarna 2 lembar </li>
						<li><i class="icon-check-empty"></i> ..................................... </li>
					</ul>
               </div>
            </div>
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
 <b>e-mail</b> : <?php echo $_smarty_tpl->tpl_vars['prof']->value->rumahEmail;?>
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
						<tr style="border: 1px solid #DDDDDD;">
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prestasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                           <td><?php echo $_smarty_tpl->tpl_vars['row']->value->namaPrestasi;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->namaInstitusi;?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tahun;?>
</td>
						<?php } ?>
                        </tr>
					 </tbody>
				  </table>
			   </div>
			</div>
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