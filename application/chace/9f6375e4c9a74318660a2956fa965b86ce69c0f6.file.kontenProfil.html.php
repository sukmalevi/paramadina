<?php /* Smarty version Smarty-3.1.14, created on 2017-02-01 09:23:49
         compiled from "application/views/smb/kontenProfil.html" */ ?>
<?php /*%%SmartyHeaderCode:922445354536b3d978ebce6-28201902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f6375e4c9a74318660a2956fa965b86ce69c0f6' => 
    array (
      0 => 'application/views/smb/kontenProfil.html',
      1 => 1485915812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '922445354536b3d978ebce6-28201902',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536b3d97a54556_28572050',
  'variables' => 
  array (
    'cmb' => 0,
    'host' => 0,
    'prof' => 0,
    'eduData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536b3d97a54556_28572050')) {function content_536b3d97a54556_28572050($_smarty_tpl) {?><div class="row profile">
	<div class="col-md-12">
	   <!--BEGIN TABS-->
		<div class="tabbable tabbable-custom tabbable-full-width">
			<ul class="nav nav-tabs">
				 <li class="active"><a href="#tab_1_1" data-toggle="tab">Profil</a></li>
				 <li><a href="#tab_1_3" data-toggle="tab">Keluarga</a></li>
				 <li><a href="#tab_1_4" data-toggle="tab">Prestasi & Organisasi</a></li>
				 <li><a href="#tab_1_5" data-toggle="tab">Kelengkapan Berkas</a></li>
				 <li><a href="#tab_1_6" data-toggle="tab">Akun</a></li>
			</ul>
		  <div class="tab-content">
                     <div class="tab-pane active" id="tab_1_1">
                        <div class="row">
							<div class="col-md-3">
                              <ul class="list-unstyled profile-nav">
                                 <li>
								 <?php if ($_smarty_tpl->tpl_vars['cmb']->value->foto==''){?>
								 <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/ava.png" class="img-responsive" alt="" />
								 <?php }else{ ?>
								 <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['cmb']->value->foto;?>
" class="img-responsive" alt="" /> 
								 <?php }?>
                                    <a href="#" class="profile-edit">edit</a>
                                 </li>
                              </ul>
							</div>
							<div class="col-md-9">
                              <div class="row">
                                 <div class="col-md-10 profile-info">
                                    <h1><?php echo $_smarty_tpl->tpl_vars['cmb']->value->nama_cm;?>
</h1>
									<p><?php echo $_smarty_tpl->tpl_vars['prof']->value->kode_smb;?>
</p>
									<p><?php echo $_smarty_tpl->tpl_vars['prof']->value->rumahCell;?>
</p>
									<p><i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['prof']->value->gender;?>
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
                                    <!-- <li ><a href="#tab_1_22" data-toggle="tab">Status Pendaftaran</a></li> -->
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
													  <?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?>
                                                         Finished
													  <?php }else{ ?>
														 Waiting
													  <?php }?>
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
                                                          <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'){?>
															 Finished
														  <?php }else{ ?>
															 Waiting
														  <?php }?>
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
                                                      <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?>
                                                         Finished
													  <?php }else{ ?>
														 Waiting
													  <?php }?>
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
                                                      <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsEventConfirm=='1'){?>
                                                         Finished
													  <?php }else{ ?>
														 Waiting
													  <?php }?>
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
                                                      <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?>
                                                         Finished
													  <?php }else{ ?>
														 Waiting
													  <?php }?>
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
                                                      <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsReapplyPaidConfirm=='1'){?>
                                                         Finished
													  <?php }else{ ?>
														 Waiting
													  <?php }?>
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
                                                        <?php if ($_smarty_tpl->tpl_vars['cmb']->value->nim!=''){?>
                                                            Finished
                                                        <?php }else{ ?>
                                                               Waiting
                                                        <?php }?>
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
                        </div>
                     </div>
                     <!--tab_1_2-->
                     <div class="tab-pane" id="tab_1_3">
                        <div class="row profile-account">
                           <div class="col-md-12">
                                <?php echo $_smarty_tpl->getSubTemplate ("smb/profilKeluarga.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                           </div>                               
                        </div>
                     </div>
                     <!--end tab-pane-->
                     <div class="tab-pane" id="tab_1_4">
                        <div class="row portfolio-block">
                           <div class="col-md-12">
                              <div class="add-portfolio">
                                 <span>Riwayat Pendidikan</span>
							  </div>
                              <?php echo $_smarty_tpl->getSubTemplate ("smb/tblPendidikan.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                           </div>
						</div>
                            <div class="row portfolio-block">
                                <div class="col-md-12">
                                    <div class="add-portfolio">
                                     <span>Riwayat Prestasi</span>
                                    </div>
                                    <?php echo $_smarty_tpl->getSubTemplate ("smb/tblPrestasi.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                                </div>
                            </div>
                            <div class="row portfolio-block">
                                <div class="col-md-12">
                                    <div class="add-portfolio">
                                        <span>Riwayat Organisasi</span>
                                    </div>
                                    <?php echo $_smarty_tpl->getSubTemplate ("smb/tblOrganisasi.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                                </div>
                            </div>
                        
                     </div>
                     <!--end tab-pane-->
                     <div class="tab-pane" id="tab_1_5">
                        <div class="row">
                            <div class="col-md-12">
                            <?php echo $_smarty_tpl->getSubTemplate ("smb/kelengkapanBerkas.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                            </div>
                        </div>
                     </div>
                     <!--end tab-pane-->
                     <div class="tab-pane" id="tab_1_6">
                        <div class="row">
                            <div class="col-md-12">
                            <?php echo $_smarty_tpl->getSubTemplate ("smb/formAkun.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                            </div>
                        </div>
                     </div>
                     <!--end tab-pane-->
                  </div>
               </div>
               <!--END TABS-->
            </div>
         </div><?php }} ?>