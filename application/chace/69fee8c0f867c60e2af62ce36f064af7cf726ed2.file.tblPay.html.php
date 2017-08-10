<?php /* Smarty version Smarty-3.1.14, created on 2014-02-19 00:12:17
         compiled from "application\views\smb\tblPay.html" */ ?>
<?php /*%%SmartyHeaderCode:2248152ccd3403a4da0-51576278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69fee8c0f867c60e2af62ce36f064af7cf726ed2' => 
    array (
      0 => 'application\\views\\smb\\tblPay.html',
      1 => 1392743533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2248152ccd3403a4da0-51576278',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccd3405a76f0_46242162',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccd3405a76f0_46242162')) {function content_52ccd3405a76f0_46242162($_smarty_tpl) {?>
				<div class="portlet box grey">
                     <div class="portlet-title">
                        <div class="caption"><i class=" icon-dollar"></i>Pembayaran Calon Mahasiswa Baru</div>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body flip-scroll">
                        <table class="table table-bordered table-striped table-condensed flip-content" >
                           <thead class="flip-content">
                              <tr>
                                 <th>Nama Peserta</th>
                                 <th>No. Reg</th>
                                 <th>Program Studi</th>
                                 <th>Jalur</th>
                                 <th>Status</th>
                                 <th>Confirm</th>
                              </tr>
                           </thead>
                           <tbody>
							  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                              <tr>
								 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nama_cm;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
</td>								 
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->progdi;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->n_jalur;?>
</td>
                                 <td>
								 <div id="accordion1<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" class="panel-group" >
									<?php if ($_smarty_tpl->tpl_vars['row']->value->statusBayar=='1'){?>
                                       <div class="panel panel-success">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#accordion1_1<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
">
                                                Pembayaran Registrasi Sudah Dilakukan
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_1<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" class="panel-collapse collapse" style="width:555px">
                                             <div class="panel-body">
											 <form>
											 <fieldset>
											  <label style="width:140px;">Metode </label> <label>: <?php echo $_smarty_tpl->tpl_vars['row']->value->metode;?>
</label><br>
											  <label style="width:140px;">No Kartu ATM </label> <label>: <?php if ($_smarty_tpl->tpl_vars['row']->value->noAtmCardPendaftaran=='0'){?>-<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['row']->value->noAtmCardPendaftaran;?>
<?php }?></label><br>
											  <label style="width:140px;">Rekening </label> <label>: <?php echo $_smarty_tpl->tpl_vars['row']->value->rekening;?>
</label><br>
											  <label style="width:140px;">Jumlah </label> : Rp.<?php echo $_smarty_tpl->tpl_vars['row']->value->jumlah;?>
<br>
											  <label style="width:140px;">Tanggal Pembayaran </label> <label>: <?php echo $_smarty_tpl->tpl_vars['row']->value->hari;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tglPembayaran;?>
</label><br>
											  <label style="width:140px;">No. ATM Card</label> <label>: <?php echo $_smarty_tpl->tpl_vars['row']->value->noAtmCardPendaftaran;?>
</label><br>
											  <label style="width:140px;">No. Rek. Pengirim </label> <label>: <?php echo $_smarty_tpl->tpl_vars['row']->value->noRekPengirimPendaftaran;?>
</label><br>
											  <label style="width:140px;">Nama. Rek. Pengirim </label> <label>: <?php echo $_smarty_tpl->tpl_vars['row']->value->namaRekPengirimPendaftaran;?>
</label><br>
											  <label style="width:140px;">Bukti Bayar </label> 
												<label>: <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/assets/upload/bukti_bayar/<?php echo $_smarty_tpl->tpl_vars['row']->value->buktiBayarPendaftaran;?>
" class="btn green"><?php echo $_smarty_tpl->tpl_vars['row']->value->buktiBayarPendaftaran;?>
</a></label><br>
											 </fieldset>
											</form>
                                                </div>
                                          </div>
                                       </div>
									<?php }else{ ?>
                                       <div class="panel panel-danger">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                Belum Melakukan Pendaftaran Ulang
                                             </h4>
                                          </div>
                                       </div>
									<?php }?>
									</div>
								 </td>
								 <td id="confirm<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
">
									<?php if ($_smarty_tpl->tpl_vars['row']->value->confirm=='0'&&$_smarty_tpl->tpl_vars['row']->value->statusBayar=='1'){?>
									<a class="confirm btn dark" href="#" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" id="confirm" name="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode_smb;?>
"><i class="icon-play"></i></a>
									 <?php }elseif($_smarty_tpl->tpl_vars['row']->value->confirm=='1'){?>
										<div id="accordion1" class="panel-group">
										   <div class="panel panel-default">
											  <div class="panel-heading">
												 <h4 class="panel-title">
												 CONFIRMED
												 </h4>
											  </div>
										   </div>
										</div>
									 <?php }?>
								 </td>
								</div>
                              </tr>
								<?php } ?>
                           </tbody>
                        </table>
                     </div>
               </div>
<script>

$(".confirm").each(function (i, v){
	$(this).click( function() {
		var val = $(this).attr("value");
		var vale = $(this).attr("name");
		var opt = $(this).attr("id");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbPay/confirm",{
				'val':val,
				'value':vale,
				'opt':opt
					},function(){
					//$('#confirm'+val).html(resp);
					location.reload();
				}); 
		return false;
	});
});


//$("#data").jExpand(); 
</script><?php }} ?>