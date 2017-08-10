<?php /* Smarty version Smarty-3.1.14, created on 2015-08-14 11:26:32
         compiled from "application/views/master/formVerifikasi.html" */ ?>
<?php /*%%SmartyHeaderCode:32215012355cd6df82b3b84-38930279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67db5e7c9ce786b9b06aa8a9c8edd7f2efced3c0' => 
    array (
      0 => 'application/views/master/formVerifikasi.html',
      1 => 1398153918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32215012355cd6df82b3b84-38930279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55cd6df82eaf06_87856543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cd6df82eaf06_87856543')) {function content_55cd6df82eaf06_87856543($_smarty_tpl) {?>					          <div class="modal-body">
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