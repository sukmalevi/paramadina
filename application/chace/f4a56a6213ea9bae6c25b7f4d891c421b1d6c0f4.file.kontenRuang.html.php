<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 02:55:06
         compiled from "application\views\master\kontenRuang.html" */ ?>
<?php /*%%SmartyHeaderCode:1106452a522ad324455-93270670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4a56a6213ea9bae6c25b7f4d891c421b1d6c0f4' => 
    array (
      0 => 'application\\views\\master\\kontenRuang.html',
      1 => 1387335299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1106452a522ad324455-93270670',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a522ad3ca011_14990792',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a522ad3ca011_14990792')) {function content_52a522ad3ca011_14990792($_smarty_tpl) {?>		<div class="form-group">
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