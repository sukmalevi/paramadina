<?php /* Smarty version Smarty-3.1.14, created on 2014-01-15 14:03:54
         compiled from "application\views\portal\detailKeluarga.html" */ ?>
<?php /*%%SmartyHeaderCode:2229452cb7d42c65618-79000416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fc6b9fb5ce0d8446ba0aae93c44c1023dcf09e5' => 
    array (
      0 => 'application\\views\\portal\\detailKeluarga.html',
      1 => 1389769075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2229452cb7d42c65618-79000416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cb7d4303dfb9_46885868',
  'variables' => 
  array (
    'kode' => 0,
    'ortu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cb7d4303dfb9_46885868')) {function content_52cb7d4303dfb9_46885868($_smarty_tpl) {?>							<form action="#" class="formOrtu form-horizontal" id="form_sample_2" method="post">	
								<div class="portlet box grey" id="formKel">
								   <div class="portlet-body form" style="border-top: 1px double #4682B4;">
										 <div class="form-body" style="font-size:bold">
											<h3 class="form-section" style="margin-bottom: 15px; margin-left: 50px;margin-top: 12px;">DATA ORANG TUA/ WALI <span style="color:red;font-size: 15px">*pilih salah satu untuk diisi</span>
												<a class="btn" id="minKel" style="float:right;color: green; "><i class=" icon-minus"></i></a>
												<a class="btn" id="plusKel" style="float:right;color: black;display:none "><i class=" icon-plus"></i></a> 
											</h3>
									<div id="detailKel">	 
											<div class="row">
												<div style="background-color:#555555;color:#FFFFFF;margin-bottom:7px;margin-left:7px;width:1110px;-moz-border-start-style: groove;height: 30px;">
												<span style="font-size:18px;margin-left: 15px;">Ayah : </span>
												<a class="btn" id="minAyah" style="float:right;color: red; "><i class=" icon-minus"></i></a>
												<a class="btn" id="plusAyah" style="float:right;color: white;display:none "><i class=" icon-plus"></i></a> 
												</div>
											</div>
										<div id="ayah">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Nama Ayah
													   </label>
													   <div class="col-md-9" >
															<input name="id" value="Ortu" hidden>
															<input name="kode" value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
" hidden>
															<input type="text" class="form-control" name="namaAyah" id="namaAyah" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahNama;?>
" disabled>											   
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">E-mail
													   </label>
													   <div class="col-md-9" >
															<input type="text" class="form-control" name="emailAyah" id="emailAyah" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahEmail;?>
" disabled>	
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
															<input type="text" class="form-control" name="telAyah" id="telAyah" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahTel;?>
" disabled>	
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Handphone
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="hpAyah" id="hpAyah" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahNama;?>
" disabled>
													   </div>
													</div>
												</div>
											</div>	
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Alamat
													   </label>
													   <div class="col-md-9">
															<textarea class="form-control placeholder-no-fix" name="alamatAyah" rows="5" id="alamatAyah" disabled ><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahAlamat;?>
</textarea>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Propinsi
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="propAyah" id="propAyah" disabled>
																<option value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahProp;?>
"><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahPropNama;?>
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
															<select  class="form-control" name="kabAyah" id="kabAyah" disabled>
															<option value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahKabKota;?>
"><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahKabNama;?>
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
															<select  class="form-control" name="kposAyah" id="kposAyah" disabled>
															<option value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahKodePos;?>
"><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ayahKodePosNama;?>
</option>
															</select>
													   </div>
													</div>
												</div>
											</div>
										</div>
										
											<div class="row">
												<div style="background-color:#555555;color:#FFFFFF;margin-bottom:7px;margin-left:7px;width:1110px;-moz-border-start-style: groove;height: 30px;">
												<span style="font-size:18px;margin-left: 15px;">Ibu :</span>
												<a class="btn" id="minIbu" style="float:right;color: red; "><i class=" icon-minus"></i></a> 
												<a class="btn" id="plusIbu" style="float:right;color: white;display:none "><i class=" icon-plus"></i></a> 
												</div>
											</div>
										
										<div id="ibu">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Nama Ibu
													   </label>
													   <div class="col-md-9" >
															<input type="text" class="form-control" name="namaIbu" id="namaIbu" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuNama;?>
" disabled>											   
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">E-mail
													   </label>
													   <div class="col-md-9" >
															<input type="text" class="form-control" name="emailIbu" id="emailIbu" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuEmail;?>
" disabled>	
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
															<input type="text" class="form-control" name="telIbu" id="telIbu" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuTel;?>
" disabled>	
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Handphone
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="hpIbu" id="hpIbu" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuCell;?>
" disabled>
													   </div>
													</div>
												</div>
											</div>	
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Alamat
													   </label>
													   <div class="col-md-9">
															<textarea class="form-control placeholder-no-fix" name="alamatIbu" rows="5" id = "alamatIbu" disabled><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuAlamat;?>
</textarea>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Propinsi
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="propIbu" id="propIbu" disabled >
																<option value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuProp;?>
"><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuPropNama;?>
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
															<select  class="form-control" name="kabIbu" id="kabIbu" disabled>
																<option value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuKabKota;?>
"><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuKabNama;?>
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
															<select  class="form-control" name="kposIbu" id="kposIbu" disabled>
																<option value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuKodePos;?>
"><?php echo $_smarty_tpl->tpl_vars['ortu']->value->ibuKodePosNama;?>
</option>
															</select>
													   </div>
													</div>
												</div>
											</div>
										</div>
										
											<div class="row">
												<div style="background-color:#555555;color:#FFFFFF;margin-bottom:7px;margin-left:7px;width:1110px;-moz-border-start-style: groove;height: 30px;">
												<span style="font-size:18px;margin-left: 15px;">Wali :</span>
												<a class="btn" id="minWali" style="float:right;color: red; "><i class=" icon-minus"></i></a> 
												<a class="btn" id="plusWali" style="float:right;color: white;display:none "><i class=" icon-plus"></i></a> 
												</div>
											</div>
										
										<div id="wali">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Nama Wali
													   </label>
													   <div class="col-md-9" >
															<input type="text" class="form-control" name="namaWali" id="namaWali" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliNama;?>
" disabled>											   
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">E-mail
													   </label>
													   <div class="col-md-9" >
															<input type="email" class="form-control" name="emailWali" id="emailWali" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliEmail;?>
" disabled>	
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
															<input type="text" class="form-control" name="telWali" id="telWali" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliTel;?>
" disabled >	
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Handphone
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="hpWali" id="hpWali" value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliCell;?>
" disabled>
													   </div>
													</div>
												</div>
											</div>	
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Alamat
													   </label>
													   <div class="col-md-9">
															<textarea class="form-control placeholder-no-fix" name="alamatWali" rows="5" id = "alamatWali" disabled><?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliAlamat;?>
</textarea>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Propinsi
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="propWali" id="propWali"  disabled>
																<option value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliProp;?>
"><?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliPropNama;?>
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
															<select  class="form-control" name="kabWali" id="kabWali" disabled>
																<option value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliKabKota;?>
"><?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliKabNama;?>
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
															<select  class="form-control" name="kposWali" id="kposWali" disabled>
																<option value="<?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliKodePos;?>
"><?php echo $_smarty_tpl->tpl_vars['ortu']->value->waliKodePosNama;?>
</option>
															</select>
													   </div>
													</div>
												</div>
											</div>
										</div>
								      </div>
									</div>
								  </div>
								</div>
							   </form>
								<?php echo $_smarty_tpl->getSubTemplate ("portal/formSaudara.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						
							  
<script>
jQuery(document).ready(function (){
	document.getElementById("detailKel").style.display = "none" ;
	document.getElementById("minKel").style.display = "none" ;
	document.getElementById("plusKel").style.display = "block" ;
});
$('#min').click(function(){
	document.getElementById("formKel").style.height="130px" ;
	
});
$('#minKel').click(function(){
	document.getElementById("detailKel").style.display = "none" ;
	document.getElementById("minKel").style.display = "none" ;
	document.getElementById("plusKel").style.display = "block" ;
});
$('#plusKel').click(function(){
	document.getElementById("detailKel").style.display = "block" ;
	document.getElementById("minKel").style.display = "block" ;
	document.getElementById("plusKel").style.display = "none" ;
});
$('#minAyah').click(function(){
	document.getElementById("ayah").style.display = "none" ;
	document.getElementById("minAyah").style.display = "none" ;
	document.getElementById("plusAyah").style.display = "block" ;
});
$('#minIbu').click(function(){
	document.getElementById("ibu").style.display = "none" ;
	document.getElementById("minIbu").style.display = "none" ;
	document.getElementById("plusIbu").style.display = "block" ;
});
$('#minWali').click(function(){
	document.getElementById("wali").style.display = "none" ;
	document.getElementById("minWali").style.display = "none" ;
	document.getElementById("plusWali").style.display = "block" ;
});
$('#plusAyah').click(function(){
	document.getElementById("ayah").style.display = "block" ;
	document.getElementById("minAyah").style.display = "block" ;
	document.getElementById("plusAyah").style.display = "none" ;
});
$('#plusIbu').click(function(){
	document.getElementById("ibu").style.display = "block" ;
	document.getElementById("minIbu").style.display = "block" ;
	document.getElementById("plusIbu").style.display = "none" ;
});
$('#plusWali').click(function(){
	document.getElementById("wali").style.display = "block" ;
	document.getElementById("minWali").style.display = "block" ;
	document.getElementById("plusWali").style.display = "none" ;
});

</script><?php }} ?>