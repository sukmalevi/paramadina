<?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 09:23:12
         compiled from "application\views\pendaftaran\index.html" */ ?>
<?php /*%%SmartyHeaderCode:278752bbb94c07cbe0-48450331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cbd47a27037c2cbb5cff514f915dc379a3eb253' => 
    array (
      0 => 'application\\views\\pendaftaran\\index.html',
      1 => 1390443791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278752bbb94c07cbe0-48450331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bbb94c1cc0f6_68366790',
  'variables' => 
  array (
    'host' => 0,
    'modul' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bbb94c1cc0f6_68366790')) {function content_52bbb94c1cc0f6_68366790($_smarty_tpl) {?><!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0
Version: 1.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Form Pendaftaran | Admission Online Paramadina</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->        
	<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>   
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME STYLES --> 
	<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/select2/select2_metro.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/pages/promo.css" />
	
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-boxed page-full-width">
	<!-- BEGIN HEADER -->   
	<?php echo $_smarty_tpl->getSubTemplate ("pendaftaran/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!-- END HEADER -->
	<div class="clearfix"></div>
	<!-- BEGIN CONTAINER --> 
		<div class="page-container" >
		<!-- BEGIN EMPTY PAGE SIDEBAR -->
		
		<!-- END EMPTY PAGE SIDEBAR -->
		<!-- BEGIN PAGE -->
			<div class="page-content" style="min-height:1111px !important;margin-left:0px">  
				<!-- BEGIN PAGE HEADER-->
				  
			  <div class="container" style="padding-top: 20px;">
				<div class="row">
				   <div class="col-md-12">
					  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
					  <h3 class="page-title">
						 FORM REGISTRASI <small>admission online</small>
					  </h3>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row margin-bottom-20">
					<div class="col-md-12">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['modul']->value)."formPendaftaran.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>
				</div>
				<!-- END PAGE CONTENT-->
			 </div>
			</div>
			
		</div>
	<!-- END CONTAINER -->
		
		<div class="promo-page" style="min-height:0px">
			<div class="block-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<h3>Subscribe</h3>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam.</p>
								<form action="#" class="form-inline">
									<div class="input-group">
										<input type="text" placeholder="Email Address" class="form-control">
										<span class="input-group-btn">
										<button type="button" class="btn blue">GO!</button>
										</span>      
									</div>
									<!-- /input-group -->
								</form>
							</div>
							<div class="col-md-4"><!-- 
								<h3>Photo Stream</h3>
								<ul class="list-unstyled blog-images">
									<li><a href="#"><img alt="" src="assets/img/blog/1.jpg"></a></li>
									<li><a href="#"><img alt="" src="assets/img/blog/2.jpg"></a></li>
									<li><a href="#"><img alt="" src="assets/img/blog/3.jpg"></a></li>
									<li><a href="#"><img alt="" src="assets/img/blog/4.jpg"></a></li>
									<li><a href="#"><img alt="" src="assets/img/blog/5.jpg"></a></li>
									<li><a href="#"><img alt="" src="assets/img/blog/6.jpg"></a></li>
									<li><a href="#"><img alt="" src="assets/img/blog/8.jpg"></a></li>
									<li><a href="#"><img alt="" src="assets/img/blog/10.jpg"></a></li>
									<li><a href="#"><img alt="" src="assets/img/blog/11.jpg"></a></li>
									<li><a href="#"><img alt="" src="assets/img/blog/1.jpg"></a></li>
									<li><a href="#"><img alt="" src="assets/img/blog/2.jpg"></a></li>
									<li><a href="#"><img alt="" src="assets/img/blog/7.jpg"></a></li>
								</ul> -->
							</div>
							<div class="col-md-3">
								<h3>Stay Tuned</h3>
								<ul class="list-unstyled social-icons"><!-- 
									<li><a class="amazon" data-original-title="amazon" href="#"></a></li>
									<li><a class="behance" data-original-title="behance" href="#"></a></li>
									<li><a class="blogger" data-original-title="blogger" href="#"></a></li>
									<li><a class="deviantart" data-original-title="deviantart" href="#"></a></li>
									<li><a class="dribbble" data-original-title="dribbble" href="#"></a></li>
									<li><a class="dropbox" data-original-title="dropbox" href="#"></a></li>-->
									<li><a class="facebook" data-original-title="facebook" href="#"></a></li><!--
									<li><a class="forrst" data-original-title="forrst" href="#"></a></li>
									<li><a class="github" data-original-title="github" href="#"></a></li> -->
									<li><a class="googleplus" data-original-title="Goole Plus" href="#"></a></li><!-- 
									<li><a class="jolicloud" data-original-title="jolicloud" href="#"></a></li>
									<li><a class="last-fm" data-original-title="last-fm" href="#"></a></li> -->
									<li><a class="linkedin" data-original-title="linkedin" href="#"></a></li>
									<li><a class="picasa" data-original-title="picasa" href="#"></a></li>
									<li><a class="pintrest" data-original-title="pintrest" href="#"></a></li><!-- 
									<li><a class="rss" data-original-title="rss" href="#"></a></li>
									<li><a class="skype" data-original-title="skype" href="#"></a></li>
									<li><a class="spotify" data-original-title="spotify" href="#"></a></li>
									<li><a class="stumbleupon" data-original-title="stumbleupon" href="#"></a></li> -->
									<li><a class="tumblr" data-original-title="tumblr" href="#"></a></li>
									<li><a class="twitter" data-original-title="twitter" href="#"></a></li>
									<li><a class="vimeo" data-original-title="vimeo" href="#"></a></li><!-- 
									<li><a class="wordpress" data-original-title="wordpress" href="#"></a></li>
									<li><a class="xing" data-original-title="xing" href="#"></a></li> -->
									<li><a class="yahoo" data-original-title="yahoo" href="#"></a></li>
									<li><a class="youtube" data-original-title="youtube" href="#"></a></li><!-- 
									<li><a class="vk" data-original-title="vk" href="#"></a></li> -->
									<li><a class="instagram" data-original-title="instagram" href="#"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
		</div>
	<!-- BEGIN FOOTER -->
	<div class="footer" style="background-color: #323232;color: #6F6F6F;">
	 <div class="container">
		<div class="footer-inner">
			2014 &copy; Universitas Paramadina.
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	 </div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<!--[if lt IE 9]>
	<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/excanvas.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
   
   
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script> 
    <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript" ></script>
							  
    <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/form-components.js"></script>   
    <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
	
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/select2/select2.min.js"></script>
   
   
	<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/app.js"></script>      	
    <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/form-validation.js"></script> 
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		   FormValidation.init();
		});
	</script>
	
	<!-- END JAVASCRIPTS -->
</body>
	</div>
<!-- END BODY -->
</html><?php }} ?>