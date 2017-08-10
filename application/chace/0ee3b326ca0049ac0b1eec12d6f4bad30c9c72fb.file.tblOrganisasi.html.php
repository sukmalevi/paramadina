<?php /* Smarty version Smarty-3.1.14, created on 2016-11-15 10:08:14
         compiled from "application/views/portal/tblOrganisasi.html" */ ?>
<?php /*%%SmartyHeaderCode:166469976953630784e09c69-91719685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ee3b326ca0049ac0b1eec12d6f4bad30c9c72fb' => 
    array (
      0 => 'application/views/portal/tblOrganisasi.html',
      1 => 1476955281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166469976953630784e09c69-91719685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53630784e45473_71129300',
  'variables' => 
  array (
    'organisasi' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53630784e45473_71129300')) {function content_53630784e45473_71129300($_smarty_tpl) {?><div class="col-md-12">
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
					  <td><a class="delete" data-toggle="modal" href="#" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" name="delete">Delete</a></td>
			   </tr>
			<?php } ?>
			</tbody>
	 </table>
</div>
<script>

$(".delete").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
			id= "tambahOrg";
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/prestasi/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
			id= "tambahOrg";
			$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/prestasi",{'id':id},function(resp){
					$('.tblKeluarga').html(resp);
				});	
		});
	});
});

</script><?php }} ?>