<?php /* Smarty version Smarty-3.1.14, created on 2015-08-13 14:59:03
         compiled from "application/views/smb/kontenPeserta.html" */ ?>
<?php /*%%SmartyHeaderCode:10847597685356257d6f51d9-38243569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53f6bd4b4494f208b81f8e07b0b72c196b6d854a' => 
    array (
      0 => 'application/views/smb/kontenPeserta.html',
      1 => 1435108897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10847597685356257d6f51d9-38243569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5356257d744d65_81554559',
  'variables' => 
  array (
    'periode' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5356257d744d65_81554559')) {function content_5356257d744d65_81554559($_smarty_tpl) {?><div class="row">
	<div class="col-md-12">
		<div class="col-md-5" style="margin-bottom:10px;margin-left: -13px;">
			<select class="form-control" name="periode" id="periode">
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
		<div id="selectJalur"></div>
	</div>
</div>
<div class="tab-pane" id="tab_1_4">
    <div id="tblJadwal" name="tblJadwal">
    </div>
</div>
<div id="tablePeserta">
    <!-- Isi table Peserta -->
</div>
<script>

jQuery(document).ready(function() {
    // initiate layout and plugins
    id = "smbCalon";
    $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbJalur", {
        'periode': $('#periode').val(),
        'fungsi': id
    }, function(resp) {
        $('#selectJalur').html(resp);
    });
});

$("#periode").change(function() {
    id = "smbCalon";
    $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbJalur", {
        'periode': $('#periode').val(),
        'fungsi': id
    }, function(resp) {
        $('#selectJalur').html(resp);
    });
}); 

</script>
<?php }} ?>