<?php /* Smarty version Smarty-3.1.14, created on 2017-03-27 13:44:13
         compiled from "application/views/admisi/tblBuka.html" */ ?>
<?php /*%%SmartyHeaderCode:635964035535625774f6cf1-94178340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3d5e9b7bf656e3530c04dee5bbca3bc8c517d56' => 
    array (
      0 => 'application/views/admisi/tblBuka.html',
      1 => 1489979639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '635964035535625774f6cf1-94178340',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535625775d9d26_50950619',
  'variables' => 
  array (
    'periode' => 0,
    'jalur' => 0,
    'sql' => 0,
    'host' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535625775d9d26_50950619')) {function content_535625775d9d26_50950619($_smarty_tpl) {?><h5>Periode <?php echo $_smarty_tpl->tpl_vars['periode']->value->nama;?>
, Jalur <?php echo $_smarty_tpl->tpl_vars['jalur']->value->nama;?>
</h5>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<div class="row portfolio-block">
		<div class="col-md-2">
		  <div class="portfolio-info">
			 <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/mahasiswa/<?php echo $_smarty_tpl->tpl_vars['periode']->value->kode;?>
.<?php echo $_smarty_tpl->tpl_vars['jalur']->value->kode;?>
.<?php echo $_smarty_tpl->tpl_vars['row']->value->kode_prodi;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->kode_prodi;?>
/table" class="btn bigicn-only" style="padding:3px;" ><span><?php echo $_smarty_tpl->tpl_vars['row']->value->ini_prodi;?>
</span></a>
			   
		  </div>
	   </div>
	   <div class="col-md-3">
		  <div class="portfolio-text">
			 <div class="portfolio-text-info">
				<h4><?php echo $_smarty_tpl->tpl_vars['row']->value->nama_prodi;?>
</h4>
				<label><?php echo $_smarty_tpl->tpl_vars['row']->value->nama_buka;?>
</label><br>
				<label>Jenjang : <?php if ($_smarty_tpl->tpl_vars['row']->value->jenjang=='1'){?>S1<?php }else{ ?>S2<?php }?>, Tahun : <?php echo $_smarty_tpl->tpl_vars['row']->value->tahun;?>
</label><br>
			 </div>
		  </div>
	   </div>
	   <div class="col-md-3">
		  <div class="portfolio-text">
			<h4>Rentang Pendaftaran</h4>
			<label>Mulai : <?php echo $_smarty_tpl->tpl_vars['row']->value->hariBuka;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggalBuka;?>
</label><br>
			<label>Akhir : <?php echo $_smarty_tpl->tpl_vars['row']->value->hariTutup;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggalTutup;?>
</label><br>
		  </div>
		</div>
		<div class="col-md-1">
		   <div class="portfolio-info">
			 <a href="#" class="<?php if ($_smarty_tpl->tpl_vars['row']->value->status=='1'){?>aktif<?php }else{ ?>nonaktif<?php }?>" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_buka;?>
" name="delete"><?php if ($_smarty_tpl->tpl_vars['row']->value->status=='1'){?><span>AKTIF</span><?php }else{ ?><span style="color:#AFAF19;">TIDAK aktif</span><?php }?></a>
		   </div>
	   </div>
	   <div class="col-md-1">
		   <div class="portfolio-info">
			 <a href="#formEdit" class="editing" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_buka;?>
" data-toggle="modal"><span style="color:green;">EDIT</span></a>
		   </div>
	   </div>
	   <div class="col-md-1">
		   <div class="portfolio-info">
			 <a href="#verifikasi" class="deleting"  name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_buka;?>
" data-toggle="modal"><span style="color:red;">DELETE</span></a>
		   </div>
	   </div>
	</div>
	<?php } ?>
	<!--end row-->
 </div>
 <div class="modal fade" id="formEdit" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
	   <div class="modal-content">
		  <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			 <h4 class="modal-title">Edit Buka Pendaftaran Seleksi</h4>
		  </div>
		  <div class="modal-body">
			<div id="form"></id>							  
		  </div>
	   </div>
	  </div>
	   <!-- /.modal-content -->
	</div>
</div>
<div id="verifikasi" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog">
	   <div class="modal-content">
		  <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			 <h4 class="modal-title">Confirmation</h4>
		  </div>
		  <div id="verifikasiRuang">
		  </div>
	   </div>
	</div>
</div>
<script>

	$(".editing").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiOptBuka/edit", {'opt':opt, 'val':val},function(resp){
			$('#form').html(resp);
		});
	});
	});


$(".deleting").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiOptBuka/delete", {'opt':opt, 'val':val},function(resp){
			$('#verifikasiRuang').html(resp);
		});
	});
});


$(".nonaktif").each(function (i, v){
	$(this).click( function() {	
			id = "nonaktif";
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiOptBuka/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
			location.reload();
		});
	});
});


$(".aktif").each(function (i, v){
	$(this).click( function() {	
			id = "aktif";
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiOptBuka/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
			location.reload();
		});
	});
});

</script><?php }} ?>