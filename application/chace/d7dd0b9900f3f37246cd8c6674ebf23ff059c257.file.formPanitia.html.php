<?php /* Smarty version Smarty-3.1.14, created on 2013-12-19 04:12:01
         compiled from "application\views\master\formPanitia.html" */ ?>
<?php /*%%SmartyHeaderCode:446052b26a46d3ba96-83292178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7dd0b9900f3f37246cd8c6674ebf23ff059c257' => 
    array (
      0 => 'application\\views\\master\\formPanitia.html',
      1 => 1387426316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '446052b26a46d3ba96-83292178',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b26a46eb2a94_78308051',
  'variables' => 
  array (
    'host' => 0,
    'person' => 0,
    'jabatan' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b26a46eb2a94_78308051')) {function content_52b26a46eb2a94_78308051($_smarty_tpl) {?>								<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterPanitia/edit/do" class="form-horizontal" method="post">
									<div class="form-body">
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Kode</label>
                                             <div class="input-group col-md-6">
												<input type="text"  name="kode" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->inisial;?>
" hidden>
                                                <input type="text" class="form-control" placeholder="Kode Karyawan/Dosen" id="kode" name="kode" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->inisial;?>
" disabled>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label  class="control-label col-md-3">Nama</label>
                                             <div class="input-group col-md-9">
                                                <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->panitia;?>
">
                                             </div>
                                          </div>
										  <div class="form-group">
                                             <label  class="control-label col-md-3">NIP</label>
                                             <div class="input-group col-md-4">
                                                <input type="text" class="form-control" placeholder="NIP" id="nip" name="nip" value="<?php if ($_smarty_tpl->tpl_vars['person']->value->nip!=''){?><?php echo $_smarty_tpl->tpl_vars['person']->value->nip;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['person']->value->nidn;?>
<?php }?>">
                                             </div>
                                          </div>
										  <div class="form-group">
											  <label  class="col-md-3 control-label">Status</label>
											  <div class="col-md-9">
												 <div class="radio-list">
													<label class="radio-inline">
													<input type="radio" name="optionsRadios" id="kar" value="0" checked> Karyawan
													</label>
													<label class="radio-inline">
													<input type="radio" name="optionsRadios" id="dosen" value="1" checked> Dosen
													</label>
												 </div>
											  </div>
										   </div>
										  <div class="form-group">
											<label  class="control-label col-md-3">Pilih Jabatan</label>
												<div class="col-md-9">
													<select class="form-control" id="props"  name="jabatan" class="jabatan">
														<option value="<?php echo $_smarty_tpl->tpl_vars['person']->value->jabatan;?>
"><?php echo $_smarty_tpl->tpl_vars['person']->value->jab;?>
</option>
														<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jabatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?> 
															<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
														<?php } ?>
													</select>
												</div>
										  </div>									</div>
								  <div class="modal-footer">
									 <button type="button" class="btn default" data-dismiss="modal">Close</button>
									 <button type="submit" class="btn blue" id="save" value="edit" name="opt"> Update <i class="icon-plus"></i></a>
								  </div>
								</form><?php }} ?>