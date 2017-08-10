<?php /* Smarty version Smarty-3.1.14, created on 2013-11-04 04:57:57
         compiled from "application\views\cuti\tabel_cuti.html" */ ?>
<?php /*%%SmartyHeaderCode:2871052313052545c55-45826846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fae4411c551da667ac68bc99c2686a945308c70c' => 
    array (
      0 => 'application\\views\\cuti\\tabel_cuti.html',
      1 => 1383541071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2871052313052545c55-45826846',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523130525be544_11891032',
  'variables' => 
  array (
    'nama' => 0,
    'dCuti' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523130525be544_11891032')) {function content_523130525be544_11891032($_smarty_tpl) {?>	<div class="primary-head">
		<h3 class="page-header">Pengajuan Cuti</h3>
	</div>
<div id="status">
</div>
<div id="tabel">	
	<div class="content-widgets light-gray" style="min-height:550px">		
		<div class="widget-head brown">
			<h3>DAFTAR CUTI KARYAWAN/DOSEN</h3>
		</div>
		<div style="position: inherit;text-align:center;height:50px">
		</div>
		<h4 class="widget-header" style="width:95%;margin-left:25px">Riwayat Cuti - <?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</h4>
			<table class="table table-hover responsive" style="width:95%;margin-left:25px">
				<thead>
				<tr>
					<th>Tanggal Cuti</th>
					<th>Jenis Cuti</th>
					<th>Jumlah Hari</th>
					<th>Alasan</th>
					<th>Approved</th>
					<th>Actions</th>
				</tr>
				</thead>
				<tbody>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dCuti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr>
					<td><a href="#" class="row" id="row" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_cuti;?>
"><label><?php echo $_smarty_tpl->tpl_vars['row']->value->tgl_cuti;?>
 <b>s.d</b> <?php echo $_smarty_tpl->tpl_vars['row']->value->tgl_selesai_cuti;?>
</label></a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->jenis_cuti;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->jumlah_cuti;?>
 hari</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->alasan;?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value->isApproved=='0'){?>Belum<?php }elseif($_smarty_tpl->tpl_vars['row']->value->isApproved=='1'){?>Ya<?php }else{ ?>Tidak<?php }?></td>
					<td class="center">
						<div class="btn-group">
							<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li>
									<a href="#" class="edit" id="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_cuti;?>
">Edit</a>
									</li>
									<li>
									<a href="#" class="hapus" id="hapus" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_cuti;?>
">Hapus</a>
									</li>
									<li>
									<a href="#" class="pass" id="pass" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_cuti;?>
" name="<?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
">Ubah Password</a>
									</li>
								</ul>
						</div>
					</td>
				</tr>
				<?php } ?>
				<tr><td colspan="5"></td></tr>
				<tr>
					<td colspan="4"><b>Total Cuti Yang Diambil</b></td>
					<td>4</td>
				</tr>
				<tr>
					<td colspan="4"><b>Sisa Cuti Tahunan</b></td>
					<td>4</td>
				</tr>
				</tbody>
			</table>
	</div>
</div>
<script>

		$(".row").each(function (i, v){
			$(this).click(function(){	
				var id = $(this).attr("value");
				
				$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cuti/statusPengajuan", {'id':id},function(resp){
					$('#tabel').hide();
					$('#status').html(resp);					
					});
				});
			});


		$(".edit").each(function (i, v){
			$(this).click(function(){	
				var id = $(this).attr("value");				
				//alert(i + "id :" + cob);
				$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cuti/editCuti", {'id':id},function(resp){
					$('#tabel').hide();
					$('#status').html(resp);					
					});
				});
			});


		$(".hapus").each(function (i, v){
			$(this).click(function(){	
				var id = $(this).attr("value");
				if (confirm("Are you sure?")) {
					$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cuti/delCuti/delete", {'id':id});
					window.setTimeout(function() {
						window.location.href = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cuti/tabelCuti';
					}, 500);
				}
				return false;
				});
			});

</script><?php }} ?>