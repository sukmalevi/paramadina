<?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 13:30:48
         compiled from "application\views\portal\formPrestasi.html" */ ?>
<?php /*%%SmartyHeaderCode:2058252cc0c96dc08c3-81437670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2388392da1bbe04f838d04de42a3bbae9bce5da1' => 
    array (
      0 => 'application\\views\\portal\\formPrestasi.html',
      1 => 1390283327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2058252cc0c96dc08c3-81437670',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cc0c97020cd8_16111823',
  'variables' => 
  array (
    'prestasi' => 0,
    'row' => 0,
    'cmb' => 0,
    'kode' => 0,
    'organisasi' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cc0c97020cd8_16111823')) {function content_52cc0c97020cd8_16111823($_smarty_tpl) {?>									<form action="#" class="formPrestasi form-horizontal" method="post">
										 <div class="form-body" style="border-bottom: 4px solid;background-color: #F7F7F7;">
											<h3 class="form-section" style="margin-bottom: 15px; margin-left: 50px;margin-top: 12px;">Raihan Prestasi
												<span style="color:red;font-size: 15px">Cantumkan Prestasi kamu jika ada.</span>
												<a class="btn" id="minPres" style="float:right;color: red; "><i class=" icon-minus"></i></a>
												<a class="btn" id="plusPres" style="float:right;color: black;display:none "><i class=" icon-plus"></i></a> 
											</h3>
										<div id="prestasi">
											<div class="tblPrestasi tab-pane row" style="margin: 0 10px;">
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
																  <th>Nama Penghargaan</th>
																  <th>Intuisi Pemberi</th>
																  <th>Tahun</th>				  
																  <th>Hapus</th>
															   </tr>
															</thead>
															<tbody>
															<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prestasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
															   <tr >
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->namaPrestasi;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->namaInstitusi;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tahun;?>
</td>
																  <td><a class="deletePres delete" data-toggle="modal" href="#" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
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
										<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='0'){?>
										<div  id="formEd">
												<div class="col-md-12">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Nama Penghargaan
													   </label>
													   <div class="col-md-9" >
															<input name="kode" value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
" hidden>
															<input name="id" value="tambahPres" hidden>
															<input type="text" class="form-control" name="namaPres" id="nama" required>											   
													   </div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Instuisi Pemberi
													   </label>
													   <div class="col-md-9" >
															<input type="text" class="form-control" name="instPres" required>	
													   </div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Tahun
													   </label>
													   <div class="col-md-9">
															<input type="number" class="form-control" name="tahun" required>	
													   </div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="submit" class="tambah btn blue"> Tambah <i class="icon-plus"></i></button>
												</div>	
										 </div>
										<?php }?>
										</div>
									  </div>
									</form>
									<div class="clearfix"></div>
									<form action="#" class="formOrg form-horizontal" method="post">
										 <div class="form-body" >
											<h3 class="form-section" style="margin-bottom: 15px; margin-left: 50px;margin-top: 12px;">Riwayat Organisasi
												<span style="color:red;font-size: 15px">Cantumkan Organisasi yang pernah kamu ikuti.</span>
												<a class="btn" id="minOrg" style="float:right;color: red; "><i class=" icon-minus"></i></a>
												<a class="btn" id="plusOrg" style="float:right;color: black;display:none "><i class=" icon-plus"></i></a> 
											</h3>
										  <div id="organisasi">
											<div class="tblOrg tab-pane row" style="margin: 0 10px;">
												<!-- Table untuk menampilkan keluarga -->
												<div class="col-md-12">
												   <!-- BEGIN EXAMPLE TABLE PORTLET-->
												   <div class="portlet box purple">
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
																  <th>Nama Kegiatan</th>
																  <th>Tempat</th>
																  <th>Jabatan</th>	
																  <th>Tahun Mulai</th>
																  <th>Tahun Selesai</th>			  
																  <th>Hapus</th>
															   </tr>
															</thead>
															<tbody>
															<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['organisasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
															   <tr >
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->namaKegiatan;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tempat;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->jabatan;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->dariTahun;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->sampaiTahun;?>
</td>
																  <td><a class="deleteOrg delete" data-toggle="modal" href="#" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
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
										<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='0'){?>
										<div  id="formEd">
												<div class="col-md-12">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Nama Organisasi
													   </label>
													   <div class="col-md-9" >
															<input name="kode" value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
" hidden>
															<input name="id" value="tambahOrg" hidden>
															<input type="text" class="form-control" name="namaOrg" id="nama" required>											   
													   </div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Tempat
													   </label>
													   <div class="col-md-9" >
															<input type="text" class="form-control" name="tempatOrg" required>	
													   </div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Jabatan
													   </label>
													   <div class="col-md-9" >
															<input type="text" class="form-control" name="jabatanOrg" required>	
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-6" style="text-align:left;">Tahun Mulai
													   </label>
													   <div class="col-md-6">
															<input type="number" class="form-control" name="mulaiOrg" required>	
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-6" style="text-align:left;">Tahun Selesai
													   </label>
													   <div class="col-md-6">
															<input type="number" class="form-control" name="selesaiOrg" required>	
													   </div>
													</div>
												</div>
												<div class="modal-footer" style="margin-top: 75px;padding-bottom: 40px;padding-top: 25px;">
													<button type="submit" class="tambah btn green"> Tambah <i class="icon-plus"></i></button>
												</div>	
										 </div>
										<?php }?>
									   </div>
									  </div>
									</form>
				
										<form class="konfirmForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/konfirm">
											<div class="col-md-12" style="padding-bottom: 15px; padding-top: 5px; padding-right: 0px;">
											<ul class="timeline" style="left:0">
											  <li class="timeline-parmad">
												 <div class="timeline-body" style="margin-left:0">
													<h2>Konfirmasi Form Pendaftaran</h2>
													<div class="timeline-content">
													<p>Dengan ini saya menyatakan mendaftarkan diri menjadi calon mahasiswa Universitas Paramadina dan bersedia mengikuti seleksi masuk. 
													<p>Saya menjamin keterangan yang Saya cantumkan dalam formulir pendaftaran serta berkas pendukung yang Saya lampirkan adalah benar. 
													</div>
													<div class="timeline-footer">														  
													<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?>
														<input type="radio"  disabled checked> Setuju<br>
														<input type="radio"  disabled> Batal<br>
														<input type="text"  hidden>
														<input type="text" hidden>  
													<?php }else{ ?>
														<input type="radio" name="konfirm" value="setuju" required> Setuju<br>
														<input type="radio" name="konfirm" value="tidak" required> Batal<br>
														<input type="text" name="id"  value="akhir" hidden>
														<input type="text" name="kode"  value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
" hidden>
													   <button type="submit" class="btn nav-link">
													   Confirm <i class="m-icon-swapright m-icon-black"></i>                              
													   </button>  
													<?php }?>
													</div>
												 </div>
											  </li>
											</ul>
											</div>
										</form>
<script>

$('#minPres').click(function(){
	document.getElementById("prestasi").style.display = "none" ;
	document.getElementById("minPres").style.display = "none" ;
	document.getElementById("plusPres").style.display = "block" ;
});
$('#plusPres').click(function(){
	document.getElementById("prestasi").style.display = "block" ;
	document.getElementById("minPres").style.display = "block" ;
	document.getElementById("plusPres").style.display = "none" ;
});
$('#minOrg').click(function(){
	document.getElementById("organisasi").style.display = "none" ;
	document.getElementById("minOrg").style.display = "none" ;
	document.getElementById("plusOrg").style.display = "block" ;
});
$('#plusOrg').click(function(){
	document.getElementById("organisasi").style.display = "block" ;
	document.getElementById("minOrg").style.display = "block" ;
	document.getElementById("plusOrg").style.display = "none" ;
});

jQuery(document).ready(function() {	
	/*document.getElementById("prestasi").style.display = "none" ;
	document.getElementById("minPres").style.display = "none" ;
	document.getElementById("plusPres").style.display = "block" ;	
	
	document.getElementById("organisasi").style.display = "none" ;
	document.getElementById("minOrg").style.display = "none" ;
	document.getElementById("plusOrg").style.display = "block" ;
	*/
	FormComponents.init();
	Index.initCalendar();
});
/*

$(".konfirmForm").submit( function() {	

		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/konfirm",$(this).serialize(),function(resp){
		});
		window.location = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal';
	});
	

*/

$(".formPrestasi").submit( function() {	

		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/prestasi/add",$(this).serialize(),function(resp){
			$('.tblPrestasi').html(resp);
		});
		$('.formPrestasi').trigger("reset");
		return false;
		
	});
	



$(".formOrg").submit( function() {	

		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/prestasi/add",$(this).serialize(),function(resp){
			$('.tblOrg').html(resp);
		});
		$('.formOrg').trigger("reset");
		return false;
		
	});
	



$(".deletePres").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
			id= "tambahPres";
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/prestasi/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
			id= "tambahPres";
			$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/prestasi",{'id':id},function(resp){
					$('.tblPrestasi').html(resp);
				});	
		});
	});
});




$(".deleteOrg").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
			id= "tambahOrg";
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/prestasi/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
			id= "tambahOrg";
			$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/prestasi",{'id':id},function(resp){
					$('.tblOrg').html(resp);
				});	
		});
	});
});

</script><?php }} ?>