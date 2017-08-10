<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 06:56:55
         compiled from "application\views\master\tblWilayah.html" */ ?>
<?php /*%%SmartyHeaderCode:2235452a321b836a246-59687663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc86ef89671e8db58f50f5caa374631500a2f2da' => 
    array (
      0 => 'application\\views\\master\\tblWilayah.html',
      1 => 1387349722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2235452a321b836a246-59687663',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a321b840a7d4_71473608',
  'variables' => 
  array (
    'kab' => 0,
    'row' => 0,
    'host' => 0,
    'sql' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a321b840a7d4_71473608')) {function content_52a321b840a7d4_71473608($_smarty_tpl) {?><div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
              <div class="portlet box red">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-edit"></i>Tabel Wilayah</div>
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
                           <button id="sample_editable_1_new" class="btn green" href="#add" data-toggle="modal" >
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
                              <th>Kode</th>
                              <th>Kabupaten</th>
                              <th>Edit</th>
                              <th>Delete</th>
                           </tr>
                        </thead>
                        <tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                           <tr >
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</td>
                              <td><a class="edites" data-toggle="modal" href="#edit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">Edit</a></td>
                              <td><a class="deletes" data-toggle="modal" href="#verifikasi" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">Delete</a></td>
                           </tr>
						<?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
					<div class="modal fade" id="add" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Tambah Kabupaten</h4>
                              </div>
                              <div class="modal-body">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterWilayah/add" class="form-horizontal" method="post">
									<div class="form-body">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Propinsi</label>
                                             <div class="col-md-9">
                                                <select class="form-control" id="prop"  name="prop">
												<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                                   <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
												<?php } ?>
                                                </select>
                                             </div>
                                          </div>
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Kode</label>
                                             <div class="input-group col-md-9">
                                                <input type="text" class="form-control" placeholder="Kode Wilayah" id="kode" name="kode">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label  class="control-label col-md-3">Kabupaten</label>
                                             <div class="input-group col-md-9">
                                                <input type="text" class="form-control" placeholder="Nama Kabupaten" id="kab" name="kab">
                                             </div>
                                          </div>
									</div>
								  <div class="modal-footer">
									 <button type="button" class="btn default" data-dismiss="modal">Close</button>
									 <button type="submit" class="btn blue" id="save" value="save" name="opt"> Tambah <i class="icon-plus"></i></a>
								  </div>
								</form>
                              </div>
                           </div>
						  </div>
                           <!-- /.modal-content -->
                        </div>
					</div>
               <!-- END EXAMPLE TABLE PORTLET-->
            </div>
					<div id="verifikasi" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Confirmation</h4>
                              </div>
							  <div id="verifikasiWil">
							  </div>
                           </div>
                        </div>
                     </div>
					 <div class="modal fade" id="edit" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Edit Username</h4>
                              </div>
                              <div class="modal-body">
                                <div id="formWilayah"></div>
                              </div>
                           </div>
                           <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                     </div>
			
<script>
jQuery(document).ready(function() {       
         TableManaged.init();
      });

	$(".deletes").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterWilayah/delete", {'opt':opt, 'val':val},function(resp){
			$('#verifikasiWil').html(resp);
		});
	});
	});
	
	
	$(".edites").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterWilayah/edit", {'opt':opt, 'val':val},function(resp){
			$('#formWilayah').html(resp);
		});
	});
	});
	
</script><?php }} ?>