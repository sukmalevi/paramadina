<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 11:29:44
         compiled from "application\views\master\formVerifikasi.html" */ ?>
<?php /*%%SmartyHeaderCode:3221252b02f9b487e54-22232739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d344a01389afc966b1695b406d04f2b49b3512c' => 
    array (
      0 => 'application\\views\\master\\formVerifikasi.html',
      1 => 1387279774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3221252b02f9b487e54-22232739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b02f9b4e2b05_88008763',
  'variables' => 
  array (
    'value' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b02f9b4e2b05_88008763')) {function content_52b02f9b4e2b05_88008763($_smarty_tpl) {?>					          <div class="modal-body">
                                 <p>Apakah Anda yakin akan menghapus user tersebut?</p>
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
master/masterUser/delete", {'opt':opt, 'id':id, 'val':val},function(resp){
			location.reload();
		});
	});
	
</script><?php }} ?>