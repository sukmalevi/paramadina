<?php /* Smarty version Smarty-3.1.14, created on 2015-08-10 11:18:01
         compiled from "application/views/cmb/selectJalur.html" */ ?>
<?php /*%%SmartyHeaderCode:203123109455c825f98de0b1-64167600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f63a93877e3a849f91022822e76a12a020328edf' => 
    array (
      0 => 'application/views/cmb/selectJalur.html',
      1 => 1436765231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203123109455c825f98de0b1-64167600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'periode' => 0,
    'jalur' => 0,
    'row' => 0,
    'prodi' => 0,
    'levelID' => 0,
    'host' => 0,
    'fungsi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55c825f9993133_96462602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c825f9993133_96462602')) {function content_55c825f9993133_96462602($_smarty_tpl) {?><div class="col-md-3" style="margin-bottom:10px;margin-left: -13px;">
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['periode']->value;?>
" name="periode" id="periode" hidden>
    <select class="form-control" name="jalur" id="jalur">
		<option value="all">All Jalur</option>
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
		<option value="all">All Prodi</option>
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
<?php if ($_smarty_tpl->tpl_vars['levelID']->value=='99'||$_smarty_tpl->tpl_vars['levelID']->value=='66'||$_smarty_tpl->tpl_vars['levelID']->value=='55'||$_smarty_tpl->tpl_vars['levelID']->value=='33'||$_smarty_tpl->tpl_vars['levelID']->value=='101'){?>
<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/registrasiForm" class="btn blue">Tambah <i class="icon-plus"></i></a>
<?php }?>
<script>

jQuery(document).ready(function() {
    $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/<?php echo $_smarty_tpl->tpl_vars['fungsi']->value;?>
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
cmb/<?php echo $_smarty_tpl->tpl_vars['fungsi']->value;?>
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
cmb/<?php echo $_smarty_tpl->tpl_vars['fungsi']->value;?>
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