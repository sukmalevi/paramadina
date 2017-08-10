<?php /* Smarty version Smarty-3.1.14, created on 2016-07-28 09:10:07
         compiled from "application/views/cmb/formPendaftaran.html" */ ?>
<?php /*%%SmartyHeaderCode:61245807655c8269b7832a8-83441286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c70acb5b1516a2ae864495f692d21c15e1dab72' => 
    array (
      0 => 'application/views/cmb/formPendaftaran.html',
      1 => 1469237431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61245807655c8269b7832a8-83441286',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55c8269b9d69a1_23474745',
  'variables' => 
  array (
    'host' => 0,
    'periodeAka' => 0,
    'row' => 0,
    'jalur' => 0,
    'religion' => 0,
    'sex' => 0,
    'wil' => 0,
    'kab' => 0,
    'kodepos' => 0,
    'eduSMA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c8269b9d69a1_23474745')) {function content_55c8269b9d69a1_23474745($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
?><!-- BEGIN FORM-->
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/saveCmbBaru" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">
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
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Registrasi</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Periode Registrasi
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <select class="form-control" name="periode" id="periode">
                            <option>-: Silahkan Pilih Periode :-</option>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periodeAka']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                    <label class="control-label col-md-2">Jenjang
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <select class="form-control" name="jenjang" id="jenjang">
                            <option>-: Silahkan Pilih Jenjang :-</option>
                            <option value="1">S1 (Sarjana)</option>
                            <option value="2">S2 (Pasca Sarjana)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Program Studi
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <select class="form-control" name="prodi" id="prodi">
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jalur Seleksi
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <select class="form-control" name="jalur" id="jalur" required>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jalur']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
            </div>
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Data Pribadi</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Lengkap
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Nama Lengkap" class="form-control placeholder-no-fix" name="nameFull" required/>
                        <span class="help-block">Sesuai dengan ijazah terakhir</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Email Aktif
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">No Identitas KTP 
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="no_id" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Agama
                        <span class="required">*</span></label>
                    <div class="col-md-10">
                        <select class="form-control" name="agama" id="agama" required>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['religion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"> <?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Tempat/Tanggal Lahir
                        <span class="required">*</span>
					</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatLahir" >
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-inline input-medium " placeholder="DD-MM-YYYY" name="tanggalLahir" required>
                        <span class="help-block">FORMAT : <?php echo smarty_modifier_date_format(time(),"%e-%m-%Y");?>
</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jenis Kelamin
                    <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="icon-male"></i>
                            </span>
                            <select class="form-control" name="sex" required>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"> <?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Nomor Handphone
                        <span class="required">*</span></label>
                    <div class="col-md-10">
                        <input type="text" placeholder="No. HP" class="form-control" name="no_hp" required/>
                    </div>
                </div>
                <!-- Alamat rumah dan surat -->
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Alamat Rumah dan Surat</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Alamat Rumah					
                        <span class="required">*</span>
					</label>
                    <div class="col-md-10">
                        <textarea rows="3" name="occupation" placeholder="Alamat Sekarang" class="form-control placeholder-no-fix"></textarea>
                    </div>
                </div>
<!--                <div class="form-group">
                    <label class="control-label col-md-2">Propinsi
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="propinsi" id="propOwn" >
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kabkota" id="kabOwn">
							<option value="0">-- Pilih Kab/Kota --</option>
                             <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?> 
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kodepos" id="kposOwn">
							<option value="0">-- Pilih Kab/Kota --</option>
                             <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kodepos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->kodepos;?>
</option>
                            <?php } ?> 
                        </select>
                    </div>
                </div>-->
                <div class="form-group">
                    <label class="control-label col-md-2">Telepon Rumah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="" name="telRumah" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Fax Rumah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="fax" id="fax">
                    </div>
                </div>
                <!-- Data Orang tua/Wali -->
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Data Orang Tua Wali</h3>
                <!-- Detail IBU -->
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Ibu Kandung
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="namaIbu" id="namaIbu" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">E-mail Ibu
                    </label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="emailIbu" id="emailIbu" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Telepon Rumah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="telIbu" id="telIbu" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">No HP Ibu
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="hpIbu" id="hpIbu" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Alamat Surat
                    </label>
                    <div class="col-md-10">
                        <textarea class="form-control placeholder-no-fix" name="alamatIbu" rows="2" id="alamatIbu"></textarea>
                    </div>
                </div>
<!--                <div class="form-group">
                    <label class="control-label col-md-2">Propinsi Ibu
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="propIbu" id="propIbu">                            
                            
                            <option value="0">--Pilih Propinsi--</option>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kabIbu" id="kabIbu">
                            
                            <option value="0">--Pilih Kabupaten/Kota--</option>
                             <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?> 
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kposIbu" id="kposIbu">
                            <option value="0">--Pilih Kode Pos--</option>
                             <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kodepos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->kodepos;?>
</option>
                            <?php } ?> 
                        </select>
                    </div>
                </div>-->
                <!-- Detail data Ayah -->
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Ayah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="namaAyah" id="namaAyah">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">E-mail Ayah
                    </label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="emailAyah" id="emailAyah">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Telepon Rumah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="telAyah" id="ayahTel">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">No HP Ayah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="hpAyah" id="hpAyah" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Alamat Ayah
                    </label>
                    <div class="col-md-10">
                        <textarea class="form-control placeholder-no-fix" name="alamatAyah" rows="2" id="alamatAyah"></textarea>
                    </div>
                </div>
<!--                <div class="form-group">
                    <label class="control-label col-md-2">Propinsi Ayah
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="propAyah" id="propAyah">
                            <option value="0">--Pilih Propinsi--</option>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kabAyah" id="kabAyah">
                            <option value="0">--Pilih Kabupaten/Kota--</option>
                             <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?> 
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kposAyah" id="kposAyah">
                            <option value="0">--Pilih Kode Pos--</option>
                             <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kodepos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->kodepos;?>
</option>
                            <?php } ?> 
                        </select>
                    </div>
                </div>-->
                <!-- Detail Wali -->
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Wali
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="namaWali" id="namaWali" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">E-mail Wali
                    </label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="emailWali" id="emailWali" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Telepon Rumah
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="telWali" id="telWali" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">No HP Wali
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="hpWali" id="hpWali" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Alamat Wali
                    </label>
                    <div class="col-md-10">
                        <textarea class="form-control placeholder-no-fix" name="alamatWali" rows="2" id="alamatWali"></textarea>
                    </div>
                </div>
<!--                <div class="form-group">
                    <label class="control-label col-md-2">Propinsi Wali
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="propWali" id="propWali">
                            <option value="0">--Pilih Propinsi--</option>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kabWali" id="kabWali">
                            <option value="0">--Pilih Kabupaten/Kota--</option>
                             <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?> 
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kposWali" id="kposWali">
                            <option value="0">--Pilih Kode Pos--</option>
                             <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kodepos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->kodepos;?>
</option>
                            <?php } ?> 
                        </select>
                    </div>
                </div>-->
                
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Riwayat Pendidikan</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Sekolah/PT
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Nama Sekolah/PT Asal" class="form-control" name="namaSekolah" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">NISN/NIM
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Nomor Induk" class="form-control" name="nisnnim" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Tahun Lulus</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Tahun Kelulusan" class="form-control" name="tahunLulus"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jurusan</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Jurusan Sekolah/PT" class="form-control" name="jurusanSMA" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Nilai UN/IPK
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="nilai" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jenis Pendidikan
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-5">
                        <select class="form-control" name="pendType" id="pendType" required>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eduSMA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <select class="form-control" name="sekType" id="pendJenis" required>
                            <option value="09.1">Negeri</option>
                            <option value="09.2">Swasta</option>
                        </select>
                    </div>
                </div>                
                <div class="form-group">
                    <label class="control-label col-md-2">Alamat Sekolah/PT
                    </label>
                    <div class="col-md-10">
                        <textarea class="form-control placeholder-no-fix" name="alamatWali" rows="2" id="alamatSekPT"></textarea>
                    </div>
                </div>
<!--                <div class="form-group">
                    <label class="control-label col-md-2">Alamat Sekolah/Universitas
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="propSek" id="propSek" class="propinsi">
                            <option value="0">--Pilih Propinsi--</option>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kabSek" id="kabSek">
                            <option value="0">--Pilih Kabupaten/Kota--</option>
                             <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                            <?php } ?> 
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="kposSek" id="kposSek">
                            <option value="0">--Pilih Kode Pos--</option>
                             <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kodepos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->kodepos;?>
</option>
                            <?php } ?> 
                        </select>
                    </div>
                </div>-->
                <div id="detail_bayar"></div>
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

	
	function prodi() {
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/selectProdi",{
						'jenjang':$('#jenjang').val()				
					},function(resp){
					$('select#prodi').html(resp);
				});
	}
	
	
	function jalur() {
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/selectJalur",{
						'prodi':$('#prodi').val(), 'jenjang':$('#jenjang').val()			
					},function(resp){
					$('select#jalur').html(resp);
				});
	}
	

	$(document).ready(function(){
		prodi();
		jalur();
	});

	$("#jenjang").change(function(){
		prodi();
		jalur();
	});

	$("#prodi").change(function(){
		jalur();
	});

	
	$("#jalur").change(function(){
		var prodi = $('#prodi').val();
		var jenjang = $('#jenjang').val();
		if (prodi == ''){alert('Silahkan Pilih Prodi dahulu!');}
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/select_jalur_bayar",{
				'jalur':$('#jalur').val(), 'prodi': prodi, 'jenjang':jenjang				
		},function(resp){
			$('#detail_bayar').html(resp);
		});
	});
	


	$("#propOwn").change(function(){
		kabkota('Own');
		kodepos('Own');
	});

	$("#kabOwn").change(function(){
		kodepos('Own');
	});	
	
	$("#propAyah").change(function(){
		kabkota('Ayah');
		kodepos('Ayah');
	});

	$("#kabAyah").change(function(){
		kodepos('Ayah');
	});	
	
	$("#propIbu").change(function(){
		kabkota('Ibu');
		kodepos('Ibu');
	});

	$("#kabIbu").change(function(){
		
		kodepos('Ibu');
	});

	$("#propWali").change(function(){
		kabkota('Wali');
		kodepos('Wali');
	});

	$("#kabWali").change(function(){		
		kodepos('Wali');
	});

	$("#propSek").change(function(){
		kabkota('Sek');
		kodepos('Sek');
	});

	$("#kabSek").change(function(){		
		kodepos('Sek');
	});
	
	
	function kabkota(kode){
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/selectKabKota",{
						'propinsi':$('#prop'+kode).val()				
					},function(resp){
					$('select#kab'+kode).html(resp);
				});
		
		kodepos();
	}
	
	
	
	function kodepos(kode){
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/selectKodePos",{
						'kabkota':$('#kab'+kode).val()				
					},function(resp){
					$('select#kpos'+kode).html(resp);
				});
	}
	
</script>
<?php }} ?>