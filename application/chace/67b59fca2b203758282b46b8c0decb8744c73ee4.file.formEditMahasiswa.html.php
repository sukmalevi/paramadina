<?php /* Smarty version Smarty-3.1.14, created on 2014-11-14 09:51:17
         compiled from "application/views/portal/formEditMahasiswa.html" */ ?>
<?php /*%%SmartyHeaderCode:63875208454656e253c3d51-80917577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67b59fca2b203758282b46b8c0decb8744c73ee4' => 
    array (
      0 => 'application/views/portal/formEditMahasiswa.html',
      1 => 1415872651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63875208454656e253c3d51-80917577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'cmb' => 0,
    'religion' => 0,
    'row' => 0,
    'sex' => 0,
    'wil' => 0,
    'kab' => 0,
    'kodepos' => 0,
    'ortu' => 0,
    'saudara_rows' => 0,
    'sau' => 0,
    'prodi' => 0,
    'eduData' => 0,
    'eduSMA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54656e25828f07_87861886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54656e25828f07_87861886')) {function content_54656e25828f07_87861886($_smarty_tpl) {?><!-- BEGIN FORM-->
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/editDataMahasiswa/update" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">
    <div class="portlet box grey">
        <div class="portlet-body form" style="border-top: 1px double #4682B4;">
            <div class="form-body">
                <div class="alert alert-error display-hide">
                    <button class="close" data-dismiss="alert"></button>
                    You have some form errors. Please check below.
                </div>
                <div class="alert alert-success display-hide">
                    <button class="close" data-dismiss="alert"></button>
                    Your form validation is successful!
                </div>
            </div>
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Data Pribadi</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Lengkap
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Nama Lengkap" class="form-control placeholder-no-fix" name="nameFull" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->nama_cm;?>
"/>
                        <span class="help-block">Sesuai dengan ijazah terakhir</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">No KTP / SIM
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="no_id" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->nomorKtp;?>
"required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Agama
                    </label>
                    <div class="col-md-10">
                        <select class="form-control" name="agama" id="agama" required>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['religion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" 
                                <?php if ($_smarty_tpl->tpl_vars['cmb']->value->agamaType==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> > <?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Tempat/Tanggal Lahir</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatLahir" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->tempatLahir;?>
">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-inline input-medium " placeholder="DD-MM-YYYY" name="tanggalLahir" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->dateBirth;?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jenis Kelamin</label>
                    <div class="col-md-10">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="icon-male"></i>
                            </span>
                            <select class="form-control" name="sex">
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" 
                                    <?php if ($_smarty_tpl->tpl_vars['cmb']->value->genderType==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> > <?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Nomor Handphone</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="No. HP" class="form-control" id="no_hp" name="no_hp" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->rumahCell;?>
"/>
                    </div>
                </div>
                <!-- Alamat rumah dan surat -->
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Alamat Rumah dan Surat</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Alamat Rumah</label>
                    <div class="col-md-10">
                        <textarea rows="3" name="occupation" placeholder="Alamat Sekarang" class="form-control placeholder-no-fix"><?php echo $_smarty_tpl->tpl_vars['cmb']->value->rumahAlamat;?>
</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Propinsi
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="propinsi" id="propinsi" required>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['cmb']->value->suratProp==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kabkota" id="kabkota" required>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['cmb']->value->suratKabKota==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kodepos" id="kodepos" required>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kodepos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['cmb']->value->suratKodePos==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->kodepos;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Telepon Rumah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="telRumah" name="telRumah" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->suratTel;?>
" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Fax Rumah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="fax" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->rumahFax;?>
" id="fax">
                    </div>
                </div>
                <!-- Data Orang tua/Wali -->
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Data Orang Tua Wali</h3>
                <!-- Detail data Ayah -->
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Ayah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="namaAyah" id="namaAyah" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahNama;?>
" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">E-mail Ayah
                    </label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="emailAyah" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahEmail;?>
"  id="emailAyah">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Telepon Rumah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="telAyah" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahTel;?>
"  id="ayahTel">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">No HP Ayah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="hpAyah" id="hpAyah" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahCell;?>
" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Alamat Ayah
                    </label>
                    <div class="col-md-10">
                        <textarea class="form-control placeholder-no-fix" name="alamatAyah" rows="2" id="alamatAyah" required><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahAlamat;?>
</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Propinsi Ayah
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="propAyah" id="propAyah">
                            <?php if ($_smarty_tpl->tpl_vars['ortu']->value->ayahProp==''){?>
                            <option value="0">--Pilih Propinsi--</option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['ortu']->value->ayahProp==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kabAyah" id="kabAyah">
                            <?php if ($_smarty_tpl->tpl_vars['ortu']->value->ayahKabKota==''){?>
                            <option value="0">--Pilih Kabupaten/Kota--</option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['ortu']->value->ayahKabKota==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kposAyah" id="kposAyah">
                            <?php if ($_smarty_tpl->tpl_vars['ortu']->value->ayahKodePos==''){?>
                            <option value="0">--Pilih Kode Pos--</option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kodepos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['ortu']->value->ayahKodePos==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->kodepos;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <!-- Detail IBU -->
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Ibu
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="namaIbu" id="namaIbu" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuNama;?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">E-mail Ibu
                    </label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="emailIbu" id="emailIbu" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuEmail;?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Telepon Rumah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="telIbu" id="telIbu" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuTel;?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">No HP Ibu
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="hpIbu" id="hpIbu" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuCell;?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Alamat Ibu
                    </label>
                    <div class="col-md-10">
                        <textarea class="form-control placeholder-no-fix" name="alamatIbu" rows="2" id="alamatIbu"><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuAlamat;?>
</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Propinsi Ibu
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="propIbu" id="propIbu">                            
                            <?php if ($_smarty_tpl->tpl_vars['ortu']->value->ibuProp==''||$_smarty_tpl->tpl_vars['ortu']->value->ibuProp=='0'){?>
                            <option value="0">--Pilih Propinsi--</option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['ortu']->value->ibuProp==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kabIbu" id="kabIbu">
                            <?php if ($_smarty_tpl->tpl_vars['ortu']->value->ibuKabKota==''||$_smarty_tpl->tpl_vars['ortu']->value->ibuKabKota=='0'){?>
                            <option value="0">--Pilih Kabupaten/Kota--</option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['ortu']->value->ibuKabKota==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kposIbu" id="kposIbu">
                            <?php if ($_smarty_tpl->tpl_vars['ortu']->value->ibuKodePos==''||$_smarty_tpl->tpl_vars['ortu']->value->ibuKodePos=='0'){?>
                            <option value="0">--Pilih Kode Pos--</option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kodepos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['ortu']->value->ibuKodePos==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->kodepos;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <!-- Detail Wali -->
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Wali
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="namaWali" id="namaWali" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliNama;?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">E-mail Wali
                    </label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="emailWali" id="emailWali" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliEmail;?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Telepon Rumah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="telWali" id="telWali" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliTel;?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">No HP Wali
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="hpWali" id="hpWali" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliCell;?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Alamat Wali
                    </label>
                    <div class="col-md-10">
                        <textarea class="form-control placeholder-no-fix" name="alamatWali" rows="2" id="alamatWali"><?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliAlamat;?>
</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Propinsi Wali
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="propWali" id="propWali">
                            <?php if ($_smarty_tpl->tpl_vars['ortu']->value->waliProp==''||$_smarty_tpl->tpl_vars['ortu']->value->waliProp=='0'){?>
                            <option value="0">--Pilih Propinsi--</option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['ortu']->value->waliProp==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kabWali" id="kabWali">
                            <?php if ($_smarty_tpl->tpl_vars['ortu']->value->waliKabKota==''||$_smarty_tpl->tpl_vars['ortu']->value->waliKabKota=='0'){?>
                            <option value="0">--Pilih Kabupaten/Kota--</option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['ortu']->value->waliKabKota==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kposWali" id="kposWali">
                            <?php if ($_smarty_tpl->tpl_vars['ortu']->value->waliKodePos==''||$_smarty_tpl->tpl_vars['ortu']->value->waliKodePos=='0'){?>
                            <option value="0">--Pilih Kode Pos--</option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kodepos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['ortu']->value->waliKodePos==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->kodepos;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <!-- Saudara Kandung -->
        <?php if ($_smarty_tpl->tpl_vars['saudara_rows']->value!='0'){?>
               <!--  <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Data Saudara Kandung Mahasiswa/Alumni Paramadina</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Saudara
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="namaSaudara" id="nama" value="<?php echo $_smarty_tpl->tpl_vars['sau']->value->namaSaudara;?>
" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Anak Ke-
                    </label>
                    <div class="col-md-10">
                        <input type="number" class="form-control" name="nomorKe" value="<?php echo $_smarty_tpl->tpl_vars['sau']->value->nomor;?>
"required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jenis Kelamin
                    </label>
                    <div class="col-md-10">
                        <select class="form-control" name="sexSaudara" required>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['sau']->value->genderType==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Tanggal Lahir
                    </label>
                    <div class="col-md-10">
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
                            <input type="text" class="form-control" name="tglLahirSau" style="text-align:left">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Perusahaan Bekerja
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="perSau">
                        <input type="text" value="tambah" name="id" hidden>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Program Studi
                    </label>
                    <div class="col-md-6">
                        <select class="form-control" name="pendSaudara" id="pendSaudara" required>
                            <option value="">--Pilih Program Studi--</option>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control" name="pendSaudara" id="pendSaudara" required>
                            <option value="">--Pilih Status Kuliah--</option>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                    <label class="control-label col-md-2">NIM
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="nim" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Tahun Angkatan
                    </label>
                    <div class="col-md-10">
                        <input type="number" class="form-control" name="angkatan" required>
                    </div>
                </div> -->
        <?php }?>
<!-- Riwayat Pendidikan -->
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Riwayat Pendidikan</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Asal Sekolah</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Nama Sekolah Asal" class="form-control" name="namaSekolah" value="<?php echo $_smarty_tpl->tpl_vars['eduData']->value->sekolah;?>
"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Tahun Lulus</label>
                    <div class="col-md-10">
                        <input type="number" placeholder="Tahun Kelulusan" class="form-control" name="tahunLulus" value="<?php echo $_smarty_tpl->tpl_vars['eduData']->value->tahunLulus;?>
"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jurusan</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Jurusan SMA" class="form-control" name="jurusan" value="<?php echo $_smarty_tpl->tpl_vars['eduData']->value->jurusan;?>
"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Nilai UN
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="nilai" value="<?php echo $_smarty_tpl->tpl_vars['eduData']->value->nilai;?>
" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jenis Pendidikan
                    </label>
                    <div class="col-md-5">
                        <select class="form-control" name="pendType" id="pendType" required>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eduSMA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['eduData']->value->sekolahType==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <select class="form-control" name="sekType" id="pendJenis" required>
                            <option value="09.1" <?php if ($_smarty_tpl->tpl_vars['eduData']->value->sekolahOwnerType=='09.1'){?>selected<?php }?>>Negeri</option>
                            <option value="09.2" <?php if ($_smarty_tpl->tpl_vars['eduData']->value->sekolahOwnerType=='09.2'){?>selected<?php }?>>Swasta</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Alamat Sekolah
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="propSek" id="prop">
                            <?php if ($_smarty_tpl->tpl_vars['eduData']->value->prop==''||$_smarty_tpl->tpl_vars['eduData']->value->prop=='0'){?>
                            <option value="0">--Pilih Propinsi--</option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['eduData']->value->prop==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kabSek" id="kab">
                            <?php if ($_smarty_tpl->tpl_vars['eduData']->value->kabKota==''||$_smarty_tpl->tpl_vars['eduData']->value->kabKota=='0'){?>
                            <option value="0">--Pilih Kabupaten/Kota--</option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['eduData']->value->kabKota==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kposSek" id="kpos">
                            <?php if ($_smarty_tpl->tpl_vars['eduData']->value->kodePos==''||$_smarty_tpl->tpl_vars['eduData']->value->kodePos=='0'){?>
                            <option value="0">--Pilih Kode Pos--</option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kodepos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['eduData']->value->kodePos==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value->kodepos;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-10">
                        <!-- <button type="reset" class="btn blue">Reset</button> -->
                        <button type="submit" class="btn green" value="save" name="submit">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
jQuery(document).ready(function() {
    FormComponents.init();
});
</script>
<?php }} ?>