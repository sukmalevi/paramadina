<?php /* Smarty version Smarty-3.1.14, created on 2016-02-05 09:04:08
         compiled from "application/views/master/formPembayaranReguler.html" */ ?>
<?php /*%%SmartyHeaderCode:194765596556b40318df1467-40684863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58ce5d7043b2cf5ddad19044fec010a9e284e307' => 
    array (
      0 => 'application/views/master/formPembayaranReguler.html',
      1 => 1430800581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194765596556b40318df1467-40684863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prodi' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56b40318e86383_01158175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b40318e86383_01158175')) {function content_56b40318e86383_01158175($_smarty_tpl) {?><div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label col-md-3">Prodi</label>
            <div class="col-md-8">
                <select class="form-control" id="prodi" name="prodi" required>
                    <option>-- Pilih Prodi --</option>
					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
					<?php } ?>
                </select>
            </div>
        </div>
    </div>
    <!-- <div class="col-md-6">
        <div class="form-group">
            <label class="control-label col-md-4">Peringkat</label>
            <div class="col-md-6">
                <select class="form-control" id="peringkat" name="peringkat">
                    <option value="1">Pertama</option>
                    <option value="2">Kedua</option>
                    <option value="3">Ketiga</option>
                    <option value="0">Tidak Ada</option>
                </select>
            </div>
        </div>
    </div> -->
</div>
<div class="form-group">
    <label class="control-label col-md-3">Metod Pembayaran</label>
    <div class="col-md-8">
        <select class="form-control" id="pembayaran" name="pembayaran" required>
            <option>-- Metode Pembayaran --</option>
            <option value="1">Lunas</option>
            <option value="69">Angsuran</option>
        </select>
    </div>
</div>
<div id="metodBayar">

</div>

<script type="text/javascript">

$('#pembayaran').change(function() {
    val = $(this).attr('value');
    $.post('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mJalurUM/metodReguler', {'val': val}, function(resp) {
        $('#metodBayar').html(resp);
    });
});

</script>
<?php }} ?>