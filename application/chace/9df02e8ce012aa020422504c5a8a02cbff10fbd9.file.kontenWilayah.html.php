<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 05:25:08
         compiled from "application\views\master\kontenWilayah.html" */ ?>
<?php /*%%SmartyHeaderCode:941252a2fbdf4d2289-65647161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9df02e8ce012aa020422504c5a8a02cbff10fbd9' => 
    array (
      0 => 'application\\views\\master\\kontenWilayah.html',
      1 => 1387344304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '941252a2fbdf4d2289-65647161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a2fbdf5b10b6_23566989',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a2fbdf5b10b6_23566989')) {function content_52a2fbdf5b10b6_23566989($_smarty_tpl) {?>		<div class="form-group">
            <label >Pilih Propinsi</label>
            <select  class="form-control" name="wil" id="wil">
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
				<?php } ?>
            </select>
        </div>
		<div id="tblWilayah">				
		</div>	
<script>
      jQuery(document).ready(function() {     
         TableEditable.init();
      });

	$(document).ready(function(){
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterWilayah/table",{
					'wil':$('#wil').val()					
				},function(resp){
                $('#tblWilayah').html(resp);
            });
	});
	$("#wil").change(function(){
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterWilayah/table",{
					'wil':$('#wil').val()					
				},function(resp){
                $('#tblWilayah').html(resp);
            });
	});

</script>
<?php }} ?>