<?php /* Smarty version Smarty-3.1.14, created on 2016-11-25 17:20:52
         compiled from "application/views/portal/detailOngkos.html" */ ?>
<?php /*%%SmartyHeaderCode:204384630156baff5b2d8cd1-21311478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b7ecfb48b640bce152c1755ee39bbcb65b59c64' => 
    array (
      0 => 'application/views/portal/detailOngkos.html',
      1 => 1478575520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204384630156baff5b2d8cd1-21311478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56baff5b594db1_97204369',
  'variables' => 
  array (
    'host' => 0,
    'method' => 0,
    'uangMasuk' => 0,
    'jalur' => 0,
    'biaya' => 0,
    'prodi' => 0,
    'earlyBird' => 0,
    'saudara' => 0,
    'diskonSau' => 0,
    'transPaid' => 0,
    'total' => 0,
    'totalAll' => 0,
    'angsuran1' => 0,
    'angsuran2' => 0,
    'angsuran3' => 0,
    'grade' => 0,
    'totalUangMasuk' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56baff5b594db1_97204369')) {function content_56baff5b594db1_97204369($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
	<div class="form-group">    
		<label class="control-label col-md-2">Rincian Biaya</label>
			<div class="col-md-10">
				<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>						
				<a class="man list-group-item">
					<label class="col-md-4">Uang Masuk </label>
					<label>: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value;?>
</font></label>
				</a>
				<?php }else{ ?>
				<a class="man list-group-item">
					<label class="col-md-4">Uang Masuk</label>
					<label > : Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value;?>
</font> </label>
				</a>
				<?php }?>
				<a class="man list-group-item">
					<label class="col-md-4">SPP Semester <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='01'||$_smarty_tpl->tpl_vars['method']->value=='69'){?>1<?php }?></label>
					<label>: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->spp;?>
</font></label>
				</a>
				<a class="man list-group-item">
					<label class="col-md-4">
							SKS Semester <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='01'||$_smarty_tpl->tpl_vars['method']->value=='69'){?>1<?php }?>
					</label>
					<label>: Rp 
						<font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->sks;?>
</font> (<?php echo $_smarty_tpl->tpl_vars['biaya']->value->jumlahSks;?>
 x Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->sks/$_smarty_tpl->tpl_vars['biaya']->value->jumlahSks;?>
</font>)
					</label>
				</a>
				<a class="man list-group-item">
						<label  class="col-md-4">Biaya Orientasi (BPP)</label>
						<label >
								: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['biaya']->value->bpp;?>
</font>
						</label>
				</a>
                    <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>                        
                            <a class="man list-group-item">
                                    <label class="col-md-4">
                                            Potongan<br>
                                    </label>
                                    <label>

                                        <?php if ($_smarty_tpl->tpl_vars['prodi']->value!='1204'){?> 
                                                <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='01'||$_smarty_tpl->tpl_vars['jalur']->value=='02'){?> 
                                                    <?php if ($_smarty_tpl->tpl_vars['earlyBird']->value!='99'){?>
                                                    : Rp <font class="biaya">1000000</font> (Lunas)
                                                    <?php }else{ ?>
                                                    : Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value*0.3;?>
</font> <i>(30%, Early Bird)</i>
                                                    <?php }?>
                                                    
                                                    <?php if ($_smarty_tpl->tpl_vars['saudara']->value>'0'){?> 
                                                            + Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonSau']->value;?>
</font> (20%, Saudara)
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='02'){?>
                                                            + Rp <font class="biaya">
                                                            <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->sks_acc<40){?> <?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value*0;?>

                                                            <?php }elseif($_smarty_tpl->tpl_vars['transPaid']->value->sks_acc>40&&$_smarty_tpl->tpl_vars['transPaid']->value->sks_acc<=80){?> <?php echo ($_smarty_tpl->tpl_vars['uangMasuk']->value-$_smarty_tpl->tpl_vars['diskonSau']->value)*(25/100);?>

                                                            <?php }elseif($_smarty_tpl->tpl_vars['transPaid']->value->sks_acc>80){?> <?php echo ($_smarty_tpl->tpl_vars['uangMasuk']->value-$_smarty_tpl->tpl_vars['diskonSau']->value)*(50/100);?>
<?php }?></font> 
                                                            (<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->sks_acc;?>
 SKS diterima)

                                                    <?php }?>
                                                <?php }else{ ?>                                                
                                                    <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?>
                                                        : Rp <font class="biaya">1000000</font> (Lunas)
                                                    <?php }else{ ?>
                                                        : - 
                                                    <?php }?>
                                                <?php }?>
                                        <?php }else{ ?> 
                                        : - 
                                        <?php }?>

                                    </label>
                            </a>
                    <?php }else{ ?>                        
                            <a class="man list-group-item">
                                    <label class="col-md-4">
                                            Potongan
                                    </label>
                                    <label>
                                    <?php if ($_smarty_tpl->tpl_vars['prodi']->value!='1204'){?>
                                                <?php if ($_smarty_tpl->tpl_vars['saudara']->value>'0'){?> : Rp
                                                <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['diskonSau']->value;?>
 </font> (20%, Saudara) 
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='02'){?>
                                                 : Rp <font class="biaya">
                                                        <?php if ($_smarty_tpl->tpl_vars['transPaid']->value->sks_acc<40){?> <?php echo $_smarty_tpl->tpl_vars['uangMasuk']->value*0;?>

                                                        <?php }elseif($_smarty_tpl->tpl_vars['transPaid']->value->sks_acc>40&&$_smarty_tpl->tpl_vars['transPaid']->value->sks_acc<=80){?> <?php echo ($_smarty_tpl->tpl_vars['uangMasuk']->value-$_smarty_tpl->tpl_vars['diskonSau']->value)*(25/100);?>

                                                        <?php }elseif($_smarty_tpl->tpl_vars['transPaid']->value->sks_acc>80){?> <?php echo ($_smarty_tpl->tpl_vars['uangMasuk']->value-$_smarty_tpl->tpl_vars['diskonSau']->value)*(50/100);?>

                                                        <?php }?>
                                                        </font> (<?php echo $_smarty_tpl->tpl_vars['transPaid']->value->sks_acc;?>
 SKS diterima)
                                                <?php }?>
                                    <?php }else{ ?>
                                    : -
                                    <?php }?>

                                    </label>
                            </a>
                    <?php }?>
                            <hr>
                    <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>						
                            <a class="man list-group-item">
                                    <label class="col-md-4" style="font-size:16px;font-family: Arial,sans-serif;">Total Biaya Keseluruhan</label>
                                    <label style="font-size:16px;font-family: Arial,sans-serif;">: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font> </label>
                            </a>
                            <input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" hidden>
                    <?php }else{ ?>

                            <a class="man list-group-item">
                                    <label class="col-md-4" style="font-size:16px;font-family: Arial,sans-serif;">Total Pembayaran Semester 1</label>
                                    <label style="font-size:16px;font-family: Arial,sans-serif;">: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font></label>
                            </a>
<!--                            <a class="man list-group-item">
                                    <label class="col-md-4" style="font-size:16px;font-family: Arial,sans-serif;">Total yang harus dibayar</label>
                                    <label style="font-size:16px;font-family: Arial,sans-serif;">: Rp <font class="biaya"><?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>
</font></label>
                            </a>-->

                            <input type="text" name="totalDaftarUlang" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" hidden>
                    </div>
                </div>
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Detail Angsuran <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?>Semester 1<?php }else{ ?>Uang Masuk<?php }?></h3>
                    <div class="form-group">
                            <label class="control-label col-md-2">Rincian Biaya
                            </label>
                        <div class="col-md-10">
                            <a class="man list-group-item">
                                    <label class="col-md-4">Angsuran Ke-1 </label>
                                    <label>: Rp <font class=" biaya"><?php echo $_smarty_tpl->tpl_vars['angsuran1']->value;?>
</font></label>
                                    <label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date1,"%e %b %Y");?>
</label>
                            </a>
                            <a class="man list-group-item">
                                    <label class="col-md-4">Angsuran Ke-2 </label>
                                    <label>: Rp <font class="biaya">
                                            <?php echo $_smarty_tpl->tpl_vars['angsuran2']->value;?>
</font>
                                    </label>
                                    <label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date2,"%e %b %Y");?>
</label>
                            </a>
                            <a class="man list-group-item">
                                    <label class="col-md-4">Angsuran Ke-3 </label>
                                    <label>: Rp <font class="biaya">
                                            <?php echo $_smarty_tpl->tpl_vars['angsuran3']->value;?>
</font>
                                    </label>
                                    <label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date3,"%e %b %Y");?>
</label>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?> 
                                                                
                            <a class="man list-group-item">
                                    <label class="col-md-4">Angsuran Ke-4 </label>
                                    <label>: Rp <font class="biaya">
                                            <?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran4;?>
</font>
                                    </label>
                                    <label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date4,"%e %b %Y");?>
</label>
                            </a>
                               
                            
                            <a class="man list-group-item">
                                    <label class="col-md-4">Angsuran Ke-5 </label>
                                    <label>: Rp <font class="biaya">
                                            <?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran5;?>
</font>
                                    </label>
                                    <label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date5,"%e %b %Y");?>
</label>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['prodi']->value=='1208'&&$_smarty_tpl->tpl_vars['grade']->value=='SMA'){?>
                            
                            <a class="man list-group-item">
                                    <label class="col-md-4">Angsuran Ke-6 </label>
                                    <label>: Rp <font class="biaya">
                                            <?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran6;?>
</font>
                                    </label>
                                    <label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date4,"%e %b %Y");?>
</label>
                            </a>
                            
                            <a class="man list-group-item">
                                    <label class="col-md-4">Angsuran Ke-7 </label>
                                    <label>: Rp <font class="biaya">
                                            <?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran7;?>
</font>
                                    </label>
                                    <label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date4,"%e %b %Y");?>
</label>
                            </a>
                            
                            <a class="man list-group-item">
                                    <label class="col-md-4">Angsuran Ke-8 </label>
                                    <label>: Rp <font class="biaya">
                                            <?php echo $_smarty_tpl->tpl_vars['biaya']->value->angsuran8;?>
</font>
                                    </label>
                                    <label style="float:right">Jatuh Tempo : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value->due_date4,"%e %b %Y");?>
</label>
                            </a>
                                    
                            <?php }?> 
                            <?php }?>
                        <br>
                        <br>                       
                        <a class="man list-group-item">
                            <label><?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?>Jumlah Pembayaran<?php }else{ ?>Total Uang Masuk<?php }?></label>
                            <label style="float:right">
                                Rp <font class="biaya"><?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?><?php echo $_smarty_tpl->tpl_vars['angsuran1']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['totalUangMasuk']->value;?>
<?php }?></font>
                            </label>
                        </a>
                        
                    </div>
                <?php }?>
                </div>
            </div>
            
            <input type="hidden" name='angsuran1' value='<?php echo $_smarty_tpl->tpl_vars['angsuran1']->value;?>
'>
            <input type="hidden" name='angsuran2' value='<?php echo $_smarty_tpl->tpl_vars['angsuran2']->value;?>
'>
            <input type="hidden" name='angsuran3' value='<?php echo $_smarty_tpl->tpl_vars['angsuran3']->value;?>
'>
            
            <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Detail Transaksi</h3>
            <div class="form-group">
                <label class="control-label col-md-2">Jumlah Pembayaran
                </label>
                <div class="col-md-9">
                    <input type="text" class="biaya form-control" name="jumlahBayar" id="jumlahBayar" 
                           value="
                           <?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?> 
                                <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

                           <?php }else{ ?>
                            <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='KP'){?>
                                <?php echo $_smarty_tpl->tpl_vars['angsuran1']->value;?>

                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->tpl_vars['totalAll']->value-$_smarty_tpl->tpl_vars['angsuran1']->value;?>

                            <?php }?>
                           <?php }?>">
                </div>
            </div>
<input type="text" name="kodeMetod" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value->kode_pembayaran;?>
" hidden>
<script>
$(document).ready(function(){
    $('.biaya').formatCurrency();
});

$('.biaya').blur(function(){
    $('.biaya').formatCurrency();
});
</script> <?php }} ?>