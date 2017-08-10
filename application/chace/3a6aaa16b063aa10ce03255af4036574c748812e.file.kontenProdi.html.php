<?php /* Smarty version Smarty-3.1.14, created on 2014-04-24 08:54:48
         compiled from "application/views/master/kontenProdi.html" */ ?>
<?php /*%%SmartyHeaderCode:126570704353586ee89b12b9-21497089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a6aaa16b063aa10ce03255af4036574c748812e' => 
    array (
      0 => 'application/views/master/kontenProdi.html',
      1 => 1398153919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126570704353586ee89b12b9-21497089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53586ee8a26b13_24115691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53586ee8a26b13_24115691')) {function content_53586ee8a26b13_24115691($_smarty_tpl) {?>
			<div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="portlet box purple">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-edit"></i>Tabel Program Studi</div>
                     <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="table-toolbar">
                        <div class="btn-group">
                           <button id="sample_editable_1_new" class="btn green">
                           Add New <i class="icon-plus"></i>
                           </button>
                        </div>
                        <div class="btn-group pull-right">
                           <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                           </button>
                           <ul class="dropdown-menu pull-right">
                              <li><a href="#">Print</a></li>
                              <li><a href="#">Save as PDF</a></li>
                              <li><a href="#">Export to Excel</a></li>
                           </ul>
                        </div>
                     </div>
                     <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th>Jenjang Studi</th>
                              <th>Kode</th>							  
                              <th>Singkatan</th>
                              <th>Nama</th>
                              <th>Edit</th>
                              <th>Delete</th>
                           </tr>
                        </thead>
                        <tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                           <tr >
                              <td>S<?php echo $_smarty_tpl->tpl_vars['row']->value->jenjang;?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->singkatan;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</td>
                              <td><a class="edit" href="javascript:;">Edit</a></td>
                              <td><a class="delete" href="javascript:;">Delete</a></td>
                           </tr>
						<?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- END EXAMPLE TABLE PORTLET-->
            </div>
<script>
      jQuery(document).ready(function() {     
         TableEditable.init();
      });
</script><?php }} ?>