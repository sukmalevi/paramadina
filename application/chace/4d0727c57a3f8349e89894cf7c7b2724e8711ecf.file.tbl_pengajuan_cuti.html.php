<?php /* Smarty version Smarty-3.1.14, created on 2013-11-06 15:31:40
         compiled from "application\views\cuti\tbl_pengajuan_cuti.html" */ ?>
<?php /*%%SmartyHeaderCode:10928527725b9daa930-64769009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d0727c57a3f8349e89894cf7c7b2724e8711ecf' => 
    array (
      0 => 'application\\views\\cuti\\tbl_pengajuan_cuti.html',
      1 => 1383751898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10928527725b9daa930-64769009',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527725b9f40cb8_07548559',
  'variables' => 
  array (
    'dCuti' => 0,
    'row' => 0,
    'page' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527725b9f40cb8_07548559')) {function content_527725b9f40cb8_07548559($_smarty_tpl) {?>	<div class="primary-head">
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
		<h4 class="widget-header" style="width:95%;margin-left:25px">Tabel Pengajuan Cuti Karyawan</h4>
			<table class="table table-hover responsive" style="width:95%;margin-left:25px">
				<thead>
				<tr>
					<th>Nama</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</td>
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
									<a href="#" class="setuju" id="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_cuti;?>
">Setuju</a>
									</li>
									<li>
									<a href="#" class="tidak" id="hapus" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_cuti;?>
">Tidak Setuju</a>
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
				</tbody>
			</table>
			<div class="halaman">Halaman : <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 </div>
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


		$(".setuju").each(function (i, v){
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


		$(".tidak").each(function (i, v){
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