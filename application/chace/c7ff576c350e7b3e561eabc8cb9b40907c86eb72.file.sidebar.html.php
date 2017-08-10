<?php /* Smarty version Smarty-3.1.14, created on 2015-11-07 11:39:15
         compiled from "application/views/portal/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:1470396168535625c3598314-71793976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7ff576c350e7b3e561eabc8cb9b40907c86eb72' => 
    array (
      0 => 'application/views/portal/sidebar.html',
      1 => 1446357767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1470396168535625c3598314-71793976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535625c362efd0_02248510',
  'variables' => 
  array (
    'site' => 0,
    'host' => 0,
    'cmb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535625c362efd0_02248510')) {function content_535625c362efd0_02248510($_smarty_tpl) {?><div class="page-sidebar navbar-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->        
         <ul class="page-sidebar-menu">
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			   <hr>
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='tiles'){?>active <?php }?>">
               <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal">
               <i class="icon-home"></i> 
               <span class="title">Dashboard</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='pendaftaran'){?>active <?php }?>">
               <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/pendaftaran">
               <i class="icon-home"></i>
			   <span class="badge badge-default">1</span>
               <span class="title">Pendaftaran</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='pembayaran'||$_smarty_tpl->tpl_vars['site']->value=='pembayaranPaid'||$_smarty_tpl->tpl_vars['site']->value=='buktiBayar'){?>active <?php }?>">
               <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/pembayaran">
               <i class="icon-money"></i> 
			   <span class="badge badge-info">2</span>
               <span class="title">Pembayaran</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='formulir'){?>active <?php }?>" id="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm!='1'){?>foR<?php }?>">
               <a href="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'){?><?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir<?php }else{ ?>#<?php }?>">
               <i class="icon-pencil"></i> 
			   <span class="badge badge-primary">3</span>
               <span class="title">Lengkapi Formulir</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='jadwal'){?>active <?php }?>" id="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm!='1'){?>juR<?php }?>">
               <a href="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsEventConfirm=='1'){?><?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/jadwal<?php }else{ ?>#<?php }?>">
               <i class="icon-list-ol"></i> 
			   <span class="badge badge-success">4</span>
               <span class="title">Jadwal Ujian</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='hasilSeleksi'){?>active <?php }?>" id="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm!='1'){?>huR<?php }?>">
               <a href="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?><?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/seleksi<?php }else{ ?>#<?php }?>">
               <i class="icon-paste"></i> 
			   <span class="badge badge-important"><?php if ($_smarty_tpl->tpl_vars['cmb']->value->jalur=='KP'){?>4<?php }else{ ?>5<?php }?></span>
               <span class="title">Hasil Ujian</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='daftarUlang'||$_smarty_tpl->tpl_vars['site']->value=='daftarUlangPaid'||$_smarty_tpl->tpl_vars['site']->value=='daftarUlangConfirmed'){?>active <?php }?>" id="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultPass!='1'){?>duR<?php }?>">
               <a href="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultPass=='1'){?><?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/daftarUlang<?php }else{ ?>#<?php }?>">
               <i class="icon-check"></i> 
			   <span class="badge badge-warning"><?php if ($_smarty_tpl->tpl_vars['cmb']->value->jalur=='KP'){?>5<?php }else{ ?>6<?php }?></span>
               <span class="title">Daftar Ulang</span>
               <span class="selected"></span>
               </a>
            </li>
         </ul>
         <!-- END SIDEBAR MENU -->
      </div>



<?php }} ?>