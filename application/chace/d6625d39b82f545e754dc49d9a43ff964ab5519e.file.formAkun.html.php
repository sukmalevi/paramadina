<?php /* Smarty version Smarty-3.1.14, created on 2014-05-08 14:33:42
         compiled from "application/views/portal/formAkun.html" */ ?>
<?php /*%%SmartyHeaderCode:500980437536b335606c208-87776848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6625d39b82f545e754dc49d9a43ff964ab5519e' => 
    array (
      0 => 'application/views/portal/formAkun.html',
      1 => 1399532320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '500980437536b335606c208-87776848',
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
  'unifunc' => 'content_536b33560965e9_49922098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536b33560965e9_49922098')) {function content_536b33560965e9_49922098($_smarty_tpl) {?><!-- BEGIN FORM-->
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/editProfil/edit/save" enctype="multipart/form-data" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">
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
                    <label class="control-label col-md-3" style="text-align:left;width: 220px;">Old Password
                    </label>
                    <div class="col-md-5" style="height: 46px; padding-left: 35px; padding-top: 5px;">
                    	<input name="kode" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
" hidden>
                        <input type="password" class="form-control" id="oldPass" name="oldPass" style="text-align: left;" required>
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
          oldPass: { 
                required: true, minlength: 5
          },
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