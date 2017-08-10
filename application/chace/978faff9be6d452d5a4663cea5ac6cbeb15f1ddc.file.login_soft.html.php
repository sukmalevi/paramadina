<?php /* Smarty version Smarty-3.1.14, created on 2017-02-14 11:16:07
         compiled from "application/views/login_soft.html" */ ?>
<?php /*%%SmartyHeaderCode:161555614535625ac5516a7-98008992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '978faff9be6d452d5a4663cea5ac6cbeb15f1ddc' => 
    array (
      0 => 'application/views/login_soft.html',
      1 => 1487044989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161555614535625ac5516a7-98008992',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535625ac60f7f7_43645603',
  'variables' => 
  array (
    'host' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535625ac60f7f7_43645603')) {function content_535625ac60f7f7_43645603($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
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
assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/select2/select2_metro.css" />
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/style-metronic.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/pages/login-soft.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
	<meta name="google-site-verification" content="V7_c1qzbtk9zmVY_b8Ro_x-dtsm8AumeDuY-xSS00RA" />


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="login" style="background-color:#005B8A">
    <!-- BEGIN LOGO -->
    <div class="logo">
        <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logo-putih.png" alt="" height="81" />
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->

    <div class="row col-md-12" >
        <div class="row col-md-1 mobile-hide" ></div>     
		<div class="row col-md-2 mobile-hide">
		   <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/model-it.png" alt="" class="img-responsive" />
		</div>
        <div class="row col-md-5  mobile-hide" >
            <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/box-info.png" alt="" class="img-responsive" />
         </div> 
        <div class="row col-md-1  mobile-hide"></div>     
        <div class="content col-md-3" >
            <!-- BEGIN LOGIN FORM -->
            <?php if ($_smarty_tpl->tpl_vars['status']->value=='notvalid'||$_smarty_tpl->tpl_vars['status']->value=='notaktif'){?>
            <div class="forget-password">
                <p style="color: #acff56">
                    Silahkan melakukan verifikasi dengan membuka tautan yang ada pada email Anda.
                </p>
            </div>
            <?php }elseif($_smarty_tpl->tpl_vars['status']->value=='valid'){?>
            <div class="forget-password">
                <p style="color: #acff56">
                    Akun anda telah aktif, silahkan login untuk melanjutkan tahapan berikutnya.
                </p>
            </div>
            <?php }?>
            <form class="login-form" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
site/login" method="post">
                <h3 class="form-title">Masuk ke portal</h3>
                <div class="alert alert-error hide">
                    <button class="close" data-dismiss="alert"></button>
                    <span>Enter any username and password.</span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <div class="input-icon">
                        <i class="icon-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username / Email" name="username" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="icon-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" />
                    </div>
                </div>
                <div class="form-actions">
<!--                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1" />Remember me
                    </label>-->
                    <button type="submit" class="btn blue pull-right">
                        Login <i class="m-icon-swapright m-icon-white"></i>
                    </button>
                </div>
                <div class="create-account">
					
					<p>
                        Belum mendaftar di Paramadina?
                    </p><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
registrasi/faq" style="color:#78F36F">Daftar di sini</a><br>
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
		
    </div>
    <!-- END LOGIN -->
    <!-- BEGIN COPYRIGHT -->
    <div class="copyright">
		<p>Silahkan email ke <font style="color:#78F36F">leo.ericton@paramadina.ac.id</font> 
		atau SMS/WA ke <font style="color:#78F36F">08159181190</font>  jika membutuhkan bantuan terkait pendaftaran dan ujian online.</p>
                
        2014 &copy; Universitas Paramadina.
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
assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
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
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-75091001-1', 'auto');
		ga('create', 'UA-74266245-1', 'auto', 'clientTracker');
		ga('send', 'pageview');

		
		
	</script>
	
	<script type="application/ld+json">
	{
	  "@context" : "http://schema.org",
	  "@type" : "Organization",
	  "name" : "Pendaftaran Online Universitas Paramadina",
	  "url" : "http://admission.paramadina.ac.id",
	  "contactPoint" : [{
		"@type" : "ContactPoint",
		"telephone" : "+62 21 79181188",
		"contactType" : "customer service"
	  }],
	  "sameAs" : [
		"http://www.facebook.com/paramadina",
		"http://www.twitter.com/paramadina"
	  ]
	}
	</script>

    
    <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>
<?php }} ?>