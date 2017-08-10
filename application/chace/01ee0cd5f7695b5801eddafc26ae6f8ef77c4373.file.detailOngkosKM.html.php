<?php /* Smarty version Smarty-3.1.14, created on 2016-07-29 23:15:00
         compiled from "application/views/portal/detailOngkosKM.html" */ ?>
<?php /*%%SmartyHeaderCode:10164108057201c5256aa66-09998017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01ee0cd5f7695b5801eddafc26ae6f8ef77c4373' => 
    array (
      0 => 'application/views/portal/detailOngkosKM.html',
      1 => 1469677101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10164108057201c5256aa66-09998017',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57201c52655a86_32097598',
  'variables' => 
  array (
    'host' => 0,
    'uangMasuk' => 0,
    'biaya' => 0,
    'total' => 0,
    'pilihanBiaya' => 0,
    'val' => 0,
    'k' => 0,
    'jalur' => 0,
    'angsuran' => 0,
    'row' => 0,
    'kodePayTipe' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57201c52655a86_32097598')) {function content_57201c52655a86_32097598($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
                <div class="form-group">    
                    <label class="control-label col-md-2">Rincian Biaya
                    </label>
                    <div class="col-md-10">

                            <a class="man list-group-item">
                                    <label class="col-md-4">Uang Masuk</label>
                                    <label >
                                            : Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value;?>
</font> 
                                            <!--<small>( <?php echo $_smarty_tpl->tpl_vars['biaya']->value->tempoAngsuran;?>
 X Angsuran )</small>-->
                                    </label>
                            </a>
                            <a class="man list-group-item">
                                    <label class="col-md-4">SPP </label>
                                    <label>: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->spp;?>
</font></label>
                            </a>
                            <a class="man list-group-item">
                                    <label class="col-md-4">
                                            SKS
                                    </label>
                                    <label>
                                            : Rp
                                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->biayaPerSks*$_smarty_tpl->tpl_vars['biaya']->value->jumlahSks;?>
</font> (<?php echo $_smarty_tpl->tpl_vars['biaya']->value->jumlahSks;?>
 x Rp <font class=""><?php echo number_format($_smarty_tpl->tpl_vars['biaya']->value->biayaPerSks,0,",",".");?>
</font>)
                                    </label>
                            </a>

                            <a class="man list-group-item">
                                    <label  class="col-md-4">
                                            Biaya Orientasi (BPP)
                                    </label>
                                    <label >
                                            : Rp
                                                    <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->bpp;?>
</font>
                                    </label>
                            </a>
                    
                            <hr>
                    
                            <a class="man list-group-item">
                                    <label class="col-md-4" style="font-size:16px;font-family: Arial,sans-serif;">Total Biaya Perkuliahan</label>
                                    <label style="font-size:16px;font-family: Arial,sans-serif;">: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font></label>
                            </a>

                            <input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" hidden>
                    </div>
                </div>
                <div class="form-group">    
                    <label class="control-label col-md-2">Pilihan Biaya Daftar Ulang
                    </label>
                    <div class="col-md-10">
                        <div class="radio-list">
                            <label>
                            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pilihanBiaya']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['val']->key;
?>                                
                                <input type="radio" name="pilihDU" class="pilihDU" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>checked<?php }?>> Rp. <?php echo number_format($_smarty_tpl->tpl_vars['val']->value,0,",",".");?>
 
                            <?php } ?>
                            </label>
                        </div>
                    </div>
                </div>
                <div id='pilihan_biaya'></div>
<!--                <div class="form-group">
                    <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Detail Angsuran <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?>Semester 1<?php }else{ ?>Uang Masuk<?php }?></h3>
                     <label class="control-label col-md-2">Rincian Biaya</label>
                     <div class="col-md-10">
                         <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['angsuran']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                         <a class="man list-group-item">
                                 <label class="col-md-4">Angsuran Ke-<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
 </label>
                                 <label>: Rp <font class=" biaya"><?php echo $_smarty_tpl->tpl_vars['row']->value['angsuran'];?>
</font></label>
                                 <label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['tglTempo'],"%e %b %Y");?>
</label>
                         </a>
                         <?php } ?>


                     <br>
                    </div>
                </div>-->
                <div class="form-group">                
                    <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Detail Transaksi</h3>

                        <label class="control-label col-md-2">Jumlah Pembayaran
                        </label>
                        <div class="col-md-10" >
                            <input type="text" class="biaya form-control" name="jumlahBayar" id="jumlahBayar" value="">
                            <p class="help-block">Masukkan nilai uang yang telah Anda bayarkan</p>
                        </div>
                </div>
<input type="text" name="kodeMetod" id='kodeBayar' value="<?php echo $_smarty_tpl->tpl_vars['kodePayTipe']->value;?>
" hidden>
<script>
    
    $(document).ready(function(){
        $('.biaya').formatCurrency();	
        opt = $('.pilihDU').attr("name");
        pilihan = $('.pilihDU').attr("value");
        kodebayar = $('#kodeBayar').attr("value");

        pilihBiaya(opt, pilihan, kodebayar);
    });

    $('.biaya').blur(function(){
        $('.biaya').formatCurrency();
    });
    $('.pilihDU').click( function() {	
        opt = $(this).attr("name");
        pilihan = $(this).attr("value");
        kodebayar = $('#kodeBayar').attr("value");

        pilihBiaya(opt, pilihan, kodebayar);
    });

    function pilihBiaya(opt, pilihan, kodebayar){
        $('#jumlahBayar').val(pilihan).formatCurrency();
        $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/listAngsuran", {'opt':opt, 'val':pilihan, 'kodebayar':kodebayar},function(resp){
                $('#pilihan_biaya').html(resp);
        });
    }
    
</script> <?php }} ?>