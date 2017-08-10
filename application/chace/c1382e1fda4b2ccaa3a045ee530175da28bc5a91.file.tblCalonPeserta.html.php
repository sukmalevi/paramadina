<?php /* Smarty version Smarty-3.1.14, created on 2014-03-03 20:41:40
         compiled from "application\views\smb\tblCalonPeserta.html" */ ?>
<?php /*%%SmartyHeaderCode:3181052ccccbdb74356-24079345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1382e1fda4b2ccaa3a045ee530175da28bc5a91' => 
    array (
      0 => 'application\\views\\smb\\tblCalonPeserta.html',
      1 => 1393854094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3181052ccccbdb74356-24079345',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccccbdd8f097_89354501',
  'variables' => 
  array (
    'host' => 0,
    'periode' => 0,
    'sql' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccccbdd8f097_89354501')) {function content_52ccccbdd8f097_89354501($_smarty_tpl) {?>				<div class="portlet box grey">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-cogs"></i>Daftar Peserta Calon Mahasiswa Baru</div>
                        <div class="tools">
						   <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/exportToExcel/calonSmb/<?php echo $_smarty_tpl->tpl_vars['periode']->value;?>
" class="btn default btn-xs black" style="margin-bottom: 12px;"><i class="icon-download-alt"></i></a>
                           <a href="javascript:;" class="collapse"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a></div>
                     </div>
                     <div class="portlet-body flip-scroll">
                        <table class="table table-bordered table-striped table-condensed flip-content">
                           <thead class="flip-content">
                              <tr>
								 <th>No. Pendaftaran</th>
                                 <th>Nama Calon Mahasiswa</th>
                                 <th>Program Studi</th>
                                 <th>Jalur</th>
                                 <th>Tanggal Pendaftaran</th>
                                 <th>Status</th>
                              </tr>
                           </thead>
                           <tbody>
							  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                              <tr>
								 <td>
									<div class="panel-danger">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>

                                             </h4>
                                          </div>
									</div>								 
								 </td>
                                 <td>
									<div class="panel-success">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/formulir/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['row']->value->nama_cm;?>

                                                </a>
                                             </h4>
                                          </div>
									</div>	
								 </td>								 
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->progdi;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->n_jalur;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->hari;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggal;?>
</td>
                                 <td><table>
								 <?php if ($_smarty_tpl->tpl_vars['row']->value->stsMundurBeforeReapply=='0'){?>									
									<?php if ($_smarty_tpl->tpl_vars['row']->value->stsMundurAfterReapply=='1'){?>
									<tr><td><span class="label label-sm label-danger label">Mundur sesudah Daftar Ulang</span></td></td>
									<?php }else{ ?>
									<tr><td>Mendaftar </td><td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsApplyPaid=='0'){?>
										
											<span class="label label-sm label-danger label-mini">Belum</span>
											<?php }else{ ?><span class="label label-sm label-success label-mini">Sudah</span>
											<?php }?>
										</td>
									</tr>
									<tr><td>Melengkapi Form Pendaftaran </td><td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsApplyPaidConfirm=='0'){?>
												<span class="label label-sm label-danger label-mini">Belum</span>
												<?php }else{ ?><span class="label label-sm label-success label-mini">Sudah</span>
												<?php }?></td></tr>
									<tr><td>Memilih Jadwal Seleksi </td><td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsEventConfirm=='0'){?>
												<span class="label label-sm label-danger label-mini">Belum</span>
												<?php }else{ ?><span class="label label-sm label-success label-mini">Sudah</span>
												<?php }?></td></tr>
									<tr><td>Mengikuti Seleksi </td><td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsEventUsmPresent=='0'){?>
												<span class="label label-sm label-danger label-mini">Belum</span>
												<?php }else{ ?><span class="label label-sm label-success label-mini">Sudah</span>
												<?php }?></td></tr>
									<tr><td>Menerima Hasil Seleksi </td><td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsResultConfirm=='0'){?>
												<span class="label label-sm label-danger label-mini">Belum</span>
												<?php }else{ ?><span class="label label-sm label-success label-mini">Sudah</span>
												<?php }?></td></tr>
									<tr><td>Membayar Biaya Daftar Ulang </td><td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsReapplyPaid=='0'){?>
												<span class="label label-sm label-danger label-mini">Belum</span>
												<?php }else{ ?><span class="label label-sm label-success label-mini">Sudah</span>
												<?php }?></td></tr>
									<tr><td>Menunggu dan mendapat NIM </td><td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsReapplyPaidConfirm=='0'){?>
												<span class="label label-sm label-danger label-mini">Belum</span>
												<?php }else{ ?><span class="label label-sm label-success label-mini">Sudah</span>
												<?php }?></td></tr>
									<?php }?>
								<?php }else{ ?>
									<tr><td><span class="label label-sm label-danger label">Mundur sebelum Daftar Ulang</span></td></td>
								<?php }?>
									</table>
								 </td>
                              </tr>
								<?php } ?>
                           </tbody>
                        </table>
                     </div>
					</div><?php }} ?>