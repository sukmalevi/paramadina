<?php /* Smarty version Smarty-3.1.14, created on 2014-05-09 15:57:57
         compiled from "application/views/smb/formTolakBayarDaftar.html" */ ?>
<?php /*%%SmartyHeaderCode:762127445536c989537c3c3-82524766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a76fcc79f6ea6d9dd4238ccbc9b8953e87dc721' => 
    array (
      0 => 'application/views/smb/formTolakBayarDaftar.html',
      1 => 1399532321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '762127445536c989537c3c3-82524766',
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
  'unifunc' => 'content_536c98953c3239_71869604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536c98953c3239_71869604')) {function content_536c98953c3239_71869604($_smarty_tpl) {?>								<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/tolakBayarDaftar/save/do" class="form-horizontal" method="post">
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