<?php /* Smarty version Smarty-3.1.14, created on 2013-12-30 07:04:05
         compiled from "application\views\logins.html" */ ?>
<?php /*%%SmartyHeaderCode:959852c11ae57370b0-73859264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0159fb12f9c8db1afd8606f036455b487a02408' => 
    array (
      0 => 'application\\views\\logins.html',
      1 => 1378861298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '959852c11ae57370b0-73859264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c11ae5872922_55304068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c11ae5872922_55304068')) {function content_52c11ae5872922_55304068($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>e-cuti Paramadina</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Admin Panel Template">
<meta name="author" content="Westilian: Kamrujaman Shohel">
<!-- styles -->
<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/font-awesome.css">
<!--[if IE 7]>
            <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
        <![endif]-->
<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/styles.css" rel="stylesheet">
<!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/ie/ie7.css" />
        <![endif]-->
<!--[if IE 8]>
            <link rel="stylesheet" type="text/css" href="css/ie/ie8.css" />
        <![endif]-->
<!--[if IE 9]>
            <link rel="stylesheet" type="text/css" href="css/ie/ie9.css" />
        <![endif]-->
<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/aristo-ui.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/elfinder.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<!--fav and touch icons -->
<link rel="shortcut icon" href="ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/ico/apple-touch-icon-57-precomposed.png">
<!--============j avascript===========-->
<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery-ui-1.10.1.custom.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/bootstrap.js"></script>
</head>
<body>
<div class="layout">
	<!-- Navbar================================================== -->
	<div class="navbar navbar-inverse top-nav">
		<div class="navbar-inner">
			<div class="container">
				<span class="home-link"><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logo_par.png" width="232" height="50" alt="Falgun"></a></span><a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logo.png" width="232" height="50" alt="Falgun"></a>
			</div>
		</div>
	</div>
	<div class="container">
		<form class="form-signin" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
home/login" method="post" >
			<h3 class="form-signin-heading">Sign in</h3>
			<div class="controls input-icon">
				<i class=" icon-user-md"></i>
				<input type="text" class="input-block-level" name="username" id="username" placeholder="Username">
			</div>
			<div class="controls input-icon">
				<i class=" icon-key"></i>
				<input type="password" class="input-block-level" name="password" id="password" placeholder="Password">
			</div>
			<button class="btn btn-inverse btn-block" type="submit">Sign in</button>
		</form>
	</div>
</div>
</body>
</html><?php }} ?>