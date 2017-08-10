<?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 02:05:18
         compiled from "application\views\login_soft.html" */ ?>
<?php /*%%SmartyHeaderCode:575452c11e1475ca15-09374335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5427140752d0366efcb9a2142f77f1d6d66d80b0' => 
    array (
      0 => 'application\\views\\login_soft.html',
      1 => 1390442715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '575452c11e1475ca15-09374335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c11e147be978_35900674',
  'variables' => 
  array (
    'host' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c11e147be978_35900674')) {function content_52c11e147be978_35900674($_smarty_tpl) {?><!DOCTYPE html>
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
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL STYLES --> 
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/select2/select2_metro.css" />
   <!-- END PAGE LEVEL SCRIPTS -->
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
assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
   <!-- BEGIN LOGO -->
   <div class="logo">
      <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logoupm.png" alt="" /> 
   </div>
   <!-- END LOGO -->
   <!-- BEGIN LOGIN -->
   <div class="content">
      <!-- BEGIN LOGIN FORM -->	
	  <?php if ($_smarty_tpl->tpl_vars['status']->value=='notvalid'||$_smarty_tpl->tpl_vars['status']->value=='notaktif'){?>
		 <div class="forget-password">
            <p style="color: #FF207A">
               Silahkan melakukan verifikasi dengan membuka tautan yang ada pada email Anda.
            </p>
         </div>
	  <?php }elseif($_smarty_tpl->tpl_vars['status']->value=='valid'){?>
         <div class="forget-password">
            <p style="color: #FF207A">
               Akun anda telah aktif, silahkan login untuk melanjutkan tahapan berikutnya.
            </p>
         </div>
	  <?php }?>
      <form class="login-form" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
site/login" method="post">
         <h3 class="form-title">Login to your account</h3>
         <div class="alert alert-error hide">
            <button class="close" data-dismiss="alert"></button>
            <span>Enter any username and password.</span>
         </div>
         <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
               <i class="icon-user"></i>
               <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
               <i class="icon-lock"></i>
               <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
            </div>
         </div>
         <div class="form-actions">
            <label class="checkbox">
            <input type="checkbox" name="remember" value="1"/> Remember me
            </label>
            <button type="submit" class="btn blue pull-right">
            Login <i class="m-icon-swapright m-icon-white"></i>
            </button>            
         </div><!-- 
         <div class="forget-password">
            <h4>Forgot your password ?</h4>
            <p>
               no worries, click <a href="javascript:;"  id="forget-password">here</a>
               to reset your password.
            </p>
         </div> -->
         <div class="create-account">
            <p>
               Don't have an account yet ?&nbsp; 
               <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
registrasi/registrasiForm" id="register-btn" >Create an account</a>
            </p>
         </div>
      </form>
      <!-- END LOGIN FORM -->        
      <!-- BEGIN FORGOT PASSWORD FORM -->
      <!-- <form class="forget-form" action="index.html" method="post">
         <h3 >Forget Password ?</h3>
         <p>Enter your e-mail address below to reset your password.</p>
         <div class="form-group">
            <div class="input-icon">
               <i class="icon-envelope"></i>
               <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
            </div>
         </div>
         <div class="form-actions">
            <button type="button" id="back-btn" class="btn">
            <i class="m-icon-swapleft"></i> Back
            </button>
            <button type="submit" class="btn blue pull-right">
            Submit <i class="m-icon-swapright m-icon-white"></i>
            </button>            
         </div>
      </form> -->
      <!-- END FORGOT PASSWORD FORM -->
   </div>
   <!-- END LOGIN -->
   <!-- BEGIN COPYRIGHT -->
   <div class="copyright">
      2014 &copy; Universitas - Paramadina.
   </div>
   <!-- END COPYRIGHT -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/respond.min.js"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
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
assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/select2/select2.min.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/app.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/scripts/login-soft.js" type="text/javascript"></script>      
   <!-- END PAGE LEVEL SCRIPTS --> 
   <script>
      jQuery(document).ready(function() {     
        App.init();
        Login.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>