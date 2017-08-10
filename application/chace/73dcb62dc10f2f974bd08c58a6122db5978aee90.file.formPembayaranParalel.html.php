<?php /* Smarty version Smarty-3.1.14, created on 2016-04-26 23:31:51
         compiled from "application/views/admisi/formPembayaranParalel.html" */ ?>
<?php /*%%SmartyHeaderCode:51244214571f97f71425c7-72780468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73dcb62dc10f2f974bd08c58a6122db5978aee90' => 
    array (
      0 => 'application/views/admisi/formPembayaranParalel.html',
      1 => 1460020171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51244214571f97f71425c7-72780468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jalurmasuk' => 0,
    'prodi' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_571f97f71a0ee1_37548037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571f97f71a0ee1_37548037')) {function content_571f97f71a0ee1_37548037($_smarty_tpl) {?><div class="form-group">
    <label class="control-label col-md-3">Program Studi</label>
    <div class="col-md-8">
        <input name="peringkat" value="0" hidden>
        <input name="jalurmasuk" id="jalurmasuk" value="<?php echo $_smarty_tpl->tpl_vars['jalurmasuk']->value;?>
" hidden>
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
<!--        <div class="form-group">
            <label class="control-label col-md-3">Metod Pembayaran</label>
            <div class="col-md-7">
                <select class="form-control" id="pembayaran" name="pembayaran" required>
                    <option>-- Metode Pembayaran --</option>
                    <option value="1">Lunas</option>
                    <option value="69">Angsuran</option>
                </select>
            </div>
        </div>-->
<div id="metodBayar">
<?php echo $_smarty_tpl->getSubTemplate ('admisi/formParalelDetil.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<script type="text/javascript">

$('#pembayaran').change(function() {
    val = $(this).attr('value');
    var jalurmasuk = $('#jalurmasuk').attr('value');
    prodi = $('#prodi').attr('value');
    $.post('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mJalurUM/metodBayar', {'val': val, 'prodi' : prodi, 'jalur' : jalurmasuk}, 
    function(resp) {
        $('#metodBayar').html(resp);
    });
});

</script>

<?php }} ?>