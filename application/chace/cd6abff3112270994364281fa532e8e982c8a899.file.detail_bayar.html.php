<?php /* Smarty version Smarty-3.1.14, created on 2015-08-27 09:27:51
         compiled from "application/views/cmb/detail_bayar.html" */ ?>
<?php /*%%SmartyHeaderCode:7440373655c826a6ef85c0-98265685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd6abff3112270994364281fa532e8e982c8a899' => 
    array (
      0 => 'application/views/cmb/detail_bayar.html',
      1 => 1440642161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7440373655c826a6ef85c0-98265685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55c826a7012ea1_69821708',
  'variables' => 
  array (
    'jalur' => 0,
    'prodi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c826a7012ea1_69821708')) {function content_55c826a7012ea1_69821708($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['jalur']->value!='03'){?>
<h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Detail Pembayaran</h3>
<?php if ($_smarty_tpl->tpl_vars['jalur']->value=='02'){?>
<div class="form-group">
	<label class="control-label col-md-2">Jumlah SKS Diterima
                        <span class="required">*</span>
        </label>
	<div class="col-md-10">
		<input type="number" class="form-control" name="sks_acc" required>
	</div>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?>
<div class="form-group radio-list">
	<label class="control-label col-md-2">Saudara Kandung
                        <span class="required">*</span>
        </label>
	<div class="col-md-1">
		<label><input type="radio" name="saudara" value="1"> Ya </label>
	</div>
	<div class="col-md-1">
		<label><input type="radio" name="saudara" value="0"> Tidak </label>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prodi']->value=='1208'&&$_smarty_tpl->tpl_vars['jalur']->value=='KP'){?>
<div class="form-group radio-list">
	<label class="control-label col-md-2">Pendidikan Terakhir
                        <span class="required">*</span>
        </label>
	<div class="col-md-1">
		<label><input type="radio" name="lulusan" value="SMA"> SMA </label>
	</div>
	<div class="col-md-1">
		<label><input type="radio" name="lulusan" value="D3"> D3 </label>
	</div>
</div>
<?php }?>
<div class="form-group radio-list">
	<label class="control-label col-md-2">Metode Pembayaran
                        <span class="required">*</span>
        </label>
	<div class="col-md-1">
		<label><input type="radio" name="lunas" value="1" > Lunas </label>
	</div>
	<div class="col-md-2">
		<label><input type="radio" name="lunas" value="0" > Angsuran </label>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?>
<div class="form-group">
	<label class="control-label col-md-2">Ranking
                        <span class="required">*</span>
        </label>
	<div class="col-md-3">                        
		<select class="form-control" name="rank" required>
			<option value="0">-: Pilih Ranking :-</option>
			<option value="1" >Ranking 1</option>
			<option value="2" >Ranking 2</option>
			<option value="3" >Ranking 3</option>
			<option value="4" >Tidak Ada</option>
		</select>
	</div>
</div>
<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jalur']->value=='03'){?>
<div class="form-group">
	<label class="control-label col-md-2">Nama Donor
        </label>
	<div class="col-md-10">
		<input type="text" class="form-control" name="nama_donor" >
	</div>
</div>
<?php }?><?php }} ?>