<?php /* Smarty version Smarty-3.1.14, created on 2014-01-07 15:47:33
         compiled from "application\views\portal\tblPrestasi.html" */ ?>
<?php /*%%SmartyHeaderCode:1187052cc1c7974dc97-94381240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a18bd0fcd542a25edfb6dd6573b2299847d87928' => 
    array (
      0 => 'application\\views\\portal\\tblPrestasi.html',
      1 => 1389109449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1187052cc1c7974dc97-94381240',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cc1c7981a451_90864921',
  'variables' => 
  array (
    'prestasi' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cc1c7981a451_90864921')) {function content_52cc1c7981a451_90864921($_smarty_tpl) {?>												<div class="col-md-12">
												   <!-- BEGIN EXAMPLE TABLE PORTLET-->
												   <div class="portlet box grey">
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
																  <th>Nama Penghargaan</th>
																  <th>Intuisi Pemberi</th>
																  <th>Tahun</th>				  
																  <th>Hapus</th>
															   </tr>
															</thead>
															<tbody>
															<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prestasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
															   <tr >
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->namaPrestasi;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->namaInstitusi;?>
</td>
																  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tahun;?>
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
			id= "tambahPres";
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/prestasi/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
			id= "tambahPres";
			$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/prestasi",{'id':id},function(resp){
					$('.tblKeluarga').html(resp);
				});	
		});
	});
});

</script><?php }} ?>