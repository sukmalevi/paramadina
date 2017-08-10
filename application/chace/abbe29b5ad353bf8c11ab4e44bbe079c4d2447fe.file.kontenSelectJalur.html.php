<?php /* Smarty version Smarty-3.1.14, created on 2015-12-21 10:40:04
         compiled from "application/views/master/kontenSelectJalur.html" */ ?>
<?php /*%%SmartyHeaderCode:1681119116536b3d886e0f91-82174643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abbe29b5ad353bf8c11ab4e44bbe079c4d2447fe' => 
    array (
      0 => 'application/views/master/kontenSelectJalur.html',
      1 => 1450160971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1681119116536b3d886e0f91-82174643',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536b3d887353e8_67671215',
  'variables' => 
  array (
    'periode' => 0,
    'row' => 0,
    'jalur' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536b3d887353e8_67671215')) {function content_536b3d887353e8_67671215($_smarty_tpl) {?><div class="col-md-12" style="margin-bottom:10px;">    
    <div class="form-group">
        <label class='control-label col-md-2'>Periode Seleksi</label>
        <div class='col-md-4'>
            <select class='form-control' name="periode" id="periode">
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                    <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class='control-label col-md-2'>Jalur Seleksi</label>
        <div class='col-md-4'>
            <select  class="form-control" name="wil" id="wil">
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jalur']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                    <?php } ?>
            </select>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div id="tblWilayah" style="margin-top:10px;">				
</div>	
<script>

$(document).ready(function(){
        displayUM()
});

$("#wil,#periode").change(function(){
        displayUM();
});

function displayUM(){
    $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mDaftarUlang/table",{
                                'jalur':$('#wil').val(),'periode':$('#periode').val()					
                        },function(resp){
        $('#tblWilayah').html(resp);
    });
}

</script>


												  <?php }} ?>