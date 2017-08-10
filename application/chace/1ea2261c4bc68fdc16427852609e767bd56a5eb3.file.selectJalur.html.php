<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 10:56:25
         compiled from "application/views/smb/selectJalur.html" */ ?>
<?php /*%%SmartyHeaderCode:13705251045356257dbee229-97369926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ea2261c4bc68fdc16427852609e767bd56a5eb3' => 
    array (
      0 => 'application/views/smb/selectJalur.html',
      1 => 1479871181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13705251045356257dbee229-97369926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5356257dc4ea42_08250586',
  'variables' => 
  array (
    'periode' => 0,
    'jalur' => 0,
    'row' => 0,
    'prodi' => 0,
    'host' => 0,
    'fungsi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5356257dc4ea42_08250586')) {function content_5356257dc4ea42_08250586($_smarty_tpl) {?><div class="col-md-3" style="margin-bottom:10px;margin-left: -13px;">
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['periode']->value;?>
" name="periode" id="periode" hidden>
    <select class="form-control" name="jalur" id="jalur">
		<option value="all">Semua Jalur</option>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jalur']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
        <?php } ?>
    </select>
</div>
<div class="col-md-3" style="margin-bottom:10px;margin-left: -13px;">
    <select class="form-control" name="prodi" id="prodi">
		<option value="all">Semua Prodi</option>
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
<script>

jQuery(document).ready(function() {
    $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/<?php echo $_smarty_tpl->tpl_vars['fungsi']->value;?>
/table", {
        'periode': $('#periode').val(),
        'jalur': $('#jalur').val(),
		'prodi': $('select[name=prodi]').val()
    }, function(resp) {
        $('#tblJadwal').html(resp);
    });
}); 
 

    $("#jalur").change(function() {
        $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/<?php echo $_smarty_tpl->tpl_vars['fungsi']->value;?>
/table", {
            'periode': $('#periode').val(),
            'jalur': $('#jalur').val(),
			'prodi': $('select[name=prodi]').val()
        }, function(resp) {
            $('#tblJadwal').html(resp);
        });
    }); 


    $("#prodi").change(function() {
        $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/<?php echo $_smarty_tpl->tpl_vars['fungsi']->value;?>
/table", {
            'periode': $('#periode').val(),
            'jalur': $('select[name=jalur]').val(),
			'prodi': $('#prodi').val()
        }, function(resp) {
            $('#tblJadwal').html(resp);
        });
    }); 

</script>
<?php }} ?>