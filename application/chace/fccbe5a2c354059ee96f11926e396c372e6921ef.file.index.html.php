<?php /* Smarty version Smarty-3.1.14, created on 2014-04-16 11:32:04
         compiled from "application\views\index.html" */ ?>
<?php /*%%SmartyHeaderCode:211755226eb9134f326-04524536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fccbe5a2c354059ee96f11926e396c372e6921ef' => 
    array (
      0 => 'application\\views\\index.html',
      1 => 1397622720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211755226eb9134f326-04524536',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5226eb913a4d22_84845826',
  'variables' => 
  array (
    'host' => 0,
    'lokasi' => 0,
    'modul' => 0,
    'site' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5226eb913a4d22_84845826')) {function content_5226eb913a4d22_84845826($_smarty_tpl) {?><!DOCTYPE html>
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
   <title>Admission Paramadina</title>
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
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->    
   <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
   <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
   
   
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
   <!-- END PAGE LEVEL PLUGIN STYLES -->
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
assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/pages/profile.css" rel="stylesheet" type="text/css" />
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
   
   
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/respond.min.js"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <!-- <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jExpand.js" type="text/javascript"></script> -->
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>   
   <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
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
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
   
   
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
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/form-components.js"></script>   
   <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>     
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript" ></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/app.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/index.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/tasks.js" type="text/javascript"></script>      
   <!-- END PAGE LEVEL SCRIPTS -->  
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/select2/select2_metro.css" />
   <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/data-tables/DT_bootstrap.css" />  
   <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/pages/profile.css" rel="stylesheet" type="text/css" />   
   
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/data-tables/DT_bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/table-editable.js"></script>  
<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/table-managed.js"></script>


   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script> 
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>  
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
     
   
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
   <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   <!-- END HEADER -->
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->
   <div class="page-container">
      <!-- BEGIN SIDEBAR -->
      <?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div class="page-content">
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title hidden-print">
                  <?php echo $_smarty_tpl->tpl_vars['lokasi']->value;?>
 <small> Admission Paramadina</small>
               </h3>
			   <hr class="hidden-print">
			   <!-- 
               <ul class="page-breadcrumb breadcrumb hidden-print">
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.html">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li><a href="#">Dashboard</a></li>
                  <li class="pull-right">
                     <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>
                        <span></span>
                        <i class="icon-angle-down"></i>
                     </div>
                  </li>
               </ul> -->
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <div class="clearfix"></div>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['modul']->value)."konten".((string)$_smarty_tpl->tpl_vars['site']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </div>
      <!-- END PAGE -->
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
   
   <script>
      jQuery(document).ready(function() {    
         App.init(); // initlayout and core plugins
         Index.init();
       //  Index.initJQVMAP(); // init index page's custom scripts
         Index.initCalendar(); // init index page's custom scripts
        // Index.initCharts(); // init index page's custom scripts
        // Index.initChat();
        // Index.initMiniCharts();
         Index.initDashboardDaterange();
         Index.initIntro();
         Tasks.initDashboardWidget();
		 //FormComponents.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>