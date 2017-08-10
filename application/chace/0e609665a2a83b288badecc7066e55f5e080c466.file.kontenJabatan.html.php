<?php /* Smarty version Smarty-3.1.14, created on 2014-11-13 16:52:17
         compiled from "application/views/master/kontenJabatan.html" */ ?>
<?php /*%%SmartyHeaderCode:880821198536ca22dcd7be4-97730191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e609665a2a83b288badecc7066e55f5e080c466' => 
    array (
      0 => 'application/views/master/kontenJabatan.html',
      1 => 1415872196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '880821198536ca22dcd7be4-97730191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536ca22dd49422_52916530',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536ca22dd49422_52916530')) {function content_536ca22dd49422_52916530($_smarty_tpl) {?>
			<div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="portlet box purple">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-user"></i>Table Jabatan</div>
                     <div class="actions">
                        <a href="#add" data-toggle="modal" class="btn blue"><i class="icon-pencil"></i> Add</a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th>Kode</th>
                              <th>Jabatan</th>	
                              <th>Singkatan</th>	
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
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['row']->value->singkatan;?>
</td>
                              <td><a class="editing" href="#editing" data-toggle="modal" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" name="edit">Edit</a></td>
                              <td><a class="deleting" href="#verifikasi" data-toggle="modal" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" name="delete">Delete</a></td>
                           </tr>
						<?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- END EXAMPLE TABLE PORTLET-->
            </div>
					<div class="modal fade" id="add" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Tambah Jabatan</h4>
                              </div>
                              <div class="modal-body">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterJabatan/add" class="form-horizontal" method="post">
									<div class="form-body">
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Kode</label>
                                             <div class="input-group col-md-4">
                                                <input type="text" class="form-control" placeholder="Kode Jabatan" id="kode" name="kode">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label  class="control-label col-md-3">Jabatan</label>
                                             <div class="input-group col-md-9">
                                                <input type="text" class="form-control" placeholder="Nama Jabatan" id="jab" name="jab">
                                             </div>
                                          </div><div class="form-group">
                                             <label  class="control-label col-md-3">Singkatan</label>
                                             <div class="input-group col-md-4">
                                                <input type="text" class="form-control" placeholder="Singkatan" id="singkatan" name="singkatan">
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
					<div class="modal fade" id="editing" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Edit Jabatan</h4>
                              </div>
                              <div class="modal-body">
                                <div id="formJabatan"></div>
                              </div>
                           </div>
						  </div>
                           <!-- /.modal-content -->
                        </div>
					</div>
					<div id="verifikasi" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Confirmation</h4>
                              </div>
							  <div id="verifikasiRuang">
							  </div>
                           </div>
                        </div>
                    </div>
<script>
	jQuery(document).ready(function() {     
         TableEditable.init();
      });

	$(".editing").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterJabatan/edit", {'opt':opt, 'val':val},function(resp){
			$('#formJabatan').html(resp);
		});
	});
	});


$(".deleting").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterJabatan/delete", {'opt':opt, 'val':val},function(resp){
			$('#verifikasiRuang').html(resp);
		});
	});
});

</script><?php }} ?>