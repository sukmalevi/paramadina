<?php /* Smarty version Smarty-3.1.14, created on 2014-02-18 23:43:06
         compiled from "application\views\smb\tblDaftarUlang.html" */ ?>
<?php /*%%SmartyHeaderCode:1124052cd04fcf198f6-42895488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b74bd3118b1b159f12635a9cfb5ebd9ba1cb8d' => 
    array (
      0 => 'application\\views\\smb\\tblDaftarUlang.html',
      1 => 1392741777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1124052cd04fcf198f6-42895488',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cd04fd296930_52716767',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cd04fd296930_52716767')) {function content_52cd04fd296930_52716767($_smarty_tpl) {?>				<div class="portlet box grey">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-calendar"></i>Pendaftaran Ulang Mahasiswa Baru</div>
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
                                 <th>No. Reg.</th>
                                 <th>Jalur</th>
                                 <th>Prodi</th>
                                 <th>Formulir Pembayaran Daftar Ulang</th>
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
								 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->n_jalur;?>
</td>
								 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->progdi;?>
</td>
                                 <td>
								 <div id="accordion1<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" class="panel-group" >
									<?php if ($_smarty_tpl->tpl_vars['row']->value->stsReapplyPaid=='1'){?>
                                       <div class="panel panel-success">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#accordion1_1<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
">
                                                Pembayaran Daftar Ulang Sudah Dilakukan
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_1<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" class="panel-collapse collapse" style="width:555px">
                                             <div class="panel-body">
											 <form>
											 <fieldset>
											  <label style="width:140px;">Metode </label> <label>: <?php echo $_smarty_tpl->tpl_vars['row']->value->transferTipe;?>
</label><br>
											  <label style="width:140px;">Rekening </label> <label>: <?php echo $_smarty_tpl->tpl_vars['row']->value->akunBank;?>
</label><br>
											  <label style="width:140px;">Jumlah </label> : Rp.<?php echo $_smarty_tpl->tpl_vars['row']->value->reapplyBankTransferAmount;?>
<br>
											  <label style="width:140px;">Tanggal Pembayaran </label> <label>: <?php echo $_smarty_tpl->tpl_vars['row']->value->day;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tgl;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->bln;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->thn;?>
</label><br>
											  <label style="width:140px;">No ATM Card </label> <label>: <?php echo $_smarty_tpl->tpl_vars['row']->value->noAtmCardDaftarulang;?>
</label><br>
											  <label style="width:140px;">No. Rek. Pengirim </label> <label>: <?php echo $_smarty_tpl->tpl_vars['row']->value->noRekPengirimDaftarUlang;?>
</label><br>
											  <label style="width:140px;">Nama. Rek. Pengirim </label> <label>: <?php echo $_smarty_tpl->tpl_vars['row']->value->namaRekPengirimDaftarUlang;?>
</label><br>
											  <label style="width:140px;">Bukti Bayar </label> 
											  <label>: <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/assets/upload/bukti_bayar/<?php echo $_smarty_tpl->tpl_vars['row']->value->buktiBayarDaftarUlang;?>
" class="btn green"><?php echo $_smarty_tpl->tpl_vars['row']->value->buktiBayarDaftarUlang;?>
</a></label><br>
											  <label><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/detailDaftarUlang/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" class="btn blue">Detail Transaksi</a></label><br>
											 
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
								 <?php if ($_smarty_tpl->tpl_vars['row']->value->stsReapplyPaidConfirm=='0'&&$_smarty_tpl->tpl_vars['row']->value->stsReapplyPaid=='1'){?>
									<a class="confirm btn dark" href="#" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" id="confirm"><i class="icon-play"></i></a>
								 <?php }elseif($_smarty_tpl->tpl_vars['row']->value->stsReapplyPaidConfirm=='1'){?>
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
		var opt = $(this).attr("id");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbDaftarUlang/confirm",{
				'val':val,
				'opt':opt
					},function(resp){
					$('#confirm'+val).html(resp);
				}); 
		return false;
	});
});


//$("#data").jExpand(); 
</script><?php }} ?>