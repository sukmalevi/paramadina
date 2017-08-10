<?php /* Smarty version Smarty-3.1.14, created on 2016-01-25 15:13:38
         compiled from "application/views/master/formEditLunasKP.html" */ ?>
<?php /*%%SmartyHeaderCode:50113424756a5d932aaac97-54140051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac50c7ea969015afaf0bd114063d6d2d6f62d23a' => 
    array (
      0 => 'application/views/master/formEditLunasKP.html',
      1 => 1450234326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50113424756a5d932aaac97-54140051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'pembayaran' => 0,
    'periode' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56a5d932b9a4e0_21029003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a5d932b9a4e0_21029003')) {function content_56a5d932b9a4e0_21029003($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mDaftarUlang/edit/do" class="form-horizontal" method="post">
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Kode</label>
            <div class="input-group col-md-6">
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->code;?>
" disabled>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->code;?>
" name="kode" hidden>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->periode_kode;?>
" name="periode" hidden>
                <input type="text" value="KP" name="tipePemb" hidden>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Periode</label>
            <div class="col-md-8">
                <select class="form-control" id="periode" disabled>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['pembayaran']->value->periode_kode==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Nama Pembayaran</label>
            <div class="input-group col-md-8">
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->nama;?>
" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Program Studi</label>
            <div class="col-md-8">
                <select class="form-control" id="prodi" name="prodi" disabled>
                    <?php if ($_smarty_tpl->tpl_vars['pembayaran']->value->prodiTipe=='1206'){?>
                    <option value="1206">Ilmu Komunikasi</option>
                    <?php }elseif($_smarty_tpl->tpl_vars['pembayaran']->value->prodiTipe=='1208'){?>
                    <option value="1208">Manajemen</option>
                    <?php }?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-6">Metod Pembayaran</label>
                    <div class="col-md-6">
                        <select class="form-control" id="pembayaran" name="pembayaran" disabled>
                            <?php if ($_smarty_tpl->tpl_vars['pembayaran']->value->pembayaran=='1'){?>
                            <option value="1">Lunas</option>
                            <?php }else{ ?>
                            <option value="69">Angsuran</option>
                            <?php }?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">Uang Masuk</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->uangMasuk;?>
" id="um" name="um">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">SKS</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->sks;?>
" id="sks" name="sks">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">SPP</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->spp;?>
" id="spp" name="spp">
            </div>
        </div>
        <div class="form-group">
                <label class="control-label col-md-3">Jumlah SKS</label>
                <div class="input-group col-md-8">
                        <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->jumlahSks;?>
" placeholder="Jumlah SKS Total" id="jumlahSks" name="jumlahSks">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Status</label>
            <div class="col-md-6">
                <select class="form-control" id="status" name="status" class="status">
                    <?php if ($_smarty_tpl->tpl_vars['pembayaran']->value->status=='1'){?>
                    <option value="1">AKTIF</option>
                    <?php }else{ ?>
                    <option value="0">TIDAK AKTIF</option>
                    <?php }?>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn blue" id="save" value="edit" name="opt">Save</buton>
        </div>
</form>

<script>
$(document).ready(function()
	{
    $('.biaya').formatCurrency();
        $('.biaya').blur(function()
        {
            $('.biaya').formatCurrency();
        });
});
</script><?php }} ?>