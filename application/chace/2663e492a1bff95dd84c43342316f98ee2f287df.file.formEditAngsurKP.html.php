<?php /* Smarty version Smarty-3.1.14, created on 2016-01-25 15:13:45
         compiled from "application/views/master/formEditAngsurKP.html" */ ?>
<?php /*%%SmartyHeaderCode:73291879154639e264a8848-74957977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2663e492a1bff95dd84c43342316f98ee2f287df' => 
    array (
      0 => 'application/views/master/formEditAngsurKP.html',
      1 => 1450234234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73291879154639e264a8848-74957977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54639e26601fd7_50967620',
  'variables' => 
  array (
    'host' => 0,
    'pembayaran' => 0,
    'periode' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54639e26601fd7_50967620')) {function content_54639e26601fd7_50967620($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
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
                <select class="form-control" id="periode" name="periode" disabled>
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
            <label class="control-label col-md-3">Uang Masuk Semester 1</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->uangMasuk;?>
" id="um" name="um">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Biaya SKS Semester 1</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->sks;?>
" id="sks" name="sks">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">SPP Semester 1</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->spp;?>
" id="spp" name="spp">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Tempo Angsuran Semester 1</label>
            <div class="input-group col-md-5">
                <input type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->tempoAngsuran;?>
" id="tempo" name="tempo" pattern="[0-9]">
            </div>
        </div>
        <div class="form-group">
                <label class="control-label col-md-3">Jumlah SKS Semester 1</label>
                <div class="input-group col-md-8">
                        <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->jumlahSks;?>
" placeholder="Jumlah SKS Semester 1" id="jumlahSks" name="jumlahSks">
                </div>
        </div>
<h4 >Angsuran Bulanan Semester 1</h4>
        <div class="form-group">
            <label class="control-label col-md-3">Angsuran 1</label>
            <div class="input-group col-md-4">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran1;?>
" id="angsuran1" name="angsuran1">
            </div>
			<div class="input-group col-md-4">
				<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->due_date1;?>
" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur1" name="d_angsur1">
			</div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Angsuran 2</label>
            <div class="input-group col-md-4">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran2;?>
" id="angsuran2" name="angsuran2">
            </div>
			<div class="input-group col-md-4">
				<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->due_date2;?>
" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur2" name="d_angsur2">
			</div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Angsuran 3</label>
            <div class="input-group col-md-4">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran3;?>
" id="angsuran3" name="angsuran3">
            </div>
			<div class="input-group col-md-4">
				<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->due_date3;?>
" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur3" name="d_angsur3">
			</div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Angsuran 4</label>
            <div class="input-group col-md-4">
                <input type="text" class="biaya form-control"value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran4;?>
" id="angsuran4" name="angsuran4">
            </div>
			<div class="input-group col-md-4">
				<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->due_date4;?>
" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur4" name="d_angsur4">
			</div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Angsuran 5</label>
            <div class="input-group col-md-4">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran5;?>
" id="angsuran5" name="angsuran5">
            </div>
			<div class="input-group col-md-4">
				<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->due_date5;?>
" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur5" name="d_angsur5">
			</div>
        </div>
<!--        <div class="form-group">
            <label class="control-label col-md-3">Angsuran 6</label>
            <div class="input-group col-md-4">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran6;?>
" id="angsuran6" name="angsuran6">
            </div>
			<div class="input-group col-md-4">
				<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->due_date6;?>
" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur6" name="d_angsur6">
			</div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Angsuran 7</label>
            <div class="input-group col-md-4">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran7;?>
" id="angsuran7" name="angsuran7">
            </div>
			<div class="input-group col-md-4">
				<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->due_date7;?>
" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur7" name="d_angsur7">
			</div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Angsuran 8</label>
            <div class="input-group col-md-4">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran8;?>
" id="angsuran8" name="angsuran8">
            </div>
			<div class="input-group col-md-4">
				<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->due_date8;?>
" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur8" name="d_angsur8">
			</div>
        </div>-->
        <div class="form-group">
            <label class="control-label col-md-3">Total Angsuran</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->totalAngsuran;?>
" id="total" name="total">
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
            <button type="submit" class="btn blue" id="save" value="edit" name="opt">Save <i class="icon-plus"></i>
                </a>
        </div>
</form>
<script>
$(document).ready(function() {
    $('.biaya').formatCurrency();
    $('.biaya').blur(function() {
        $('.biaya').formatCurrency();
    });
});
</script>
<?php }} ?>