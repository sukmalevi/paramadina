<?php /* Smarty version Smarty-3.1.14, created on 2017-05-31 08:46:11
         compiled from "application/views/smb/template/grid.html" */ ?>
<?php /*%%SmartyHeaderCode:15363956225806d288930b04-82875635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a6f9adcab5f463d9b273d1769bd0cd0f118a95a' => 
    array (
      0 => 'application/views/smb/template/grid.html',
      1 => 1496194857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15363956225806d288930b04-82875635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5806d2889ba207_34863070',
  'variables' => 
  array (
    'tipe_grid' => 0,
    'periode' => 0,
    'row' => 0,
    'jalur' => 0,
    'prodi' => 0,
    'host' => 0,
    'p1' => 0,
    'p2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5806d2889ba207_34863070')) {function content_5806d2889ba207_34863070($_smarty_tpl) {?><style type="text/css">
	.datagrid-row-over td{
		background:#D0E5F5;
	}
	.datagrid-row-selected td{
		background:#FBEC88;
		color:#000;
	}
</style>

	
<div id="div_<?php echo $_smarty_tpl->tpl_vars['tipe_grid']->value;?>
" style="width:100%">
	<div id='<?php echo $_smarty_tpl->tpl_vars['tipe_grid']->value;?>
'></div>
	<div id='toolbar_<?php echo $_smarty_tpl->tpl_vars['tipe_grid']->value;?>
' style='padding:5px;height:45px'>	            
		<?php if ($_smarty_tpl->tpl_vars['tipe_grid']->value=='cmb'){?>
		<div class="col-md-12">
			<div class="col-md-4" >
				<select class="form-control" name="periode" id="periode" onchange="doSelect('<?php echo $_smarty_tpl->tpl_vars['tipe_grid']->value;?>
', '', '')">
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
			<div class="col-md-3" >
				<select class="form-control" name="jalur" id="jalur" onchange="doSelect('<?php echo $_smarty_tpl->tpl_vars['tipe_grid']->value;?>
', '', '')">
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
			<div class="col-md-3" >
				<select class="form-control" name="prodi" id="prodi" onchange="doSelect('<?php echo $_smarty_tpl->tpl_vars['tipe_grid']->value;?>
', '', '')">
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
			<div class="col-md-2" >
				<input id="nama" class="form-control" placeholder="Search..." style="line-height:26px;border:1px solid #ccc" onchange="doSearch('<?php echo $_smarty_tpl->tpl_vars['tipe_grid']->value;?>
', '', '')">
				<!-- <a href="#" class="easyui-linkbutton" plain="true" onclick="doSearch('<?php echo $_smarty_tpl->tpl_vars['tipe_grid']->value;?>
', '', '')">Search</a> -->
			</div>
		</div>
		<?php }?>	           
	</div>
</div>
<br>
<div id="btnDownload">
	<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/exportToExcel/calonSmb/" id ="downloadLink" class="btn default  black" style="margin-bottom: 12px;"><i class="icon-download-alt"></i> Download Laporan</a>
</div>
<script>
	$('#div_<?php echo $_smarty_tpl->tpl_vars['tipe_grid']->value;?>
').css('height',(getClientHeight()));
	genGrid('<?php echo $_smarty_tpl->tpl_vars['tipe_grid']->value;?>
', '', '', '<?php echo $_smarty_tpl->tpl_vars['p1']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['p2']->value;?>
');
	
	
	$("#periode,#jalur,#prodi").change(function(e){
		e.preventDefault();
		var periode = $('#periode').val();
		var jalur = $('#jalur').val();
		var prodi = $('#prodi').val();
		var downLink = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/exportToExcel/calonSmb/'+periode+'/'+prodi+'/'+jalur;
		<!-- alert(downLink); -->
		$("a[href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/exportToExcel/calonSmb/']").prop("href", downLink);
	});

</script><?php }} ?>