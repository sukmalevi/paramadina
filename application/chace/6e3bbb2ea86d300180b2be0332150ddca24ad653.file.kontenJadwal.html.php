<?php /* Smarty version Smarty-3.1.14, created on 2017-03-27 13:44:07
         compiled from "application/views/admisi/kontenJadwal.html" */ ?>
<?php /*%%SmartyHeaderCode:157281090253562576c10451-92673123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e3bbb2ea86d300180b2be0332150ddca24ad653' => 
    array (
      0 => 'application/views/admisi/kontenJadwal.html',
      1 => 1489983001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157281090253562576c10451-92673123',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53562576ca44a6_63155968',
  'variables' => 
  array (
    'periode' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53562576ca44a6_63155968')) {function content_53562576ca44a6_63155968($_smarty_tpl) {?>	<div class="tab-pane" id="tab_1_4">
		<div class="row">
		   <div class="col-md-12">
			  <div class="add-portfolio" style="margin-bottom:10px">
				 <span>Buka Penyelenggaraan Seleksi Universitas Paramadina</span>  
				<a href="#add" class="btn" style="float:right;" data-toggle="modal"><i class="icon-plus"> </i> Tambah</a>
			  </div>							  
				<div class="col-md-12" style="margin-bottom:10px;margin-left: -13px;">
					<select  class="form-control" name="periode" id="periode">
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
							<?php } ?>
					</select>
				</div>
				<div id="selectJalur"></div>
		   </div>						   
		</div>
		<div id="tblJadwal" name="tblJadwal">
		</div>
	<div class="modal fade" id="add" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog">
		   <div class="modal-content">
			  <div class="modal-header">
				 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				 <h4 class="modal-title">Tambah Jalur Seleksi</h4>
			  </div>
			  <div class="modal-body">
				<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiOptBuka/add" class="form-horizontal" method="post">
					<div class="form-body">
						  <div class="form-group">
							 <label  class="control-label col-md-3">Kode</label>
							 <div class="input-group col-md-6">
								<input type="text" class="form-control" placeholder="Kode[Automatic]" id="kode" name="kode" disabled>
							 </div>
						  </div>
						  <div class="form-group">
							<label  class="control-label col-md-3">Periode</label>
								<div class="col-md-9">
									<select class="form-control" id="fPeriode"  name="periode" class="periode" onchange="selectForm('fPeriode')">
										<option>Pilih Periode</option>
										<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
							<label  class="control-label col-md-3">Program Studi</label>
								<div class="col-md-9">
									<select class="form-control" id="fProdi"  name="prodi" class="prodi">
										
									</select>
								</div>
						  </div>
						  <div class="form-group">
							<label  class="control-label col-md-3">Jalur</label>
								<div class="col-md-9">
									<select class="form-control" id="fJalur"  name="jalur" class="jalur">
										
									</select>
								</div>
						  </div>
						   <div class="form-group">
							  <label class="control-label col-md-3">Date Range</label>
							  <div class="col-md-4">
								 <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
									<input type="text" class="form-control" name="from">
									<span class="input-group-addon">to</span>
									<input type="text" class="form-control" name="to">
								 </div>
								 <!-- /input-group -->
								 <span class="help-block">Select date range</span>
							  </div>
						   </div>
						  <div class="form-group">
							 <label  class="control-label col-md-3">Nama</label>
							 <div class="input-group col-md-9">
								<input type="text" class="form-control" placeholder="Nama [Automatic]" id="nama" name="nama" disabled>
							 </div>
						  </div>
						  <div class="form-group">
							<label  class="control-label col-md-3">Status</label>
								<div class="col-md-9">
									<select class="form-control" id="status"  name="status" class="status">
										<option value="1">AKTIF</option>
										<option value="0">TIDAK AKTIF</option>
									</select>
								</div>
						  </div>
					  <div class="modal-footer">
						 <button type="button" class="btn default" data-dismiss="modal">Close</button>
						 <button type="submit" class="btn blue" id="save" value="add" name="opt"> Tambah <i class="icon-plus"></i></a>
					  </div>
				</form>
			  </div>
		   </div>
		  </div>
		   <!-- /.modal-content -->
	</div>
</div>
	

<script>
jQuery(document).ready(function() {       
         // initiate layout and plugins
         FormComponents.init();
		 id = "admisiBukaSeleksi";
		 $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiJalur",{
					'periode':$('#periode').val(), 'fungsi':id					
				},function(resp){
                $('#selectJalur').html(resp);
            });
      });

	$("#periode").change(function(){
		id = "admisiBukaSeleksi";
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiJalur",{
					'periode':$('#periode').val(), 'fungsi':id					
				},function(resp){
                $('#selectJalur').html(resp);
            });
	});
	function selectForm(method, target){
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/selectForm/"+method,{'kode':$('#'+method).val(),'target':'prodi'},function(resp){
				$('#fProdi').html(resp);
            });
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/selectForm/"+method,{'kode':$('#'+method).val(),'target':'jalur'},function(resp){
				$('#fJalur').html(resp);
            });
	}
</script>

  <?php }} ?>