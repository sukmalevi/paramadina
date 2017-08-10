<?php /* Smarty version Smarty-3.1.14, created on 2014-01-05 06:46:54
         compiled from "application\views\portal\detailAlamat.html" */ ?>
<?php /*%%SmartyHeaderCode:3264052c8ef4fb5efe0-67985279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af668c995b5ea964c2dc5a7f46209d040d72f1fb' => 
    array (
      0 => 'application\\views\\portal\\detailAlamat.html',
      1 => 1388904409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3264052c8ef4fb5efe0-67985279',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c8ef4fd6e824_37874075',
  'variables' => 
  array (
    'host' => 0,
    'kode' => 0,
    'nama' => 0,
    'alamat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c8ef4fd6e824_37874075')) {function content_52c8ef4fd6e824_37874075($_smarty_tpl) {?>							<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/saveAlamat/save" class="form-horizontal" id="form_sample_2" method="post">	
								<div class="portlet box grey">
								   <div class="portlet-body form" style="border-top: 1px double #4682B4;">
										 <div class="form-body" style="font-size:bold">
											<h3 class="form-section" style="margin-bottom: 15px; margin-left: 50px;margin-top: 12px;">DATA DIRI</h3>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Nama Lengkap
													   </label>
													   <div class="col-md-9" >
															<input name="kode" value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
" hidden>
															<input type="text" class="form-control" name="nama" value="<?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
" id="nama" disabled>											   
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">No KTP / SIM
													   </label>
													   <div class="col-md-9" >
															<input type="text" class="form-control" name="no_id" value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->nomorKtp;?>
" disabled>	
													   </div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Tempat Lahir
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="tempatLahir" value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->tempatLahir;?>
" disabled>	
															<span class="help-block">Sesuai dengan ijazah terakhir</span>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Tanggal Lahir
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="tanggalLahir" value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->tanggalLahir;?>
" disabled>
													   </div>
													</div>
												</div>
											</div>	
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Agama
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="agama" id="agama" disabled>
																<option value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->agamaType;?>
"><?php echo $_smarty_tpl->tpl_vars['alamat']->value->agama;?>
</option>
															</select>
													   </div>
													</div>
												</div>
											</div>
										 </div>
										 <div class="form-body">
											<h3 class="form-section" style="margin-bottom: 15px; margin-left: 50px;margin-top: 12px;">Alamat Rumah & Surat
											</h3>	
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Alamat Rumah
													   </label>
													   <div class="col-md-9">
															<textarea class="form-control placeholder-no-fix" id="occupation" name="occupation" rows="4" disabled><?php echo $_smarty_tpl->tpl_vars['alamat']->value->rumahAlamat;?>
</textarea>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Propinsi
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="propinsi" id="propinsi" disabled>
															 <option value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->rumahProp;?>
"><?php echo $_smarty_tpl->tpl_vars['alamat']->value->propRumah;?>
</option>
															</select>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Kabupaten/Kota
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="kabkota" id="kabkota" disabled>
																<option value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->rumahKabKota;?>
"><?php echo $_smarty_tpl->tpl_vars['alamat']->value->kabkotaRumah;?>
</option>
															</select>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Kode Pos
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="kodepos" id="kodepos" disabled>
																<option value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->rumahKodePos;?>
"><?php echo $_smarty_tpl->tpl_vars['alamat']->value->kodeposRumah;?>
</option>
															</select>
													   </div>
													</div>
												</div>
											</div>	
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Telepon Rumah
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" id="telRumah" value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->rumahTel;?>
" disabled>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Fax Rumah
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="fax" value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->rumahFax;?>
" disabled id="fax">
													   </div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-body">
											<h3 class="form-section" style="margin-bottom: 15px; margin-left: 50px;margin-top: 12px;">Alamat Surat
											</h3>	
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Alamat Surat
													   </label>
													   <div class="col-md-9">
															<textarea class="form-control placeholder-no-fix" name="occupationsur" rows="4" id = "occupationsur" disabled><?php echo $_smarty_tpl->tpl_vars['alamat']->value->suratAlamat;?>
</textarea>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Propinsi
														<span style="color:red;display:none" id="warning">(Pilih Manual)</span>
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="propinsi2" id="propinsi2" disabled>
																<option value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->suratProp;?>
"><?php echo $_smarty_tpl->tpl_vars['alamat']->value->propSurat;?>
</option>
															</select>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Kab./Kota
														<span style="color:red;display:none" id="warning1">(Pilih Manual)</span>
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="kabkota2" id="kabkota2" disabled>
																<option value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->suratKabKota;?>
"><?php echo $_smarty_tpl->tpl_vars['alamat']->value->kabkotaSurat;?>
</option>
															</select>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Kode Pos
														<span style="color:red;display:none" id="warning2">(Pilih Manual)</span>
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="kodepos2" id="kodepos2" disabled>
																<option value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->suratKodePos;?>
"><?php echo $_smarty_tpl->tpl_vars['alamat']->value->kodeposSurat;?>
</option>
															</select>
													   </div>
													</div>
												</div>
											</div>	
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Telepon Rumah
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="telRumah2" id="telRumah2" value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->rumahTel;?>
" disabled>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Fax Rumah
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="fax2" id="fax2" value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value->rumahFax;?>
" disabled>
													   </div>
													</div>
												</div>
											</div>	
										</div>
									</div>
								</div>
							   </form>
<?php }} ?>