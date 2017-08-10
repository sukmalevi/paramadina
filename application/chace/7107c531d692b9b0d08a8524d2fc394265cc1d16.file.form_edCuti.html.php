<?php /* Smarty version Smarty-3.1.14, created on 2013-10-21 04:00:42
         compiled from "application\views\cuti\form_edCuti.html" */ ?>
<?php /*%%SmartyHeaderCode:260615236c32d475a00-27091057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7107c531d692b9b0d08a8524d2fc394265cc1d16' => 
    array (
      0 => 'application\\views\\cuti\\form_edCuti.html',
      1 => 1382328031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260615236c32d475a00-27091057',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5236c32d64bd23_60837030',
  'variables' => 
  array (
    'host' => 0,
    'eCuti' => 0,
    'jcuti' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5236c32d64bd23_60837030')) {function content_5236c32d64bd23_60837030($_smarty_tpl) {?><script>
$(function () {
        $('#datetimepicker5').datetimepicker({
            pickTime: false
        });
		$('#datetimepicker1').datetimepicker({
            pickTime: false
        });
    });
	$(function () {
        $('#datetimepicker51').datetimepicker({
            pickTime: false

        });
    });		  
$(function () {
	$('#data-table').dataTable({
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>"
    });
});
</script>	
					<div class="content-widgets light-gray">
						<div class="widget-head brown">
							<h3>Form Edit Pengajuan Cuti
							<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cuti/tabelCuti" id="minus" style="float:right"><i class="icon-minus"></i></a>
							</h3>
						</div>
									<div class="widget-container">
										<form class="form-horizontal" name="marketer" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cuti/editCuti/update" id="marketer" method="post">
											<div class="control-group">
											<input type="text" name="id" id="id" style="display:none" value="<?php echo $_smarty_tpl->tpl_vars['eCuti']->value->id_cuti;?>
">
												<label class="control-label" >Nama</label>
												<div class="controls">
													<input type="text" name="id_peg" id="id_peg" style="display:none" value="<?php echo $_smarty_tpl->tpl_vars['eCuti']->value->id_pegawai;?>
">
													<label class="right-label" id="nama" style="width:255px"><?php echo $_smarty_tpl->tpl_vars['eCuti']->value->nama;?>
</label>
												</div>
												<label class="control-label" >Bagian</label>
												<div class="controls">
													<label class="right-label" id="depart"><?php echo $_smarty_tpl->tpl_vars['eCuti']->value->depart;?>
</label>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Jabatan</label>
												<div class="controls">
													<label class="right-label" id="jabatan"><?php echo $_smarty_tpl->tpl_vars['eCuti']->value->jabatan;?>
</label>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Jenis Cuti</label>
												<div class="controls">
													<select data-placeholder="Departemen" class="span" tabindex="2" name="jenis_cuti" id="jenis_cuti">												
														<option value="<?php echo $_smarty_tpl->tpl_vars['eCuti']->value->id_jenis_cuti;?>
"><?php echo $_smarty_tpl->tpl_vars['eCuti']->value->jenis_cuti;?>
</option>
														<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jcuti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_jenis_cuti;?>
" ><?php echo $_smarty_tpl->tpl_vars['row']->value->jenis_cuti;?>
</option>
														<?php } ?>
													</select>
												</div>
											</div>
										<div id="cuti_utama">
										<div id="cuti_utama">
											<div class="control-group">
												<label class="control-label">Periode Cuti</label>
												<div class="controls">
													<div id="datetimepicker5" class="input-append date ">
														<input data-format="yyyy-MM-dd" type="text" name="tgl_mulai" id="tgl_mulai" value="<?php echo $_smarty_tpl->tpl_vars['eCuti']->value->tgl_cuti;?>
"><span class="add-on "><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
													</div> s.d.
													<div id="datetimepicker51" class="input-append date ">
														<input data-format="yyyy-MM-dd" type="text" name="tgl_selesai" id="tgl_selesai" value="<?php echo $_smarty_tpl->tpl_vars['eCuti']->value->tgl_selesai_cuti;?>
"><span class="add-on "><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
													</div>
												</div>
											</div><!-- 
											<div class="control-group">
												<label class="control-label" >Jumlah Hari</label>
												<div class="controls">
													<input type="text" name="total" id="total" value="5">
												</div>
											</div> -->
											<div class="control-group">
												<label class="control-label" >Kembali Bekerja</label>
												<div class="controls">
													<div id="datetimepicker1" class="input-append date ">
														<input data-format="yyyy-MM-dd" type="text" name="tgl_kembali" id="tgl_kembali" value="<?php echo $_smarty_tpl->tpl_vars['eCuti']->value->tgl_kembali;?>
"><span class="add-on "><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
													</div>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Alasan</label>
												<div class="controls">										
													<textarea rows="4" class="span5" cols="50" name="alasan" id="alasan"><?php echo $_smarty_tpl->tpl_vars['eCuti']->value->alasan;?>
</textarea>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Alamat Sewaktu Cuti</label>
												<div class="controls">										
													<textarea rows="2" class="span5" cols="50" name="al_cuti" id="al_cuti"><?php echo $_smarty_tpl->tpl_vars['eCuti']->value->alamat_cuti;?>
</textarea>
												</div>
											</div>
										</div>
												<button type="submit" class="btn btn-success" name="save" id="save" value="save">Update</button>
												<button type="reset" class="btn">Reset</button>
										
										</form>
									</div>
						</div>
<?php }} ?>