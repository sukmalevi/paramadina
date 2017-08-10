<?php /* Smarty version Smarty-3.1.14, created on 2014-04-25 08:34:29
         compiled from "application/views/admisi/konfirmasiDel.html" */ ?>
<?php /*%%SmartyHeaderCode:1872183115359bba5a8d276-71566003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b859366d74cfb802cec217becd7a1856b7634eea' => 
    array (
      0 => 'application/views/admisi/konfirmasiDel.html',
      1 => 1398153918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1872183115359bba5a8d276-71566003',
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
  'unifunc' => 'content_5359bba5b16321_71468194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359bba5b16321_71468194')) {function content_5359bba5b16321_71468194($_smarty_tpl) {?>					          <div class="modal-body">
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
admisi/<?php echo $_smarty_tpl->tpl_vars['fungsi']->value;?>
/delete", {'opt':opt, 'id':id, 'value':val},function(resp){
			location.reload();
		});
	});
	
</script><?php }} ?>