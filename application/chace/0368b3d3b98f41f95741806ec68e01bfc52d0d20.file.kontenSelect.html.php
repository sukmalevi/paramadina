<?php /* Smarty version Smarty-3.1.14, created on 2017-02-02 13:47:10
         compiled from "application/views/laporan/kontenSelect.html" */ ?>
<?php /*%%SmartyHeaderCode:13874593735892d5ee8450a4-23228488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0368b3d3b98f41f95741806ec68e01bfc52d0d20' => 
    array (
      0 => 'application/views/laporan/kontenSelect.html',
      1 => 1486017099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13874593735892d5ee8450a4-23228488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'periode' => 0,
    'row' => 0,
    'jalur' => 0,
    'prodi' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5892d5ee8c1246_19143018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5892d5ee8c1246_19143018')) {function content_5892d5ee8c1246_19143018($_smarty_tpl) {?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="row ">
	<div class="col-md-12 col-xs-12">
		<div class="col-md-4" >
			<select class="form-control" name="periode" id="periode" onchange="select()">
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
		<div class="col-md-4">
			<select class="form-control " name="jalur" id="jalur" onchange="select()">
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
		<div class="col-md-4" >
			<select class="form-control" name="prodi" id="prodi" onchange="select()">
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
	</div>
</div>
<div id="kontenGraph"></div>
<script>

jQuery(document).ready(function() {
    select();
});  

function select(){	
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
home/laporan/seleksi/select", {
		'periode': $('#periode').val(),
		'jalur': $('select[name=jalur]').val(),
		'prodi': $('#prodi').val()
	}, function(resp) {
		$('#kontenGraph').html(resp);
	});
}

</script>
<?php }} ?>