<?php /* Smarty version Smarty-3.1.14, created on 2013-11-04 04:16:09
         compiled from "application\views\cuti\form_cuti.html" */ ?>
<?php /*%%SmartyHeaderCode:1675152294a6f431ec1-17473134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2641b47e30faaa08c4673bb0c2ffa5c3996f24cc' => 
    array (
      0 => 'application\\views\\cuti\\form_cuti.html',
      1 => 1383538440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1675152294a6f431ec1-17473134',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52294a6f505b53_39211664',
  'variables' => 
  array (
    'host' => 0,
    'pegawai' => 0,
    'atasan' => 0,
    'row' => 0,
    'tahun' => 0,
    'jcuti' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52294a6f505b53_39211664')) {function content_52294a6f505b53_39211664($_smarty_tpl) {?>
<script>
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
				<div class="primary-head">
						<h3 class="page-header">Pengajuan Cuti</h3>
					</div>
					<div class="content-widgets light-gray">
						<div class="widget-head brown">
							<h3>Form Pengajuan Cuti</h3>
						</div>
									<div class="widget-container">
										<form class="form-horizontal" name="marketer" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cuti/addCuti/save" id="marketer" method="post">
											<div class="control-group">
												<label class="control-label" >Nama</label>
												<div class="controls">
													<input type="text" name="id_peg" id="id_peg" style="display:none" value="<?php echo $_smarty_tpl->tpl_vars['pegawai']->value->id;?>
">
													<label class="right-label" id="nama" style="width:255px"><?php echo $_smarty_tpl->tpl_vars['pegawai']->value->nama;?>
</label>
												</div>
												<label class="control-label" >Bagian</label>
												<div class="controls">
													<label class="right-label" id="depart"><?php echo $_smarty_tpl->tpl_vars['pegawai']->value->depart;?>
</label>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Jabatan</label>
												<div class="controls">
													<label class="right-label" id="jabatan" style="width:255px"><?php echo $_smarty_tpl->tpl_vars['pegawai']->value->jabatan;?>
</label>
												</div>
												<label class="control-label" >Atasan</label>
												<div class="controls">
													<select data-placeholder="Atasan" class="span" tabindex="2" name="atasan" id="atasan">												
														<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['atasan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_karyawan;?>
" ><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Masa Kerja</label>
												<div class="controls">
													<label class="right-label" id="periode" name="periode" value="<?php echo $_smarty_tpl->tpl_vars['tahun']->value->id_periode;?>
" style="width:255px">Periode Tahun <?php echo $_smarty_tpl->tpl_vars['tahun']->value->periode_cuti;?>
</label>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Jenis Cuti</label>
												<div class="controls">
													<select data-placeholder="Departemen" class="span" tabindex="2" name="jenis_cuti" id="jenis_cuti">												
														<option></option>
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
														<input data-format="yyyy-MM-dd" type="text" name="tgl_mulai" id="tgl_mulai"><span class="add-on "><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
													</div> s.d.
													<div id="datetimepicker51" class="input-append date ">
														<input data-format="yyyy-MM-dd" type="text" name="tgl_selesai" id="tgl_selesai"><span class="add-on "><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
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
														<input data-format="yyyy-MM-dd" type="text" name="tgl_kembali" id="tgl_kembali"><span class="add-on "><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
													</div>  Total Cuti 
													<input type="text" name="total_cuti" id="total_cuti" name="total_cuti" class="span1"><b> Hari</b>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Alasan</label>
												<div class="controls">										
													<textarea rows="4" class="span5" cols="50" name="alasan" id="alasan"></textarea>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Alamat Sewaktu Cuti</label>
												<div class="controls">										
													<textarea rows="2" class="span5" cols="50" name="al_cuti" id="al_cuti"></textarea>
												</div>
											</div>
										</div>
												<button type="submit" class="btn btn-success" name="save" id="save" value="save">Save</button>
												<button type="reset" class="btn">Reset</button>
										
										</form>
									</div>
						</div>

<script type="text/javascript">
$(document).ready(function(){
		$("#datetimepicker5s, #datetimepicker51s").on('changeDate',function(ev){
		var d1 = $('#tgl_mulai').datepicker('getDate'), 
		d2 = $('#tgl_selesai').datepicker('getDate'),
		diff=0;
		
		alert(d2);
		
		d1 = Date.parse(d1);
		d2 = Date.parse(d2);
			diff = Math.floor((d2.getTime() - d1.getTime()) / 86400000);
		
		alert(diff);
		});
	});
</script><?php }} ?>