<?php /* Smarty version Smarty-3.1.14, created on 2014-04-17 12:09:04
         compiled from "application\views\portal\formAlamat.html" */ ?>
<?php /*%%SmartyHeaderCode:3207652c8d51057e7d0-46369713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ac04d7aeb00ad270190fbc14d64ab0271397311' => 
    array (
      0 => 'application\\views\\portal\\formAlamat.html',
      1 => 1397711338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3207652c8d51057e7d0-46369713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c8d510771315_20261566',
  'variables' => 
  array (
    'host' => 0,
    'kode' => 0,
    'nama' => 0,
    'cmb' => 0,
    'religion' => 0,
    'row' => 0,
    'wil' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c8d510771315_20261566')) {function content_52c8d510771315_20261566($_smarty_tpl) {?> <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
							<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/saveAlamat/save" class="form-horizontal" id="form_sample_2" method="post" enctype="multipart/form-data">	
								<div class="portlet box grey">
								   <div class="portlet-body form" style="border-top: 1px double #4682B4;">
										 <div class="form-body" style="font-size:bold">
											<h3 class="form-section" style="margin-bottom: 15px; margin-left: 50px;margin-top: 12px;">DATA DIRI</h3>
											<div class="alert alert-error display-hide">
											  <button class="close" data-dismiss="alert"></button>
											  You have some form errors. Please check below.
										    </div>
										    <div class="alert alert-success display-hide">
											  <button class="close" data-dismiss="alert"></button>
											  Your form validation is successful!
										    </div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Nama Lengkap
													   </label>
													   <div class="col-md-9" >
															<input name="kode" value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
" hidden>
															<input type="text" class="form-control" name="nama" value="<?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
" id="nama" required>											   
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">No KTP / SIM
													   </label>
													   <div class="col-md-9" >
															<input type="text" class="form-control" name="no_id" required>	
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
															<input type="text" class="form-control" name="tempatLahir" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->tempatLahir;?>
" required>	
															<span class="help-block">Sesuai dengan ijazah terakhir</span>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Tanggal Lahir
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="tanggalLahir" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->tanggalLahir;?>
" placeholder='yyyy-mm-dd' required>
													   </div>
													   <!-- <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
														<input type="text" class="form-control" name="tanggalBayar" style="text-align: left;">
													   </div> -->
													</div>
												</div>
											</div>	
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Agama
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="agama" id="agama" required>
															 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['religion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Upload Foto
													   </label>
													   <div class="col-md-9">
															<input type="file" name="poto" required>
															<p class="help-block">Format : jpg|png|gif, Best Size : 200px*200px</p>
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
															<textarea class="form-control placeholder-no-fix" id="occupation" name="occupation" rows="4" required><?php echo $_smarty_tpl->tpl_vars['cmb']->value->rumahAlamat;?>
</textarea>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Propinsi
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="propinsi" id="propinsi" required>
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
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Kabupaten/Kota
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="kabkota" id="kabkota" required>
															</select>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Kode Pos
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="kodepos" id="kodepos" required>
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
															<input type="text" class="form-control" id="telRumah" name="telRumah" required>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Fax Rumah
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="fax" value="" id="fax">
													   </div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-body">
											<h3 class="form-section" style="margin-bottom: 15px; margin-left: 50px;margin-top: 12px;">Alamat Surat 
												<input type="checkbox" name="sama" id="sama">
												<span style="font-size:14px">Centang jika alamat surat Anda sama dengan alamat di atas.</span>
											</h3>	
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Alamat Surat
													   </label>
													   <div class="col-md-9">
															<textarea class="form-control placeholder-no-fix" name="occupationsur" rows="4" id = "occupationsur" required></textarea>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Propinsi
														<span style="color:red;display:none" id="warning">(Pilih Manual)</span>
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="propinsi2" id="propinsi2" required>
															 <option>-- Pilih Propinsi --</option>
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
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Kab./Kota
														<span style="color:red;display:none" id="warning1">(Pilih Manual)</span>
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="kabkota2" id="kabkota2" required>
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
															<select  class="form-control" name="kodepos2" id="kodepos2" required>
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
															<input type="text" class="form-control" name="telRumah2" id="telRumah2" required>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Fax Rumah
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="fax2" value="" id="fax2">
													   </div>
													</div>
												</div>
											</div>																						
										  <div class="modal-footer">
											 <button type="reset" class="btn default" data-dismiss="modal">Reset <i class="icon-refresh"></i></button>
											 <button type="submit" class="btn blue" id="save" value="save" name="opt"> Simpan <i class="icon-save"></i></button>
										  </div>
										</div>
									</div>
								</div>
							   </form>
<button class="btn default"  id="foo">View Demo</button>
						  
<script>

$('#foo').click(function() {
       if (confirm('Lengkapi Data Orang Tua atau Wali')) {
           id = "formKeluarga";
			
			$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/keluarga", {'id':id},function(resp){
				$('#konten').html(resp);
			});
			document.getElementById("profil").style.height="42px" ;
			document.getElementById("imgP").style.display="none" ;
			return false;
       }
    });

jQuery(document).ready(function() {
    kabkota();
	
    kabkota2();
	
});

$("#propinsi").change(function(){
    kabkota();
	kodepos();
});

$("#kabkota").change(function(){
    kodepos();
});

$("#propinsi2").change(function(){
    kabkota2();
	kodepos2();
});

$("#kabkota2").change(function(){
    
	kodepos2();
});

function kabkota(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKabKota",{
					'propinsi':$('#propinsi').val()				
				},function(resp){
                $('select#kabkota').html(resp);
            });
	
	kodepos();
}



function kodepos(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKodePos",{
					'kabkota':$('#kabkota').val()				
				},function(resp){
                $('select#kodepos').html(resp);
            });
}



function kabkota2(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKabKota",{
					'propinsi':$('#propinsi2').val()				
				},function(resp){
                $('select#kabkota2').html(resp);
            });
	
	kodepos2();
}


function kodepos2(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKodePos",{
					'kabkota':$('#kabkota2').val()				
				},function(resp){
                $('select#kodepos2').html(resp);
            });
}


$('#sama').click(function() {	
	if ( $(this).is(':checked') ){
            $('#occupationsur').val($('#occupation').val());
			$('#telRumah2').val($('#telRumah').val());
			//$('#propinsi2').val($('#propinsi').val());
			$('#fax2').val($('#fax').val());
    }else{
            $('#occupationsur').val("");
			$('#telRumah2').val("");
			//$('#propinsi2').val("");
			$('#fax2').val("");
			
	}
	
	$('#warning').css("display", "block");
	$('#warning1').css("display", "block");
	$('#warning2').css("display", "block");
	
});
</script><?php }} ?>