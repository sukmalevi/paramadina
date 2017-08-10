<?php /* Smarty version Smarty-3.1.14, created on 2014-05-09 16:38:46
         compiled from "application/views/master/kontenRuang.html" */ ?>
<?php /*%%SmartyHeaderCode:314845367536ca2266cf580-28070555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '105859bb4f7135d87374060296669b13faf8a729' => 
    array (
      0 => 'application/views/master/kontenRuang.html',
      1 => 1398153919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314845367536ca2266cf580-28070555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536ca226749fb6_46709612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536ca226749fb6_46709612')) {function content_536ca226749fb6_46709612($_smarty_tpl) {?>		<div class="form-group">
            <label >Pilih Gedung</label>
            <select  class="form-control" name="gedung" id="gedung">
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
		<div id="tblRuang">				
		</div>	
<script>
      jQuery(document).ready(function() {     
         TableEditable.init();
      });
</script>

<script>
$(document).ready(function(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterRuang/table",{
					'gedung':$('#gedung').val()					
				},function(resp){
                $('#tblRuang').html(resp);
            });
});
$("#gedung").change(function(){
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterRuang/table",{
					'gedung':$('#gedung').val()					
				},function(resp){
                $('#tblRuang').html(resp);
            });
	});
</script>
<?php }} ?>