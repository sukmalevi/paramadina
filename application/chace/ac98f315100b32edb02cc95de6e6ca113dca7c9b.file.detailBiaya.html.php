<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 10:53:01
         compiled from "application\views\portal\detailBiaya.html" */ ?>
<?php /*%%SmartyHeaderCode:326152e884bc3eb812-40921371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac98f315100b32edb02cc95de6e6ca113dca7c9b' => 
    array (
      0 => 'application\\views\\portal\\detailBiaya.html',
      1 => 1393559576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326152e884bc3eb812-40921371',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e884bc4434c9_41136787',
  'variables' => 
  array (
    'host' => 0,
    'method' => 0,
    'biaya' => 0,
    'sau' => 0,
    'diskonSau' => 0,
    'total' => 0,
    'totalAll' => 0,
    'sisaAng' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e884bc4434c9_41136787')) {function content_52e884bc4434c9_41136787($_smarty_tpl) {?> <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script> 
<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
<label style="width:140px"><h4>Uang Masuk</h4></label> <label><h4>: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->uangMasuk;?>
</font></h4></label> <br>
<?php }else{ ?>
<label style="width:140px"><h4>Uang Masuk</h4></label> <label><h4>: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->uangMasuk;?>
</font> <?php echo $_smarty_tpl->tpl_vars['biaya']->value->tempoAngsuran;?>
x Angsuran, Total yang harus dibayar : Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->totalAngsuran;?>
</font></h4></label> <br>
<?php }?>
<label style="width:140px"><h4>SPP Semester 1</h4></label> <label><h4>: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->spp;?>
</font></h4></label> <br>
<label style="width:140px"><h4>SKS Semester 1</h4></label> <label><h4>: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->sks;?>
</font> (21 x Rp.200.000,00)</h4></label> <br>
<label style="width:140px"><h4>Biaya Orientasi</h4></label> <label><h4>: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->bpp;?>
</font> (Hanya 1x) </h4></label>
<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
<br>
	<label style="width:140px"><h4>Diskon</h4></label> 
	<label>
		<h4>
			: Rp<font class="biaya">1000000</font>
			<?php if ($_smarty_tpl->tpl_vars['sau']->value>'0'){?>
			 + Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonSau']->value;?>
</font>
			<?php }?>
		</h4>
	</label>
<?php }else{ ?>
<br>
	<label style="width:140px"><h4>Diskon</h4></label> 
	<label>
		<h4>
			<?php if ($_smarty_tpl->tpl_vars['sau']->value>'0'){?>
			: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonSau']->value;?>
</font>
			<?php }else{ ?>
			: -
			<?php }?>
		</h4>
	</label>
<?php }?>
<hr>
<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
<label style="width:140px">
	<h4 style="font-size:19px;font-family: Arial,sans-serif;">Total Biaya</h4></label> 
<label>
	<h4 style="font-size:19px;font-family: Arial,sans-serif;">: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font></h4></label><br>
<input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" hidden>
<?php }else{ ?>

<label style="width:230px">
	<h4 style="font-size:19px;font-family: Arial,sans-serif;">Total Biaya Daftar Ulang</h4>
</label> 
<label><h4 style="font-size:19px;font-family: Arial,sans-serif;">: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font></h4></label><br>

<label style="width:230px">
	<h4 style="font-size:19px;font-family: Arial,sans-serif;">Total yang harus dibayar</h4>
</label> 
<label><h4 style="font-size:19px;font-family: Arial,sans-serif;">: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>
</font></h4></label><br>

<input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value->total;?>
" hidden>
<hr>
<p>Detail Angsuran</p>
<hr>
<p>Uang Masuk</p>
<label style="width:260px"><h4>Angsuran Pertama(Uang Masuk)</h4></label> <label><h4>: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran1;?>
</font></h4></label><br>
<label style="width:260px"><h4>Angsuran Kedua</h4></label> <label><h4>: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran2;?>
</font></h4></label><br>
<label style="width:260px"><h4>Angsuran Ketiga</h4></label> <label><h4>: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran3;?>
</font></h4></label><br>
<br>
<label style="width:260px"><h4>Total Uang Masuk</h4></label> <label><h4>: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->totalAngsuran;?>
</font></h4></label><br>

<label style="width:260px">
	<h4 style="font-size:19px;font-family: Arial,sans-serif;">Sisa Angsuran</h4></label> 
<label>
	<h4 style="font-size:19px;font-family: Arial,sans-serif;">: Rp<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['sisaAng']->value;?>
</font></h4></label><br>


<?php }?>
<input type="text" name="kodeMetod" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value->kode;?>
" hidden>
<script>
$(document).ready(function()
	{
    $('.biaya').formatCurrency();
	});
</script><?php }} ?>