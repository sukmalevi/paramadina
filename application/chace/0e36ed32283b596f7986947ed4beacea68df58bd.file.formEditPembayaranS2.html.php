<?php /* Smarty version Smarty-3.1.14, created on 2016-07-14 14:39:44
         compiled from "application/views/admisi/formEditPembayaranS2.html" */ ?>
<?php /*%%SmartyHeaderCode:1464986150578741c05d2625-88082423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e36ed32283b596f7986947ed4beacea68df58bd' => 
    array (
      0 => 'application/views/admisi/formEditPembayaranS2.html',
      1 => 1467181925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1464986150578741c05d2625-88082423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'val' => 0,
    'periode' => 0,
    'row' => 0,
    'prodi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_578741c06a4601_69277465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578741c06a4601_69277465')) {function content_578741c06a4601_69277465($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/settingUMS2/edit" class="form-horizontal" method="post">
    <div class="form-body">
        <div class="form-group">
            <input name="kodePembayaran" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['kode'];?>
" hidden>
            <label class="control-label col-md-3">Kode</label>
            <div class="input-group col-md-6">
                <input type="text" class="form-control" placeholder="Kode[Automatic]" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['kode'];?>
" name="kode" disabled>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Periode</label>
            <div class="col-md-8">
                <select class="form-control" id="pseriode" name="periode" disabled>
                    <option value="">-- Select Periode --</option>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value['kodePeriode']==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Program Studi</label>
            <div class="col-md-8">
                <select class="form-control" id="prodi" name="prodi" disabled>
                    <option value="">-- Select Prodi --</option>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['kode'];?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value['prodi']==$_smarty_tpl->tpl_vars['row']->value['kode']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['nama'];?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Nama Pembayaran</label>
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="Nama Pembayaran" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['description'];?>
" name="nama" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Uang Masuk</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" placeholder="Uang Masuk (Rp.)" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['uangMasuk'];?>
" name="um">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Biaya SPP Semester</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" placeholder="Biaya SPP (Rp.)" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['biayaSpp'];?>
" name="spp">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Biaya Per SKS</label>
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="Biaya Per SKS (Rp.)" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['biayaPerSks'];?>
" name="biaya_sks">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Jumlah Semester</label>
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="Jumlah Semester Perkuliahn" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['jumlahSemester'];?>
" name="jumlahSem">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Total Jumlah SKS</label>
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="Jumlah SKS" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['jumlahSks'];?>
" name="totalSks">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Jumlah SKS Semester 1</label>
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="Jumlah SKS Semester pertama" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['jumlahSksSemester1'];?>
" name="jumlahSksSem1">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Tanggal Jatuh Tempo</label>
            <div class="input-group col-md-4">
                <input type="text" class="form-control" placeholder="Due Date 1 (DD-MM-YYYY)" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['dueDate1'];?>
" name="dueDate1">
            </div>
            <div class="input-group col-md-4">
                <input type="text" class="form-control" placeholder="Due Date 2 (DD-MM-YYYY)" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['dueDate2'];?>
" name="dueDate2">
            </div>
        </div>
        <h4>Biaya SKS Fellowship Semester 1</h4>        
        <div class="form-group">
            <label class="control-label col-md-3">Biaya SKS Sem. 1 Fellowship 25%</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" placeholder="Biaya SKS Sem. 1 Fellowship 25% (Rp.)" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['sksSem1F25'];?>
" name="sksF25">
            </div>
        </div>      
        <div class="form-group">
            <label class="control-label col-md-3">Biaya SKS Sem. 1 Fellowship 50%</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" placeholder="Biaya SKS Sem. 1 Fellowship 50% (Rp.)" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['sksSem1F50'];?>
" name="sksF50">
            </div>
        </div>      
        <div class="form-group">
            <label class="control-label col-md-3">Biaya SKS Sem. 1 Fellowship 75%</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" placeholder="Biaya SKS Sem. 1 Fellowship 75% (Rp.)" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['sksSem1F75'];?>
" name="sksF75">
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