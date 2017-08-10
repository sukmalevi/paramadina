<?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 09:36:14
         compiled from "application\views\master\tbl_staff.html" */ ?>
<?php /*%%SmartyHeaderCode:14685228114b3830e2-36880148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edb71ce202f86b1f317ac25fec152a0849c4d351' => 
    array (
      0 => 'application\\views\\master\\tbl_staff.html',
      1 => 1378978505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14685228114b3830e2-36880148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5228114b4d3d85_70582894',
  'variables' => 
  array (
    'host' => 0,
    'depart' => 0,
    'row' => 0,
    'jabatan' => 0,
    'pegawai' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5228114b4d3d85_70582894')) {function content_5228114b4d3d85_70582894($_smarty_tpl) {?>
<script>		  
$(function () {
	$('#data-table').dataTable({
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>"
       });
    });
</script>	

	<div class="primary-head">
		<h3 class="page-header">Master Data Pegawai</h3>
	</div>
		<div id="editForm">
		</div>
		<div id="master">
			<div id="form" style="display:none">
					<div class="content-widgets light-gray">
						<div class="widget-head green">
							<h3>Form Pegawai Paramadina
								<a href="#" id="minus" style="float:right" onClick="doForm(1)"><i class="icon-minus"></i></a>
							</h3>
						</div>
						<div class="widget-container">
							<form class="form-horizontal" name="marketer" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/addPegawai/save" id="marketer" method="post">
								<div class="control-group">
									<label class="control-label" >Nama</label>
									<div class="controls">
										<input type="text" placeholder="Nama Pegawai" class="span4" name="nama" id="nama" class="required">
										<input type="text" placeholder="Inisial" class="span1" name="inisial" id="inisial" class="required">									
									</div>										
								</div>
								<div class="control-group">
									<label class="control-label" >Departemen</label>
									<div class="controls">
										<select data-placeholder="Departemen" class="span4" tabindex="2" name="depart" id="depart">	
											<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['depart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->acadept_uid;?>
" ><?php echo $_smarty_tpl->tpl_vars['row']->value->description;?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="control-group">	
									<label class="control-label" >Jabatan</label>
									<div class="controls">
										<select data-placeholder="Jabatan" class="span4" tabindex="2" name="jabatan" id="jabatan">	
											<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jabatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->acajbt_uid;?>
" ><?php echo $_smarty_tpl->tpl_vars['row']->value->description;?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" >Alamat</label>
									<div class="controls">
										<input type="text" placeholder="Alamat" class="span7" name="alamat" id="alamat" class="required">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" >NIP</label>
									<div class="controls">
										<input type="text" placeholder="Nomor Induk Pegawai" class="span3" name="nip" id="nip" class="required">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" >Email</label>
									<div class="controls">
										<input type="email" placeholder="Alamat Email" class="span4" name="email" id="email" class="required">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" >No Telp</label>
									<div class="controls">
										<input type="text" placeholder="No Telp" class="span4" name="telp" id="telp" class="required">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" >No HP</label>
									<div class="controls">
										<input type="text" placeholder="No HP" class="span4" name="hp" id="hp" class="required">
									</div>
								</div>
									<button type="submit" class="btn btn-success" name="save" id="save" value="save" onClick="saveForm()">Save</button>
									<button type="reset" class="btn">Reset</button>
									<button class="btn btn-inverse" name="cancel" id="cancel" value="cancel" onClick="saveForm()">Cancel</button>
							</form>
						</div>
					</div>
				</div>
				<div id="tabel">
					<div class="content-widgets light-gray">
						<div class="widget-head bondi-blue">
							<h3>Daftar Pegawai Paramadina
								<a href="#" id="tambah" style="float:right" onClick="doForm(2)"><i class="icon-plus "></i></a>
							</h3>
						</div>
						<div class="widget-container" >	
							<table class="responsive table table-striped table-bordered" id="data-table" >
							<thead>
							<tr>
								<th style="display:none">
									 ID
								</th>
								<th>
									 Nama Pegawai
								</th>
								<th>
									 Inisial
								</th>
								<th>
									 NIP
								</th>
								<th>
									 Departemen
								</th>
								<th>
									 Jabatan
								</th>
								<td class="action" ></td>
							</tr>
							</thead>
							<tbody>
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pegawai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<tr id="tr">
								<td style="display:none" id="nip" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
">
									<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>

								</td>
								<td>
									<a href="#" class="nama"> <?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</a>
								</td>								
								<td>
									 <?php echo $_smarty_tpl->tpl_vars['row']->value->inisial;?>

								</td>								
								<td >
									 <?php echo $_smarty_tpl->tpl_vars['row']->value->personal_NIP;?>

								</td>								
								<td >
									 <?php echo $_smarty_tpl->tpl_vars['row']->value->depart;?>

								</td>
								<td>
									 <?php echo $_smarty_tpl->tpl_vars['row']->value->jabatan;?>

								</td>
								<td class="center">
									 <div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li>
											<a href="#" class="edit" id="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
">Edit</a>
											</li>
											<li>
											<a href="#" class="hapus" id="hapus" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
">Hapus</a>
											</li>
											<li>
											<a href="#" class="pass" id="pass" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" name="<?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
">Ubah Password</a>
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
</script>
<script>

		$(".edit").each(function (i, v){
			$(this).click(function(){	
				var nipid = $("#data-table #nip").attr("value");
				var id = $(this).attr("value");
				
				//alert(i + "id :" + cob);
				$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/editMaster/form", {'id':id},function(resp){
					$('#master').hide();
					$('#editForm').html(resp);					
					});
				});
			});
	
		$(".hapus").each(function (i, v){
			$(this).click(function(){	
				var id = $(this).attr("value");
				if (confirm("Are you sure?")) {
					$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/delPegawai/delete", {'id':id});
				}
				return false;
				});
			});
	
		$(".pass").each(function (i, v){
			$(this).click(function(){	
				var id = $(this).attr("value");
				var nama = $(this).attr("name");
				$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/ubahUser", {'id':id, 'nama':nama},function(resp){
					$('#master').hide();
					$('#editForm').html(resp);
				});								
			});
		});
	
</script><?php }} ?>