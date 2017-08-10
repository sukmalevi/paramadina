<?php /* Smarty version Smarty-3.1.14, created on 2013-12-24 02:29:10
         compiled from "application\views\admisi\konfirmasiDel.html" */ ?>
<?php /*%%SmartyHeaderCode:722252b8f1769e4ad2-27789108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63e0484dc83cb65c581d28692df4cf26cc902034' => 
    array (
      0 => 'application\\views\\admisi\\konfirmasiDel.html',
      1 => 1387850954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '722252b8f1769e4ad2-27789108',
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
  'unifunc' => 'content_52b8f176adfef7_32141576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b8f176adfef7_32141576')) {function content_52b8f176adfef7_32141576($_smarty_tpl) {?>					          <div class="modal-body">
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