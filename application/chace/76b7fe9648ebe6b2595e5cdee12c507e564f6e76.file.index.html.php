<?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 09:14:13
         compiled from "application\views\portal\index.html" */ ?>
<?php /*%%SmartyHeaderCode:262752c192bee694b7-21831716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76b7fe9648ebe6b2595e5cdee12c507e564f6e76' => 
    array (
      0 => 'application\\views\\portal\\index.html',
      1 => 1390443250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262752c192bee694b7-21831716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c192bf2923a3_23756752',
  'variables' => 
  array (
    'host' => 0,
    'site' => 0,
    'modul' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c192bf2923a3_23756752')) {function content_52c192bf2923a3_23756752($_smarty_tpl) {?><!DOCTYPE html>
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
	<title>Admission Online | Paramadina</title>
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
	
	
   <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-datepicker/css/datepicker.css" />
   
   
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/fuelux/js/spinner.min.js"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
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
assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>    
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-multi-select/js/jquery.quicksearch.js"></script>   
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js" type="text/javascript" ></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript" ></script>   
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
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
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/pages/timeline.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/pages/profile.css" rel="stylesheet" type="text/css" />
   
   <?php if ($_smarty_tpl->tpl_vars['site']->value=='hasilSeleksi'){?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/pages/promo.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/animate.css" rel="stylesheet" type="text/css"/>
	<?php }?>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/select2/select2_metro.css" />
	
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<?php if ($_smarty_tpl->tpl_vars['site']->value!='hasilSeleksi'){?>
<body class="page-header-fixed"> 
<?php }else{ ?>
<body class="page-header-fixed page-boxed page-full-width">
<?php }?> 
	<!-- BEGIN HEADER -->   
	<?php echo $_smarty_tpl->getSubTemplate ("portal/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!-- END HEADER -->
	<div class="clearfix"></div>
	<!-- BEGIN CONTAINER -->   
		<div class="page-container" >
		<!-- BEGIN EMPTY PAGE SIDEBAR -->
		<?php if ($_smarty_tpl->tpl_vars['site']->value!='hasilSeleksi'){?>
			<?php echo $_smarty_tpl->getSubTemplate ("portal/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
		<!-- END EMPTY PAGE SIDEBAR -->
		<!-- BEGIN PAGE -->
			<div class="page-content" <?php if ($_smarty_tpl->tpl_vars['site']->value=='hasilSeleksi'){?>style="min-height: 660px;"<?php }?>>  
				<!-- BEGIN PAGE HEADER-->
		<?php if ($_smarty_tpl->tpl_vars['site']->value!='hasilSeleksi'){?>
				<div class="row">
				   <div class="col-md-12">
					  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
					  <h3 class="page-title hidden-print">
						 ADMISSION ONLINE <small>Universitas Paramadina</small>
					  </h3>
					</div>
				</div>
		<?php }?>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['modul']->value).((string)$_smarty_tpl->tpl_vars['site']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>
				</div>
				<!-- END PAGE CONTENT-->
			 </div>
		</div>
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer hidden-print">
		<div class="footer-inner">
			2014 &copy; Universitas Paramadina.
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
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
assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript" ></script>
   
   
	<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/app.js"></script>      	
    <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/form-validation.js"></script> 
    <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/index.js" type="text/javascript"></script>
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		   FormValidation.init();
		   FormComponents.init();
		   Index.initCalendar();		   
		   Index.initDashboardDaterange();
		});
	</script>
	
	<!-- END JAVASCRIPTS -->
</body>
	</div>
<!-- END BODY -->
</html><?php }} ?>