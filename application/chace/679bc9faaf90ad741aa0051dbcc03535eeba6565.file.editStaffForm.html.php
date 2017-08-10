<?php /* Smarty version Smarty-3.1.14, created on 2013-09-09 09:59:24
         compiled from "application\views\master\editStaffForm.html" */ ?>
<?php /*%%SmartyHeaderCode:29151522d4869a06077-11126707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '679bc9faaf90ad741aa0051dbcc03535eeba6565' => 
    array (
      0 => 'application\\views\\master\\editStaffForm.html',
      1 => 1378720720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29151522d4869a06077-11126707',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522d4869a73411_78412073',
  'variables' => 
  array (
    'host' => 0,
    'pegawai' => 0,
    'depart' => 0,
    'row' => 0,
    'jabatan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d4869a73411_78412073')) {function content_522d4869a73411_78412073($_smarty_tpl) {?>				<div class="content-widgets light-gray">
						<div class="widget-head green">
							<h3>Form Pegawai Paramadina
							<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterPegawai" id="minus" style="float:right"><i class="icon-minus"></i></a>
							</h3>
						</div>
						<div class="widget-container">
							<form class="form-horizontal" name="marketer" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/editMaster/update" id="marketer" method="post">
								<div class="control-group">
									<label class="control-label" >Nama</label>
									<div class="controls">
										<input id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['pegawai']->value->id;?>
" style="display:none">
										<input type="text" placeholder="Nama Pegawai" class="span4" name="nama" id="nama" class="required" value="<?php echo $_smarty_tpl->tpl_vars['pegawai']->value->nama;?>
">
										<input type="text" placeholder="Inisial" class="span1" name="inisial" id="inisial" class="required" value="<?php echo $_smarty_tpl->tpl_vars['pegawai']->value->inisial;?>
">									
									</div>										
								</div>
								<div class="control-group">
									<label class="control-label" >Departemen</label>
									<div class="controls">
										<select data-placeholder="Departemen" class="span4" tabindex="2" name="depart" id="depart">												
											<option value="<?php echo $_smarty_tpl->tpl_vars['pegawai']->value->d_id;?>
"><?php echo $_smarty_tpl->tpl_vars['pegawai']->value->depart;?>
</option>
											<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['depart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->acadept_uid;?>
" ><?php echo $_smarty_tpl->tpl_vars['row']->value->description;?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="control-group">	
									<label class="control-label" >Jabatan</label>
									<div class="controls">
										<select data-placeholder="Jabatan" class="span4" tabindex="2" name="jabatan" id="jabatan">												
											<option value="<?php echo $_smarty_tpl->tpl_vars['pegawai']->value->j_id;?>
"><?php echo $_smarty_tpl->tpl_vars['pegawai']->value->jabatan;?>
</option>
											<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jabatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->acajbt_uid;?>
" ><?php echo $_smarty_tpl->tpl_vars['row']->value->description;?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" >Alamat</label>
									<div class="controls">
										<input type="text" placeholder="Alamat" class="span7" name="alamat" id="alamat" class="required" value="<?php echo $_smarty_tpl->tpl_vars['pegawai']->value->alamat_skr;?>
">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" >NIP</label>
									<div class="controls">
										<input type="text" placeholder="Nomor Induk Pegawai" class="span3" name="nip" id="nip" class="required" value="<?php echo $_smarty_tpl->tpl_vars['pegawai']->value->personal_NIP;?>
">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" >Email</label>
									<div class="controls">
										<input type="email" placeholder="Alamat Email" class="span4" name="email" id="email" class="required" value="<?php echo $_smarty_tpl->tpl_vars['pegawai']->value->email;?>
">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" >No Telp</label>
									<div class="controls">
										<input type="text" placeholder="No Telp" class="span4" name="telp" id="telp" class="required" value="<?php echo $_smarty_tpl->tpl_vars['pegawai']->value->phone;?>
">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" >No HP</label>
									<div class="controls">
										<input type="text" placeholder="No HP" class="span4" name="hp" id="hp" class="required" value="<?php echo $_smarty_tpl->tpl_vars['pegawai']->value->mobile_phone1;?>
">
									</div>
								</div>
									<button type="submit" class="btn btn-success" name="save" id="save" value="save" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/editMaster/update">Update</button>
									<button type="reset" class="btn">Reset</button>
									
							</form>
						</div>
					</div><?php }} ?>