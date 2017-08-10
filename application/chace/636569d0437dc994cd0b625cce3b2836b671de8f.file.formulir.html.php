<?php /* Smarty version Smarty-3.1.14, created on 2017-03-27 12:36:39
         compiled from "application/views/portal/formulir.html" */ ?>
<?php /*%%SmartyHeaderCode:187491823535625cc7cecc4-72212269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '636569d0437dc994cd0b625cce3b2836b671de8f' => 
    array (
      0 => 'application/views/portal/formulir.html',
      1 => 1490238730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187491823535625cc7cecc4-72212269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535625cc90d641_24548403',
  'variables' => 
  array (
    'nama' => 0,
    'cmb' => 0,
    'host' => 0,
    'idTab' => 0,
    'saudara_rows' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535625cc90d641_24548403')) {function content_535625cc90d641_24548403($_smarty_tpl) {?>					<!-- BEGIN FORM-->
<div class="top-news">
	<a href="#" class="btn parmad" id="profil">
	<span><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</span>
	<div id="detil">
		<em>Pilihan Studi &nbsp;&nbsp;&nbsp;: S<?php echo $_smarty_tpl->tpl_vars['cmb']->value->jenjangType;?>
 <?php if ($_smarty_tpl->tpl_vars['cmb']->value->jenjangType=='1'){?>(Sarjana)<?php }else{ ?>(Pasca Sarjana)<?php }?></em>
		<em>Program Studi	: <?php echo $_smarty_tpl->tpl_vars['cmb']->value->progdi;?>
</em>
		<em>
		<i class="icon-envelope-alt"></i>
		<?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>

		</em>
		<em>
		<i class="glyphicon glyphicon-phone"></i>
		<?php echo $_smarty_tpl->tpl_vars['cmb']->value->rumahCell;?>

		</em> 
		<em style=" position: relative;color:yellow;">
			<i class="icon-<?php if ($_smarty_tpl->tpl_vars['cmb']->value->genderType=='03.P'){?>male<?php }else{ ?>female<?php }?> top-news-icon" ></i> 								
		</em>
		<em style="text-align: right; margin-top: -115px;"  id="imgP">
		<?php if ($_smarty_tpl->tpl_vars['cmb']->value->foto!=''){?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['cmb']->value->foto;?>
" alt="" height="115px" width="115px">
		<?php }else{ ?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/ava.png" alt="" height="115px" >
		<?php }?>
		</em>
	</div>
	</a>
 </div>
 <div class="row">
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="al">
	   <div class="dashboard-stat <?php if ($_smarty_tpl->tpl_vars['cmb']->value->statusAlamat=='1'){?>blue<?php }else{ ?>dark<?php }?>">
		  <div class="visual">
			 <i class="icon-road"></i>
		  </div>
		  <div class="details">
			 <div class="number">
				Data Diri
			 </div>
			 <div class="desc">                           
				<h5>Alamat Rumah & Surat</h5>
			 </div>
		  </div>									  
		  <?php if ($_smarty_tpl->tpl_vars['cmb']->value->statusAlamat=='1'){?>
		  <a href="#" class="alamat more" id="detailAlamat">Lihat Detail <i class="m-icon-swapright m-icon-white"></i></a>  
		  <?php }else{ ?>
		  <a href="#" class="alamat more" id="formAlamat">Lengkapi <i class="m-icon-swapright m-icon-white"></i></a> 
		  <?php }?> 
	   </div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="fa">
	   <div class="dashboard-stat <?php if ($_smarty_tpl->tpl_vars['cmb']->value->statusKeluarga=='1'){?>green<?php }else{ ?>dark<?php }?>">
		  <div class="visual">
			 <i class="icon-group"></i>
		  </div>
		  <div class="details">
			 <div class="number">Orang Tua</div>
			 <div class="desc">Wali & Keluarga</div>
		  </div>								  
		  <?php if ($_smarty_tpl->tpl_vars['cmb']->value->statusKeluarga=='1'){?>
		  <a href="#" class="keluarga more" id="detailKeluarga" >Lihat Detail <i class="m-icon-swapright m-icon-white"></i></a>  
		  <?php }else{ ?>
		  <a href="#" class="keluarga more" id="formKeluarga" >Lengkapi <i class="m-icon-swapright m-icon-white"></i></a> 
		  <?php }?>                 
	   </div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="ed">
	   <div class="dashboard-stat <?php if ($_smarty_tpl->tpl_vars['cmb']->value->statusPend=='1'){?>purple<?php }else{ ?>dark<?php }?>">
		  <div class="visual">
			 <i class="icon-book"></i>
		  </div>
		  <div class="details">
			 <div class="number">Riwayat</div>
			 <div class="desc">Pendidikan Formal</div>
		  </div>								  
		  <?php if ($_smarty_tpl->tpl_vars['cmb']->value->nisn_nim!=''){?>
		  <a href="#" class="pendidikan more" id="formPendidikan">Lihat Detail <i class="m-icon-swapright m-icon-white"></i></a>  
		  <?php }else{ ?>
		  <a href="#" class="pendidikan more" id="formPendidikan">Lengkapi <i class="m-icon-swapright m-icon-white"></i></a> 
		  <?php }?>                   
	   </div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="pr">
	   <div class="dashboard-stat <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?>yellow<?php }else{ ?>dark<?php }?>">
		  <div class="visual">
			 <i class="icon-trophy"></i>
		  </div>
		  <div class="details">
			 <div class="number">Prestasi & </div>
			 <div class="desc">Riwayat Organisasi</div>
		  </div>								  
		  <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?>
		  <a href="#" class="prestasi more" id="formPrestasi">Lihat Detail <i class="m-icon-swapright m-icon-white"></i></a>  
		  <?php }else{ ?>
		  <a href="#" class="prestasi more" id="formPrestasi">Lengkapi <i class="m-icon-swapright m-icon-white"></i></a> 
		  <?php }?>                  
	   </div>
	</div>
 </div>
 <div class="col-md-12" id="konten">
	<!-- konten tiap halaman form untuk formulir -->
 </div>
<button  class="btnSauConfirm btn default" data-toggle="modal" data-target="#sauConfirm" style="display:none">View Demo</button>                                        
<div class="modal fade" id="sauConfirm" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
             <h4 class="modal-title">Konfirmasi Saudara</h4>
          </div>
          <div class="modal-body">
             Apakah Anda Memiliki Saudara Kandung yang Pernah atau Sedang Berkuliah di Paramadina?
          </div>
          <div class="modal-footer">
             <button type="button" class="btn blue" data-dismiss="modal" onclick="confirmSaudara('keluarga','detailKeluarga')">Ya</button>
             <button type="button" class="btn default" data-dismiss="modal" onclick="confirmSaudara('keluarga','saudara')">Tidak</button>
          </div>
       </div>
       <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<button  class="btnSauYakin btn default" data-toggle="modal" data-target="#sauYakin" style="display:none">View Demo</button>                                        
<div class="modal fade" id="sauYakin" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
             <h4 class="modal-title">Konfirmasi Saudara</h4>
          </div>
          <div class="modal-body">
             Apakah Anda Sudah Yakin dengan data Saudara Kandung Anda yang berkuliah di Paramadina?
          </div>
          <div class="modal-footer">
             <button type="button" class="btn default" data-dismiss="modal" onclick="confirmSaudara('keluarga','saudara')">Ya</button>
             <button type="button" class="btn blue" data-dismiss="modal" onclick="confirmSaudara('keluarga','detailKeluarga')">Tidak</button>
          </div>
       </div>
       <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<input id="statusTab" value="<?php echo $_smarty_tpl->tpl_vars['idTab']->value;?>
" hidden>
<script>
$('#profil').click(function(){
	document.getElementById("profil").style.height="130px" ;
	document.getElementById("imgP").style.display="block" ;
	document.getElementById("imgP").style.textAlign="right" ;
	document.getElementById("imgP").style.marginTop="-115px" ;
	document.getElementById("imgP").style.animationDelay="50s" ;
	
	
});

jQuery(document).ready( function (){
	idtab = $('#statusTab').val();
	document.getElementById("al").style.opacity = "0.6";		
	document.getElementById("fa").style.opacity = "0.6" ;
	document.getElementById("ed").style.opacity = "0.6";		
	document.getElementById("pr").style.opacity = "0.6" ;
	
	status = "<?php echo $_smarty_tpl->tpl_vars['cmb']->value->statusAlamat;?>
";
	statusKel = "<?php echo $_smarty_tpl->tpl_vars['cmb']->value->statusKeluarga;?>
";
	statusSau = "<?php echo $_smarty_tpl->tpl_vars['cmb']->value->statusSaudara;?>
";
	statusPend = "<?php echo $_smarty_tpl->tpl_vars['cmb']->value->statusPend;?>
";
	statusPrib = "<?php echo $_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm;?>
";
	saudara_rows = "<?php echo $_smarty_tpl->tpl_vars['saudara_rows']->value;?>
";
	jalur = "<?php echo $_smarty_tpl->tpl_vars['cmb']->value->jalur;?>
";
	jenjang = "<?php echo $_smarty_tpl->tpl_vars['cmb']->value->jenjangType;?>
";
	
	if (status == 1){
		var uri = 'keluarga';	
		if (statusKel == 0){
			id = "formKeluarga";
			document.getElementById("fa").style.opacity = "1";
			toastr.success('Lanjutkan dengan melengkapi DATA ORANG TUA/WALI, Silahkan pilih salah satu untuk diisi.');
		}else if (statusKel == 1){
			uri = "keluarga";
			if (statusSau == 0){
				if(jenjang == 1){
					if (jalur == 'KP' || jalur == 'JP'){
						id="saudara";
						$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/keluarga/saudaraConf", {'id':id},function(resp){
								 window.location.href = "<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir";
						});
					}else{			
						if (saudara_rows > 0){                                            
							$(".btnSauYakin").click();
						}else{
							$(".btnSauConfirm").click();
						}
					}
				}else{
					confirmSaudara('keluarga','saudara');
				}
			}else if (statusSau == 1){
				uri = 'pendidikan';			
				if (statusPend == 0){
					id = "formPendidikan";	
					document.getElementById("ed").style.opacity = "1";
					toastr.success('Selanjutnya, Silahkan Perbaharui riwayat Pendidikan Anda');
				}else if (statusPend == 1){
					uri = 'prestasi';					
					if (statusPrib == 0){
						id="formPrestasi";
						document.getElementById("pr").style.opacity = "1";
						toastr.success('Terakhir, silahkan lengkapi daftar PRESTASI & ORGANISASI Anda. Kemudian Submit formulir pendaftaran.');
					}else if (statusPrib == 1){
						id="formPrestasi";
						document.getElementById("pr").style.opacity = "1";
					}
				}
			}
		}		
	}else{		
		var uri = 'alamat';
		id ="formAlamat";
		document.getElementById("al").style.opacity = "1";
		toastr.success('Silahkan Lengkapi Formulir Pendaftaran dengan Mengisi DATA ALAMAT, ORANG TUA/WALI, PENDIDIKAN, PRESTASI & ORGANISASI ');
	
	}
			
		$('#konten').fadeOut(30);
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/"+uri+"", {'id':id},function(resp){
			$('#konten').html(resp).fadeIn(2000);	
		});
});


$(".alamat").click( function() {	
		id = $(this).attr("id");	
		$('#konten').fadeOut(30);
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/alamat", {'id':id},function(resp){
			$('#konten').html(resp).fadeIn(2000);		
		});
		document.getElementById("profil").style.height="42px" ;
		document.getElementById("imgP").style.display="none" ;		
		
		document.getElementById("al").style.opacity = "1";		
		document.getElementById("fa").style.opacity = "0.6" ;
		document.getElementById("ed").style.opacity = "0.6";		
		document.getElementById("pr").style.opacity = "0.6" ;		 
		return false;
		
	});
	


$(".keluarga").click( function() {	
		id = $(this).attr("id");
				
		$('#konten').fadeOut(30);
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/keluarga", {'id':id},function(resp){
			$('#konten').html(resp).fadeIn(2000);
		});
		document.getElementById("profil").style.height="42px" ;
		document.getElementById("imgP").style.display="none" ;		
		
		document.getElementById("al").style.opacity = "0.6";		
		document.getElementById("fa").style.opacity = "1" ;
		document.getElementById("ed").style.opacity = "0.6";		
		document.getElementById("pr").style.opacity = "0.6" ;	
		return false;
	});



$(".pendidikan").click( function() {	
		id = $(this).attr("id");
			
		$('#konten').fadeOut(30);
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/pendidikan", {'id':id},function(resp){
			$('#konten').html(resp).fadeIn(2000);
		});
		document.getElementById("profil").style.height="42px" ;
		document.getElementById("imgP").style.display="none" ;
		
		document.getElementById("al").style.opacity = "0.6";		
		document.getElementById("fa").style.opacity = "0.6" ;
		document.getElementById("ed").style.opacity = "1";		
		document.getElementById("pr").style.opacity = "0.6" ;	
		return false;
	});



$(".prestasi").click( function() {	
		id = $(this).attr("id");
			
		$('#konten').fadeOut(30);
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/prestasi", {'id':id},function(resp){
			$('#konten').html(resp).fadeIn(2000);
		});
		document.getElementById("profil").style.height="42px" ;
		document.getElementById("imgP").style.display="none" ;
		
		document.getElementById("al").style.opacity = "0.6";		
		document.getElementById("fa").style.opacity = "0.6" ;
		document.getElementById("ed").style.opacity = "0.6";		
		document.getElementById("pr").style.opacity = "1" ;	
		return false;
	});



    function confirmSaudara(uri, id){
        if (id == "detailKeluarga"){
            $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/"+uri+"", {'id':id},function(resp){
                    $('#konten').html(resp);
                });
        }   
        if (id == "saudara"){
            $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/keluarga/saudaraConf", {'id':id},function(resp){
                    window.location.href = "<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir";
            });
        }
    }

</script><?php }} ?>