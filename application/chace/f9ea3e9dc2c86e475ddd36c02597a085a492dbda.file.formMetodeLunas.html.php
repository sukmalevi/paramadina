<?php /* Smarty version Smarty-3.1.14, created on 2016-02-05 16:04:34
         compiled from "application/views/master/formMetodeLunas.html" */ ?>
<?php /*%%SmartyHeaderCode:78931209356b465a24bf0b8-18957973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9ea3e9dc2c86e475ddd36c02597a085a492dbda' => 
    array (
      0 => 'application/views/master/formMetodeLunas.html',
      1 => 1453445219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78931209356b465a24bf0b8-18957973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56b465a24f5ec5_54789406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b465a24f5ec5_54789406')) {function content_56b465a24f5ec5_54789406($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
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
    <label class="control-label col-md-3">Uang Masuk</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Uang Masuk (Rp.)" id="um" name="um">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Jumlah SKS</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Jumlah SKS Semester 1" id="jumlahSks" name="jumlahSks">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">SKS</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Biaya Total SKS (Rp.)" id="sks" name="sks">
    </div>
</div>
<div class="form-group">
        <label class="control-label col-md-3">Jumlah SKS</label>
        <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="" placeholder="Jumlah SKS" id="jumlahSks" name="jumlahSks">
        </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">SPP</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Biaya SPP (Rp.)" id="spp" name="spp">
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
</script><?php }} ?>