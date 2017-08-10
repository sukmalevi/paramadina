<?php /* Smarty version Smarty-3.1.14, created on 2013-11-01 06:20:56
         compiled from "application\views\master\tbl_period_kerja.html" */ ?>
<?php /*%%SmartyHeaderCode:69527331f59d6aa9-49690685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f31a76617e8ae56b020f8b8d714611c80734a26' => 
    array (
      0 => 'application\\views\\master\\tbl_period_kerja.html',
      1 => 1383286854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69527331f59d6aa9-49690685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527331f5be8251_18220642',
  'variables' => 
  array (
    'host' => 0,
    'periode_cuti' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527331f5be8251_18220642')) {function content_527331f5be8251_18220642($_smarty_tpl) {?><script>	  
$(function () {
    $('#data-table').dataTable({
        "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>"
    });
});
$(function () {
        $('#datetimepicker5').datetimepicker({
            pickTime: false
        });
		$('#datetimepicker1').datetimepicker({
            pickTime: false
        });
    });
</script>	


					<div class="primary-head">
						<h3 class="page-header">Periode Kerja </h3>
					</div>
			<div id="master">
				<div id="form" style="display:none">
							<div class="content-widgets light-gray">
								<div class="widget-head riscon-orange">
									<h3>Tambah Periode 
										<a href="#" id="minus" style="float:right" onClick="doForm(1)"><i class="icon-minus"></i></a>
									</h3>
								</div>
								<div class="widget-container">
									<form class="form-horizontal" name="marketer" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/addPeriode" id="marketer" method="post">
										<div class="control-group">
											<label class="control-label" >Periode Tahun</label>
											<div class="controls">
												<input type="text" placeholder="Periode Tahun Cuti" class="span4" name="periode" id="periode" class="required">
											</div>
										</div>
										<div class="control-group">
												<label class="control-label">Periode Cuti</label>
												<div class="controls">
													<div id="datetimepicker5" class="input-append date ">
														<input data-format="yyyy-MM-dd" placeholder="Tanggal Mulai" type="text" name="tgl_cuti" id="tgl_cuti" ><span class="add-on "><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
													</div> s.d.
													<div id="datetimepicker1" class="input-append date ">
														<input data-format="yyyy-MM-dd" placeholder="Tanggal Selesai" type="text" name="tgl_selesai_cuti" id="tgl_selesai_cuti"><span class="add-on "><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
													</div>
												</div>
										</div>
											<div class="control-group">
												<label class="control-label" >Status Cuti</label>
												<div class="controls">
													<select data-placeholder="Departemen" class="span" tabindex="2" name="status_periode" id="status_periode">												
														<option value="0">Tidak Aktif</option>	
														<option value="1">Aktif</option>
														<option value="2">Selesai</option>
													</select>
												</div>
											</div>
											<button type="submit" class="btn btn-success" name="save" id="save" value="save">Save</button>
											<a class="btn btn-warning" name="cancel" id="cancel" value="cancel" onClick="doForm(1)">Cancel</a>
											<button type="reset" class="btn">Reset</button>
									</form>
								</div>
							</div>
				</div>
				<div id="tabel">
					<div class="content-widgets light-gray">
						<div class="widget-head bondi-blue">
							<h3>Daftar Periode Kerja
								<a href="#" id="minus" style="float:right" onClick="doForm(0)"><i class="icon-plus "></i></a>
							</h3>
						</div>
						<div class="widget-container" >	
							<table class="responsive table table-striped table-bordered" id="data-table" >
							<thead>
							<tr>
								<th>
									 Periode Cuti
								</th>
								<th>
									 Mulai
								</th>
								<th>
									 Selesai
								</th>
								<th>
									 Status Cuti
								</th>
								<td class="action" ></td>
							</tr>
							</thead>
							<tbody>
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode_cuti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<tr>
								<td>
									Periode Cuti Tahun <?php echo $_smarty_tpl->tpl_vars['row']->value->periode_cuti;?>

								</td>
								<td>
									 <?php echo $_smarty_tpl->tpl_vars['row']->value->tgl_mulai;?>

								</td>
								<td>
									 <?php echo $_smarty_tpl->tpl_vars['row']->value->tgl_akhir;?>

								</td>
								<td style="text-align:center">
									 <?php if ($_smarty_tpl->tpl_vars['row']->value->isActive=='0'){?>Tidak Aktif<?php }elseif($_smarty_tpl->tpl_vars['row']->value->isActive=='1'){?>Aktif<?php }else{ ?>Selesai<?php }?>
								</td>
								<td class="center" style="text-align:center">
									 <div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li>
											<a href="#" class = "edit" name="edit" id="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_periode;?>
">Edit</a>
											</li>
											<li>
											<a href="#" class = "hapus" name="hapus" id="hapus" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_periode;?>
">Hapus</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>	
							<?php } ?>
							</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div id="lain">
			</div>
<script type="text/javascript">
	function doForm(a){
	if (a == 1){
		document.getElementById('form').style.display = 'none';
		document.getElementById('tabel').style.display = 'block';
		}
	else{
		document.getElementById('form').style.display = 'block';
		document.getElementById('tabel').style.display = 'none';
		}
	}

		$(".hapus").each(function (i, v){
			$(this).click(function(){	
				var id = $(this).attr("value");
				if (confirm("Are you sure?")) {
					$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/delCuti/delete", {'id':id});
					//$(location).attr('href',"<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterCuti");
					window.setTimeout(function() {
						window.location.href = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterCuti';
					}, 500);
				}				
				return false;
				});
			});
	
		$(".edit").each(function (i, v){
			$(this).click(function(){	
				var id = $(this).attr("value");
				var nama = $(this).attr("name");
				$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterCuti/edit", {'id':id},function(resp){
					$('#master').hide();
					$('#lain').html(resp);
				});								
			});
		});
	
</script><?php }} ?>