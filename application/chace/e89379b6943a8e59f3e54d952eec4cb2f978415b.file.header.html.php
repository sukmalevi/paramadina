<?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 15:34:03
         compiled from "application\views\portal\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1144752c22e97889e80-51080032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e89379b6943a8e59f3e54d952eec4cb2f978415b' => 
    array (
      0 => 'application\\views\\portal\\header.html',
      1 => 1390466040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1144752c22e97889e80-51080032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c22e978fc3c0_52398701',
  'variables' => 
  array (
    'host' => 0,
    'cmb' => 0,
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c22e978fc3c0_52398701')) {function content_52c22e978fc3c0_52398701($_smarty_tpl) {?><div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->
			<a class="navbar-brand" href="index.html">
			<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logoupm-mini.png" alt="logo" class="img-responsive" style="margin-top: -10px;"/>
			</a>
			<!-- END LOGO -->
			<!-- BEGIN HORIZANTAL MENU -->
			
			<!-- END HORIZANTAL MENU -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/menu-toggler.png" alt="" />
			</a>          
			<!-- END RESPONSIVE MENU TOGGLER -->     
			<!-- BEGIN TOP NAVIGATION MENU -->
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<?php if ($_smarty_tpl->tpl_vars['cmb']->value->foto==''){?>
						<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/ava.png" height="29px" width="29px"/>
					<?php }else{ ?>
						<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['cmb']->value->foto;?>
" height="29px" width="29px"/>
					<?php }?>
					<span class="username"><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</span>
					<i class="icon-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/portal/profil"><i class="icon-user"></i> My Profile</a></li>
						<li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/site/logout"><i class="icon-key"></i> Log Out</a></li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div><?php }} ?>