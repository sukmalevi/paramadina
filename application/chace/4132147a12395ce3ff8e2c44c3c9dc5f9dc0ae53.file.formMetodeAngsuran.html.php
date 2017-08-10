<?php /* Smarty version Smarty-3.1.14, created on 2016-02-05 16:10:55
         compiled from "application/views/master/formMetodeAngsuran.html" */ ?>
<?php /*%%SmartyHeaderCode:72081203256b4671f7b3bd8-14449421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4132147a12395ce3ff8e2c44c3c9dc5f9dc0ae53' => 
    array (
      0 => 'application/views/master/formMetodeAngsuran.html',
      1 => 1453445237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72081203256b4671f7b3bd8-14449421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56b4671f7f6286_86327893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b4671f7f6286_86327893')) {function content_56b4671f7f6286_86327893($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>

<div class="form-group">
	<label class="control-label col-md-3">Grade Masuk</label>
	<div class="col-md-7">
		<select class="form-control" id="grade" name="grade" required>
			<option>-- Pilih Grade --</option>
			<option value="SMA">SMA</option>
			<option value="D3">D3</option>
		</select>
	</div>
</div>

<div class="form-group">
    <label class="control-label col-md-3">Tempo Angsuran per Semester</label>
    <div class="input-group col-md-5">
        <input type="number" class="form-control" placeholder="Tempo Ansuran " id="angsur" name="angsur" pattern="[0-9]">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Uang Masuk Semester 1</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Uang Masuk (Rp.)" id="um" name="um">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Jumlah SKS Semester 1</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Jumlah SKS Semester 1" id="jumlahSks" name="jumlahSks">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Biaya SKS  Semester 1</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Biaya SKS (Rp.)" id="sks" name="sks">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">SPP Semester 1</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Biaya SPP (Rp.)" id="spp" name="spp">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Tempo Angsuran Semester 1</label>
    <div class="input-group col-md-5">
        <input type="number" class="form-control" id="tempo" name="tempo" pattern="[0-9]">
    </div>
</div>
<div class="form-group">
        <label class="control-label col-md-3">Jumlah SKS Semester 1</label>
        <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="" placeholder="Jumlah SKS  Semester 1" id="jumlahSks" name="jumlahSks">
        </div>
</div>
<h4 >Angsuran Bulanan Semester 1</h4>
<div class="form-group">
    <label class="control-label col-md-3">Angsuran 1</label>
    <div class="input-group col-md-4">
        <input type="text" class="biaya form-control"  placeholder="(Rp.)" id="angsuran1" name="angsuran1">
    </div>
    <div class="input-group col-md-4">
        <input type="text" class="form-control" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur1" name="d_angsur1">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Angsuran 2</label>
    <div class="input-group col-md-4">
        <input type="text" class="biaya form-control" placeholder="(Rp.)" id="angsuran2" name="angsuran2">
    </div>
    <div class="input-group col-md-4">
        <input type="text" class="form-control" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur2" name="d_angsur2">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Angsuran 3</label>
    <div class="input-group col-md-4">
        <input type="text" class="biaya form-control" placeholder="(Rp.)" id="angsuran3" name="angsuran3">
    </div>
    <div class="input-group col-md-4">
        <input type="text" class="form-control" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur3" name="d_angsur3">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Angsuran 4</label>
    <div class="input-group col-md-4">
        <input type="text" class="biaya form-control" placeholder="(Rp.)" id="angsuran4" name="angsuran4">
    </div>
    <div class="input-group col-md-4">
        <input type="text" class="form-control" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur4" name="d_angsur4">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Angsuran 5</label>
    <div class="input-group col-md-4">
        <input type="text" class="biaya form-control" placeholder="(Rp.)" id="angsuran5" name="angsuran5">
    </div>
    <div class="input-group col-md-4">
        <input type="text" class="form-control" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur5" name="d_angsur5">
    </div>
</div>
<!--<div id='gradeSma'>
    <div class="form-group">
        <label class="control-label col-md-3">Angsuran 6</label>
        <div class="input-group col-md-4">
            <input type="text" class="biaya form-control" placeholder="(Rp.)" id="angsuran6" name="angsuran6">
        </div>
        <div class="input-group col-md-4">
            <input type="text" class="form-control" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur6" name="d_angsur6">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Angsuran 7</label>
        <div class="input-group col-md-4">
            <input type="text" class="biaya form-control" placeholder="(Rp.)" id="angsuran7" name="angsuran7">
        </div>
        <div class="input-group col-md-4">
            <input type="text" class="form-control" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur7" name="d_angsur7">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Angsuran 8</label>
        <div class="input-group col-md-4">
            <input type="text" class="biaya form-control" placeholder="(Rp.)" id="angsuran8" name="angsuran8">
        </div>
        <div class="input-group col-md-4">
            <input type="text" class="form-control" placeholder="Due Date (DD-MM-YYYY)" id="d_angsur8" name="d_angsur8">
        </div>
    </div>
</div>-->
<div class="form-group">
    <label class="control-label col-md-3">Total Angsuran</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Total Angsuran (Rp.)" id="total" name="total">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Status</label>
    <div class="col-md-6">
        <select class="form-control" id="status" name="status" class="status">
            <option value="1">AKTIF</option>
            <option value="0">TIDAK AKTIF</option>
        </select>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn blue" id="save" value="save" name="opt">Tambah <i class="icon-plus"></i>
        </a>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('.biaya').blur(function() {
        $('.biaya').formatCurrency();
    });
}); 

</script>
<?php }} ?>