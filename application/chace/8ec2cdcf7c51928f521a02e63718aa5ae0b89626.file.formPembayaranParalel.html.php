<?php /* Smarty version Smarty-3.1.14, created on 2016-02-05 16:04:03
         compiled from "application/views/master/formPembayaranParalel.html" */ ?>
<?php /*%%SmartyHeaderCode:121507556956b46583366313-96329781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ec2cdcf7c51928f521a02e63718aa5ae0b89626' => 
    array (
      0 => 'application/views/master/formPembayaranParalel.html',
      1 => 1453444832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121507556956b46583366313-96329781',
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
  'unifunc' => 'content_56b465833bb7a3_40364011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b465833bb7a3_40364011')) {function content_56b465833bb7a3_40364011($_smarty_tpl) {?><div class="form-group">
    <label class="control-label col-md-3">Program Studi</label>
    <div class="col-md-8">
        <input name="peringkat" value="0" hidden>
        <select class="form-control" id="prodi" name="prodi" required>
            <option>-- Program Studi --</option>
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
        <div class="form-group">
            <label class="control-label col-md-3">Metod Pembayaran</label>
            <div class="col-md-7">
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
    prodi = $('#prodi').attr('value');
    $.post('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mJalurUM/metodBayar', {'val': val, 'prodi' : prodi}, function(resp) {
        $('#metodBayar').html(resp);
    });
});

</script>

<?php }} ?>