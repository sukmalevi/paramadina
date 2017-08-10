<?php /* Smarty version Smarty-3.1.14, created on 2014-05-08 14:33:50
         compiled from "application/views/portal/formFoto.html" */ ?>
<?php /*%%SmartyHeaderCode:1382424397536b335e22cd70-76873521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dae04fdd07ca52a440621c906ae12533bac4b20' => 
    array (
      0 => 'application/views/portal/formFoto.html',
      1 => 1399532320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1382424397536b335e22cd70-76873521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536b335e265ec4_54379182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536b335e265ec4_54379182')) {function content_536b335e265ec4_54379182($_smarty_tpl) {?><div class="modal-body">
    <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/editProfil/edit/do" class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-body">
            <div class="form-group">
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;">Upload Foto</label>
                    <div class="col-md-9">
                        <input name="kode" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" hidden>
                        <input type="file" name="poto" required>
                        <p class="help-block">Format : jpg|png, Best Size : 400px*600px</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn blue" name="opt" value="foto">Update <i class="icon-plus"></i>
            </button>
        </div>
    </form>
</div>
<?php }} ?>