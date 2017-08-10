<?php /* Smarty version Smarty-3.1.14, created on 2016-02-03 16:57:13
         compiled from "application/views/smb/formAkun.html" */ ?>
<?php /*%%SmartyHeaderCode:140567497156b1cef91155b5-39783179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ed099e11d1c35b908e3016705284947777606d4' => 
    array (
      0 => 'application/views/smb/formAkun.html',
      1 => 1453943295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140567497156b1cef91155b5-39783179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'nama' => 0,
    'cmb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56b1cef9143f50_88665729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b1cef9143f50_88665729')) {function content_56b1cef9143f50_88665729($_smarty_tpl) {?><!-- BEGIN FORM-->
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/editProfil/edit/save" enctype="multipart/form-data" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">
    <div class="portlet box grey">
        <div class="portlet-body form" style="border-top: 1px double #4682B4;">
            <div class="form-body" style="font-size:bold">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">DATA DIRI</h3>
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Lengkap
                    </label>
                    <div class="col-md-9" style="height: 46px; padding-left: 35px; padding-top: 5px;">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</h4>
                        </label>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
" name="kode" hidden>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->no_smb;?>
" name="noreg" hidden>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Program Studi
                    </label>
                    <div class="col-md-9" style="height: 46px; padding-left: 35px; padding-top: 5px;">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->progdi;?>
</h4>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Change Password</h3>                
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Username / Email
                    </label>
                    <div class="col-md-9" style="height: 46px; padding-left: 35px; padding-top: 5px;">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
</h4>
                        </label>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">New Password
                    </label>
                    <div class="col-md-5" style="height: 46px; padding-left: 35px; padding-top: 5px;">
                        <input type="password" class="form-control" id="newPass" name="newPass" style="text-align: left;" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Confirm Password
                    </label>
                    <div class="col-md-5" style="height: 46px; padding-left: 35px; padding-top: 5px;">
                        <input type="password" class="form-control" id="confirmPass" name="confirmPass" style="text-align: left;" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn default" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn blue" id="save" value="passW" name="opt">Simpan <i class="icon-save"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function() {
      $("#form_sample_1").validate({
        rules: {
          newPass: { 
                required: true, minlength: 5
          },
          confirmPass: { 
                required: true, equalTo: "#newPass", minlength: 5
          }
        }
      });
    });
  </script><?php }} ?>