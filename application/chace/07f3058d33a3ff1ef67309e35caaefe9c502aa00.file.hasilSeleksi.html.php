<?php /* Smarty version Smarty-3.1.14, created on 2016-11-16 10:38:36
         compiled from "application/views/portal/hasilSeleksi.html" */ ?>
<?php /*%%SmartyHeaderCode:1896488543535625dda9e436-08251914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07f3058d33a3ff1ef67309e35caaefe9c502aa00' => 
    array (
      0 => 'application/views/portal/hasilSeleksi.html',
      1 => 1478572211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1896488543535625dda9e436-08251914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535625ddb26357_50251986',
  'variables' => 
  array (
    'hasil' => 0,
    'termcond' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535625ddb26357_50251986')) {function content_535625ddb26357_50251986($_smarty_tpl) {?>			<div class="promo-page">
				<!-- BEGIN PAGE CONTENT-->
				<div class="block-carousel">
					<div id="promo_carousel" class="carousel slide">
					<?php if ($_smarty_tpl->tpl_vars['hasil']->value->lulusTidak=='1'){?>
						<div class="container">
							<div class="carousel-inner">
								<div class="active item">
									<div class="row">
										<div class="col-md-7 margin-bottom-20 margin-top-20">
											<h1>Welcome to Paramadina!</h1>
											<p>Selamat <b><?php echo $_smarty_tpl->tpl_vars['hasil']->value->student;?>
</b>, Anda telah Lulus Seleksi Ujian Masuk Universitas Paramadina pada</p>
											<p>Program Studi <b><?php echo $_smarty_tpl->tpl_vars['hasil']->value->progdi;?>
</b> dengan mendapat <b>Peringkat <?php echo $_smarty_tpl->tpl_vars['hasil']->value->hasilAkhir;?>
</b></p>
											<p>Silahkan lakukan pendaftaran ulang untuk tahap masuk berikutnya.</p>
											<br>
											<a 
											<?php if ($_smarty_tpl->tpl_vars['termcond']->value=='1'){?>
											href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/daftarUlang"
											<?php }else{ ?>
											href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/lampiran/1"
											<?php }?> class="btn red btn-lg m-icon-big">
											Daftar Ulang <i class="m-icon-big-swapright m-icon-white"></i>                                
											</a>
										</div>
										<!-- <div class="col-md-5 animated rotateInDownLeft">
											<a href="index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/man-winner.png" alt="" class="img-responsive"></a>
										</div> -->
										<div class="col-md-5">
											<a href="index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/mhs-upm.jpg" alt="" class="img-responsive"></a>
										</div>
									</div>
								</div>
							</div><!-- 
							<a class="carousel-control left" href="#promo_carousel" data-slide="prev">
							<i class="m-icon-big-swapleft"></i>
							</a>
							<a class="carousel-control right" href="#promo_carousel" data-slide="next">
							<i class="m-icon-big-swapright"></i>
							</a> -->
							<!-- Indicators --><!-- 
							<ol class="carousel-indicators">
								<li data-target="#promo_carousel" data-slide-to="0" class="active"></li>
								<li data-target="#promo_carousel" data-slide-to="1"></li>
							</ol> -->
						</div>
					<?php }else{ ?>
						<div class="container">
							<div class="carousel-inner">
								<div class="active item">
									<div class="row">
										<div class="col-md-5">
											<a href="index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/woman.png" alt="" class="img-responsive"></a>
										</div>
										<!-- <div class="col-md-7 margin-bottom-20 margin-top-20 animated rotateInUpRight">
											<h1>Mohon Maaf..</h1>
											<p>Anda belum berhasil pada ujian seleksi masuk Paramadina kali ini,</p>
											<p>Silahkan mencoba kembali pada kesempatan berikutnya.</p>
											<br>
											<a href='#' class="go btn blue btn-lg m-icon-big">
											www.paramadina.ac.id <i class="m-icon-big-swapright m-icon-white"></i>
											</a>
										</div> -->
										<div class="col-md-7 margin-bottom-20 margin-top-20">
										<h3>Mohon Maaf,</h3>
										<p>Terima kasih atas kepercayaan Saudara <b><?php echo $_smarty_tpl->tpl_vars['hasil']->value->student;?>
</b> untuk mengikuti Seleksi Mahasiswa Baru</p>
										<p>di Universitas Paramadina.</p>
										<p>Setelah meninjau hasil tes dan wawancara Saudara pada Seleksi Mahasiswa Baru, yang meliputi</p>
										<p>aspek kemampuan kognitif, minat, motivasi, keterampilan, dan kepribadian, dengan berat hati kami</p>
										<p><b>belum dapat menerima Saudara sebagai mahasiswa Universitas Paramadina untuk tahun</b></p>
										<p><b>akademik 2014/2015.</b></p>
										<br/>
										<p>Semoga Anda dapat meraih kesuksesan sesuai dengan yang telah dicita-citakan, di mana pun berada.</p>
										</div>
									</div>
								</div>
							</div><!-- 
							<a class="carousel-control left" href="#promo_carousel" data-slide="prev">
							<i class="m-icon-big-swapleft"></i>
							</a>
							<a class="carousel-control right" href="#promo_carousel" data-slide="next">
							<i class="m-icon-big-swapright"></i>
							</a> -->
							<!-- Indicators --><!-- 
							<ol class="carousel-indicators">
								<li data-target="#promo_carousel" data-slide-to="0" class="active"></li>
								<li data-target="#promo_carousel" data-slide-to="1"></li>
							</ol> -->
						</div>
					<?php }?>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
<script>
$('.go').click(function (){
	window.location.href = 'http://www.paramadina.ac.id';
});
</script><?php }} ?>