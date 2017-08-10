<?php /* Smarty version Smarty-3.1.14, created on 2016-04-01 08:48:57
         compiled from "application/views/smb/formEarlyBird.html" */ ?>
<?php /*%%SmartyHeaderCode:50406112856c41d5aa3c995-30427313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6942d44bc30043e21e4089294b516171603a5758' => 
    array (
      0 => 'application/views/smb/formEarlyBird.html',
      1 => 1459385416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50406112856c41d5aa3c995-30427313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56c41d5aa9a9c7_24752882',
  'variables' => 
  array (
    'host' => 0,
    'mah' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c41d5aa9a9c7_24752882')) {function content_56c41d5aa9a9c7_24752882($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/earlyBird/save/do" class="form-horizontal" method="post">
        <div class="form-body">
            <div class="form-group">
                 <label  class="control-label col-md-3">No Registrasi</label>
                 <div class="input-group col-md-9">
                    <input name="val" value="<?php echo $_smarty_tpl->tpl_vars['mah']->value->kode;?>
" hidden>
                    <input type="text" class="form-control" id="kode" value="<?php echo $_smarty_tpl->tpl_vars['mah']->value->nomor;?>
" disabled>
                 </div>
              </div>
              <div class="form-group">
                 <label  class="control-label col-md-3">Nama CMB</label>
                 <div class="input-group col-md-9">
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mah']->value->nama;?>
" disabled>
                 </div>
              </div>
              <div class="form-group">
                 <label  class="control-label col-md-3"></label>
                 <div class="input-group col-md-9">
                        <label class="radio-inline">
                            <input type="radio" name="earlybird" id="earlybird" value="99" >Confirm Early Bird
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="earlybird" id="earlybird" value="1" >Tolak Early Bird
                        </label>
                 </div>
              </div>
        </div>
        <div class="modal-footer">
             <button type="submit" class="btn blue" id="save" value="confirm" name="opt"> Confirm</button>
        </div>
</form><?php }} ?>