<?php /* Smarty version Smarty-3.1.14, created on 2014-01-05 03:18:24
         compiled from "application\views\portal\statusFormulir.html" */ ?>
<?php /*%%SmartyHeaderCode:1196752c7dfa1042c49-17117838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9102191f7f6126f866d45a6efa35621fa5e1c3' => 
    array (
      0 => 'application\\views\\portal\\statusFormulir.html',
      1 => 1388891902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1196752c7dfa1042c49-17117838',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c7dfa1048fd2_62304575',
  'variables' => 
  array (
    'cmb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c7dfa1048fd2_62304575')) {function content_52c7dfa1048fd2_62304575($_smarty_tpl) {?>								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								   <div class="dashboard-stat <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?>blue<?php }else{ ?>dark<?php }?>">
									  <div class="visual">
										 <i class="icon-road"></i>
									  </div>
									  <div class="details">
										 <div class="number">
											Alamat
										 </div>
										 <div class="desc">                           
											Rumah & Surat
										 </div>
									  </div>									  
									  <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?>
									  <a href="#" class="more">Lihat Detail <i class="m-icon-swapright m-icon-white"></i></a>  
									  <?php }else{ ?>
									  <a href="#" class="more">Lengkapi <i class="m-icon-swapright m-icon-white"></i></a> 
									  <?php }?> 
								   </div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								   <div class="dashboard-stat green">
									  <div class="visual">
										 <i class="icon-group"></i>
									  </div>
									  <div class="details">
										 <div class="number">Orang Tua</div>
										 <div class="desc">Wali & Keluarga</div>
									  </div>
									  <a href="#" class="more">
									  View more <i class="m-icon-swapright m-icon-white"></i>
									  </a>                 
								   </div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								   <div class="dashboard-stat dark">
									  <div class="visual">
										 <i class="icon-book"></i>
									  </div>
									  <div class="details">
										 <div class="number">Riwayat</div>
										 <div class="desc">Pendidikan Formal</div>
									  </div>
									  <a href="#" class="more">
									  View more <i class="m-icon-swapright m-icon-white"></i>
									  </a>                 
								   </div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								   <div class="dashboard-stat purple">
									  <div class="visual">
										 <i class="icon-trophy"></i>
									  </div>
									  <div class="details">
										 <div class="number">Prestasi & </div>
										 <div class="desc">Riwayat Organisasi</div>
									  </div>
									  <a href="#" class="more">
									  View more <i class="m-icon-swapright m-icon-white"></i>
									  </a>                 
								   </div>
								</div><?php }} ?>