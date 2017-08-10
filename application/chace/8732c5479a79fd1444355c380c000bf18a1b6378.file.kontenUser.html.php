<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 07:23:14
         compiled from "application\views\master\kontenUser.html" */ ?>
<?php /*%%SmartyHeaderCode:2027552a21f7e0c6da0-25087339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8732c5479a79fd1444355c380c000bf18a1b6378' => 
    array (
      0 => 'application\\views\\master\\kontenUser.html',
      1 => 1387346682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2027552a21f7e0c6da0-25087339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a21f7e11eea4_99200794',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
    'person' => 0,
    'level' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a21f7e11eea4_99200794')) {function content_52a21f7e11eea4_99200794($_smarty_tpl) {?>
			<div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="portlet box grey">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-edit"></i>Table User</div>
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
						<a class=" btn default" href="#add" data-toggle="modal">Tambah <i class="icon-plus"></i></a>
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
                              <th>Username</th>
                              <th>Full Name</th>
                              <th>Email</th>
                              <th>Level</th>
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
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->username;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->email;?>
</td>
                              <td class="center"><?php echo $_smarty_tpl->tpl_vars['row']->value->level;?>
</td>
                              <td><a class="edit" data-toggle="modal" href="#edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" name="edit">Edit</a></td>
                              <td><a class="delete" data-toggle="modal" href="#verifikasi" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" name="delete">Delete</a></td>
                           </tr>
						<?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- END EXAMPLE TABLE PORTLET-->
            </div>
					<div class="modal fade" id="edit" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Edit Username</h4>
                              </div>
                              <div class="modal-body">
                                <div id="editUser"></div>
                              </div>
                           </div>
                           <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                     </div>
					 <div class="modal fade" id="add" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Tambah Username</h4>
                              </div>
                              <div class="modal-body">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterUser/save" class="form-horizontal" method="post">
									<div class="form-body">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Username</label>
                                             <div class="col-md-9">
                                                <select class="form-control" id="inisial"  name="inisial">
												<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['person']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                                   <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
												<?php } ?>
                                                </select>
                                                <span class="help-block">Select name, and use inisial as username.</span>
                                             </div>
                                          </div>
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Email Address</label>
                                             <div class="input-group col-md-9">
                                                <span class="input-group-addon"><i class="icon-envelope"></i></span>
                                                <input type="email" class="form-control" placeholder="Email Address" id="email" name="email">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label  class="control-label col-md-3">Password</label>
                                             <div class="input-group col-md-9">
                                                <input type="password" class="form-control" placeholder="Password" id="pass" name="pass">
                                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                             </div>
                                          </div>
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Re-Password</label>
                                             <div class="input-group col-md-9">
                                                <input type="password" class="form-control" placeholder="Confirm Password" id="pass2" name="pass2">
                                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                             </div>
                                          </div>
										  <div class="form-group">
                                             <label class="control-label col-md-3">Level</label>
                                             <div class="col-md-9">
                                                <select class="form-control" id="level" name="level">
												<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                                   <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->level_name;?>
</option>
												<?php } ?>
                                                </select>
                                             </div>
                                          </div>
									</div>
								  <div class="modal-footer">
									 <button type="button" class="btn default" data-dismiss="modal">Close</button>
									 <button type="submit" class="btn blue" id="save" value="save" name="save"> Tambah <i class="icon-plus"></i></a>
								  </div>
								</form>
                              </div>
                           </div>
                           <!-- /.modal-content -->
                        </div>
					</div>
                        <!-- /.modal-dialog -->
                     </div>
					 <div id="verifikasi" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Confirmation</h4>
                              </div>
							  <div id="formVerifikasi">
							  </div>
                           </div>
                        </div>
                     </div>

<script>
      jQuery(document).ready(function() {       
         TableManaged.init();
      });
	  
	
	$("#save").click(function(){		
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterUser/save", {},function(resp){
		});
	});
	
	
	$(".edit").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterUser/edit", {'opt':opt, 'val':val},function(resp){
			$('#editUser').html(resp);
		});
	});
	});
	
	
	$(".delete").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterUser/delete", {'opt':opt, 'val':val},function(resp){
			$('#formVerifikasi').html(resp);
		});
	});
	});
	
</script>
<?php }} ?>