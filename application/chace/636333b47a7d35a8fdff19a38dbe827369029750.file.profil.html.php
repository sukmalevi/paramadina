<?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 15:32:48
         compiled from "application\views\portal\profil.html" */ ?>
<?php /*%%SmartyHeaderCode:1566952df3a907cde66-96642518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '636333b47a7d35a8fdff19a38dbe827369029750' => 
    array (
      0 => 'application\\views\\portal\\profil.html',
      1 => 1390465966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1566952df3a907cde66-96642518',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52df3a9089ac05_60913736',
  'variables' => 
  array (
    'cmb' => 0,
    'host' => 0,
    'prof' => 0,
    'eduData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df3a9089ac05_60913736')) {function content_52df3a9089ac05_60913736($_smarty_tpl) {?>			<div class="row profile">
            <div class="col-md-12">
               <!--BEGIN TABS-->
               <div class="tabbable tabbable-custom tabbable-full-width">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_1_1" data-toggle="tab">Profil</a></li>
                     <li><a href="#tab_1_3" data-toggle="tab">Keluarga</a></li>
                     <li><a href="#tab_1_4" data-toggle="tab">Prestasi & Organisasi</a></li>
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
									<p><i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['prof']->value->gender;?>
</i>
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
                                    <li class="active"><a href="#tab_1_22" data-toggle="tab">Latest Customers</a></li> 
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
							<?php echo $_smarty_tpl->getSubTemplate ("portal/profilKeluarga.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                              <?php echo $_smarty_tpl->getSubTemplate ("portal/tblPendidikan.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                           </div>
						</div>
						<div class="row portfolio-block">
						   <div class="col-md-12">
                              <div class="add-portfolio">
                                 <span>Riwayat Prestasi</span>
							  </div>
                              <?php echo $_smarty_tpl->getSubTemplate ("portal/tblPrestasi.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                           </div>
						</div>
						<div class="row portfolio-block">
						   <div class="col-md-12">
                              <div class="add-portfolio">
                                 <span>Riwayat Organisasi</span>
							  </div>
                              <?php echo $_smarty_tpl->getSubTemplate ("portal/tblOrganisasi.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                           </div>
                        </div>
                        
                     </div>
                     <!--end tab-pane-->
                     <div class="tab-pane" id="tab_1_6">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                 <li class="active">
                                    <a data-toggle="tab" href="#tab_1">
                                    <i class="icon-briefcase"></i> 
                                    General Questions
                                    </a> 
                                    <span class="after"></span>                                    
                                 </li>
                                 <li><a data-toggle="tab" href="#tab_2"><i class="icon-group"></i> Membership</a></li>
                                 <li><a data-toggle="tab" href="#tab_3"><i class="icon-leaf"></i> Terms Of Service</a></li>
                                 <li><a data-toggle="tab" href="#tab_1"><i class="icon-info-sign"></i> License Terms</a></li>
                                 <li><a data-toggle="tab" href="#tab_2"><i class="icon-tint"></i> Payment Rules</a></li>
                                 <li><a data-toggle="tab" href="#tab_3"><i class="icon-plus"></i> Other Questions</a></li>
                              </ul>
                           </div>
                           <div class="col-md-9">
                              <div class="tab-content">
                                 <div id="tab_1" class="tab-pane active">
                                    <div id="accordion1" class="panel-group">
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
                                                1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_1" class="panel-collapse collapse  in">
                                             <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">
                                                2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_2" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-success">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">
                                                3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_3" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-warning">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">
                                                4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_4" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-danger">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">
                                                5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_5" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">
                                                6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_6" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7">
                                                7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_7" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="tab_2" class="tab-pane">
                                    <div id="accordion2" class="panel-group">
                                       <div class="panel panel-warning">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_1">
                                                1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_1" class="panel-collapse collapse  in">
                                             <div class="panel-body">
                                                <p>
                                                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </p>
                                                <p>
                                                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-danger">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2">
                                                2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_2" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-success">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3">
                                                3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_3" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4">
                                                4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_4" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5">
                                                5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_5" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6">
                                                6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_6" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7">
                                                7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_7" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="tab_3" class="tab-pane">
                                    <div id="accordion3" class="panel-group">
                                       <div class="panel panel-danger">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1">
                                                1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_1" class="panel-collapse collapse  in">
                                             <div class="panel-body">
                                                <p>
                                                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                                </p>
                                                <p>
                                                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                                </p>
                                                <p>
                                                   Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-success">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2">
                                                2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_2" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3">
                                                3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_3" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4">
                                                4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_4" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5">
                                                5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_5" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6">
                                                6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_6" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7">
                                                7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_7" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end tab-pane-->
                  </div>
               </div>
               <!--END TABS-->
            </div>
         </div><?php }} ?>