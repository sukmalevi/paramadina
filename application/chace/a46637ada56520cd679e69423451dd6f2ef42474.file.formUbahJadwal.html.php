<?php /* Smarty version Smarty-3.1.14, created on 2015-12-16 13:19:15
         compiled from "application/views/smb/formUbahJadwal.html" */ ?>
<?php /*%%SmartyHeaderCode:390347028567102632e89e5-91681639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a46637ada56520cd679e69423451dd6f2ef42474' => 
    array (
      0 => 'application/views/smb/formUbahJadwal.html',
      1 => 1446021601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '390347028567102632e89e5-91681639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'cmb' => 0,
    'jadwal' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56710263389511_97018612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56710263389511_97018612')) {function content_56710263389511_97018612($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/ubahJadwal/simpan/do" class="form-horizontal" method="post">
        <div class="form-body">                
            <div class = "row">
                <div class="col-md-10">
                    <div class="form-group">
                          <label  class="control-label col-md-3">Pilih Jadwal Ujian</label>
                          <div class="col-md-9">
                                <input name="val" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value['kode'];?>
" hidden>
                                <input name="tgl" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value['event'];?>
" hidden>
                                <select class="form-control" id="jadwal"  name="jadwal" class="pww1">
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jadwal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value->kode==$_smarty_tpl->tpl_vars['cmb']->value['event']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
 - <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggal;?>
</option>
                                    <?php } ?>
                                </select>
                          </div>
                    </div>
                </div>
            </div>
                
        </div>
        <div class="modal-footer">
               <button type="button" class="btn default" data-dismiss="modal">Close</button>
               <button type="submit" class="btn blue" id="saves" value="simpanJdl" name="opt"> Simpan <i class="icon-plus"></i></button>
        </div>
</form>
<script>
jQuery(document).ready(function() {       
         // initiate layout and plugins
         FormComponents.init();
	});
</script><?php }} ?>