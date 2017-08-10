<?php /* Smarty version Smarty-3.1.14, created on 2014-05-27 17:59:18
         compiled from "application/views/master/formUser.html" */ ?>
<?php /*%%SmartyHeaderCode:1625932090538470068b25a6-91617359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f349690694059d6295ceeaca67f46e74bf92dd49' => 
    array (
      0 => 'application/views/master/formUser.html',
      1 => 1398153918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1625932090538470068b25a6-91617359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'user' => 0,
    'person' => 0,
    'row' => 0,
    'userp' => 0,
    'level' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53847006973971_47459587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53847006973971_47459587')) {function content_53847006973971_47459587($_smarty_tpl) {?>								<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterUser/update" class="form-horizontal" method="post">
									<div class="form-body">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Username</label>
                                             <div class="col-md-9">
                                                <select class="form-control" id="inisial"  name="inisial">
												 <option value="<?php echo $_smarty_tpl->tpl_vars['user']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</option>
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
                                                <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label  class="control-label col-md-3">Password</label>
                                             <div class="input-group col-md-9">
                                                <input type="password" class="form-control" placeholder="Password" id="pass" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['userp']->value;?>
">
                                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                             </div>
                                          </div>
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Re-Password</label>
                                             <div class="input-group col-md-9">
                                                <input type="password" class="form-control" placeholder="Confirm Password" id="pass2" name="pass2" value="<?php echo $_smarty_tpl->tpl_vars['userp']->value;?>
">
                                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                             </div>
                                          </div>
										  <div class="form-group">
                                             <label class="control-label col-md-3">Level</label>
                                             <div class="col-md-9">
                                                <select class="form-control" id="level" name="level">
												<option value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id_level;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->level;?>
</option>
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
									 <button type="submit" class="btn blue" id="opt" value="update" name="opt"> Simpan <i class="icon-plus"></i></a>
								  </div>
								</form><?php }} ?>