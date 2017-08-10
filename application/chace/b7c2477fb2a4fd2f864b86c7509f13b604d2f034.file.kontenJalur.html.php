<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 12:37:48
         compiled from "application/views/master/kontenJalur.html" */ ?>
<?php /*%%SmartyHeaderCode:19342728345360745de02e35-73937060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7c2477fb2a4fd2f864b86c7509f13b604d2f034' => 
    array (
      0 => 'application/views/master/kontenJalur.html',
      1 => 1398998801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19342728345360745de02e35-73937060',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5360745de77261_49499745',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'uri' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5360745de77261_49499745')) {function content_5360745de77261_49499745($_smarty_tpl) {?>		 <div class="row">
            <div class="col-sm-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="portlet box grey">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-user"></i>Table Jalur Seleksi</div>
                     <div class="actions">
                        <a class="btn blue" href="#add" data-toggle="modal"><i class="icon-pencil"></i> Add</a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                           <tr><th>Kode</th>
                              <th >Jalur Seleksi</th>
                              <th >File SK</th>
							  <th >Edit</th>
							  <th >Delete</th>
                           </tr>
                        </thead>
                        <tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                           <tr class="odd gradeX">
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
</td>
                              <td ><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</td>
                              <td><a href="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
<?php echo $_smarty_tpl->tpl_vars['row']->value->fileSk;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->fileSk;?>
</a></td>
							  <td><a class="editing" href="#formEdit" data-toggle="modal" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">Edit</a></td>
                              <td><a class="deleting" href="#verifikasi" data-toggle="modal" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">Delete</a></td>
                           </tr>
						<?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- END EXAMPLE TABLE PORTLET-->
            </div>
         </div>
					 <div class="modal fade" id="add" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Tambah Jalur Seleksi</h4>
                              </div>
                              <div class="modal-body">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterJalur/add" enctype="multipart/form-data" class="form-horizontal" method="post">
									<div class="form-body">
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Kode</label>
                                             <div class="input-group col-md-6">
                                                <input type="text" class="form-control" placeholder="Kode Jalur Seleksi" id="kode" name="kode" maxlength=2>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label  class="control-label col-md-3">Jalur</label>
                                             <div class="input-group col-md-9">
                                                <input type="text" class="form-control" placeholder="Jalur Seleksi" id="nama" name="nama">
                                             </div>
                                          </div>
										  <div class="form-group">
                                             <label  class="control-label col-md-3">No. SK</label>
                                             <div class="input-group col-md-6">
                                                <input type="text" class="form-control" placeholder="No. SK" id="nosk" name="nosk">
                                             </div>
                                          </div>
										  <div class="form-group">									
											  <label for="filesk" class="control-label col-md-3">File SK</label>
											  <div class="input-group col-md-9">
												  <input type="file" id="filesk" name="filesk">
												  <p class="help-block">Lampirkan Surat Keputusan, Format : pdf|jpg|png|gif</p>
											  </div>
										  </div>								</div>
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
					<div class="modal fade" id="formEdit" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Edit Jalur Seleksi</h4>
                              </div>
                              <div class="modal-body">
								<div id="formJalur"></id>							  
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

	$(".editing").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterJalur/edit", {'opt':opt, 'val':val},function(resp){
			$('#formJalur').html(resp);
		});
	});
	});


$(".deleting").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterJalur/delete", {'opt':opt, 'val':val},function(resp){
			$('#verifikasiRuang').html(resp);
		});
	});
});

</script><?php }} ?>