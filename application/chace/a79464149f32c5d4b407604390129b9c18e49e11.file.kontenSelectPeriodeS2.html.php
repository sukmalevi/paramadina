<?php /* Smarty version Smarty-3.1.14, created on 2016-07-14 14:38:55
         compiled from "application/views/admisi/kontenSelectPeriodeS2.html" */ ?>
<?php /*%%SmartyHeaderCode:6675512465787418fc03c97-20115244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a79464149f32c5d4b407604390129b9c18e49e11' => 
    array (
      0 => 'application/views/admisi/kontenSelectPeriodeS2.html',
      1 => 1466993691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6675512465787418fc03c97-20115244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'periode' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5787418fc53785_50010527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5787418fc53785_50010527')) {function content_5787418fc53785_50010527($_smarty_tpl) {?><div class="col-md-12" style="margin-bottom:10px;">    
    <div class="form-group">
        <label class='control-label col-md-2'>Periode Seleksi</label>
        <div class='col-md-10'>
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
</div>
<div class="clearfix"></div>
<div id="tblPembayaran" style="margin-top:10px;">				
</div>	
<script>

$(document).ready(function(){
        displayUM()
});

$("#periode").change(function(){
        displayUM();
});

function displayUM(){
    $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/settingUMS2/table",{'periode':$('#periode').val()},function(resp){
        $('#tblPembayaran').html(resp);
    });
}

</script>


												  <?php }} ?>