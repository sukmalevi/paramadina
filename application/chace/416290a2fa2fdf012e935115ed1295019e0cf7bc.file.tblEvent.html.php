<?php /* Smarty version Smarty-3.1.14, created on 2014-02-21 10:22:00
         compiled from "application\views\smb\tblEvent.html" */ ?>
<?php /*%%SmartyHeaderCode:721752ccff14060638-21342866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '416290a2fa2fdf012e935115ed1295019e0cf7bc' => 
    array (
      0 => 'application\\views\\smb\\tblEvent.html',
      1 => 1392952900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '721752ccff14060638-21342866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccff1431c469_67503852',
  'variables' => 
  array (
    'total' => 0,
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccff1431c469_67503852')) {function content_52ccff1431c469_67503852($_smarty_tpl) {?>		<h4>Total Peserta Ujian : <?php echo $_smarty_tpl->tpl_vars['total']->value->total;?>
 Orang</h4>
				<div class="portlet box grey">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-calendar"></i>Pembayaran Calon Mahasiswa Baru</div>
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
                                 <th>No. Pendaftaran</th>
                                 <th>Program Studi</th>
                                 <th>Jalur</th>
                                 <th>Status</th>
								 <th>Action</th>
								 <th>Via Phone</th>
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
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
</td>								 
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->progdi;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->n_jalur;?>
</td>
                                 <td>
								 <table class="data">
									<tr class="headerr" title="Click Untuk melihat detail">
										<th><?php if ($_smarty_tpl->tpl_vars['row']->value->event==''){?>										
											<span class="label label-sm label-danger label-mini">Belum Memilih Jadwal</span>
											<?php }else{ ?>
											<?php if ($_smarty_tpl->tpl_vars['row']->value->interviewPhone=='1'){?>
												<?php echo $_smarty_tpl->tpl_vars['row']->value->hariPhone;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggalPhone;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->bulanPhone;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->tahunPhone;?>

											<?php }else{ ?>
												<?php echo $_smarty_tpl->tpl_vars['row']->value->hari;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggal;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->bulan;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->tahun;?>

											<?php }?>
										</th>
										<td>
											
										
										</td>
										<?php }?>
									</tr>
									<tr class="detail" id ="detail<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" style="display:none" title="Click untuk Kembali"><td>
										<!-- <td><a href="#" class="btn default btn-xs red-stripe" id="hide">View</a></td>	 -->								
										<!-- <form id="detail" name="detail" class="detail" style="display:none"> -->
										 <table>
											<tr><td>Nama</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value->nama_cm;?>
</td></tr>
											<tr><td>No. Pendaftaran</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
</td></tr>
											<tr><td>Periode</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value->n_periode;?>
</td></tr>
											<tr><td>Program Studi</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value->progdi;?>
</td></tr>
											<tr><td>Jalur</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value->n_jalur;?>
</td></tr>
											<tr><td>Tanggal UMB</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value->hari;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggal;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->bulan;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->tahun;?>
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
										<!-- </form> -->
										</td>
									</tr>
									</table>
								 </td>
								 <td>								 
								<?php if ($_smarty_tpl->tpl_vars['row']->value->interviewPhone=='1'){?>
									<a name="phoned" class="phoned btn dark" href="#formViaPhone" data-toggle="modal" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode_smb;?>
"><i class="icon-cloud"></i> Phone Int.</a>
								<?php }else{ ?>
									<?php if ($_smarty_tpl->tpl_vars['row']->value->event!=''){?>
										<a href="#" id = "see<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" class="see btn blue btn-sm" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
"><i class="icon-eye-open"></i> <?php echo $_smarty_tpl->tpl_vars['row']->value->ruang;?>
</a><br>
										<a href="#" id = "hiden<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" class="hiden btn red btn-sm" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" style="display:none"><i class="icon-eye-close"></i> Hide</a><p><br>
										<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/jadwal/print/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" class="print btn green btn-sm" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode_smb;?>
"><i class="icon-print"></i> Print Jadwal</a>
									<?php }?>
								<?php }?>
								 </td>								 
                                 <td>
								 <?php if ($_smarty_tpl->tpl_vars['row']->value->interviewPhone=='1'){?>
									<span class="label label-sm label-warning"><i class="icon-ok"></i></span>
								 <?php }else{ ?>
									<a name="phone" class="phone btn dark" href="#formViaPhone" data-toggle="modal" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode_smb;?>
"><i class="icon-signal"></i> Phone</a>
								 <?php }?>
								 </td>
                              </tr>
								<?php } ?>
                           </tbody>
                        </table>
                     </div>
               </div>
					<div class="modal fade" id="formViaPhone" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog  modal-wide">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Edit Buka Pendaftaran Seleksi</h4>
                              </div>
                              <div class="modal-body">
								<div id="form"></div>							  
                              </div>
                           </div>
						  </div>
                           <!-- /.modal-content -->
                        </div>
<script>

	$(".phone").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/viaPhone/add", {'opt':opt, 'val':val},function(resp){
			$('#form').html(resp);
		});
	});
	});


	$(".phoned").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/viaPhone/detail", {'opt':opt, 'val':val},function(resp){
			$('#form').html(resp);
		});
	});
	});


$(".see").each(function (i, v){
	$(this).click( function() {
		var val = $(this).attr("value");
		document.getElementById('hiden'+val).style.display = "block";
		document.getElementById('see'+val).style.display="none";
		document.getElementById('detail'+val).style.display="block";
		 
		return false;
	});
});

$(".hiden").each(function (i, v){
	$(this).click( function() {		
		var val = $(this).attr("value");
		
		document.getElementById('hiden'+val).style.display = "none";
		document.getElementById('see'+val).style.display="block";
		document.getElementById('detail'+val).style.display="none";
		
		return false;
	});
});

/*
$(".print").each(function (i, v){
	$(this).click( function() {		
		var val = $(this).attr("value");
		var opt = $(this).attr("id");
		
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/jadwal",{
				'val':val,
				'opt':opt
					},function(resp){
				}); 
		
		//return false;
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
*/
</script><?php }} ?>