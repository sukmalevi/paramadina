<?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 05:16:02
         compiled from "application\views\master\form_user.html" */ ?>
<?php /*%%SmartyHeaderCode:25736522dc2bf320ab5-67500244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32dae896e14a41670f4896c6c0b540df91814a75' => 
    array (
      0 => 'application\\views\\master\\form_user.html',
      1 => 1378868759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25736522dc2bf320ab5-67500244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522dc2bf534a31_65752601',
  'variables' => 
  array (
    'host' => 0,
    'nama' => 0,
    'pid' => 0,
    'meth' => 0,
    'user' => 0,
    'pass' => 0,
    'level' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522dc2bf534a31_65752601')) {function content_522dc2bf534a31_65752601($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery-ui.min.js"></script>
				<div class="content-widgets light-gray">
						<div class="widget-head magenta">
							<h3>Form Edit USER 
							<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterPegawai" id="minus" style="float:right"><i class="icon-minus"></i></a>
							</h3>
						</div>
						<div class="widget-container">
							<form class="form-horizontal" name="marketer" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/confUser" id="marketer" method="post">
								<div class="control-group">
									<label class="control-label" >Username</label>
									<div class="controls">
										<input id="nama" name="nama" value="<?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
" style="display:none">
										<input id="pid" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" style="display:none">
										<?php if ($_smarty_tpl->tpl_vars['meth']->value=='edit'){?><input id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
" style="display:none"><?php }?>
										<input type="text" placeholder="Username" class="span3" name="username" id="username" class="required" value="<?php if ($_smarty_tpl->tpl_vars['meth']->value=='add'){?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
<?php }?>">								
									</div>										
								</div>
								<div class="control-group">
									<label class="control-label" >Password</label>
									<div class="controls">
										<input type="password" placeholder="Password" class="span2" name="pass" id="pass" class="required" value="<?php if ($_smarty_tpl->tpl_vars['meth']->value=='add'){?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
<?php }?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" >Konfirmasi Password</label>
									<div class="controls">
										<input type="password" placeholder="Password" class="span2" name="pass2" id="pass2" class="required" value="<?php if ($_smarty_tpl->tpl_vars['meth']->value=='add'){?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
<?php }?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" >Level User</label>
									<div class="controls">
										<select data-placeholder="Departemen" class="span" tabindex="2" name="level_id" id="level_id">												
											<?php if ($_smarty_tpl->tpl_vars['meth']->value=='add'){?><option></option><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['meth']->value=='edit'){?><option value="<?php echo $_smarty_tpl->tpl_vars['user']->value->level_id;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->level_name;?>
</option><?php }?>
											<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['row']->value->level_name;?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['meth']->value=='add'){?><button type="submit" class="btn btn-warning" name="button" id="button" value="save">Save</button><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['meth']->value=='edit'){?><button type="submit" class="btn btn-success" name="button" id="button" value="update">Update</button><?php }?>
								<button type="reset" class="btn">Reset</button>
									
							</form>
						</div>
					</div>
				<?php }} ?>