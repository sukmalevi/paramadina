<?php /* Smarty version Smarty-3.1.14, created on 2013-09-04 06:19:35
         compiled from "application\views\login1.html" */ ?>
<?php /*%%SmartyHeaderCode:66175226be194b3ee1-85089544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31f86a84db8a66dea8b39ea573e233c9ae00519e' => 
    array (
      0 => 'application\\views\\login1.html',
      1 => 1378275571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66175226be194b3ee1-85089544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5226be196d0a89_33187994',
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5226be196d0a89_33187994')) {function content_5226be196d0a89_33187994($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Falgun - Metro Style Bootstrap Admin Dashboard</title>
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
				<span class="home-link"><a href="index.html" class="icon-home"></a></span><a class="brand" href="./index.html"><img src="images/logo-falgun.png" width="103" height="50" alt="Falgun"></a>
				<div class="btn-toolbar pull-right notification-nav">
					<div class="btn-group">
						<div class="dropdown">
							<a class="btn btn-notification"><i class="icon-reply"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<form class="form-signin-ribbon">
			<div class="content-widgets gray">
				<div class=" login-head orange">
					<h3 class="form-signin-heading">Please sign in</h3>
				</div>
				<div class="long-ribbon">
					<div class="ribbon-content">
						<div class="controls input-icon">
							<i class=" icon-user-md"></i>
							<input type="text" class="input-block-level" placeholder="Email address">
						</div>
						<div class="controls input-icon">
							<i class=" icon-key"></i><input type="password" class="input-block-level" placeholder="Password">
						</div>
						<label class="checkbox">
						<input type="checkbox" value="remember-me"> Remember me </label>
						<button class="btn btn-inverse btn-block" type="submit">Sign in</button>
					</div>
				</div>
				<div class="forgot-block">
					<h4>Forgot your password ?</h4>
					<p>
						<a href="#">Click here</a> to reset your password.
					</p>
					<h5>Don't have an account yet ?</h5>
					<button class="btn btn-success btn-block" type="submit">Create Account</button>
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html><?php }} ?>