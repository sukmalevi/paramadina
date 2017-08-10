<?php /* Smarty version Smarty-3.1.14, created on 2013-12-24 07:03:00
         compiled from "application\views\admisi\selectJalur.html" */ ?>
<?php /*%%SmartyHeaderCode:944852b84a6a4e2c91-64341583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dc5ff1a05736a95592ab9b31ae3537fbfcc5627' => 
    array (
      0 => 'application\\views\\admisi\\selectJalur.html',
      1 => 1387868255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '944852b84a6a4e2c91-64341583',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b84a6a5a8124_70630508',
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
<?php if ($_valid && !is_callable('content_52b84a6a5a8124_70630508')) {function content_52b84a6a5a8124_70630508($_smarty_tpl) {?>			
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