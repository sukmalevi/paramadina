<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 12:40:17
         compiled from "application/views/master/verifikasiWil.html" */ ?>
<?php /*%%SmartyHeaderCode:2132453972537aeac1db1dd8-96362940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '415ff17d873c47b4ea0de3b4355a0638b45e5b4a' => 
    array (
      0 => 'application/views/master/verifikasiWil.html',
      1 => 1398153919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132453972537aeac1db1dd8-96362940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'host' => 0,
    'fungsi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537aeac1df4b79_75056874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537aeac1df4b79_75056874')) {function content_537aeac1df4b79_75056874($_smarty_tpl) {?>					          <div class="modal-body">
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