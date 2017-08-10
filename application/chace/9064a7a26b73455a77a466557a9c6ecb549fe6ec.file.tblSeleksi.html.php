<?php /* Smarty version Smarty-3.1.14, created on 2014-01-09 14:14:48
         compiled from "application\views\smb\tblSeleksi.html" */ ?>
<?php /*%%SmartyHeaderCode:474052cd01ebe27255-99805098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9064a7a26b73455a77a466557a9c6ecb549fe6ec' => 
    array (
      0 => 'application\\views\\smb\\tblSeleksi.html',
      1 => 1389253639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '474052cd01ebe27255-99805098',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cd01ec1c0b98_55971339',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cd01ec1c0b98_55971339')) {function content_52cd01ec1c0b98_55971339($_smarty_tpl) {?>				<div class="portlet box grey">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-calendar"></i>Hasil Seleksi Calon Mahasiswa Baru</div>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body flip-scroll">
                        <table class="table table-bordered table-striped table-condensed flip-content" >
                           <thead class="flip-content">
                              <tr>
                                 <th>Nama Peserta</th>
                                 <th>Formulir</th>
                                 <th>Hasil Seleksi</th>
                              </tr>
                           </thead>
                           <tbody>
							  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nama_cm;?>
</td>
                                 <td>
									<table class="formulir">
									<tr class="headers" title="Klik Untuk Detail">
										<td><?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
</td>
									
										<td><a id="formulir" href="#" class="btn default btn-xs black"><i class="icon-eye-open"></i> Detail</a>
										</td>
									</tr>
									<tr class="formulir" style="display:none" title="Click untuk Kembali"><td>
										<!-- <td><a href="#" class="btn default btn-xs red-stripe" id="hide">View</a></td>	 -->								
										<!-- <form id="detail" name="detail" class="detail" style="display:none"> -->
										 <table>
											<tr><td>Periode</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value->n_periode;?>
</td></tr>
											<tr><td>Program Studi</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value->progdi;?>
</td></tr>
											<tr><td>Jalur</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value->n_jalur;?>
</td></tr>
											<tr><td>Tanggal UMB</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value->hari;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tglEvent;?>
</td></tr>
											<tr><td>Jam UMB</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value->jamMasuk;?>
 - <?php echo $_smarty_tpl->tpl_vars['row']->value->jamKeluar;?>
</td></tr>
											<tr><td>Ruang UMB</td>
											<td>
												<table>
												<tr><td><?php echo $_smarty_tpl->tpl_vars['row']->value->ruang;?>
</td></tr>
												<tr><td><?php echo $_smarty_tpl->tpl_vars['row']->value->namaGedung;?>
</td></tr>
												<tr><td><?php echo $_smarty_tpl->tpl_vars['row']->value->alamat;?>
</td></tr>
												<tr><td><?php echo $_smarty_tpl->tpl_vars['row']->value->kabKota;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->prop;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->kodePos;?>
</td></tr>
												<tr><td><?php echo $_smarty_tpl->tpl_vars['row']->value->tel;?>
</td></tr>
												<tr><td><?php echo $_smarty_tpl->tpl_vars['row']->value->fax;?>
</td></tr>
												</table>
											</td></tr>
											</table>
										</tr>
									</table>
								 </td>	
                                 <td>
								 <table class="data" >
									<tr class="headerr" title="Click Untuk melihat detail">
										<td class="hsl">
										<?php if ($_smarty_tpl->tpl_vars['row']->value->event==''){?>										
											<span class="label label-sm label-warning label-mini">Belum Memilih Jadwal</span>
											<?php }elseif($_smarty_tpl->tpl_vars['row']->value->konfirm=='0'){?>
											<span class="label label-sm label-info label-mini">Belum Diperiksa</span>
											<a style="float:right;" id="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#" class="btn default btn-xs black"><i class="icon-edit"></i>Edit</a> 
											<a style="float:right;" id="view" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#" class="btn default btn-xs black"><i class="icon-eye-open"></i>View</a>
											<a style="float:right;visibility:hidden;" id="hide<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" href="#" class="btnHide default btn-xs black"><i class="icon-eye-close"></i>Hide</a>
										
											<?php }elseif($_smarty_tpl->tpl_vars['row']->value->konfirm=='1'){?>
												<?php if ($_smarty_tpl->tpl_vars['row']->value->lulusTidak=='1'){?>
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

$(".btn").each(function (i, v){
	$(this).click( function() {
		var val = $(this).attr("value");
		var opt = $(this).attr("id");
		document.getElementById('hide'+val).style.visibility = "visible";
		document.getElementById('formPenilaian'+val).style.display = 'block';
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbSeleksiForm/form",{
				'val':val,
				'opt':opt
					},function(resp){
					$('#formPenilaian'+val).html(resp);
				}); 
		return false;
	});
});

$(".btnHide").each(function (i, v){
	$(this).click( function() {		
		var val = $(this).attr("value");
		document.getElementById('hide'+val).style.visibility="hidden";
		document.getElementById('formPenilaian'+val).style.display = 'none';
	return false;
	});
});
	


$('table.formulir tr.formulir').click( function() {
    $(this).hide();
    $(this).prevAll('tr').each( function() {
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
        $(this).show();
    });
});

//$("#data").jExpand(); 
</script><?php }} ?>