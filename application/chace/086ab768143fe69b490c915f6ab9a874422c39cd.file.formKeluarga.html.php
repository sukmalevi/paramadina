<?php /* Smarty version Smarty-3.1.14, created on 2017-03-29 14:31:18
         compiled from "application/views/portal/formKeluarga.html" */ ?>
<?php /*%%SmartyHeaderCode:17304527405359c2f22e7f47-83004609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '086ab768143fe69b490c915f6ab9a874422c39cd' => 
    array (
      0 => 'application/views/portal/formKeluarga.html',
      1 => 1490238215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17304527405359c2f22e7f47-83004609',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5359c2f23b3cd6_54930521',
  'variables' => 
  array (
    'wil' => 0,
    'row' => 0,
    'kode' => 0,
    'cmb' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359c2f23b3cd6_54930521')) {function content_5359c2f23b3cd6_54930521($_smarty_tpl) {?><form action="#" class="formOrtu form-horizontal" id="form_sample_2" method="post">
    <!-- <div class="portlet box grey" id="formKel">
        <div class="portlet-body form" style="border-top: 1px double #4682B4;"> -->
            <div class="form-body" style="font-size:bold">
                <h3 class="form-section text-primary">DATA ORANG TUA/ WALI</h3>               

                <div class="row col-md-12">
                    <div style="background-color:#555555;color:#FFFFFF;margin-bottom:7px;margin-left:7px;-moz-border-start-style: groove;height: 30px;">
                        <span style="font-size:18px;margin-left: 15px;">Ibu :</span>
                        <a class="btn" id="minIbu" style="float:right;color: red; "><i class=" icon-minus"></i></a> 
                        <a class="btn" id="plusIbu" style="float:right;color: white;display:none "><i class=" icon-plus"></i></a> 
                    </div>
                    <div id="ibu"  class="col-md-12">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" style="text-align:left;">Nama Ibu
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="namaIbu" id="namaIbu">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" style="text-align:left;">E-mail
                                        </label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" name="emailIbu" id="emailIbu">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" style="text-align:left;">No Telepon
                                                </label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="telIbu" id="telIbu">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">No HP
                                                    <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                            <input type="text" class="form-control" name="hpIbu" id="hpIbu">
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                            <div class="col-md-12">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">Alamat
                                                    <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                            <textarea class="form-control placeholder-no-fix" name="alamatIbu" rows="5" id="alamatIbu"></textarea>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">Propinsi
                                                    <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                            <select class="form-control" name="propIbu" id="propIbu">
                                                                    <option value="">--Pilih Propinsi--</option>
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
                                                    <label class="control-label col-md-3" style="text-align:left;">Kab/Kota
                                                    <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                            <select class="form-control" name="kabIbu" id="kabIbu">
                                                                    <option value="">--Pilih Kabupaten/Kota--</option>
                                                            </select>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">Kode Pos
                                                    <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                            <select class="form-control" name="kposIbu" id="kposIbu">
                                                                    <option value="">--Pilih Kode Pos--</option>
                                                            </select>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                            <div class="col-md-10">
									<div class="form-group">
											<label class="control-label col-md-2" style="text-align:left;">Tempat/tanggal lahir<span class="required">*</span>
											</label>
											<div class="col-md-5">
												<input type="text" placeholder="tempat lahir" class="form-control" name="tempatLahirIbu" id="tempatLahirIbu" required>
											</div>
											<div class="col-md-4">
												<input type="text" placeholder="tanggal lahir (DD-MM-YYYY)" class="form-control" name="tglLahirIbu" id="tglLahirIbu" required>
											</div>
									</div>
							</div>
                    </div>

                </div>

                
                <div class="row col-md-12">
                    <div  class="col-md-12" style="background-color:#555555;color:#FFFFFF;margin-bottom:7px;margin-left:7px;-moz-border-start-style: groove;height: 30px;">
                        <span style="font-size:18px;margin-left: 15px;">Ayah :</span>
                        <a class="btn" id="minAyah" style="float:right;color: red; "><i class=" icon-minus"></i></a>
                        <a class="btn" id="plusAyah" style="float:right;color: white;display:none "><i class=" icon-plus"></i></a> 
                    </div>
                    <div id="ayah" class="col-md-12">
                            <div class="">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">Nama Ayah
                                                    </label>
                                                    <div class="col-md-9">
                                                            <input name="id" value="Ortu" hidden>
                                                            <input name="kode" value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
" hidden>
                                                            <input type="text" class="form-control" name="namaAyah" id="namaAyah" >
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">E-mail
                                                    </label>
                                                    <div class="col-md-9">
                                                            <input type="email" class="form-control" name="emailAyah" id="emailAyah">
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                            <div class="">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">No Telepon
                                                    </label>
                                                    <div class="col-md-9">
                                                            <input type="text" class="form-control" name="telAyah" id="telAyah">
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">No HP
                                                    </label>
                                                    <div class="col-md-9">
                                                            <input type="text" class="form-control" name="hpAyah" id="hpAyah" >
                                                    </div>
                                            </div>
                                    </div>
                            </div>	
                            <div class="">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">Alamat</label>
                                                    <div class="col-md-9">
                                                            <textarea class="form-control placeholder-no-fix" name="alamatAyah" rows="5" id="alamatAyah" >
                                                            </textarea>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">Propinsi
                                                    </label>
                                                    <div class="col-md-9">
                                                            <select class="form-control" name="propAyah" id="propAyah">
                                                                    <option value="">--Pilih Propinsi--</option>
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
                            </div>
                            <div class="">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">Kab/Kota
                                                    </label>
                                                    <div class="col-md-9">
                                                            <select class="form-control" name="kabAyah" id="kabAyah">
                                                                    <option value="">--Pilih Kabupaten/Kota--</option>
                                                            </select>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">Kode Pos
                                                    </label>
                                                    <div class="col-md-9">
                                                            <select class="form-control" name="kposAyah" id="kposAyah">
                                                                    <option value="">--Pilih Kode Pos--</option>
                                                            </select>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
                </div>

                <div class="row col-md-12">
                    <div style="background-color:#555555;color:#FFFFFF;margin-bottom:7px;margin-left:7px;-moz-border-start-style: groove;height: 30px;">
                        <span style="font-size:18px;margin-left: 15px;">Wali :</span>
                        <a class="btn" id="minWali" style="float:right;color: red; "><i class=" icon-minus"></i></a> 
                        <a class="btn" id="plusWali" style="float:right;color: white;display:none "><i class=" icon-plus"></i></a> 
                    </div>
                    <div id="wali"  class="col-md-12">
                            <div class="col-md-12">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">Nama Wali
                                                    </label>
                                                    <div class="col-md-9">
                                                            <input type="text" class="form-control" name="namaWali" id="namaWali">
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">E-mail
                                                    </label>
                                                    <div class="col-md-9">
                                                            <input type="email" class="form-control" name="emailWali" id="emailWali">
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                            <div class="col-md-12">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">No Telepon
                                                    </label>
                                                    <div class="col-md-9">
                                                            <input type="text" class="form-control" name="telWali" id="telWali">
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">No HP
                                                    </label>
                                                    <div class="col-md-9">
                                                            <input type="text" class="form-control" name="hpWali" id="hpWali">
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                            <div class="col-md-12">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">Alamat
                                                    </label>
                                                    <div class="col-md-9">
                                                            <textarea class="form-control placeholder-no-fix" name="alamatWali" rows="5" id="alamatWali"></textarea>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">Propinsi
                                                    </label>
                                                    <div class="col-md-9">
                                                            <select class="form-control" name="propWali" id="propWali">
                                                                    <option value="">--Pilih Propinsi--</option>
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
                                                    <label class="control-label col-md-3" style="text-align:left;">Kab/Kota
                                                    </label>
                                                    <div class="col-md-9">
                                                            <select class="form-control" name="kabWali" id="kabWali">
                                                                    <option value="">--Pilih Kabupate/Kota--</option>
                                                            </select>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label col-md-3" style="text-align:left;">Kode Pos
                                                    </label>
                                                    <div class="col-md-9">
                                                            <select class="form-control" name="kposWali" id="kposWali">
                                                                    <option value="">--Pilih Kode Pos--</option>
                                                            </select>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
                </div>

                
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn default" data-dismiss="modal">Reset <i class="icon-refresh"></i>
                </button>
                <button type="submit" class="btn blue" id="save" value="save" name="id">Simpan <i class="icon-save"></i>
                </button>
            </div>
        <!-- </div>
    </div> -->
</form>
<?php if ($_smarty_tpl->tpl_vars['cmb']->value->jenjangType=='1'){?>
	<?php if ($_smarty_tpl->tpl_vars['cmb']->value->jalur!='KP'){?>
		<?php if ($_smarty_tpl->tpl_vars['cmb']->value->jalur!='JP'){?>
			<?php echo $_smarty_tpl->getSubTemplate ("portal/formSaudara.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	<?php }?>
<?php }?>						
							  
<script>
	

	
$(".formOrtu").submit( function(e) {
	e.preventDefault();
	var	ayah = 	this.namaAyah.value;
	var	ibu = 	this.namaIbu.value;
	var	wali = 	this.namaWali.value;
	//alert (ayah+','+ibu+','+wali);
        var kel = "Ibu";
	if ( ayah != "" || ibu != "" || wali != "")	{
//		if (ayah != ""){kel = "Ayah";}
//		if(ibu != ""){kel = "Ibu";}
//		if(wali != ""){kel = "Wali";}
		
		if (!$('#nama'+kel).val()){alert('Nama '+kel+' Tidak Boleh Kosong');}
//		else if (!$('#email'+kel).val()){alert('Email '+kel+' Tidak Boleh Kosong');}
//		else if (!$('#tel'+kel).val()){alert('No Telepon '+kel+' Tidak Boleh Kosong');}
		else if (!$('#hp'+kel).val()){alert('No HP '+kel+' Tidak Boleh Kosong');}
		else if (!$('#alamat'+kel).val()){alert('alamat '+kel+' Tidak Boleh Kosong');}
		else if (!$('#prop'+kel).val()){alert('Provinsi '+kel+' Tidak Boleh Kosong');}
		else if (!$('#kab'+kel).val()){alert('Kabupaten '+kel+' Tidak Boleh Kosong');}
		else if (!$('#kpos'+kel).val()){alert('Kode Pos '+kel+' Tidak Boleh Kosong');}
		else{		
			$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/keluarga/",$(this).serialize(),function(resp){			
				location.reload();
			});
		}
	}else{		
	
		alert("Data Ibu Wajib Di isi!");
		return false;
	}
});
	


$('#min').click(function(){
	document.getElementById("formKel").style.height="130px" ;
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

jQuery(document).ready(function() {
    kabkota();
	
    kabkota2();
	
	kabkota3();
	toastr.info('Silahkan Lengkapi DATA ORANG TUA/WALI, Silahkan isi salah satunya.');
});

$("#propAyah").change(function(){
    kabkota();
	kodepos();
});

$("#kabAyah").change(function(){
    kodepos();
});

$("#propIbu").change(function(){
    kabkota2();
	kodepos2();
});

$("#kabIbu").change(function(){
    
	kodepos2();
});

$("#propWali").change(function(){
    kabkota3();
	kodepos3();
});

$("#kabWali").change(function(){
    
	kodepos3();
});

function kabkota(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKabKota",{
					'propinsi':$('#propAyah').val()				
				},function(resp){
                $('select#kabAyah').html(resp);
            });
	
	kodepos();
}



function kodepos(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKodePos",{
					'kabkota':$('#kabAyah').val()				
				},function(resp){
                $('select#kposAyah').html(resp);
            });
}



function kabkota2(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKabKota",{
					'propinsi':$('#propIbu').val()				
				},function(resp){
                $('select#kabIbu').html(resp);
            });
	
	kodepos2();
}


function kodepos2(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKodePos",{
					'kabkota':$('#kabIbu').val()				
				},function(resp){
                $('select#kposIbu').html(resp);
            });
}



function kabkota3(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKabKota",{
					'propinsi':$('#propWali').val()				
				},function(resp){
                $('select#kabWali').html(resp);
            });
	
	kodepos3();
}


function kodepos3(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKodePos",{
					'kabkota':$('#kabWali').val()				
				},function(resp){
                $('select#kposWali').html(resp);
            });
}

$('#sama').click(function() {	
	if ( $(this).is(':checked') ){
            $('#occupationsur').val($('#occupation').val());
			$('#telRumah2').val($('#telRumah').val());
			$('#propinsi2').val($('#propinsi').val());
			$('#fax2').val($('#fax').val());
    }else{
            $('#occupationsur').val("");
			$('#telRumah2').val("");
			$('#propinsi2').val("");
			$('#fax2').val("");
			
	}
	
	$('#warning').css("display", "block");
	$('#warning1').css("display", "block");
	$('#warning2').css("display", "block");
	
});
</script><?php }} ?>