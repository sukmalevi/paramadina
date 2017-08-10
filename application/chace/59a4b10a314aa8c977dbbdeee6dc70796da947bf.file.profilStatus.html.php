<?php /* Smarty version Smarty-3.1.14, created on 2016-11-15 10:08:14
         compiled from "application/views/portal/profilStatus.html" */ ?>
<?php /*%%SmartyHeaderCode:1439945462582a7c1e507f78-85766780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59a4b10a314aa8c977dbbdeee6dc70796da947bf' => 
    array (
      0 => 'application/views/portal/profilStatus.html',
      1 => 1478587314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1439945462582a7c1e507f78-85766780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cmb' => 0,
    'host' => 0,
    'prof' => 0,
    'eduData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_582a7c1e63f8b4_09056205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582a7c1e63f8b4_09056205')) {function content_582a7c1e63f8b4_09056205($_smarty_tpl) {?><div class="row">
	<div class="col-md-3">
		<ul class="list-unstyled profile-nav">
			<li>
				<?php if ($_smarty_tpl->tpl_vars['cmb']->value->foto==''){?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/ava.png" class="img-responsive" alt="" /><?php }else{ ?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['cmb']->value->foto;?>
" class="img-responsive" alt="" /><?php }?>
				<a class="profile-edit" data-toggle="modal" href="#edit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
">edit</a>
			</li>
		</ul>
	</div>
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-10 profile-info">
				<h1><?php echo $_smarty_tpl->tpl_vars['cmb']->value->nama_cm;?>
</h1>
				<p><i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['prof']->value->gender;?>
</p>
				<p>@ <?php echo $_smarty_tpl->tpl_vars['prof']->value->kode_smb;?>
</p>
				<p><i class="icon-road"></i> <?php echo $_smarty_tpl->tpl_vars['prof']->value->rumahAlamat;?>
, <?php echo $_smarty_tpl->tpl_vars['prof']->value->propNama;?>
, <?php echo $_smarty_tpl->tpl_vars['prof']->value->kabKotaNama;?>
, <?php echo $_smarty_tpl->tpl_vars['prof']->value->kodePos;?>
</p>
				<p><i class="icon-calendar"></i> <?php echo $_smarty_tpl->tpl_vars['prof']->value->tempatLahir;?>
, <?php echo $_smarty_tpl->tpl_vars['prof']->value->tLahir;?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value->bLahir;?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value->yLahir;?>
</p>
				<p><i class="icon-briefcase"></i> <?php echo $_smarty_tpl->tpl_vars['eduData']->value->sekolah;?>
 - <?php echo $_smarty_tpl->tpl_vars['eduData']->value->propNama;?>
, <?php echo $_smarty_tpl->tpl_vars['eduData']->value->kabNama;?>
 <?php echo $_smarty_tpl->tpl_vars['eduData']->value->kodeposN;?>
</p>
				<p><i class="icon-star"></i> S<?php echo $_smarty_tpl->tpl_vars['prof']->value->jenjangType;?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value->progdi;?>
</p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<!--end row-->
		<div class="tabbable tabbable-custom tabbable-custom-profile">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#tab_1_22" data-toggle="tab">Tahap pendaftaran</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab_1_22">
					<div class="tab-pane active" id="tab_1_1_1">
						<div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
							<ul class="feeds">
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?>
												<div class="label label-info">
													<i class="icon-ok-sign"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													Pendaftaran
												</div>
											</div>
											<?php }?>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											<?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?> Finished <?php }else{ ?> Waiting <?php }?>
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'){?>
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-info">
													<i class="icon-ok-sign"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													Pembayaran Pendaftaran
												</div>
											</div>
										</div>
										<?php }else{ ?>
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-default">
													<i class="icon-minus-sign"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													Pembayaran Pendaftaran
												</div>
											</div>
										</div>
										<?php }?>
									</div>
									<div class="col2">
										<div class="date">
											<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'){?> Finished <?php }else{ ?> Waiting <?php }?>
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?>
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-info">
													<i class="icon-ok-sign"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													Lengkapi Formulir Pendaftaran
												</div>
											</div>
										</div>
										<?php }else{ ?>
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-default">
													<i class="icon-minus-sign"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													Lengkapi Formulir Pendaftaran
												</div>
											</div>
										</div>
										<?php }?>
									</div>
									<div class="col2">
										<div class="date">
											<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?> Finished <?php }else{ ?> Waiting <?php }?>
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsEventConfirm=='1'){?>
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-info">
													<i class="icon-ok-sign"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													Jadwal Ujian
												</div>
											</div>
										</div>
										<?php }else{ ?>
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-default">
													<i class="icon-minus-sign"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													Jadwal Ujian
												</div>
											</div>
										</div>
										<?php }?>
									</div>
									<div class="col2">
										<div class="date">
											<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsEventConfirm=='1'){?> Finished <?php }else{ ?> Waiting <?php }?>
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?>
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-info">
													<i class="icon-ok-sign"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													Hasil Ujian
												</div>
											</div>
										</div>
										<?php }else{ ?>
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-default">
													<i class="icon-minus-sign"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													Hasil Ujian
												</div>
											</div>
										</div>
										<?php }?>
									</div>
									<div class="col2">
										<div class="date">
											<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?> Finished <?php }else{ ?> Waiting <?php }?>
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsReapplyPaidConfirm=='1'){?>
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-info">
													<i class="icon-ok-sign"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													Pendaftaran Ulang
												</div>
											</div>
										</div>
										<?php }else{ ?>
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-default">
													<i class="icon-minus-sign"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													Pendaftaran Ulang
												</div>
											</div>
										</div>
										<?php }?>
									</div>
									<div class="col2">
										<div class="date">
											<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsReapplyPaidConfirm=='1'){?> Finished <?php }else{ ?> Waiting <?php }?>
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<?php if ($_smarty_tpl->tpl_vars['cmb']->value->nim!=''){?>
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-info">
													<i class="icon-ok-sign"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													Mendapatkan NIM
												</div>
											</div>
										</div>
										<?php }else{ ?>
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-default">
													<i class="icon-minus-sign"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													Mendapatkan NIM
												</div>
											</div>
										</div>
										<?php }?>
									</div>
									<div class="col2">
										<div class="date">
											<?php if ($_smarty_tpl->tpl_vars['cmb']->value->nim!=''){?> Finished <?php }else{ ?> Waiting <?php }?>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!--tab-pane-->
			</div>
		</div>
	</div>
</div><?php }} ?>