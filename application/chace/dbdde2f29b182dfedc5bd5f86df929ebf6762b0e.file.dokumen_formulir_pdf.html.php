<?php /* Smarty version Smarty-3.1.14, created on 2016-10-10 09:19:30
         compiled from "application/views/smb/formulir/dokumen_formulir_pdf.html" */ ?>
<?php /*%%SmartyHeaderCode:147283794557fb3869a3d176-09618628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbdde2f29b182dfedc5bd5f86df929ebf6762b0e' => 
    array (
      0 => 'application/views/smb/formulir/dokumen_formulir_pdf.html',
      1 => 1476087540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147283794557fb3869a3d176-09618628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57fb3869bdb1d9_51326771',
  'variables' => 
  array (
    'prof' => 0,
    'prodi' => 0,
    'row' => 0,
    'eduList' => 0,
    'organisasi' => 0,
    'prestasi' => 0,
    'ortu' => 0,
    'saudara' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fb3869bdb1d9_51326771')) {function content_57fb3869bdb1d9_51326771($_smarty_tpl) {?><div id='content'>
	<table width="100%"  style="margin-top:-100px; font-family:arial; font-size:12px;" cellpadding="5">	
		  <tr>
			<td align='left' style='border: 0px solid #DDDDDD; background-color:#F9F9F9;font-size:13px;' width="80%">
				Nama Lengkap : <?php echo $_smarty_tpl->tpl_vars['prof']->value->nama_cm;?>

			</td>
			<td align='center' width="20%" style='border: 0px solid #DDDDDD; background-color:#F9F9F9;' rowspan="4">
				<img src='assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['prof']->value->foto;?>
' style='margin-top:0px;margin-right:0px;height:100px'><br/>
			</td>
		  </tr>
		  <tr>
			<td align='left' style='border: 0px solid #DDDDDD; background-color:#F9F9F9;font-size:13px;' colspan='2'>
				Program Studi : 
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['prof']->value->proKode==$_smarty_tpl->tpl_vars['row']->value['kode']){?><?php echo $_smarty_tpl->tpl_vars['row']->value['nama'];?>
<br><?php }?>
				<?php } ?>
			</td>
		  </tr>
		  <tr>
			<td align='left' style='border: 0px solid #DDDDDD; background-color:#F9F9F9;font-size:13px;' colspan='2'>
				NIM : <?php echo $_smarty_tpl->tpl_vars['prof']->value->nim;?>

			</td>
		  </tr>
		  <tr>
			<td align='left' style='border: 0px solid #DDDDDD; background-color:#F9F9F9;font-size:13px;' colspan='2'>
				No. Registrasi  : <?php echo $_smarty_tpl->tpl_vars['prof']->value->no_smb;?>

			</td>
		  </tr>
	</table>
	<h4 style="font-size:13px;">Data Pribadi :</h4>
	<table width="100%"  style="margin-top:-100px; font-family:arial; font-size:12px;" cellpadding="5">	
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td width="20%">Jenis Kelamin</td>
			   <td>
				   <?php if ($_smarty_tpl->tpl_vars['prof']->value->kodeGender=='03.W'){?>Perempuang<?php }else{ ?>Perempuan<?php }?>
			   </td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Tempat/Tanggal Lahir</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->tempatLahir;?>
, <?php echo $_smarty_tpl->tpl_vars['prof']->value->tLahir;?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value->bLahir;?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value->yLahir;?>
</td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Agama</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->agamaName;?>
</td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>No KTP/SIM/KTS/Paspor</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->nomorKtp;?>
</td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Asal Sekolah</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->namaEdu;?>
</td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Jurusan</td>
			   <td>
				 <?php echo $_smarty_tpl->tpl_vars['prof']->value->jurusan;?>

			   </td>
			</tr>
			<tr style="border-bottom: 1px solid #DDDDDD;">
				<td></td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Alamat Rumah </td>
			   <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->rumahAlamat;?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value->kabKotaNama;?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value->propNama;?>
, <?php echo $_smarty_tpl->tpl_vars['prof']->value->kodePos;?>
</td>
			</tr>						
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Telpon/Fax</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['prof']->value->rumahTel;?>
 / <?php echo $_smarty_tpl->tpl_vars['prof']->value->rumahFax;?>
</td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Kontak</td>
			   <td><b>Hp</b> : <?php echo $_smarty_tpl->tpl_vars['prof']->value->rumahCell;?>
 <b>e-mail</b> : <?php echo $_smarty_tpl->tpl_vars['prof']->value->kode_smb;?>
</td>
			</tr>
			<tr style="border-bottom: 1px solid #DDDDDD;">
				<td></td>
			</tr>
	</table>
	<font style="font-size:13px;">RIWAYAT PENDIDIKAN FORMAL</font>
	<table width="100%" style="border: 1px solid #DDDDDD;font-size:12px;" cellpadding="3">
		<tr >
		   <td  align='left' ></td>
		   <td align='left' >Nama Sekolah</td>
		   <td align='left' >Kota</td>
		   <td align='left' >Tahun Lulus</td>
		   <td align='left' >Jurusan</td>
		   <td align='left' >NIM/IPK</td>
		</tr>
	  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eduList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr >
		   <td style="background-color:#F9F9F9;;"><b><?php echo $_smarty_tpl->tpl_vars['row']->value->sekolahNama;?>
</b></td>
		   <td style="background-color:#F9F9F9;;"><?php echo $_smarty_tpl->tpl_vars['row']->value->sekolah;?>
</td>
		   <td style="background-color:#F9F9F9;;"><?php echo $_smarty_tpl->tpl_vars['row']->value->kabNama;?>
</td>
		   <td style="background-color:#F9F9F9;;"><?php echo $_smarty_tpl->tpl_vars['row']->value->tahunLulus;?>
</td>
		   <td style="background-color:#F9F9F9;;"><?php echo $_smarty_tpl->tpl_vars['row']->value->jurusan;?>
</td>
		   <td style="background-color:#F9F9F9;;"><?php echo $_smarty_tpl->tpl_vars['row']->value->nilai;?>
</td>
		</tr>
	  <?php } ?>
  </table>
	<br>
	<font style="font-size:13px;">KEGIATAN ORGANISASI & EKSTRAKURIKULER</font>
	<table width="100%" style="border: 1px solid #DDDDDD;font-size:12px;" cellpadding="3">
		<tr>
		   <td align='left' >Nama Kegiatan</td>
		   <td align='left' >Jabatan</td>
		   <td align='left' >Tempat</td>
		   <td align='left' >Tahun Mulai</td>
		   <td align='left' >Tahun Selesai</td>
		</tr>
	 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['organisasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr>
		   <td style="background-color:#F9F9F9;"><?php echo $_smarty_tpl->tpl_vars['row']->value->namaKegiatan;?>
</td>
		   <td style="background-color:#F9F9F9;"><?php echo $_smarty_tpl->tpl_vars['row']->value->jabatan;?>
</td>
		   <td style="background-color:#F9F9F9;"><?php echo $_smarty_tpl->tpl_vars['row']->value->tempat;?>
</td>
		   <td style="background-color:#F9F9F9;"><?php echo $_smarty_tpl->tpl_vars['row']->value->dariTahun;?>
</td>
		   <td style="background-color:#F9F9F9;"><?php echo $_smarty_tpl->tpl_vars['row']->value->sampaiTahun;?>
</td>
		</tr>
	 <?php } ?>
	</table>
	<br>
	<font style="font-size:13px;">PRESTASI ATAU PENGHARGAAN YANG PERNAH DIPEROLEH</font>
	<table width="100%" style="border: 1px solid #DDDDDD;font-size:12px;"  cellpadding="3">
	 <thead>
		<tr>
		   <th align='left' >Nama Penghargaan</th>
		   <th align='left' >Intuisi Pemberi & Tempat</th>
		   <th align='left' >Tahun</th>
		</tr>
	 </thead>
	 <tbody>
		<tr style="border: 1px solid #DDDDDD;">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prestasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		   <td style="background-color:#F9F9F9;"><?php echo $_smarty_tpl->tpl_vars['row']->value->namaPrestasi;?>
</td>
		   <td style="background-color:#F9F9F9;"><?php echo $_smarty_tpl->tpl_vars['row']->value->namaInstitusi;?>
</td>
		   <td style="background-color:#F9F9F9;"><?php echo $_smarty_tpl->tpl_vars['row']->value->tahun;?>
</td>
		<?php } ?>
		</tr>
	 </tbody>
	</table>
	<br>
	<font style="font-size:13px;">DATA KELUARGA</font>
	<table width="100%" style="border: 0px solid #DDDDDD;font-size:12px;" align="left" cellpadding="5">
	 <thead>
			<tr >
			   <td colspan="2" align="left"><h5>AYAH/WALI</h5></td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td widtd="20%">Nama Ayah/Wali</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahNama;?>
<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliNama;?>
</td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Email Ayah/Wali</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahEmail;?>
<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliEmail;?>
</td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Alamat Rumah</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahAlamat;?>
, <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahPropNama;?>
, <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahKodePosNama;?>
</td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Kontak</td>
			   <td><b>Telp</b> : <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahTel;?>
 <b>Hp</b> : <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahCell;?>
</td>
			</tr>
			<tr style="border-bottom: 1px solid #DDDDDD;">
				<td></td>
			</tr>	
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Nama Ibu</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuNama;?>
</td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Email Ibu</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuEmail;?>
</td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Alamat Rumah</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuAlamat;?>
, <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuPropNama;?>
, <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuKodePosNama;?>
</td>
			</tr>
			<tr style="border: 1px solid #DDDDDD; background-color:#F9F9F9;">
			   <td>Kontak</td>
			   <td><b>Telp</b> : <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuTel;?>
 <b>Hp</b> : <?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuCell;?>
</td>
			</tr>
		 </thead>
	</table>
	<br>
	<font style="font-size:13px;">SAUDARA YANG PERNAH/SEDANG BERKULIAH DI UNIVERSITAS PARAMADINA</font>
	<table width="100%" style="border: 1px solid #DDDDDD;font-size:12px;" cellpadding="3">
	 <thead>
		<tr style="border: 1px solid #DDDDDD;">
		   <th align='left' >Nama</th>
		   <th align='left' >Program Studi</th>
		   <th align='left' >NIM</th>
		   <th align='left' >Tahun</th>
		</tr>
	 </thead>
	 <tbody>
	  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['saudara']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr style="border: 1px solid #DDDDDD;">
		   <td style="background-color:#F9F9F9;"><?php echo $_smarty_tpl->tpl_vars['row']->value->namaSaudara;?>
</td>
		   <td style="background-color:#F9F9F9;"><?php echo $_smarty_tpl->tpl_vars['row']->value->prodi;?>
</td>
		   <td style="background-color:#F9F9F9;"><?php echo $_smarty_tpl->tpl_vars['row']->value->nim;?>
</td>
		   <td style="background-color:#F9F9F9;"><?php echo $_smarty_tpl->tpl_vars['row']->value->angkatan;?>
</td>
		</tr>
	   <?php } ?>
	 </tbody>
	</table>
	
</div><?php }} ?>