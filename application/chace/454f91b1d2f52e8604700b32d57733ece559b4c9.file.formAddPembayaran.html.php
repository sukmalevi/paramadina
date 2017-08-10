<?php /* Smarty version Smarty-3.1.14, created on 2015-12-21 10:40:05
         compiled from "application/views/master/formAddPembayaran.html" */ ?>
<?php /*%%SmartyHeaderCode:94947303537f228dea5441-96899062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '454f91b1d2f52e8604700b32d57733ece559b4c9' => 
    array (
      0 => 'application/views/master/formAddPembayaran.html',
      1 => 1450234050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94947303537f228dea5441-96899062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537f228decb539_03601912',
  'variables' => 
  array (
    'host' => 0,
    'periode' => 0,
    'row' => 0,
    'jlr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537f228decb539_03601912')) {function content_537f228decb539_03601912($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mDaftarUlang/add" class="form-horizontal" method="post">
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Kode</label>
            <div class="input-group col-md-6">
                <input type="text" class="form-control" placeholder="Kode[Automatic]" id="kode" name="kode" disabled>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Periode</label>
            <div class="col-md-8">
                <select class="form-control" id="pseriode" name="periode" required>
                    <option>-- Select Periode --</option>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
            <label class="control-label col-md-3">Nama Pembayaran</label>
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="Nama Pembayaran" id="nama" name="nama" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">Jalur Masuk</label>
            <div class="col-md-8">
                <select class="jalur form-control" name="jalur" required>
                    <option>-- Select Jalur --</option>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jlr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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

        <div id="jalurMasuk">
            
        </div>
    </div>
</form>
<script type="text/javascript">

$('.jalur').change(function() {
    val = $(this).attr('value');
    $.post('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mJalurUM/jalurMasuk', {'val': val}, function(resp) {
        $('#jalurMasuk').html(resp);
    });
});

</script>
<?php }} ?>