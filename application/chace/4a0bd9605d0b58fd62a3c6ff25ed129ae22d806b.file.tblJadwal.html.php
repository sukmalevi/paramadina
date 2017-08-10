<?php /* Smarty version Smarty-3.1.14, created on 2014-04-16 10:59:00
         compiled from "application\views\admisi\tblJadwal.html" */ ?>
<?php /*%%SmartyHeaderCode:2165152a6b571d4a337-13993290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a0bd9605d0b58fd62a3c6ff25ed129ae22d806b' => 
    array (
      0 => 'application\\views\\admisi\\tblJadwal.html',
      1 => 1392884264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2165152a6b571d4a337-13993290',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a6b571e99422_39560542',
  'variables' => 
  array (
    'sql' => 0,
    'host' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a6b571e99422_39560542')) {function content_52a6b571e99422_39560542($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <div class="row portfolio-block">
							<div class="col-md-1" style="padding: 10px 0;">
							  <div class="portfolio-info">
                                 <p></p>
								 <p></P>
                                 <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/absen/<?php echo $_smarty_tpl->tpl_vars['row']->value->id_event;?>
/table" class="kelas btn bigicn-only" style="padding:0;"><span><?php echo $_smarty_tpl->tpl_vars['row']->value->kode_kelas;?>
</span></a>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="portfolio-text">
                                 <div class="portfolio-text-info" style=";padding-left: 10px;">
                                    <h4><?php echo $_smarty_tpl->tpl_vars['row']->value->nama_event;?>
</h4>
                                    <p><?php echo $_smarty_tpl->tpl_vars['row']->value->id_event;?>
</p>
                                    <p>Jenjang : <?php if ($_smarty_tpl->tpl_vars['row']->value->jenjang=='01.S1'){?>S1<?php }else{ ?>S2<?php }?>, <?php echo $_smarty_tpl->tpl_vars['row']->value->tahun;?>
</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="portfolio-text">
                                 <h4>Jadwal Ujian</h4>
								 <p><?php echo $_smarty_tpl->tpl_vars['row']->value->hariEvent;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggal;?>
</p>
								 <p><?php echo $_smarty_tpl->tpl_vars['row']->value->jamMasuk;?>
 - <?php echo $_smarty_tpl->tpl_vars['row']->value->jamKeluar;?>
</p>
								 <p>Prioritas : <?php echo $_smarty_tpl->tpl_vars['row']->value->prioritas;?>
</p>
                              </div>
							</div>
							<div class="col-md-1">
                              <div class="portfolio-text-info">
                                <h4>Peserta<h4>
								 <p></P>
								 <?php if ($_smarty_tpl->tpl_vars['row']->value->kursiTes==$_smarty_tpl->tpl_vars['row']->value->totalPeserta){?>
								 <span style="color:#AFAF19;font-size: 17px;text-align: center;"> PENUH</span>
								 <?php }?>
                                 <span style="color: #16A1F2;
											display: block;
											font-size: 28px;
											font-weight: 200;
											line-height: 28px;
											margin-top: 0;
											text-transform: uppercase;
											text-align: center;"> <?php echo $_smarty_tpl->tpl_vars['row']->value->totalPeserta;?>
 </span>
                              </div>
							</div>
							<div class="col-md-3">
                              <div class="portfolio-text-info">
                                 <h4>Panitia Ujian</h4>
                                 <p>Petugas 	: <?php echo $_smarty_tpl->tpl_vars['row']->value->nama_petugas;?>
</p>
								 <p>Pewawancara : <?php echo $_smarty_tpl->tpl_vars['row']->value->nama_pww;?>
</p>
								 <p>Pewawancara 2: <?php echo $_smarty_tpl->tpl_vars['row']->value->nama_pww2;?>
</p>
                              </div>
                           </div>
						   <div class="col-md-1">
                              <div class="portfolio-info">
                                 <a href="#" class="<?php if ($_smarty_tpl->tpl_vars['row']->value->status=='1'){?>aktif<?php }else{ ?>nonaktif<?php }?>" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_event;?>
" name="delete">
									<?php if ($_smarty_tpl->tpl_vars['row']->value->status=='1'){?><span style="color:green">AKTIF</span>
									<?php }else{ ?><span style="color:#AFAF19;font-size: 17px;">TIDAK AKTIF</span><?php }?>
								 </a>
                                 <a href="#formEdit" class="editing" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_event;?>
" name="edit" data-toggle="modal">
									<span>EDIT</span>
								 </a>
                                 <a href="#verifikasi" class="deleting" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_event;?>
" name="delete" data-toggle="modal">
									<span style="color:red;font-size: 32px;">DELETE</span>
								 </a>
                              </div>
							</div>
                        </div>
						<?php } ?>
                        <!--end row-->
                     </div>
					 <div class="modal fade" id="formEdit" tabindex="-1" role="basic" aria-hidden="true">
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
					</div>
					<div id="verifikasi" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Confirmation</h4>
                              </div>
							  <div id="verifikasiRuang">
							  </div>
                           </div>
                        </div>
                    </div>
<script>

	$(".editing").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiJadwalSeleksi/edit", {'opt':opt, 'val':val},function(resp){
			$('#form').html(resp);
		});
	});
	});


$(".deleting").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiJadwalSeleksi/delete", {'opt':opt, 'val':val},function(resp){
			$('#verifikasiRuang').html(resp);
		});
	});
});


$(".nonaktif").each(function (i, v){
	$(this).click( function() {	
			id = "nonaktif";
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiJadwalSeleksi/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
			location.reload();
		});
	});
});


$(".aktif").each(function (i, v){
	$(this).click( function() {	
			id = "aktif";
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/admisiJadwalSeleksi/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
			location.reload();
		});
	});
});

</script><?php }} ?>