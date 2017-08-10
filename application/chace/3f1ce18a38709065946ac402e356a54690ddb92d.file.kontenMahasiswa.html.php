<?php /* Smarty version Smarty-3.1.14, created on 2015-08-10 11:21:17
         compiled from "application/views/cmb/kontenMahasiswa.html" */ ?>
<?php /*%%SmartyHeaderCode:7039933255c826bd8f8ca6-51461240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f1ce18a38709065946ac402e356a54690ddb92d' => 
    array (
      0 => 'application/views/cmb/kontenMahasiswa.html',
      1 => 1434001284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7039933255c826bd8f8ca6-51461240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'periodeAka' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55c826bd94d6a4_24285311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c826bd94d6a4_24285311')) {function content_55c826bd94d6a4_24285311($_smarty_tpl) {?><div class="tab-pane" id="tab_1_4">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-5" style="margin-bottom:10px;margin-left: -13px;">
                <select class="form-control" name="periode" id="periode">
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periodeAka']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                    <?php } ?>
                </select>
            </div>
            <div id="selectJalur"></div>
        </div>
    </div>
    <div id="tblJadwal" name="tblJadwal">
    </div>
</div>
<div id="tablePeserta">
    <!-- Isi table Peserta -->
</div>
<script>

jQuery(document).ready(function() {
    // initiate layout and plugins
    id = "mahasiswa";
    $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/smbJalur", {
        'periode': $('#periode').val(),
        'fungsi': id
    }, function(resp) {
        $('#selectJalur').html(resp);
    });
});

$("#periode").change(function() {
    id = "mahasiswa";
    $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/smbJalur", {
        'periode': $('#periode').val(),
        'fungsi': id
    }, function(resp) {
        $('#selectJalur').html(resp);
    });
}); 

</script>
<?php }} ?>