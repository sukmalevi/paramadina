<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 07:12:50
         compiled from "application\views\master\verifikasiRuang.html" */ ?>
<?php /*%%SmartyHeaderCode:2736152b14af2a6ba85-00055116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3718423b991e0ab496b663426992efe9750128c6' => 
    array (
      0 => 'application\\views\\master\\verifikasiRuang.html',
      1 => 1387350740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2736152b14af2a6ba85-00055116',
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
  'unifunc' => 'content_52b14af2b141c3_50244121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b14af2b141c3_50244121')) {function content_52b14af2b141c3_50244121($_smarty_tpl) {?>					          <div class="modal-body">
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