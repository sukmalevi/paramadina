<?php /* Smarty version Smarty-3.1.14, created on 2013-09-10 08:18:25
         compiled from "application\views\navbar.html" */ ?>
<?php /*%%SmartyHeaderCode:55175227e328a6ea84-43192695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f67d4a390bc5d2c0b5da0c867adb8f8d0b23352' => 
    array (
      0 => 'application\\views\\navbar.html',
      1 => 1378801102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55175227e328a6ea84-43192695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5227e328a9fc34_73003036',
  'variables' => 
  array (
    'host' => 0,
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5227e328a9fc34_73003036')) {function content_5227e328a9fc34_73003036($_smarty_tpl) {?><!-- Navbar================================================== -->
	<div class="navbar navbar-inverse top-nav">
		<div class="navbar-inner">
			<div class="container">
				<span class="home-link">
					<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
dashboard"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logo_par.png" width="232" height="50" alt="Falgun"></a>
				</span>
				<a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
dashboard"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logo.png" width="232" height="50" alt="Falgun"></a>
				<ul class="nav">
						<li ><a href="#"><i class="icon-reorder"></i> Sisa Cuti</a></li>
						<li ><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cuti/formCuti"><i class="icon-file"></i> Pengajuan Cuti </a></li>
						<li ><a href="#"><i class="icon-tasks"></i> Status Cuti </a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterPegawai"><i class="icon-folder-open"></i> Master </a></li>
				</ul>
				<div class="btn-toolbar pull-right notification-nav">					
					<div class="btn-group">
						<div class="dropdown">								
							<label style="color: #E5E5E5;display: block;font-size: 14px;font-weight: inherit;">
							Selamat Datang Kembali <h5><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</h5></label>
						</div>
					</div>
					<div class="btn-group">
						<div class="dropdown">							
							<a class="btn btn-notification" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
home/logout"><i class="icon-off"></i></a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div><?php }} ?>