<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 08:08:20
         compiled from "application\views\master\formJabatan.html" */ ?>
<?php /*%%SmartyHeaderCode:2279352b1540c08c9a5-70618587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f7f78978ddc7995c4f8c867c4193b086defaa3d' => 
    array (
      0 => 'application\\views\\master\\formJabatan.html',
      1 => 1387354092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2279352b1540c08c9a5-70618587',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b1540c125e78_77330395',
  'variables' => 
  array (
    'host' => 0,
    'jabatan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1540c125e78_77330395')) {function content_52b1540c125e78_77330395($_smarty_tpl) {?>								<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterJabatan/edit/do" class="form-horizontal" method="post">
									<div class="form-body">
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Kode</label>
                                             <div class="input-group col-md-4">
												<input name="kode" value="<?php echo $_smarty_tpl->tpl_vars['jabatan']->value->kode;?>
" hidden>
                                                <input type="text" class="form-control" placeholder="Kode Jabatan" id="kode" value="<?php echo $_smarty_tpl->tpl_vars['jabatan']->value->kode;?>
" disabled>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label  class="control-label col-md-3">Jabatan</label>
                                             <div class="input-group col-md-9">
                                                <input type="text" class="form-control" placeholder="Nama Jabatan" id="jab" name="jab" value="<?php echo $_smarty_tpl->tpl_vars['jabatan']->value->nama;?>
">
                                             </div>
                                          </div><div class="form-group">
                                             <label  class="control-label col-md-3">Singkatan</label>
                                             <div class="input-group col-md-4">
                                                <input type="text" class="form-control" placeholder="Singkatan" id="singkatan" name="singkatan" value="<?php echo $_smarty_tpl->tpl_vars['jabatan']->value->singkatan;?>
">
                                             </div>
                                          </div>
									</div>
								  <div class="modal-footer">
									 <button type="button" class="btn default" data-dismiss="modal">Close</button>
									 <button type="submit" class="btn blue" id="edit" value="edit" name="opt"> Simpan <i class="icon-plus"></i></a>
								  </div>
								</form><?php }} ?>