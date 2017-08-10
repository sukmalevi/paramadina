<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 06:24:05
         compiled from "application\views\smb\kontenPeserta.html" */ ?>
<?php /*%%SmartyHeaderCode:1143752a6ed5e1d9565-84455371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8a1b3a2f94139f032cd440e3d3a89d8b5cfb7a1' => 
    array (
      0 => 'application\\views\\smb\\kontenPeserta.html',
      1 => 1389162242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1143752a6ed5e1d9565-84455371',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a6ed5e22a5f8_10438150',
  'variables' => 
  array (
    'periode' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a6ed5e22a5f8_10438150')) {function content_52a6ed5e22a5f8_10438150($_smarty_tpl) {?>					<div class="tab-pane" id="tab_1_4">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="add-portfolio" style="margin-bottom:10px">
                                 <span>Daftar Calon Mahasiswa Baru - Status Registrasi</span> 
                              </div>							  
							   <div class="col-md-12" style="margin-bottom:10px;margin-left: -13px;">
									<select  class="form-control" name="periode" id="periode">
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
							<div id="selectJalur"> </div>
                           </div>						   
                        </div>
						<div id="tblJadwal" name="tblJadwal">
						</div>
					</div>
				<div id="tablePeserta">
					<!-- Isi table Peserta -->
				</div>
<script>

jQuery(document).ready(function() {       
         // initiate layout and plugins
		 id = "smbCalon";
		 $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbJalur",{
					'periode':$('#periode').val(), 'fungsi':id					
				},function(resp){
                $('#selectJalur').html(resp);
            });
      });

	$("#periode").change(function(){
		id = "smbCalon";
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbJalur",{
					'periode':$('#periode').val(), 'fungsi':id					
				},function(resp){
                $('#selectJalur').html(resp);
            });
	});

</script><?php }} ?>