<?php /* Smarty version Smarty-3.1.14, created on 2014-05-24 00:54:41
         compiled from "application/views/master/formGedung.html" */ ?>
<?php /*%%SmartyHeaderCode:530455608537f8b61158a68-62531331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35f7ffe5ffd9a4cb4d49d10e1b006f2a78c67199' => 
    array (
      0 => 'application/views/master/formGedung.html',
      1 => 1398153918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '530455608537f8b61158a68-62531331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'gedung' => 0,
    'prop' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537f8b6122b2f0_96958146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537f8b6122b2f0_96958146')) {function content_537f8b6122b2f0_96958146($_smarty_tpl) {?>										<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterGedung/edit/do" class="form-horizontal" method="post">
											<div class="form-body">
												  <div class="form-group">
													 <label  class="control-label col-md-3">Nama</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Nama Gedung" id="gedung" name="gedung" value="<?php echo $_smarty_tpl->tpl_vars['gedung']->value->gedung;?>
">
													 </div>
												  </div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Kode</label>
													 <div class="input-group col-md-6">
														<input type="text" class="form-control" placeholder="Kode Gedung" id="kode" name="kode" value="<?php echo $_smarty_tpl->tpl_vars['gedung']->value->id;?>
">
													 </div>
												  </div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Alamat</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Alamat Gedung" id="alamat" name="alamat" value="<?php echo $_smarty_tpl->tpl_vars['gedung']->value->alamat;?>
">
													 </div>
												  </div>
												  <div class="form-group">
													 <label class="control-label col-md-3">Propinsi</label>
													 <div class="col-md-9">
														<select class="form-control" id="props"  name="props" class="props">
															<option value="<?php echo $_smarty_tpl->tpl_vars['gedung']->value->prop;?>
"><?php echo $_smarty_tpl->tpl_vars['gedung']->value->propinsi;?>
</option>
														<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prop']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
												  <div id="selectKabss">
												  </div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Total Ruangan</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Jumlah Ruangan" id="ruang" name="ruang" value="<?php echo $_smarty_tpl->tpl_vars['gedung']->value->total_ruang;?>
">
													 </div>
												  </div>
											</div>
										  <div class="modal-footer">
											 <button type="button" class="btn default" data-dismiss="modal">Close</button>
											 <button type="submit" class="btn blue" id="save" value="edit" name="opt"> Update <i class="icon-plus"></i></a>
										  </div>
										</form>
<script>

	$("#props").change(function(){
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterGedung/prop",{
					'prop':$(this).val()					
				},function(resp){
                $('#selectKabss').html(resp);
            });
	});

</script><?php }} ?>