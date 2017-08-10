<?php /* Smarty version Smarty-3.1.14, created on 2016-11-11 09:48:04
         compiled from "application/views/portal/formPrestasi.html" */ ?>
<?php /*%%SmartyHeaderCode:1967131071535625ccd1ac03-72081288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '524575988ba5540a034292f1225688f43699c339' => 
    array (
      0 => 'application/views/portal/formPrestasi.html',
      1 => 1478486529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1967131071535625ccd1ac03-72081288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535625cce05ce2_38374313',
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
<?php if ($_valid && !is_callable('content_535625cce05ce2_38374313')) {function content_535625cce05ce2_38374313($_smarty_tpl) {?><form class="formPrestasi form-horizontal" id="prestasi" method="post" enctype="multipart/form-data">
 <div class="form-body" style="border-bottom: 4px solid;background-color: #F7F7F7;">
	<h3 class="form-section text-primary" class="col-md-12">Raihan Prestasi
		<span style="font-size: 14px" class="text-danger">Cantumkan Prestasi Anda.</span>
		<a class="btn" id="minPres" style="float:right;color: red; "><i class=" icon-minus"></i></a>
		<a class="btn" id="plusPres" style="float:right;color: black;display:none "><i class=" icon-plus"></i></a> 
	</h3>
<div id="prestasi">
	<div class="tblPrestasi tab-pane row" style="margin: 0 10px;">
		<!-- Table untuk menampilkan keluarga -->
		<div class="col-md-12">
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
<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='0'){?>
<div  id="formEd" class="col-md-12">

		<?php if ($_smarty_tpl->tpl_vars['cmb']->value->jalur=='JP'){?>		
		<div class="panel panel-info">
		  <div class="panel-heading">
			 <h3 class="panel-title">Catatan Upload Berkas</h3>
		  </div>
		  <div class="panel-body">
			 <ul>
				<li>Ukuran file yang diizinkan adalah maksimal <strong>5 MB</strong>.</li>
				<li>Tipe file yang diizinkan (<strong>JPG, GIF, PNG, JPEG, PDF</strong>).</li>
				<li>Bukti penghargaan wajib dilampirkan bagi Anda yang melalui jalur prestasi</li>
				<li>Prestasi yang dimasukkan maksimal sebanyak 6 prestasi</li>
				<li>Berkas diatas dibutuhkan untuk tahapan seleksi berkas jalur prestasi, harap Anda mencantumkan dengan format yang diminta.</li>
			 </ul>
		  </div>
	   </div>
	   <?php }?>
		<div class="col-md-12">
			<div class="form-group">
			   <label class="control-label col-md-3" style="text-align:left;">Nama Penghargaan<span class="required">*</span></label>
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
			   <label class="control-label col-md-3" style="text-align:left;">Instuisi Pemberi<span class="required">*</span></label>
			   </label>
			   <div class="col-md-9" >
					<input type="text" class="form-control" name="instPres" required>	
			   </div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
			   <label class="control-label col-md-3" style="text-align:left;">Tahun<span class="required">*</span></label>
			   </label>
			   <div class="col-md-2">
					<input type="text" class="form-control" name="tahun" required>	
			   </div>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['cmb']->value->jalur=='JP'){?>	
		<div class="col-md-12">							
		   <div class="form-group">
			  <label class="control-label col-md-3" style="text-align:left;">Bukti Penghargaan<span class="required">*</span></label>
			  <div class="col-md-9">
				 <div class="fileupload fileupload-new" data-provides="fileupload">
					<div class="input-group">
					   <span class="input-group-btn">
					   <span class="uneditable-input">
					   <i class="icon-file fileupload-exists"></i> 
					   <span class="fileupload-preview"></span>
					   </span>
					   </span>
					   <span class="btn default btn-file">
					   <span class="fileupload-new"><i class="icon-paper-clip"></i> Pilih file</span>
					   <span class="fileupload-exists"><i class="icon-undo"></i></span>
					   <input name="file_prestasi" type="file" class="default" required/>
					   </span>
					   <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i></a>
					</div>
				 </div>
			  </div>
		   </div>
		</div>
	   <?php }?>
		<div class="modal-footer">
			<button type="submit" class="tambah btn blue"> Simpan <i class="icon-ok"></i></button>
		</div>	
 </div>
<?php }?>
</div>
</div>
</form>
<div class="clearfix"></div>
<form action="#" class="formOrg form-horizontal" method="post">
 <div class="form-body"  style="border-bottom: 4px solid;background-color: #F7F7F7;">
	<h3 class="form-section text-primary" class="col-md-12">Riwayat Organisasi
		<span style="font-size: 14px" class="text-danger">Cantumkan Organisasi yang pernah Anda ikuti.</span>
		<a class="btn" id="minOrg" style="float:right;color: red; "><i class=" icon-minus"></i></a>
		<a class="btn" id="plusOrg" style="float:right;color: black;display:none "><i class=" icon-plus"></i></a> 
	</h3>
  <div id="organisasi">
	<div class="tblOrg tab-pane row" style="margin: 0 10px;">
		<!-- Table untuk menampilkan keluarga -->
		<div class="col-md-12">
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
<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='0'){?>
<div  id="formEd" class="col-md-12">
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
			<button type="submit" class="tambah btn blue"> Simpan <i class="icon-ok"></i></button>
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
	var  stsConfirm = "<?php echo $_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm;?>
";
	if (stsConfirm == 0 ){
		toastr.info('Silahkan lengkapi daftar PRESTASI & ORGANISASI Anda. Kemudian Submit formulir pendaftaran.');
	}else
	if (stsConfirm == 1 ){
		toastr.info('Anda sudah melengkapi formulir pendaftaran, Silahkan ke menu Jadwal Ujian untuk melihat jadwal ujian Anda.');
		
	}
});


$("form#prestasi").submit(function() {
    var formData = new FormData($(this)[0]);
    $.ajax({
        url: "<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/prestasi/add",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            $('.tblPrestasi').html(data);
        },
        cache: false,
        contentType: false,
        processData: false
    });
	$('.formPrestasi').trigger("reset");

    return true;
});

/*

$(".formPrestasi").submit( function() {	

		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/prestasi/add",$(this).serialize(),function(resp){
			$('.tblPrestasi').html(resp);
		});
		$('.formPrestasi').trigger("reset");
		return false;
		
	});
	

*/

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