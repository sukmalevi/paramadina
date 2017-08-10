<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 11:20:14
         compiled from "application/views/smb/tblDaftarUlang.html" */ ?>
<?php /*%%SmartyHeaderCode:5732227775360803950eaa7-19437117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0501920854d2c938e352f51921bb56a1b4c8404b' => 
    array (
      0 => 'application/views/smb/tblDaftarUlang.html',
      1 => 1479869582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5732227775360803950eaa7-19437117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536080395fcd44_65794259',
  'variables' => 
  array (
    'total' => 0,
    'totalDone' => 0,
    'totalNone' => 0,
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536080395fcd44_65794259')) {function content_536080395fcd44_65794259($_smarty_tpl) {?><h4>Jumlah Peserta Daftar Ulang : <?php echo $_smarty_tpl->tpl_vars['total']->value->total;?>
 Calon Mahasiswa baru</h4>
<h4>Sudah Daftar Ulang : <?php echo $_smarty_tpl->tpl_vars['totalDone']->value->total;?>
 Orang, Belum Daftar Ulang : <?php echo $_smarty_tpl->tpl_vars['totalNone']->value->total;?>
 Orang</h4>
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">PENDAFTARAN ULANG MAHASISWA BARU</div>
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
                    <th>NAMA CMB</th>
                    <th>NO REG.</th>
                    <th>JALUR</th>
                    <th>PRODI</th>
                    <th>FORMULIR PEMBAYARAN DAFTAR ULANG</th>
                    <th class="center">CONFIRM</th>
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
" class="panel-group">
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
                                        <form  class="col-md-12">
                                            <fieldset>
                                                <label  class="col-md-4">Metode</label>
                                                <label  class="col-md-8">: <?php echo $_smarty_tpl->tpl_vars['row']->value->transferTipe;?>
</label>
                                                <br>
                                                <label  class="col-md-4">Rekening</label>
                                                <label  class="col-md-8">: <?php echo $_smarty_tpl->tpl_vars['row']->value->akunBank;?>
</label>
                                                <br>
                                                <label class="col-md-4">Jumlah</label>
												<label class="col-md-8">: Rp.<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['row']->value->reapplyBankTransferAmount;?>
</font></label>
                                                <br>
                                                <label  class="col-md-4">Tanggal Pembayaran</label>
                                                <label  class="col-md-8">: <?php echo $_smarty_tpl->tpl_vars['row']->value->day;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tgl;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->bln;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->thn;?>
</label>
                                                <br>
                                                <label class="col-md-4">No ATM Card</label>
                                                <label class="col-md-8">: <?php echo $_smarty_tpl->tpl_vars['row']->value->noAtmCardDaftarulang;?>
</label>
                                                <br>
                                                <label class="col-md-4">No. Rek. Pengirim</label>
                                                <label class="col-md-8">: <?php echo $_smarty_tpl->tpl_vars['row']->value->noRekPengirimDaftarUlang;?>
</label>
                                                <br>
                                                <label  class="col-md-4">Nama. Rek. Pengirim</label>
                                                <label class="col-md-8">: <?php echo $_smarty_tpl->tpl_vars['row']->value->namaRekPengirimDaftarUlang;?>
</label>
                                                <br>
                                                <label  class="col-md-4">Bukti Bayar</label>
                                                <label class="col-md-8">: <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/assets/upload/bukti_bayar/<?php echo $_smarty_tpl->tpl_vars['row']->value->buktiBayarDaftarUlang;?>
" class="btn green"><?php echo $_smarty_tpl->tpl_vars['row']->value->buktiBayarDaftarUlang;?>
</a>
                                                </label>
                                                <br>
                                                <label><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/detailDaftarUlang/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" class="btn blue">Detail Transaksi</a>
                                                </label>
                                                <br>

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
                        <a class="tolak btn red" href="#editing" data-toggle="modal" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" id="tolak" name="tolak"><i class="icon-remove"></i></a>
                        <a class="confirm btn dark" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#"  id="confirm" <?php if ($_smarty_tpl->tpl_vars['row']->value->earlyBird=='0'){?>disabled<?php }?>><i class="icon-play"></i></a>
                        <a class="earlybird btn blue" href="#earlyConfirm" data-toggle="modal" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" id="earlybird" name="earlybird">
                            <?php if ($_smarty_tpl->tpl_vars['row']->value->earlyBird=='1'){?><i class="icon-minus-sign"></i><?php }elseif($_smarty_tpl->tpl_vars['row']->value->earlyBird=='99'){?><i class="icon-ok-sign"></i><?php }?> early bird</a>
                        
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
<div class="modal fade" id="editing" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Tolak Pembayaran Daftar Ulang</h4>
            </div>
            <div class="modal-body">
                <div id="formJabatan"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="earlyConfirm" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Apakah Mahasiswa Melakukan Daftar Ulang Sebelum 28 Feb 2016 (Early Bird) ?</h4>
            </div>
            <div class="modal-body">
                <div id="formEarly"></div>
            </div>
        </div>
    </div>
</div>
<script>
jQuery(document).ready(function() {
    TableEditable.init();
}); 

$(".confirm").each(function(i, v) {
    $(this).click(function(e) {        
        e.preventDefault();
        $(this).bind('click', false);
        var val = $(this).attr("value");
        var opt = $(this).attr("id");
        $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbDaftarUlang/confirm", {
            'val': val,
            'opt': opt
        }, function(resp) {
            $('#confirm' + val).html(resp);
        });
        return false;
    });
});  

    $(".tolak").each(function(i, v) {
        $(this).click(function() {
            opt = $(this).attr("name");
            val = $(this).attr("value");
            $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/tolakBayar/tolak", {
                'opt': opt,
                'val': val
            }, function(resp) {
                $('#formJabatan').html(resp);
            });
        });
    }); 


    $(".earlybird").each(function(i, v) {
        $(this).click(function() {
            opt = $(this).attr("name");
            val = $(this).attr("value");
            $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/earlyBird/confirm", {
                'opt': opt,
                'val': val
            }, function(resp) {
                $('#formEarly').html(resp);
            });
        });
    }); 


        //$("#data").jExpand();
</script>
<?php }} ?>