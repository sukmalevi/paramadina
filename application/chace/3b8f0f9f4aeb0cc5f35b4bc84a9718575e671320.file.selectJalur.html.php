<?php /* Smarty version Smarty-3.1.14, created on 2014-04-22 15:16:55
         compiled from "application/views/admisi/selectJalur.html" */ ?>
<?php /*%%SmartyHeaderCode:15299543975356257723b670-93767081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b8f0f9f4aeb0cc5f35b4bc84a9718575e671320' => 
    array (
      0 => 'application/views/admisi/selectJalur.html',
      1 => 1398153918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15299543975356257723b670-93767081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'periode' => 0,
    'jalur' => 0,
    'row' => 0,
    'host' => 0,
    'fungsi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5356257729b589_32357647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5356257729b589_32357647')) {function content_5356257729b589_32357647($_smarty_tpl) {?>			
						   <div class="col-md-12" style="margin-bottom:10px;margin-left: -13px;">
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
admisi/<?php echo $_smarty_tpl->tpl_vars['fungsi']->value;?>
/table",{
					'periode':$('#periode').val(), 'jalur':$('#jalur').val()					
				},function(resp){
                $('#tblJadwal').html(resp);
            });
      });


	$("#jalur").change(function(){
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/<?php echo $_smarty_tpl->tpl_vars['fungsi']->value;?>
/table",{
					'periode':$('#periode').val(), 'jalur':$('#jalur').val()					
				},function(resp){
                $('#tblJadwal').html(resp);
            });
	});


</script><?php }} ?>