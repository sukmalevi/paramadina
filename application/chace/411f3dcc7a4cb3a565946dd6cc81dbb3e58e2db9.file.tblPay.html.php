<?php /* Smarty version Smarty-3.1.14, created on 2017-03-27 14:28:18
         compiled from "application/views/smb/tblPay.html" */ ?>
<?php /*%%SmartyHeaderCode:12469679185359c2b8b28393-53749561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '411f3dcc7a4cb3a565946dd6cc81dbb3e58e2db9' => 
    array (
      0 => 'application/views/smb/tblPay.html',
      1 => 1490235173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12469679185359c2b8b28393-53749561',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5359c2b8c19b03_14601458',
  'variables' => 
  array (
    'total' => 0,
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359c2b8c19b03_14601458')) {function content_5359c2b8c19b03_14601458($_smarty_tpl) {?><h4>Total Peserta Ujian : <?php echo $_smarty_tpl->tpl_vars['total']->value->total;?>
 Orang</h4>
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption"><i class=" icon-money"></i> PEMBAYARAN CALON MAHASISWA BARU</div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
        <div id='tableMhs'>
        <table class="table table-striped table-bordered table-hover" id="sample_1">
            <thead>
                <tr>
                    <th>NO. REG</th>
                    <th>NAMA CMB</th>
                    <th>PRODI</th>
                    <th>JALUR</th>
                    <th>STATUS</th>
                    <th>CONFIRM</th>
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
                        <h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
</h4>
                    </td>
                    <td>
                        <h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama_cm;?>
</h4>
                    </td>
                    <td>
                        <h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['row']->value->progdi_inisial;?>
</h4>
                    </td>
                    <td>
                        <h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['row']->value->n_jalur;?>
</h4>
                    </td>
                    <td>
                        <div id="accordion1<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" class="panel-group">
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
" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form class="col-md-12 bg-gray">
                                            <fieldset>
                                                <label class="col-md-4">Metode</label>
                                                <label class="col-md-8">: <?php echo $_smarty_tpl->tpl_vars['row']->value->metode;?>
</label>
                                                <label class="col-md-4">No Kartu ATM</label>
                                                <label class="col-md-8">: <?php if ($_smarty_tpl->tpl_vars['row']->value->noAtmCardPendaftaran=='0'){?>-<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['row']->value->noAtmCardPendaftaran;?>
<?php }?></label>
                                                
                                                <label class="col-md-4">Rekening</label>
                                                <label class="col-md-8">: <?php echo $_smarty_tpl->tpl_vars['row']->value->rekening;?>
</label>
                                                
                                                <label class="col-md-4">Jumlah</label>
												<label class="col-md-8">: Rp.<?php echo $_smarty_tpl->tpl_vars['row']->value->jumlah;?>
</label>
                                                
                                                <label class="col-md-4">Tanggal Pembayaran</label>
                                                <label class="col-md-8">: <?php echo $_smarty_tpl->tpl_vars['row']->value->hari;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tglPembayaran;?>
</label>
                                                
                                                <label class="col-md-4">No. ATM Card</label>
                                                <label class="col-md-8">: <?php echo $_smarty_tpl->tpl_vars['row']->value->noAtmCardPendaftaran;?>
</label>
                                                
                                                <label class="col-md-4">No. Rek. Pengirim</label>
                                                <label class="col-md-8">: <?php echo $_smarty_tpl->tpl_vars['row']->value->noRekPengirimPendaftaran;?>
</label>
                                                
                                                <label class="col-md-4">Nama. Rek. Pengirim</label>
                                                <label class="col-md-8">: <?php echo $_smarty_tpl->tpl_vars['row']->value->namaRekPengirimPendaftaran;?>
</label>
                                               
                                                <label class="col-md-4">Bukti Bayar</label>
                                                <label class="col-md-8">: <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/assets/upload/bukti_bayar/<?php echo $_smarty_tpl->tpl_vars['row']->value->buktiBayarPendaftaran;?>
" class="btn green"><?php echo $_smarty_tpl->tpl_vars['row']->value->buktiBayarPendaftaran;?>
</a>
                                                </label>
                                                
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
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value->confirm=='0'&&$_smarty_tpl->tpl_vars['row']->value->statusBayar=='1'){?>
                            <a class="tolak btn btn-default" href="#editing" data-toggle="modal" href="#" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" id='tolak' name="tolak"><i class="icon-remove"></i> Tolak</a>
                            <a class="validasi btn btn-default" href="#" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" name="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode_smb;?>
" id='confirm'><i class="icon-play"></i> Terima</a>
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
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
</div>
</div>
<div class="modal fade" id="editing" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Tolak Pembayaran Pendaftaran</h4>
            </div>
            <div class="modal-body">
                <div id="formJabatan"></div>
            </div>
        </div>
    </div>
</div>
<script>
jQuery(document).ready(function() {
//    TableManaged.init();
    
    
        $(".validasi").each(function(i, v) {
            $(this).click(function(e) {
                e.preventDefault();
                $(this).bind('click', false);
                var val = $(this).attr("value");
                var vale = $(this).attr("name");
                var opt = $(this).attr("id");
                
                $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbPay/confirm", {
                    'val': val,
                    'value': vale,
                    'opt': opt
                }, function() {
                    //$('#confirm'+val).html(resp);
                    location.reload();
                });
                return false;
            });
        }); 
        $(".tolak").each(function(i, v) {
            $(this).click(function() {
                opt = $(this).attr("name");
                val = $(this).attr("value");
                $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/tolakBayarDaftar/tolak", {
                    'opt': opt,
                    'val': val
                }, function(resp) {
                    $('#formJabatan').html(resp);
                });
            });
        }); 
    
}); 

</script>
<?php }} ?>