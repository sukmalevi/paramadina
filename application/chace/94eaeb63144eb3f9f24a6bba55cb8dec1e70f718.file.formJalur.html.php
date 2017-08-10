<?php /* Smarty version Smarty-3.1.14, created on 2016-09-02 13:56:06
         compiled from "application/views/master/formJalur.html" */ ?>
<?php /*%%SmartyHeaderCode:609719564537aeac813bd23-04157063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94eaeb63144eb3f9f24a6bba55cb8dec1e70f718' => 
    array (
      0 => 'application/views/master/formJalur.html',
      1 => 1450153890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '609719564537aeac813bd23-04157063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537aeac81a0d46_87130761',
  'variables' => 
  array (
    'host' => 0,
    'jalur' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537aeac81a0d46_87130761')) {function content_537aeac81a0d46_87130761($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterJalur/edit/do" enctype="multipart/form-data" class="form-horizontal" method="post">
        <div class="form-body">
            <div class="form-group">
                <label  class="control-label col-md-3">Kode</label>
                <div class="input-group col-md-6">
                    <input type="text" id="kode" name="kode" value="<?php echo $_smarty_tpl->tpl_vars['jalur']->value->kode;?>
" hidden>
                    <input type="text" class="form-control" placeholder="Kode Jalur Seleksi" value="<?php echo $_smarty_tpl->tpl_vars['jalur']->value->kode;?>
" disabled>
                </div>
            </div>
            <div class="form-group">
                <label  class="control-label col-md-3">Jalur</label>
                <div class="input-group col-md-9">
                    <input type="text" class="form-control" placeholder="Jalur Seleksi" id="nama" name="nama" value="<?php echo $_smarty_tpl->tpl_vars['jalur']->value->nama;?>
" >
                </div>
            </div>
            <div class="form-group">
                <label  class="control-label col-md-3">No. SK</label>
                <div class="input-group col-md-6">
                    <input type="text" class="form-control" placeholder="No. SK" id="nosk" name="nosk" value="<?php echo $_smarty_tpl->tpl_vars['jalur']->value->nomorSk;?>
" >
                </div>
            </div>										  
            <div class="form-group">
                <label  class="control-label col-md-3">File SK</label>
                <div class="input-group col-md-6">
                    <input type="text" id="filename" name="filename" value="<?php echo $_smarty_tpl->tpl_vars['jalur']->value->fileSk;?>
" hidden>
                    <input type="text" class="form-control" id="file" name="file" value="<?php echo $_smarty_tpl->tpl_vars['jalur']->value->fileSk;?>
" disabled> 
                    <a class="deleting" href="#upload" name="edit" id="fileEdit">Edit</a>
                </div>
            </div>
            <div class="form-group" id="upload" hidden>									
                <label for="filesk" class="control-label col-md-3">File SK</label>
                <div class="input-group col-md-9">
                        <input type="file" id="filesk" name="filesk" value="<?php echo $_smarty_tpl->tpl_vars['jalur']->value->filePath;?>
" >
                        <p class="help-block">Lampirkan Surat Keputusan, Format : pdf|jpg|png|gif</p>
                </div>
            </div>								
        </div>
        <div class="modal-footer">
               <button type="button" class="btn default" data-dismiss="modal">Close</button>
               <button type="submit" class="btn blue" id="save" value="edit" name="opt"> Tambah <i class="icon-plus"></i></a>
        </div>
</form>
<script>
	$('#fileEdit').click( function() {
		$( "#upload" ).show();
	});
</script><?php }} ?>