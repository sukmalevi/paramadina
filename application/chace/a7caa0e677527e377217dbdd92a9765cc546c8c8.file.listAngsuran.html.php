<?php /* Smarty version Smarty-3.1.14, created on 2016-04-27 08:56:34
         compiled from "application/views/portal/listAngsuran.html" */ ?>
<?php /*%%SmartyHeaderCode:115249657657201c5280e7c9-46615546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7caa0e677527e377217dbdd92a9765cc546c8c8' => 
    array (
      0 => 'application/views/portal/listAngsuran.html',
      1 => 1461687455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115249657657201c5280e7c9-46615546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'rows' => 0,
    'choose' => 0,
    'pilih' => 0,
    'k' => 0,
    'keypilih' => 0,
    'rowd' => 0,
    'val' => 0,
    'resTglTempo' => 0,
    'y' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57201c52916326_00575271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57201c52916326_00575271')) {function content_57201c52916326_00575271($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
?><div class="form-group">
    <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Detail Angsuran Kelas Malam</h3>
     <label class="control-label col-md-2">Rincian Biaya</label>
     <div class="col-md-10">
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>                           
        <table  class='table table-bordered  table-advance '>
            <thead>
                <tr>
                    <th><h5>Pilihan Uang Masuk</h5></th>
                    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['pilihanBiayaUM']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
$_smarty_tpl->tpl_vars['rows']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                    <th class=''><h5><?php if ($_smarty_tpl->tpl_vars['rows']->value==$_smarty_tpl->tpl_vars['choose']->value){?><b><?php echo number_format($_smarty_tpl->tpl_vars['rows']->value,0,",",".");?>
</b><?php }else{ ?><?php echo number_format($_smarty_tpl->tpl_vars['rows']->value,0,",",".");?>
<?php }?></h5></th>
                    <?php } ?>
                    <th><h5>Bulan Ke - </h5></th>
                    <th><h5>Tanggal Jatuh Tempo</h5></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><h5>Angsuran Bulanan (<?php echo $_smarty_tpl->tpl_vars['row']->value['tempoAngsuran']-1;?>
 X)</h5></td>    
                    <?php  $_smarty_tpl->tpl_vars['rowd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowd']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pilih']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowd']->key => $_smarty_tpl->tpl_vars['rowd']->value){
$_smarty_tpl->tpl_vars['rowd']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['rowd']->key;
?>   
                    <td class='<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['keypilih']->value){?>active<?php }?>'>
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
                    <td class='<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['keypilih']->value){?>active<?php }?>'><?php echo number_format($_smarty_tpl->tpl_vars['rows']->value,0,",",".");?>
</td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>
        <?php } ?>


     <br>
    </div>
</div><?php }} ?>