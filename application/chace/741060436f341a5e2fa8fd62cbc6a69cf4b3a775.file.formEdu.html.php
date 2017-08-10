<?php /* Smarty version Smarty-3.1.14, created on 2014-04-17 15:21:41
         compiled from "application\views\portal\formEdu.html" */ ?>
<?php /*%%SmartyHeaderCode:1323452cbaa6f9d1406-93488669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '741060436f341a5e2fa8fd62cbc6a69cf4b3a775' => 
    array (
      0 => 'application\\views\\portal\\formEdu.html',
      1 => 1397722868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1323452cbaa6f9d1406-93488669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cbaa6faa7407_78807893',
  'variables' => 
  array (
    'eduList' => 0,
    'row' => 0,
    'cmb' => 0,
    'kode' => 0,
    'eduData' => 0,
    'edu' => 0,
    'wil' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cbaa6faa7407_78807893')) {function content_52cbaa6faa7407_78807893($_smarty_tpl) {?>									<form action="#" class="formPendidikan form-horizontal" method="post">
										 <div class="form-body" style="background-color: #F7F7F7;">
											<h3 class="form-section" style="margin-bottom: 15px; margin-left: 50px;margin-top: 12px;">Riwayat Pendidikan
											</h3>
											<div class="tblPendidikan tab-pane row" style="margin: 0 10px;">
												<!-- Table untuk menampilkan keluarga -->
												<div class="col-md-12">
												   <!-- BEGIN EXAMPLE TABLE PORTLET-->
												   <div class="portlet box grey">
													  <div class="portlet-title">
														 <div class="tools">
															<a href="javascript:;" class="collapse"></a>
															<a href="javascript:;" class="remove"></a>
														 </div>
													  </div>
													  <div class="portlet-body">
														 <div class="table-toolbar">
														 </div>
														 <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
															<thead>
															   <tr>
																  <th>Jenjang</th>
																  <th>Nama Sekolah</th>
																  <th>Propinsi</th>
																  <th>Kabupaten Kota</th>
																  <th>Kode Pos</th>
																  <th>Tahun Lulus</th>							  
																  <th>Jurusan</th>						  
																  <th>Nilai UN</th>					  
																  <th>Hapus</th>
															   </tr>
															</thead>
															<tbody>
															<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eduList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
															   <tr >
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->sekolahNama;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->sekolahTipe;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->sekolah;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->propNama;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->kabNama;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->kodepos;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tahunLulus;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->jurusan;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nilai;?>
</td>
																  <td><a class="delete" data-toggle="modal" href="#verifikasi" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kodeEdu;?>
" name="delete">Delete</a></td>
															   </tr>
															<?php } ?>
															</tbody>
														 </table>
													  </div>
												   </div>
												   <!-- END EXAMPLE TABLE PORTLET-->
												</div>
											</div>
										<?php if ($_smarty_tpl->tpl_vars['cmb']->value->statusPend=='0'){?>
										<div  id="formEd">
											<div class="modal-footer">
											 <button type="submit" class="tambah btn green"> Update <i class="icon-plus"></i></button>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Nama Sekolah
													   </label>
													   <div class="col-md-9" >
															<input name="kode" value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
" hidden>
															<input name="id" value="tambah" hidden>
															<input type="text" class="form-control" name="namaSekolah" id="nama" value="<?php echo $_smarty_tpl->tpl_vars['eduData']->value->sekolah;?>
" required>											   
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Jurusan
													   </label>
													   <div class="col-md-9" >
															<input type="text" class="form-control" name="jurusan" value="<?php echo $_smarty_tpl->tpl_vars['eduData']->value->jurusan;?>
" required>	
													   </div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Nilai UN
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="nilai" required>	
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Tahun Lulus
													   </label>
													   <div class="col-md-9">	
															<input type="number" class="form-control" name="tahunLulus" value="<?php echo $_smarty_tpl->tpl_vars['eduData']->value->tahunLulus;?>
" required>	
													   </div>
													</div>
												</div>
											</div>	
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Jenis Pendidikan
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="pendType" id="pendType" required>
															 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['edu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
															 <?php } ?>
															</select><br>
															<input type="radio" name="sekType" value="09.1" required> Negeri<br>
															<input type="radio" name="sekType" value="09.2" required> Swasta
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Propinsi
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="prop" id="prop" >
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
													   <label class="control-label col-md-3" style="text-align:left;">Kabupaten/Kota
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="kab" id="kab">
															</select>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Kabupaten/Kota
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="kpos" id="kpos">
															</select>
													   </div>
													</div>
												</div>
										    </div>	
										</div>
										<?php }?>
										</div>
									</form>
<script>

jQuery(document).ready(function() {	
	FormComponents.init();
	Index.initCalendar();
	//TableManaged.init();
	//id= "tambah";
    //$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/pendidikan",{'id':id},function(resp){
	//		$('.tblPendidikan').html(resp);
	//	});		
	
});



$(".formPendidikan").submit( function() {	

		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/pendidikan/add",$(this).serialize(),function(resp){
			$('.tblPendidikan').html(resp);
			
			document.getElementById("formEd").style.display = "none" ;
			window.location.href = "<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir";
		});
		$('.formPendidikan').trigger("reset");
		return false;
		
	});
	


$("#prop").change(function(){
    kabkota();
	kodepos();
});

$("#kab").change(function(){
    
	kodepos();
});

function kabkota(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKabKota",{
					'propinsi':$('#prop').val()				
				},function(resp){
                $('select#kab').html(resp);
            });
	
	kodepos();
}



function kodepos(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKodePos",{
					'kabkota':$('#kab').val()				
				},function(resp){
                $('select#kpos').html(resp);
            });
}


</script><?php }} ?>