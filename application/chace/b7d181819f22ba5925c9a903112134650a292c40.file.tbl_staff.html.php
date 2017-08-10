<?php /* Smarty version Smarty-3.1.14, created on 2013-09-06 01:38:22
         compiled from "application\views\cuti\tbl_staff.html" */ ?>
<?php /*%%SmartyHeaderCode:761652284eddc6fda5-52962177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d181819f22ba5925c9a903112134650a292c40' => 
    array (
      0 => 'application\\views\\cuti\\tbl_staff.html',
      1 => 1378431499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '761652284eddc6fda5-52962177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52284eddd43140_83950632',
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52284eddd43140_83950632')) {function content_52284eddd43140_83950632($_smarty_tpl) {?>
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
            $(function () {
                $('.tbl-simple').dataTable({
                    "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>"
                });
            });
			
			$(function () {
			$(".tbl-paper-theme").tablecloth({
          theme: "paper"
		   });
			});
			
		$(function () {
			$(".tbl-dark-theme").tablecloth({
          theme: "dark"
		   });
		});
			$(function () {
                $('.tbl-paper-theme,.tbl-dark-theme').dataTable({
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
administrator/pekerjaan/save" id="marketer" method="post">
											<div class="control-group">
												<label class="control-label" >Nama</label>
												<div class="controls">
													<label class="right-label" >Irlan Nugraha</label>
												</div>
												<label class="control-label" >Bagian</label>
												<div class="controls">
													<label class="right-label" >Divisi Teknologi Informasi</label>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Jabatan</label>
												<div class="controls">
													<label class="right-label" >Direktur Akademik</label>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Jenis Cuti</label>
												<div class="controls">
													<label class="right-label" >Cuti Tahunan</label>
												</div>
											</div>											
											<div class="control-group">
												<label class="control-label">Periode Cuti</label>
												<div class="controls">
													<div id="datetimepicker5" class="input-append date ">
														<input data-format="yyyy-MM-dd" type="text" name="tgl_booking_fee"><span class="add-on "><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
													</div> s.d.
													<div id="datetimepicker51" class="input-append date ">
														<input data-format="yyyy-MM-dd" type="text" name="tgl_booking_fee"><span class="add-on "><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
													</div>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Jumlah Hari</label>
												<div class="controls">
													<label class="right-label" >5 Hari</label>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Kembali Bekerja</label>
												<div class="controls">
													<div id="datetimepicker1" class="input-append date ">
														<input data-format="yyyy-MM-dd" type="text" name="tgl_booking_fee"><span class="add-on "><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
													</div>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Alasan</label>
												<div class="controls">										
													<textarea rows="4" class="span5" cols="50" name="ket"></textarea>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" >Alamat Sewaktu Cuti</label>
												<div class="controls">										
													<textarea rows="2" class="span5" cols="50" name="ket"></textarea>
												</div>
											</div>
												<button type="submit" class="btn btn-success" name="save" id="save" value="save">Save</button>
												<button type="reset" class="btn">Reset</button>
										</form>
									</div>
						</div>

	<script type="text/javascript">
	
		$(document).ready(function(){
		id_proyek = $('#id_proyek').text();
			$('#edit').click(function(){
				$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
home/proyekForm", {'id':id_proyek});
				});
			});
	
		$("#tambah").off();
		$("#tambah").on("click",function(e){
            $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
home/proyekForm/tambah",{},function(resp){
                $('#isi').html(resp);			
            });
        });
	
	</script><?php }} ?>