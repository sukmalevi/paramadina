<?php /* Smarty version Smarty-3.1.14, created on 2016-11-11 11:12:32
         compiled from "application/views/pendaftaran/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1060089805359bd01294847-39087449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b1641b0cbde684e4fa98defe48f7a6955dc7ca8' => 
    array (
      0 => 'application/views/pendaftaran/index.html',
      1 => 1478572235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1060089805359bd01294847-39087449',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5359bd01357be2_77937441',
  'variables' => 
  array (
    'page' => 0,
    'host' => 0,
    'title' => 0,
    'header' => 0,
    'modul' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359bd01357be2_77937441')) {function content_5359bd01357be2_77937441($_smarty_tpl) {?><!DOCTYPE html>
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
        <?php if ($_smarty_tpl->tpl_vars['page']->value=='faq'){?>
	<title>FAQ | Admission Online Paramadina</title>
        <?php }elseif($_smarty_tpl->tpl_vars['page']->value=='formPendaftaran'){?>
	<title>Form Pendaftaran | Admission Online Paramadina</title>
        <?php }else{ ?>
	<title>Lampiran | Admission Online Paramadina</title>
        <?php }?>
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
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-datepicker/css/datepicker.css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />

        
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> 
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>  
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>


	
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
                                          <?php if ($_smarty_tpl->tpl_vars['page']->value=='faq'||$_smarty_tpl->tpl_vars['page']->value=='formPendaftaran'){?>
					  <h2 class="page-title" style='text-align: center'>
                                                <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <!--<small>Admission online</small>-->
						 <?php if ($_smarty_tpl->tpl_vars['page']->value=='faq'){?>
						 <a style="float:right" class="btn blue" href="registrasiForm">Form Registrasi</a>
						 <?php }elseif($_smarty_tpl->tpl_vars['page']->value=='formPendaftaran'){?>
						 <a style="float:right" class="btn green" href="faq">FAQ</a>
						 <?php }?>
					  </h2>
                                          
                                          <?php }?>
                                           
					</div>
				</div>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value=='faq'||$_smarty_tpl->tpl_vars['page']->value=='formPendaftaran'){?>
                                <hr>
                                <?php }?>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row ">
					<div class="col-md-12">
					<?php if ($_smarty_tpl->tpl_vars['page']->value=='faq'){?>
						<h3>Selamat datang di Universitas Paramadina.</h3>
                                        <?php }?>
					<?php if ($_smarty_tpl->tpl_vars['page']->value=='formPendaftaran'){?>
						<h3>Silahkan isi data di bawah ini dengan lengkap.</h3>
					<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['page']->value=='lampiran'||$_smarty_tpl->tpl_vars['page']->value=='lampiran2'||$_smarty_tpl->tpl_vars['page']->value=='lampiran3'){?>
                                        <div ><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</div>
                                        <?php }?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['modul']->value).((string)$_smarty_tpl->tpl_vars['page']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
						<div class="col-md-3">
							<h3>Stay Tuned</h3>
							<ul class="list-unstyled social-icons">
								<li><a class="facebook" data-original-title="facebook"  target="_blank" href="http://facebook.com/paramadina"></a></li>
								<li><a class="googleplus" data-original-title="Goole Plus" target="_blank" href="https://plus.google.com/115599297478080934694"></a></li>
								<li><a class="twitter" data-original-title="twitter" target="_blank" href="https://twitter.com/paramadina"></a></li>
								<li><a class="youtube" data-original-title="youtube" target="_blank" href="https://www.youtube.com/user/univparamadina"></a></li>
								<li><a class="instagram" data-original-title="instagram" target="_blank" href="https://www.instagram.com/universitas_paramadina/"></a></li>
																	
							</ul>
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
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
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/fuelux/js/spinner.min.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> 
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>    
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/form-components.js"></script>    
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script> 
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-multi-select/js/jquery.quicksearch.js"></script>
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		   FormValidation.init();
           FormComponents.init();
		});
	</script>
	
	<!-- END JAVASCRIPTS -->
</body>
	</div>
<!-- END BODY -->
</html><?php }} ?>