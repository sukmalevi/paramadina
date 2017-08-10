<?php /* Smarty version Smarty-3.1.14, created on 2014-01-07 15:47:41
         compiled from "application\views\portal\tblOrganisasi.html" */ ?>
<?php /*%%SmartyHeaderCode:495552cc1e124dd680-50555044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '188f7a9389a62b0cfcc691d683ea0be0d963592f' => 
    array (
      0 => 'application\\views\\portal\\tblOrganisasi.html',
      1 => 1389109011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '495552cc1e124dd680-50555044',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cc1e125b7b47_89339272',
  'variables' => 
  array (
    'organisasi' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cc1e125b7b47_89339272')) {function content_52cc1e125b7b47_89339272($_smarty_tpl) {?>												<div class="col-md-12">
												   <!-- BEGIN EXAMPLE TABLE PORTLET-->
												   <div class="portlet box purple">
													  <div class="portlet-title">
														 <div class="tools">
															<a href="javascript:;" class="collapse"></a>
															<a href="javascript:;" class="remove"></a>
														 </div>
													  </div>
													  <div class="portlet-body">
														 <div class="table-toolbar">
														 </div>
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
												   </div>
												   <!-- END EXAMPLE TABLE PORTLET-->
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