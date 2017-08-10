<?php /* Smarty version Smarty-3.1.14, created on 2014-04-21 11:47:36
         compiled from "application\views\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:1150652a2138c7084a7-67338425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e00dfd60970e61d71b020cc266042238b91d883' => 
    array (
      0 => 'application\\views\\sidebar.html',
      1 => 1398055641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1150652a2138c7084a7-67338425',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a2138c71bac0_09445552',
  'variables' => 
  array (
    'modul' => 0,
    'host' => 0,
    'site' => 0,
    'levelID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a2138c71bac0_09445552')) {function content_52a2138c71bac0_09445552($_smarty_tpl) {?><div class="page-sidebar navbar-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->        
         <ul class="page-sidebar-menu">
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
			<hr>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
               <!-- <form class="sidebar-search" action="extra_search.html" method="POST">
                  <div class="form-container">
                     <div class="input-box">
                        <a href="javascript:;" class="remove"></a>
                        <input type="text" placeholder="Search..."/>
                        <input type="button" class="submit" value=" "/>
                     </div>
                  </div>
               </form> -->
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['modul']->value==''){?>active<?php }?>">
               <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
dashboard">
               <i class="icon-home"></i> 
               <span class="title">Dashboard</span>
               <span class="selected"></span>
               </a>
            </li><!-- 
            <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='User'){?>active<?php }?>">
               <a href="javascript:;">
               <i class="icon-cogs"></i> 
               <span class="title">System</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
               </ul>
            </li> -->
			
			<?php if ($_smarty_tpl->tpl_vars['levelID']->value=='99'||$_smarty_tpl->tpl_vars['levelID']->value=='44'){?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['modul']->value=='master/'){?>active<?php }?>">
               <a href="javascript:;">
               <i class="icon-bookmark-empty"></i> 
               <span class="title">Master</span>
               <span class="selected"></span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='User'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterUser">User</a>
                  </li><!-- 
                  <li >
                     <a href="layout_horizontal_sidebar_menu.html">Policy</a>
                  </li> -->
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Wilayah'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterWilayah">Wilayah</a>
                  </li>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='UPM'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterUPM">Perguruan Tinggi</a>
                  </li>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Prodi'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterProdi">Program Studi</a>
                  </li>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Gedung'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterGedung">Gedung</a>
                  </li>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Ruang'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterRuang">Ruang</a>
                  </li>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Jabatan'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterjabatan">Jabatan</a>
                  </li>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Panitia'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterPanitia">Dosen dan Karyawan</a>
                  </li>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Jalur'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterJalur">Jalur Seleksi</a>
                  </li>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Pembayaran'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mDaftarUlang">Uang Masuk</a>
                  </li>				  
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Periode'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/periode">Periode</a>
                  </li>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='MasterPeriode'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterPeriode">Tahap Periode</a>
                  </li>
               </ul>
            </li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['levelID']->value=='99'||$_smarty_tpl->tpl_vars['levelID']->value=='44'){?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['modul']->value=='admisi/'){?>active<?php }?>">
               <a href="javascript:;">
               <i class="icon-table"></i> 
               <span class="title">Admisi</span>
               <span class="selected"></span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Jadwal'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiBukaSeleksi">Buka Seleksi</a>
                  </li>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Event'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiJadwalSeleksi">Jadwal Seleksi</a>
                  </li>
               </ul>
            </li>			
			<?php }?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['modul']->value=='smb/'){?>active<?php }?>">
               <a href="javascript:;">
               <i class="icon-sitemap"></i> 
               <span class="title">CMB</span>
               <span class="selected"></span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Peserta'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbCalon">Calon Mahasiswa</a>
                  </li>
				  <?php if ($_smarty_tpl->tpl_vars['levelID']->value=='99'||$_smarty_tpl->tpl_vars['levelID']->value=='77'){?>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Pembayaran'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbPay">Pembayaran Biaya Seleksi</a>
                  </li>
				  <?php }?>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Event'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbEvent">Jadwal Seleksi</a>
                  </li>
				  <?php if ($_smarty_tpl->tpl_vars['levelID']->value=='99'||$_smarty_tpl->tpl_vars['levelID']->value=='44'){?>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Seleksi'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbSeleksi">Hasil Seleksi</a>
                  </li>
				  <?php }?>
				  <?php if ($_smarty_tpl->tpl_vars['levelID']->value=='99'||$_smarty_tpl->tpl_vars['levelID']->value=='77'){?>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='DaftarUlang'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbDaftarUlang">Pembayaran Daftar Ulang</a>
                  </li>
				  <?php }?>
				  <?php if ($_smarty_tpl->tpl_vars['levelID']->value=='99'||$_smarty_tpl->tpl_vars['levelID']->value=='44'){?>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['site']->value=='Nim'){?>active<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbNim">Generate NIM</a>
                  </li>
				  <?php }?>
				 </ul>
            </li>
         </ul>
         <!-- END SIDEBAR MENU -->
      </div><?php }} ?>