<?php /* Smarty version Smarty-3.1.14, created on 2014-03-03 12:09:13
         compiled from "application\views\header.html" */ ?>
<?php /*%%SmartyHeaderCode:204552a2138c604195-19761741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dfeb364dce9033b3b92000cdc7aeda519c84ebd' => 
    array (
      0 => 'application\\views\\header.html',
      1 => 1393823351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204552a2138c604195-19761741',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a2138c675a99_42426556',
  'variables' => 
  array (
    'host' => 0,
    'site' => 0,
    'notifNum' => 0,
    'notif' => 0,
    'row' => 0,
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a2138c675a99_42426556')) {function content_52a2138c675a99_42426556($_smarty_tpl) {?><div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="header-inner">
         <!-- BEGIN LOGO -->  
         <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
">
         <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logoupm-mini.png" alt="logo" class="img-responsive" style="margin-top: -10px;"/>
         </a>
         <!-- END LOGO -->
         <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/menu-toggler.png" alt="" />
         </a> 
         <!-- END RESPONSIVE MENU TOGGLER -->
         <!-- BEGIN TOP NAVIGATION MENU -->
         <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
		<?php if ($_smarty_tpl->tpl_vars['site']->value==''){?>
			<li class="dropdown" id="header_notification_bar">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true">
               <i class="icon-warning-sign"></i>
               <span class="badge"><?php echo $_smarty_tpl->tpl_vars['notifNum']->value;?>
</span>
               </a>
               <ul class="dropdown-menu extended notification">
                  <li>
                     <p>You have <?php echo $_smarty_tpl->tpl_vars['notifNum']->value;?>
 new notifications</p>
                  </li>
                  <li>
                     <ul class="dropdown-menu-list scroller" style="height: 250px;">
					 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notif']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <li>  
                           <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
dashboard/clickNotif/<?php echo $_smarty_tpl->tpl_vars['row']->value->id_activity;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->kodeActivity;?>
">
                           <span class="label label-sm label-icon 
						   <?php if ($_smarty_tpl->tpl_vars['row']->value->id_activity=='13.1'){?>label-danger<?php }elseif($_smarty_tpl->tpl_vars['row']->value->id_activity=='13.2'){?>label-info
						   <?php }elseif($_smarty_tpl->tpl_vars['row']->value->id_activity=='13.3'){?>label-success<?php }elseif($_smarty_tpl->tpl_vars['row']->value->id_activity=='13.4'){?>label-warning<?php }else{ ?>label-default<?php }?>
						   ">
						   <i class="<?php if ($_smarty_tpl->tpl_vars['row']->value->id_activity=='13.1'){?>icon-plus<?php }elseif($_smarty_tpl->tpl_vars['row']->value->id_activity=='13.2'){?>icon-check
						   <?php }elseif($_smarty_tpl->tpl_vars['row']->value->id_activity=='13.3'){?>icon-money<?php }elseif($_smarty_tpl->tpl_vars['row']->value->id_activity=='13.4'){?>icon-check<?php }else{ ?>icon-file<?php }?>"></i></span>
                           <?php echo $_smarty_tpl->tpl_vars['row']->value->namaAct;?>

                           <span class="time"><?php echo $_smarty_tpl->tpl_vars['row']->value->jam;?>
:<?php echo $_smarty_tpl->tpl_vars['row']->value->menit;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->tgl;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->bulan;?>
</span>
                           </a>
                        </li>
					 <?php } ?>
                     </ul>
                  </li>
                  <li class="external">   
                     <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
                  </li>
               </ul>
            </li>
		<?php }?>
            <!-- END TODO DROPDOWN -->
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/avatar1_small.jpg"/> 
               <span class="username"> <?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</span>
               <i class="icon-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a>
                  </li>
                  <li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a>
                  </li>
                  </li><!-- 
                  <li><a href="#"><i class="icon-tasks"></i> My Tasks <span class="badge badge-success">7</span></a>
                  </li> -->
                  <li class="divider"></li>
                  <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a>
                  </li><!-- 
                  <li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a>
                  </li> -->
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/home/logout"><i class="icon-key"></i> Log Out</a>
                  </li>
               </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
         </ul>
         <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div><?php }} ?>