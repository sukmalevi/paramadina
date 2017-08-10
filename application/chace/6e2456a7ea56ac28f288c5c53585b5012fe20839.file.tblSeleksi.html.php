<?php /* Smarty version Smarty-3.1.14, created on 2017-03-27 10:21:00
         compiled from "application/views/smb/tblSeleksi.html" */ ?>
<?php /*%%SmartyHeaderCode:14388375785360803ba2cad8-02431218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e2456a7ea56ac28f288c5c53585b5012fe20839' => 
    array (
      0 => 'application/views/smb/tblSeleksi.html',
      1 => 1490257490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14388375785360803ba2cad8-02431218',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5360803bb2fdf8_68450741',
  'variables' => 
  array (
    'total' => 0,
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5360803bb2fdf8_68450741')) {function content_5360803bb2fdf8_68450741($_smarty_tpl) {?><div class="portlet" style="margin-top:15px">
    <div class="portlet-title">
        <div class="caption">HASIL SELEKSI CALON MAHASISWA BARU : <?php echo $_smarty_tpl->tpl_vars['total']->value->total;?>
 Calon Mahasiswa Baru</div>
        <!-- <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div> -->
    </div>
    <div class="portlet-body flip-scroll">
        <table class="table table-advance table-bordered table-striped table-condensed flip-content" id="sample_editable_1">
            <thead class="flip-content">
                <tr>
                    <th>NAMA CMB</th>
                    <th>FORMULIR</th>
                    <th>HASIL SELEKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <tr>
                    <td class="highlight"><h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama_cm;?>
</h4></td>
                    <td><a class="label label-lg label-success" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/formulir/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
</a>
	
                        </td>
                        <td>
                            <table class="data" border="0">
                                <tr class="headerr" title="Click Untuk melihat detail">
                                    <td class="hsl">
                                        <?php if ($_smarty_tpl->tpl_vars['row']->value->event==''&&$_smarty_tpl->tpl_vars['row']->value->jenjang=='1'){?>
											<span class="label label-sm label-warning label-mini">Belum Memilih Jadwal</span>
                                        <?php }elseif($_smarty_tpl->tpl_vars['row']->value->konfirm=='0'){?>
												<span class="label label-sm label-info label-mini">Belum Diperiksa</span>
												<?php if ($_smarty_tpl->tpl_vars['row']->value->adaSaudara=='0'){?>
													<a style="float:right;" id="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#" class="btn default btn-xs black">
														<i class="icon-edit"></i>Edit
													</a>
													<a style="float:right;" id="view" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#" class="btn default btn-xs black"><i class="icon-eye-open"></i>View</a>
													<a style="float:right;visibility:hidden;" id="hide<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#" class="btnHide default btn-xs black"><i class="icon-eye-close"></i>Hide</a>
												<?php }else{ ?>
												<?php if ($_smarty_tpl->tpl_vars['row']->value->confirmSaudara=='0'){?>
												<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/profil/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
">
													<span class="label label-sm label-danger label-mini">Confirm Saudara</span>
												</a>
												<?php }else{ ?>
													<a style="float:right;" id="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#" class="btn default btn-xs black">
														<i class="icon-edit"></i>Edit
													</a>
													<a style="float:right;" id="view" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#" class="btn default btn-xs black"><i class="icon-eye-open"></i>View</a>
													<a style="float:right;visibility:hidden;" id="hide<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#" class="btnHide default btn-xs black"><i class="icon-eye-close"></i>Hide</a>
												<?php }?> 
											<?php }?> 
											<?php }elseif($_smarty_tpl->tpl_vars['row']->value->konfirm=='1'){?> <?php if ($_smarty_tpl->tpl_vars['row']->value->lulusTidak=='1'){?>
												<span class="label label-sm label-success label-mini">Lulus Seleksi</span>
											<?php }else{ ?>
												<span class="label label-sm label-danger label-mini">Tidak Lulus</span>
											<?php }?>
											<a style="float:right;" id="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#" class="btn default btn-xs black"><i class="icon-edit"></i>Edit</a> 
											<a style="float:right;" id="view" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#" class="btn default btn-xs black"><i class="icon-eye-open"></i>View</a>
											<a style="float:right;visibility:hidden;" id="hide<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#" class="btnHide default btn-xs black"><i class="icon-eye-close"></i>Hide</a>
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr class="detail" title="Click untuk Kembali">
                                    <td>
                                        <div id="formPenilaian<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
/*jQuery(document).ready(function() {
    TableEditable.init();
}); */

$(".btn").each(function(i, v) {
    $(this).click(function() {
        var val = $(this).attr("value");
        var opt = $(this).attr("id");
        document.getElementById('hide' + val).style.visibility = "visible";
        <!-- document.getElementById('formPenilaian' + val).style.display = 'block'; -->
		$('#formPenilaian'+val).slideDown();
        $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbSeleksiForm/form", {
            'val': val,
            'opt': opt
        }, function(resp) {
            $('#formPenilaian' + val).html(resp);
        });
        return false;
    });
});

$(".btnHide").each(function(i, v) {
    $(this).click(function() {
        var val = $(this).attr("value");
        document.getElementById('hide' + val).style.visibility = "hidden";
		<!-- $('#hide'+val).slideUp(); -->
        <!-- document.getElementById('formPenilaian' + val).style.display = 'none'; -->
		$('#formPenilaian'+val).slideUp();
        return false;
    });
});



<!-- $('table.formulir tr.formulir').click( function() {
/*    $(this).prevAll('tr').each( function() {
        if ($(this).hasClass('headers')) {
            return false;
        }
        $(this).hide();
    });
    $(this).nextAll('tr').each( function() {
        if ($(this).hasClass('headers')) {
            return false;
        }
        $(this).hide();
    });
});
$('table tr.headers').click( function() {
    $(this).nextAll('tr').each( function() {
        if ($(this).hasClass('headers')) {
            return false;
        }
        $(this).slideDown();
    });
}); */

</script>
<?php }} ?>