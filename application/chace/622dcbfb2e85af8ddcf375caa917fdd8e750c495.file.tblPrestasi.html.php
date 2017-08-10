<?php /* Smarty version Smarty-3.1.14, created on 2014-05-08 15:17:27
         compiled from "application/views/smb/tblPrestasi.html" */ ?>
<?php /*%%SmartyHeaderCode:997183232536b3d97b09b63-57968302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '622dcbfb2e85af8ddcf375caa917fdd8e750c495' => 
    array (
      0 => 'application/views/smb/tblPrestasi.html',
      1 => 1399532321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '997183232536b3d97b09b63-57968302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prestasi' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536b3d97b265c7_44097137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536b3d97b265c7_44097137')) {function content_536b3d97b265c7_44097137($_smarty_tpl) {?>												<div class="col-md-12">
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
															   </tr>
															<?php } ?>
															</tbody>
														 </table>
													  </div>
												   </div>
												   <!-- END EXAMPLE TABLE PORTLET-->
												</div><?php }} ?>