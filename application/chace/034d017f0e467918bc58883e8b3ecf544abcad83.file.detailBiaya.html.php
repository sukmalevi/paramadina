<?php /* Smarty version Smarty-3.1.14, created on 2014-11-13 17:22:57
         compiled from "application/views/portal/detailBiaya.html" */ ?>
<?php /*%%SmartyHeaderCode:1008226986536080951a6a14-50157792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '034d017f0e467918bc58883e8b3ecf544abcad83' => 
    array (
      0 => 'application/views/portal/detailBiaya.html',
      1 => 1415872654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1008226986536080951a6a14-50157792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53608095270d44_03483123',
  'variables' => 
  array (
    'host' => 0,
    'method' => 0,
    'biaya' => 0,
    'prodiType' => 0,
    'prodi' => 0,
    'jalur' => 0,
    'sau' => 0,
    'diskonSau' => 0,
    'total' => 0,
    'totalAll' => 0,
    'sisaAng' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53608095270d44_03483123')) {function content_53608095270d44_03483123($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
<label class="col-md-3">
    <h4>Uang Masuk</h4>
</label>
<label class="col-md-9">
    <h4>: Rp
        <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->uangMasuk;?>
</font>
    </h4>
</label>
<br><?php }else{ ?>
<label class="col-md-3">
    <h4>Uang Masuk</h4>
</label>
<label class="col-md-9">
    <h4>
        : Rp
        <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->uangMasuk;?>
</font>
    </h4>
    <p class="help-block">( <?php echo $_smarty_tpl->tpl_vars['biaya']->value->tempoAngsuran;?>
 X Angsuran ) dari total yang harus dibayar, yaitu sebesar Rp
        <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->totalAngsuran;?>
</font>
    </p>
</label>
<br><?php }?>
<label class="col-md-3">
    <h4>SPP Semester 1</h4>
</label>
<label class="col-md-9">
    <h4>: Rp
        <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->spp;?>
</font>
    </h4>
</label>
<br>
<label class="col-md-3">
    <h4>SKS Semester 1</h4>
</label>
<label class="col-md-9">
    <h4>: Rp
        <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->sks;?>
</font>
        (<?php if ($_smarty_tpl->tpl_vars['prodiType']->value=='1'){?>22<?php }else{ ?>21<?php }?> x Rp 200.000)</h4>
</label>
<br>
<label class="col-md-3">
    <h4>Biaya Orientasi</h4>
</label>
<label class="col-md-9">
    <h4>: Rp
        <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->bpp;?>
</font>(Hanya 1x)</h4>
</label>
<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
<br>
<label class="col-md-3">
    <h4>Diskon</h4>
</label>
<label class="col-md-9">
    <h4>
        <?php if ($_smarty_tpl->tpl_vars['prodi']->value!='1204'){?> <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?> : Rp
        <font class="biaya">1000000</font>
        <?php if ($_smarty_tpl->tpl_vars['sau']->value>'0'){?> + Rp
        <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonSau']->value;?>
</font>
        <?php }?> <?php }else{ ?> : - <?php }?> <?php }else{ ?> : - <?php }?>
    </h4>
</label>
<?php }else{ ?>
<br>
<label class="col-md-3">
    <h4>Diskon</h4>
</label>
<label class="col-md-9">
    <h4>
        <?php if ($_smarty_tpl->tpl_vars['sau']->value>'0'){?> : Rp
        <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonSau']->value;?>
</font>
        <?php }else{ ?> : - <?php }?>
    </h4>
</label>
<?php }?>
<hr><?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
<label class="col-md-3">
    <h4 style="font-size:19px;font-family: Arial,sans-serif;">Total Biaya</h4>
</label>
<label class="col-md-9">
    <h4 style="font-size:19px;font-family: Arial,sans-serif;">: Rp
        <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font>
        <input id="totalLunas" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" hidden>
    </h4>
</label>
<br>
<input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>
" hidden>
<?php }else{ ?>
<label class="col-md-8">
    <h4 style="font-size:19px;font-family: Arial,sans-serif;">Total biaya daftar ulang</h4>
</label>
<label class="col-md-4">
    <h4 style="font-size:19px;font-family: Arial,sans-serif;">: Rp
        <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font>
    </h4>
</label>
<br>

<input id="totalAngsurBayar" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" hidden>
<label class="col-md-8">
    <h4 style="font-size:19px;font-family: Arial,sans-serif;">Total yang harus dilunaskan</h4>
</label>
<label class="col-md-4">
    <h4 style="font-size:19px;font-family: Arial,sans-serif;">: Rp
        <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>
</font>
    </h4>
</label>
<br>

<input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value->total;?>
" hidden>
<hr>
<h3>Detail Angsuran</h3>
<hr>
<div class="row col-md-12">
    <label class="col-md-8">
        <h4>Angsuran Pertama(UM)</h4>
    </label>
    <label class="col-md-4">
        <h4>: Rp
            <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran1;?>
</font>
        </h4>
    </label>
    <br>
    <label class="col-md-8">
        <h4>Angsuran Kedua</h4>
    </label>
    <label class="col-md-4">
        <h4>: Rp
            <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran2;?>
</font>
        </h4>
    </label>
    <br>
    <label class="col-md-8">
        <h4>Angsuran Ketiga</h4>
    </label>
    <label class="col-md-4">
        <h4>: Rp
            <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran3;?>
</font>
        </h4>
    </label>
    <br><?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?> <?php if ($_smarty_tpl->tpl_vars['prodi']->value=='1208'||$_smarty_tpl->tpl_vars['prodi']->value=='1206'){?>
    <label class="col-md-8">
        <h4>Angsuran Keempat</h4>
    </label>
    <label class="col-md-4">
        <h4>: Rp
            <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran4;?>
</font>
        </h4>
    </label>
    <?php }?> <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?> 
    <?php if ($_smarty_tpl->tpl_vars['prodi']->value=='1208'){?>
    <label class="col-md-8">
        <h4>Angsuran Kelima</h4>
    </label>
    <label class="col-md-4">
        <h4>: Rp
            <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran5;?>
</font>
        </h4>
    </label>
    <br>
    <label class="col-md-8">
        <h4>Angsuran Keenam</h4>
    </label>
    <label class="col-md-4">
        <h4>: Rp
            <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran6;?>
</font>
        </h4>
    </label>
    <br>
    <label class="col-md-8">
        <h4>Angsuran Ketujuh</h4>
    </label>
    <label class="col-md-4">
        <h4>: Rp
            <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran7;?>
</font>
        </h4>
    </label>
    <br>
    <label class="col-md-8">
        <h4>Angsuran Kedelapan</h4>
    </label>
    <label class="col-md-4">
        <h4>: Rp
            <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran8;?>
</font>
        </h4>
    </label>
    <?php }?> <?php }?>
    <br>
    <br>
    <label class="col-md-8">
        <h4>Total Uang Masuk</h4>
    </label>
    <label class="col-md-4">
        <h4>: Rp
            <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->totalAngsuran;?>
</font>
        </h4>
    </label>
    <br>

    <label class="col-md-8">
        <h4 style="font-size:19px;font-family: Arial,sans-serif;">Sisa Angsuran</h4>
    </label>
    <label class="col-md-4">
        <h4 style="font-size:19px;font-family: Arial,sans-serif;">: Rp
            <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['sisaAng']->value;?>
</font>
        </h4>
    </label>
    <br>
</div>
<?php }?>

<input type="text" name="kodeMetod" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value->kode;?>
" hidden>

<script>
$(document).ready(function() {
    var totalBayar = $('#totalLunas').attr("value");
    var totalAngsurBayar = $('#totalAngsurBayar').attr("value");


    if (val == '1') {
        $("#jumlahBayar").val(totalBayar);
        $("#jumlahDataBayar").val(totalBayar);
    } else {
        $("#jumlahBayar").val(totalAngsurBayar);
        $("#jumlahDataBayar").val(totalAngsurBayar);
        // alert(totalAngsurBayar);
    }

    $('.biaya').formatCurrency();
});
</script>

<?php }} ?>