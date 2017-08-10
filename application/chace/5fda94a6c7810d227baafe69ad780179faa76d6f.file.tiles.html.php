<?php /* Smarty version Smarty-3.1.14, created on 2014-03-04 10:38:02
         compiled from "application\views\portal\tiles.html" */ ?>
<?php /*%%SmartyHeaderCode:3062752c23a2d3bcff4-12806641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fda94a6c7810d227baafe69ad780179faa76d6f' => 
    array (
      0 => 'application\\views\\portal\\tiles.html',
      1 => 1393904279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3062752c23a2d3bcff4-12806641',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c23a2d3c6489_55444705',
  'variables' => 
  array (
    'cmb' => 0,
    'host' => 0,
    'nomorReg' => 0,
    'firstname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c23a2d3c6489_55444705')) {function content_52c23a2d3c6489_55444705($_smarty_tpl) {?>
		<div class="tiles">
            <div class="tile double-down selected bg-dark">
			<?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/pendaftaran"><?php }?>
               <?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?>
				   <div class="corner"></div>
				   <div class="check"></div>
			   <?php }?>
               <div class="tile-body">
                  <i class="icon-pencil"></i>
               </div>
               <div class="tile-object">
                  <div class="name">
                     Pendaftaran
                  </div>
                  <div class="number">
                     1
                  </div>
               </div>
			<?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?></a><?php }?>
            </div>
            <div class="tile <?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?>selected<?php }?> bg-green">
			<?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/pembayaran"><?php }?>
               <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'){?>
				   <div class="corner"></div>
				   <div class="check"></div>
			   <?php }?>
               <div class="tile-body">
                  <i class="icon-money"></i>
               </div>
               <div class="tile-object">
                  <div class="name">
                     Pembayaran
                  </div>
                  <div class="number">
                     2
                  </div>
               </div>
			<?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?></a><?php }?>
            </div>
            <div class="tile double <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'){?>selected<?php }?> bg-blue">
			<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'){?><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir"><?php }?>
               <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?>
				   <div class="corner"></div>
				   <div class="check"></div>
			   <?php }?>
               <div class="tile-body">
                  <h4>Lengkapi</h4>
                  <p><h3>Formulir Pendaftaran</h3></p>
               </div>
               <div class="tile-object">
                  <div class="name">
                     <i class="icon-folder-open"></i>
                  </div>
                  <div class="number">
                     3
                  </div>
               </div>
			<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'){?></a><?php }?>
            </div>
            <div class="tile <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?>selected<?php }?> bg-red">
			<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsEventConfirm=='1'){?><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/jadwal"><?php }?>
               <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsEventConfirm=='1'){?>
				   <div class="corner"></div>
				   <div class="check"></div>
			   <?php }?>
               <div class="tile-body">
                  <i class="icon-list-ol"></i>
               </div>
               <div class="tile-object">
                  <div class="name">
                     Jadwal Ujian
                  </div>
                  <div class="number">
                     4
                  </div>
               </div>
			<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?></a><?php }?>
            </div>
            <div class="tile double <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsEventConfirm=='1'){?>selected<?php }?> bg-purple">
			<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/seleksi"><?php }?>
               <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?>
				   <div class="corner"></div>
				   <div class="check"></div>
			   <?php }?>
               <div class="tile-body">
                  <i class="icon-paste"></i>
                  <h3>Hasil</h3>
                  <p>
                     Ujian Masuk dan Wawancara
                  </p>
               </div>
               <div class="tile-object">
                  <div class="number">
                     5
                  </div>
               </div>
			<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?></a><?php }?>
            </div>
            <div class="tile <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultPass=='1'){?>selected<?php }?> bg-red">
			<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultPass=='1'){?><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/daftarUlang"><?php }?>
               <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsReapplyPaidConfirm=='1'){?>
				   <div class="corner"></div>
				   <div class="check"></div>
			   <?php }?>
               <div class="tile-body">
                  <i class="icon-check"></i>
               </div>
               <div class="tile-object">
                  <div class="name">
                     Daftar Ulang
                  </div>
                  <div class="number">
                     6
                  </div>
               </div>
			<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultPass=='1'){?></a><?php }?>
            </div>
            <div class="tile double bg-dark">
			<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulirReport/<?php echo $_smarty_tpl->tpl_vars['nomorReg']->value;?>
">
               <div class="tile-body">
			   <?php if ($_smarty_tpl->tpl_vars['cmb']->value->foto==''){?>
                  <img src="assets/img/ava.png" alt="" class="pull-right" height="90px" width="90px">
			   <?php }else{ ?>
				  <img src="assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['cmb']->value->foto;?>
" alt="" class="pull-right" height="90px" width="90px">
			   <?php }?>
                  <h3><?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
</h3>
                  <p>
                     Click bar ini untuk mendapatkan Formulir Pendaftaran kamu!
                  </p>
               </div>
               <div class="tile-object">
                  <div class="name">
                     <i class=" icon-file-text"></i>
                  </div>
               </div>
			</a>
            </div>
         </div><?php }} ?>