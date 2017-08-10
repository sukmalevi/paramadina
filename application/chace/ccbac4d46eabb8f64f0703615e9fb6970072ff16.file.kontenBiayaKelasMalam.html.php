<?php /* Smarty version Smarty-3.1.14, created on 2016-04-26 23:37:17
         compiled from "application/views/admisi/kontenBiayaKelasMalam.html" */ ?>
<?php /*%%SmartyHeaderCode:654940285571f993d77a986-68962545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccbac4d46eabb8f64f0703615e9fb6970072ff16' => 
    array (
      0 => 'application/views/admisi/kontenBiayaKelasMalam.html',
      1 => 1461686231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '654940285571f993d77a986-68962545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'sql' => 0,
    'row' => 0,
    'rows' => 0,
    'pilih' => 0,
    'rowd' => 0,
    'val' => 0,
    'resTglTempo' => 0,
    'y' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_571f993d8d9ce1_32350756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571f993d8d9ce1_32350756')) {function content_571f993d8d9ce1_32350756($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<div class="col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet box grey">
        <div class="portlet-title">
            <div class="caption">Biaya Kelas Malam</div>
            <div class="actions">
            </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                <thead>
                    <tr>
                        <th>Detail Pembayaran</th>
                        <th>Detail Angsuran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td><h5>Uang Masuk </h5></td><td><h5><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['uangMasuk'],0,",",".");?>
</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>SPP </h5></td><td><h5><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['spp'],0,",",".");?>
</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>SKS </h5></td><td><h5><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['jumlahSks']*$_smarty_tpl->tpl_vars['row']->value['biayaPerSks']),0,",",".");?>
</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Total </h5></td><td><h5><?php echo number_format((($_smarty_tpl->tpl_vars['row']->value['jumlahSks']*$_smarty_tpl->tpl_vars['row']->value['biayaPerSks'])+($_smarty_tpl->tpl_vars['row']->value['spp']+$_smarty_tpl->tpl_vars['row']->value['uangMasuk'])),0,",",".");?>
</h5></td>
                                </tr>
                            </table>
                        </td>
                        <td>                            
                            <table>
                                <tr>
                                    <td><h5>Pilihan Uang Masuk</h5></td>
                                    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['pilihanBiayaUM']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
$_smarty_tpl->tpl_vars['rows']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        <td><h5><?php echo number_format($_smarty_tpl->tpl_vars['rows']->value,0,",",".");?>
</h5></td>
                                    <?php } ?>
                                    <td><h5>Bulan Ke - </h5></td>
                                    <td><h5>Tanggal Jatuh Tempo</h5></td>
                                </tr>
                                <tr>
                                    <td>Angsuran Bulanan (<?php echo $_smarty_tpl->tpl_vars['row']->value['tempoAngsuran']-1;?>
 X)</td>    
                                    <?php  $_smarty_tpl->tpl_vars['rowd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowd']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pilih']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowd']->key => $_smarty_tpl->tpl_vars['rowd']->value){
$_smarty_tpl->tpl_vars['rowd']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['rowd']->key;
?>   
                                    <td>
                                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rowd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                                        <?php echo number_format($_smarty_tpl->tpl_vars['val']->value,0,",",".");?>
<br>
                                        <?php } ?>
                                    </td>
                                    <?php } ?>
                                    <td  rowspan='2'>
                                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resTglTempo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['val']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['val']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['y']->value = $_smarty_tpl->tpl_vars['val']->key;
 $_smarty_tpl->tpl_vars['val']->iteration++;
 $_smarty_tpl->tpl_vars['val']->last = $_smarty_tpl->tpl_vars['val']->iteration === $_smarty_tpl->tpl_vars['val']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ke']['last'] = $_smarty_tpl->tpl_vars['val']->last;
?>
                                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['ke']['last']){?>
                                           <br><br> Ke - <?php echo $_smarty_tpl->tpl_vars['y']->value+1;?>

                                        <?php }else{ ?>
                                            Ke - <?php echo $_smarty_tpl->tpl_vars['y']->value+1;?>
<br>
                                        <?php }?>
                                        <?php } ?>
                                    </td>
                                    <td  rowspan='2'>
                                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resTglTempo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['val']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['val']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['val']->iteration++;
 $_smarty_tpl->tpl_vars['val']->last = $_smarty_tpl->tpl_vars['val']->iteration === $_smarty_tpl->tpl_vars['val']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tgl']['last'] = $_smarty_tpl->tpl_vars['val']->last;
?>
                                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tgl']['last']){?>
                                            <br><br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value,'%d-%m-%Y');?>

                                        <?php }else{ ?>
                                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value,'%d-%m-%Y');?>
<br>
                                        <?php }?>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr >
                                    <td>Angsuran Terakhir (1 X)</td>
                                    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['biayaPembeda']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
$_smarty_tpl->tpl_vars['rows']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                    <td><?php echo number_format($_smarty_tpl->tpl_vars['rows']->value,0,",",".");?>
</td>
                                    <?php } ?>
                                </tr>
                            </table>
                        </td>
                    </tr>                    
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>

<?php }} ?>