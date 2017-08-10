<?php /* Smarty version Smarty-3.1.14, created on 2016-07-14 14:39:41
         compiled from "application/views/admisi/formAddPembayaranS2.html" */ ?>
<?php /*%%SmartyHeaderCode:1645364738578741bd97cff8-00010279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ca37fe2ba37cdacfb32a35ac6810e291174beb0' => 
    array (
      0 => 'application/views/admisi/formAddPembayaranS2.html',
      1 => 1467180250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1645364738578741bd97cff8-00010279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'periode' => 0,
    'row' => 0,
    'prodi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_578741bd9b6b77_16545106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578741bd9b6b77_16545106')) {function content_578741bd9b6b77_16545106($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/settingUMS2/add" class="form-horizontal" method="post">
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Kode</label>
            <div class="input-group col-md-6">
                <input type="text" class="form-control" placeholder="Kode[Automatic]" id="kode" name="kode" disabled>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Periode</label>
            <div class="col-md-8">
                <select class="form-control" id="pseriode" name="periode" required>
                    <option value="">-- Select Periode --</option>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Program Studi</label>
            <div class="col-md-8">
                <select class="form-control" id="prodi" name="prodi" required>
                    <option value="">-- Select Prodi --</option>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['kode'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nama'];?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Nama Pembayaran</label>
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="Nama Pembayaran" id="nama" name="nama" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Uang Masuk</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" placeholder="Uang Masuk (Rp.)" id="um" name="um">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Biaya SPP Semester</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" placeholder="Biaya SPP (Rp.)" id="spp" name="spp">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Biaya Per SKS</label>
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="Biaya Per SKS (Rp.)" id="sks" name="biaya_sks">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Jumlah Semester</label>
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="Jumlah Semester Perkuliahn" id="jumlahSem" name="jumlahSem">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Total Jumlah SKS</label>
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="Jumlah SKS" id="totalSks" name="totalSks">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Jumlah SKS Semester 1</label>
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="Jumlah SKS Semester pertama" id="jumlahSksSem1" name="jumlahSksSem1">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Tanggal Jatuh Tempo</label>
            <div class="input-group col-md-4">
                <input type="text" class="form-control" placeholder="Due Date 1 (DD-MM-YYYY)" id="dueDate1" name="dueDate1">
            </div>
            <div class="input-group col-md-4">
                <input type="text" class="form-control" placeholder="Due Date 2 (DD-MM-YYYY)" id="dueDate2" name="dueDate2">
            </div>
        </div>
        <h4>Biaya SKS Fellowship Semester 1</h4>        
        <div class="form-group">
            <label class="control-label col-md-3">Biaya SKS Sem. 1 Fellowship 25%</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" placeholder="Biaya SKS Sem. 1 Fellowship 25% (Rp.)" id="sks" name="sksF25">
            </div>
        </div>      
        <div class="form-group">
            <label class="control-label col-md-3">Biaya SKS Sem. 1 Fellowship 50%</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" placeholder="Biaya SKS Sem. 1 Fellowship 50% (Rp.)" id="sks" name="sksF50">
            </div>
        </div>      
        <div class="form-group">
            <label class="control-label col-md-3">Biaya SKS Sem. 1 Fellowship 75%</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" placeholder="Biaya SKS Sem. 1 Fellowship 75% (Rp.)" id="sks" name="sksF75">
            </div>
        </div>
    </div>    
    <div class="modal-footer">
        <button type="button" class="btn default" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn blue" id="save" value="save" name="opt">Simpan <i class="icon-save"></i></button>
    </div>
</form>
<script type="text/javascript">
    
$(document).ready(function() {
    $('.biaya').blur(function() {
        $('.biaya').formatCurrency();
    });
});
</script>
<?php }} ?>