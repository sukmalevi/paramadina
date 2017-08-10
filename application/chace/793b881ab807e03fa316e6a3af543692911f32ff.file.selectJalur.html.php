<?php /* Smarty version Smarty-3.1.14, created on 2014-04-16 10:59:29
         compiled from "application\views\smb\selectJalur.html" */ ?>
<?php /*%%SmartyHeaderCode:504752ccc95dcd5306-37239244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '793b881ab807e03fa316e6a3af543692911f32ff' => 
    array (
      0 => 'application\\views\\smb\\selectJalur.html',
      1 => 1393993678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '504752ccc95dcd5306-37239244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc95ddc6672_00621338',
  'variables' => 
  array (
    'periode' => 0,
    'jalur' => 0,
    'row' => 0,
    'host' => 0,
    'fungsi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc95ddc6672_00621338')) {function content_52ccc95ddc6672_00621338($_smarty_tpl) {?>						   <div class="col-md-12" style="margin-bottom:10px;margin-left: -13px;">
								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['periode']->value;?>
" name="periode" id="periode" hidden>
								<select  class="form-control" name="jalur" id="jalur">
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
<script>

jQuery(document).ready(function() {  
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/<?php echo $_smarty_tpl->tpl_vars['fungsi']->value;?>
/table",{
					'periode':$('#periode').val(), 'jalur':$('#jalur').val()					
				},function(resp){
                $('#tblJadwal').html(resp);
            });
      });


	$("#jalur").change(function(){
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/<?php echo $_smarty_tpl->tpl_vars['fungsi']->value;?>
/table",{
					'periode':$('#periode').val(), 'jalur':$('#jalur').val()					
				},function(resp){
                $('#tblJadwal').html(resp);
            });
	});


</script><?php }} ?>