<?php /* Smarty version Smarty-3.1.14, created on 2016-11-15 10:08:14
         compiled from "application/views/portal/tblPrestasi.html" */ ?>
<?php /*%%SmartyHeaderCode:201262922153630784dd76c8-05275665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '510b8b26789f1ff4a03b25ea0c479d3cbb2449fa' => 
    array (
      0 => 'application/views/portal/tblPrestasi.html',
      1 => 1476955262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201262922153630784dd76c8-05275665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53630784e07621_10542556',
  'variables' => 
  array (
    'prestasi' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53630784e07621_10542556')) {function content_53630784e07621_10542556($_smarty_tpl) {?><div class="col-md-12">
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