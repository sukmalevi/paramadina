<?php /* Smarty version Smarty-3.1.14, created on 2017-02-01 09:23:49
         compiled from "application/views/smb/kelengkapanBerkas.html" */ ?>
<?php /*%%SmartyHeaderCode:239764876589146b541f428-19335706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc4651127f25191f18785661447cb339017dc17' => 
    array (
      0 => 'application/views/smb/kelengkapanBerkas.html',
      1 => 1485245852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239764876589146b541f428-19335706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'prof' => 0,
    'berkas' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_589146b5451cd8_89849547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589146b5451cd8_89849547')) {function content_589146b5451cd8_89849547($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/berkas/save" enctype="multipart/form-data" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">
    <div class="portlet box grey">
        <div class="portlet-body form" style="border-top: 1px double #4682B4;">
            <div class="form-body" style="font-size:bold">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Kelengkapan Berkas</h3>
                <input name="kode" value="<?php echo $_smarty_tpl->tpl_vars['prof']->value->kode_smb;?>
" hidden>
                <input name="nomor" value="<?php echo $_smarty_tpl->tpl_vars['prof']->value->no_smb;?>
" hidden>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berkas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<div class="form-group">
                    <h4 class="control-label col-md-10" style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['row']->value['nama_berkas'];?>
</h4>
                    <div class="col-md-2" >
                        <label>
                            <input type="checkbox" name='<?php echo $_smarty_tpl->tpl_vars['row']->value['id_berkas'];?>
' value="1" 
								<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='1'){?>checked<?php }?>>
                        </label>
                    </div>
                </div>
				<?php } ?>
                
                <div class="modal-footer">
                    <button type="reset" class="btn default" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn blue" id="save" value="passW" name="opt">Simpan <i class="icon-save"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form><?php }} ?>