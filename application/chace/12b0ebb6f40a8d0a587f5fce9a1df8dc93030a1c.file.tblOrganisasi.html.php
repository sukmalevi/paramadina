<?php /* Smarty version Smarty-3.1.14, created on 2014-05-08 15:17:27
         compiled from "application/views/smb/tblOrganisasi.html" */ ?>
<?php /*%%SmartyHeaderCode:2000519812536b3d97b28982-23878732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12b0ebb6f40a8d0a587f5fce9a1df8dc93030a1c' => 
    array (
      0 => 'application/views/smb/tblOrganisasi.html',
      1 => 1399532321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2000519812536b3d97b28982-23878732',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'organisasi' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536b3d97b52138_21743148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536b3d97b52138_21743148')) {function content_536b3d97b52138_21743148($_smarty_tpl) {?>												<div class="col-md-12">
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
															   </tr>
															<?php } ?>
															</tbody>
														 </table>
													  </div>
												   </div>
												   <!-- END EXAMPLE TABLE PORTLET-->
												</div><?php }} ?>