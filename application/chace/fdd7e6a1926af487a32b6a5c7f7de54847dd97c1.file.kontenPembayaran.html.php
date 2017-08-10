<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 06:24:15
         compiled from "application\views\smb\kontenPembayaran.html" */ ?>
<?php /*%%SmartyHeaderCode:2003952a7cdca28b2c1-72946292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdd7e6a1926af487a32b6a5c7f7de54847dd97c1' => 
    array (
      0 => 'application\\views\\smb\\kontenPembayaran.html',
      1 => 1389162233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2003952a7cdca28b2c1-72946292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a7cdca372508_39711223',
  'variables' => 
  array (
    'periode' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a7cdca372508_39711223')) {function content_52a7cdca372508_39711223($_smarty_tpl) {?>				<div class="tab-pane" id="tab_1_4">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="add-portfolio" style="margin-bottom:10px">
                                 <span>Daftar Calon Mahasiswa Baru - Pembayaran Registrasi</span> 
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
		 id = "smbPay";
		 $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbJalur",{
					'periode':$('#periode').val(), 'fungsi':id					
				},function(resp){
                $('#selectJalur').html(resp);
            });
      });

	$("#periode").change(function(){
		id = "smbPay";
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbJalur",{
					'periode':$('#periode').val(), 'fungsi':id					
				},function(resp){
                $('#selectJalur').html(resp);
            });
	});

$('table.data tr.detail').click( function() {
    $(this).hide();
    $(this).prevAll('tr').each( function() {
        if ($(this).hasClass('headerr')) {
            return false;
        }
        $(this).hide();
    });
    $(this).nextAll('tr').each( function() {
        if ($(this).hasClass('headerr')) {
            return false;
        }
        $(this).hide();
    });
});
$('table tr.headerr').click( function() {
    $(this).nextAll('tr').each( function() {
        if ($(this).hasClass('headerr')) {
            return false;
        }
        $(this).show();
    });
});


$(".confirm").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbPay/confirm", {'opt':opt, 'value':val},function(resp){
		location.reload();
		});
	});
});

</script><?php }} ?>