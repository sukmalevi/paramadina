<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 06:56:57
         compiled from "application\views\master\verifikasiWil.html" */ ?>
<?php /*%%SmartyHeaderCode:2398352b068fe62fe23-20745785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '269bd415031548313cb4ef1c9d04a3b18e1cce74' => 
    array (
      0 => 'application\\views\\master\\verifikasiWil.html',
      1 => 1387349790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2398352b068fe62fe23-20745785',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b068fe69ab48_39995651',
  'variables' => 
  array (
    'value' => 0,
    'host' => 0,
    'fungsi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b068fe69ab48_39995651')) {function content_52b068fe69ab48_39995651($_smarty_tpl) {?>					          <div class="modal-body">
                                 <p>Apakah Anda yakin akan menghapus data tersebut?</p>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                 <button type="button" data-dismiss="modal" class="btn green" id="confirm" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" name="delete">Continue</button>
                              </div>
<script>
	
	$("#confirm").click(function(){		
		opt = $(this).attr("name");
		id = $(this).attr("id")
		val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/<?php echo $_smarty_tpl->tpl_vars['fungsi']->value;?>
/delete", {'opt':opt, 'id':id, 'value':val},function(resp){
			location.reload();
		});
	});
	
</script><?php }} ?>