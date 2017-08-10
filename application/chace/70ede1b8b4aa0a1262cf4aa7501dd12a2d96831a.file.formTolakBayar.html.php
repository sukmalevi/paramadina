<?php /* Smarty version Smarty-3.1.14, created on 2016-02-19 10:07:18
         compiled from "application/views/smb/formTolakBayar.html" */ ?>
<?php /*%%SmartyHeaderCode:6387124256c686e60fb1a0-45774234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70ede1b8b4aa0a1262cf4aa7501dd12a2d96831a' => 
    array (
      0 => 'application/views/smb/formTolakBayar.html',
      1 => 1399532321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6387124256c686e60fb1a0-45774234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'mah' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56c686e61826d5_44932690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c686e61826d5_44932690')) {function content_56c686e61826d5_44932690($_smarty_tpl) {?>								<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/tolakBayar/save/do" class="form-horizontal" method="post">
									<div class="form-body">
										  <div class="form-group">
                                             <label  class="control-label col-md-3">No Registrasi</label>
                                             <div class="input-group col-md-9">
												            <input name="val" value="<?php echo $_smarty_tpl->tpl_vars['mah']->value->kode;?>
" hidden>
                                                <input type="text" class="form-control" id="kode" value="<?php echo $_smarty_tpl->tpl_vars['mah']->value->nomor;?>
" disabled>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label  class="control-label col-md-3">Nama CMB</label>
                                             <div class="input-group col-md-9">
                                                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mah']->value->nama;?>
" disabled>
                                             </div>
                                          </div><div class="form-group">
                                             <label  class="control-label col-md-3">Pesan</label>
                                             <div class="input-group col-md-9">
                                                <textarea name="pesan" rows="4" cols="50" required></textarea>
                                             </div>
                                          </div>
									</div>
								  <div class="modal-footer">
									 <button type="button" class="btn default" data-dismiss="modal">Close</button>
									 <button type="submit" class="btn blue" id="save" value="save" name="opt"> Kirim <i class="icon-plus"></i></a>
								  </div>
								</form><?php }} ?>