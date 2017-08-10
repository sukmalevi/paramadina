<?php /* Smarty version Smarty-3.1.14, created on 2017-07-24 14:28:00
         compiled from "application/views/portal/tiles.html" */ ?>
<?php /*%%SmartyHeaderCode:635646752535625c3631803-30766034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3b233eab8d71d86422ca66d1e110d1e747d9be3' => 
    array (
      0 => 'application/views/portal/tiles.html',
      1 => 1500878929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '635646752535625c3631803-30766034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535625c37483b0_41595745',
  'variables' => 
  array (
    'cmb' => 0,
    'host' => 0,
    'termcond' => 0,
    'nomorReg' => 0,
    'firstname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535625c37483b0_41595745')) {function content_535625c37483b0_41595745($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cmb']->value->tolakPendaftaran=='1'||$_smarty_tpl->tpl_vars['cmb']->value->tolakDU=='1'){?>
<div class="row col-md-12" style="float:left">
    <div class="note note-danger">
        <h4 class="block">
         <b>PENOLAKAN PEMBAYARAN </b> <?php if ($_smarty_tpl->tpl_vars['cmb']->value->tolakPendaftaran=='1'){?>-- Pembayaran Pendaftaran -- <?php }?> <?php if ($_smarty_tpl->tpl_vars['cmb']->value->tolakDU=='1'){?>-- Pembayaran Daftar Ulang -- <?php }?>
        </h4>
        <?php if ($_smarty_tpl->tpl_vars['cmb']->value->tolakPendaftaran=='1'){?>
        <p>Pembayaran <b>pendaftaran</b> Anda tidak dapat diproses oleh bagian keuangan Universitas Paramadina. Mohon lakukan pengisian kembali formulir bukti bayar anda.</p>
        <?php }?> <?php if ($_smarty_tpl->tpl_vars['cmb']->value->tolakDU=='1'){?>
        <p>Pembayaran <b>daftar ulang</b> Anda tidak dapat diproses oleh bagian keuangan Universitas Paramadina. Mohon lakukan pengisian kembali formulir bukti bayar anda.</p>
        <p>
            <?php }?>
            <h5>Pesan Keuangan :</h5>
            <?php if ($_smarty_tpl->tpl_vars['cmb']->value->tolakPendaftaran=='1'){?> <?php echo $_smarty_tpl->tpl_vars['cmb']->value->pesanTolakP;?>
 <?php }?> <?php if ($_smarty_tpl->tpl_vars['cmb']->value->tolakDU=='1'){?> <?php echo $_smarty_tpl->tpl_vars['cmb']->value->pesanTolakDU;?>
 <?php }?>
        </p>
        <p>
            Silahkan menuju ke menu <?php if ($_smarty_tpl->tpl_vars['cmb']->value->tolakPendaftaran=='1'){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/pembayaran">Pembayaran.</a>
            <?php }?> <?php if ($_smarty_tpl->tpl_vars['cmb']->value->tolakDU=='1'){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/daftarUlang">Daftar Ulang.</a>
            <?php }?>
        </p>
    </div>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'&&$_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm!='1'){?>
<div class="row col-md-12" style="float:left"> 
   <div class="note note-info">
        <h5 class="block">
         <p>Pembayaran pendaftaran Anda telah dikonfirmasi.</p>
         <p>Selanjutnya, silahkan melengkapi data diri Anda pada menu Formulir Pendaftaran.</p>
        </h5>
   </div>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'&&$_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm!='1'){?>
<div class="row col-md-12" style="float:left"> 
   <div class="note note-info">
        <h5 class="block">
         <p>Terima kasih telah melengkapi formulir pendaftaran.</p>
         <p>Selanjutnya, silahkan menghadiri ujian masuk sesuai dengan jadwal Anda.</p>
        </h5>
   </div>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'&&$_smarty_tpl->tpl_vars['cmb']->value->stsReapplyPaid!='1'){?>
<div class="row col-md-12" style="float:left"> 
   <div class="note note-info">
        <h5 class="block">
         <p>Kelulusan anda telah di konfirmasi.</p>
         <p>Silahkan masuk ke menu <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/seleksi">kelulusan</a> untuk melihat hasil.</p>
        </h5>
   </div>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsReapplyPaid=='1'&&$_smarty_tpl->tpl_vars['cmb']->value->stsReapplyPaidConfirm!='1'){?>
<div class="row col-md-12" style="float:left"> 
   <div class="note note-info">
        <h5 class="block">
         <p>Terima kasih telah melakukan pembayaran daftar ulang.</p>
         <p>Transaksi pembayaran daftar ulang Anda sendang diproses oleh bagian keuangan.</p>
        </h5>
   </div>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsReapplyPaidConfirm=='1'){?>
<div class="row col-md-12" style="float:left"> 
   <div class="note note-info">
        <h4 class="block">
         <p>Selamat, Anda sudah menjadi mahasiswa Program Studi <?php echo $_smarty_tpl->tpl_vars['cmb']->value->progdi;?>
 Universitas Paramadina.</p>
         <p>Nomor Induk Mahasiswa (NIM) Anda adalah <b><?php echo $_smarty_tpl->tpl_vars['cmb']->value->nim;?>
</b>.</p>
		 <p>Silahkan kembali ke Paramadina pada Sabtu 9 September 2017, pukul 09:00 WIB, untuk kegiatan <i>briefing</i> orientasi mahasiswa.
			Pakaian bebas, yang penting rapih dan sopan.</p>
        </h4>
   </div>
</div>
<?php }?>
<div class="tiles">
    <div class="tile double-down selected bg-dark">
        <?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/pendaftaran"><?php }?>
               <?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?>
               <div class="corner"></div>
               <div class="check"></div>
            <?php }?>
               <div class="tile-body">
                  <i class="icon-pencil"></i>
               </div>
               <div class="tile-object">
                  <div class="name">
                     Pendaftaran
                  </div>
                  <div class="number">
                    <span class="badge badge-default">1</span>
                  </div>
               </div>
         <?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?></a><?php }?>
    </div>
    <div class="tile <?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?>selected<?php }?> bg-green">
        <?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/pendaftaran"><?php }?>
               <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'){?>
               <div class="corner"></div>
               <div class="check"></div>
            <?php }?>
               <div class="tile-body">
                  <i class="icon-money"></i>
               </div>
               <div class="tile-object">
                  <div class="name">
                     Pembayaran
                  </div>
                  <div class="number">
                     <span class="badge badge-info">2</span>
                  </div>
               </div>
         <?php if ($_smarty_tpl->tpl_vars['cmb']->value->validation_status=='1'){?></a><?php }?>
    </div>
    <div class="tile double <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'){?>selected<?php }?> bg-blue" id="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm!='1'){?>fo<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'){?><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir"><?php }?>
               <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?>
               <div class="corner"></div>
               <div class="check"></div>
            <?php }?>
               <div class="tile-body">
                  <h4>Lengkapi</h4>
                  <h3>Formulir Pendaftaran</h3>
               </div>
               <div class="tile-object">
                  <div class="name">
                     <i class="icon-folder-open"></i>
                  </div>
                  <div class="number">
                     <span class="badge badge-primary">3</span>
                  </div>
               </div>
         <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'){?></a><?php }?>
    </div>
    <div class="tile <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?>selected<?php }?> bg-red" id="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm!='1'){?>ju<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsEventConfirm=='1'){?><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/jadwal"><?php }?>
               <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsEventConfirm=='1'){?>
               <div class="corner"></div>
               <div class="check"></div>
            <?php }?>
               <div class="tile-body">
                  <i class="icon-list-ol"></i>
               </div>
               <div class="tile-object">
                  <div class="name">
                     Jadwal Ujian
                  </div>
                  <div class="number">
                     <span class="badge badge-success">4</span>
                  </div>
               </div>
         <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsPribadiConfirm=='1'){?></a><?php }?>
    </div>
<!--<?php if ($_smarty_tpl->tpl_vars['cmb']->value->jalur!='KP'){?>-->
    <div class="tile double <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsEventConfirm=='1'){?>selected<?php }?> bg-purple" id="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm!='1'){?>hu<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/seleksi"><?php }?>
               <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?>
               <div class="corner"></div>
               <div class="check"></div>
            <?php }?>
               <div class="tile-body">
                  <i class="icon-paste"></i>
                  <h3>Hasil</h3>
                  <p>
                     Ujian Masuk dan Wawancara
                  </p>
               </div>
               <div class="tile-object">
                  <div class="number">
                     <span class="badge badge-alert">5</span>
                  </div>
               </div>
         <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?></a><?php }?>
    </div>
<!--<?php }?>-->
<!--<?php if ($_smarty_tpl->tpl_vars['cmb']->value->jalur=='KP'){?>-->
    <div class="tile double <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsEventConfirm=='1'){?>selected<?php }?> bg-purple" id="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm!='1'){?>hu<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/seleksi"><?php }?>
               <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?>
               <div class="corner"></div>
               <div class="check"></div>
            <?php }?>
               <div class="tile-body">
                  <i class="icon-paste"></i>
                  <h3>Konfirmasi</h3>
                  <p>
                    Kelulusan 
                  </p>
               </div>
               <div class="tile-object">
                  <div class="number">
                     <span class="badge badge-alert">5</span>
                  </div>
               </div>
         <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?></a><?php }?>
    </div>
<!--<?php }?>-->
    <div class="tile <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultPass=='1'){?>selected<?php }?> bg-red" id="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultPass!='1'){?>du<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultPass=='1'){?>
            <?php if ($_smarty_tpl->tpl_vars['termcond']->value=='1'){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/daftarUlang">
            <?php }else{ ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/lampiran/1">
            <?php }?>
        <?php }?>
               <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsReapplyPaidConfirm=='1'){?>
               <div class="corner"></div>
               <div class="check"></div>
            <?php }?>
               <div class="tile-body">
                  <i class="icon-check"></i>
               </div>
               <div class="tile-object">
                  <div class="name">
                     Daftar Ulang
                  </div>
                  <div class="number">
                     <span class="badge badge-warning">6</span>
                  </div>
               </div>
         <?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultPass=='1'){?></a><?php }?>
    </div>
    <!--    <div class="tile double bg-dark">
         <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulirReport/<?php echo $_smarty_tpl->tpl_vars['nomorReg']->value;?>
">
               <div class="tile-body">
            <?php if ($_smarty_tpl->tpl_vars['cmb']->value->foto==''){?>
                  <img src="assets/img/ava.png" alt="" class="pull-right" height="90px" width="90px">
            <?php }else{ ?>
              <img src="assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['cmb']->value->foto;?>
" alt="" class="pull-right" height="90px" width="90px">
            <?php }?>
                  <h3><?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
</h3>
                  <p>
                     Click bar ini untuk mendapatkan Formulir Pendaftaran kamu!
                  </p>
               </div>
               <div class="tile-object">
                  <div class="name">
                     <i class=" icon-file-text"></i>
                  </div>
               </div>
         </a>
            </div>
      -->
</div>


<div class="tiles"> 
    <div class="tile double" style="background-color:#006895">
        <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulirReport/<?php echo $_smarty_tpl->tpl_vars['nomorReg']->value;?>
">
            <div class="tile-body">
                <?php if (mb_strlen($_smarty_tpl->tpl_vars['cmb']->value->nama_cm, 'UTF-8')<15){?><h3><?php }else{ ?><h4><?php }?><?php echo $_smarty_tpl->tpl_vars['cmb']->value->nama_cm;?>
 <?php if (mb_strlen($_smarty_tpl->tpl_vars['cmb']->value->nama_cm, 'UTF-8')<15){?></h3><?php }else{ ?></h4><?php }?>
                <br>
                <div class="name">Prodi &nbsp;: <?php echo $_smarty_tpl->tpl_vars['cmb']->value->progdi;?>
 </div>
                <div class="name">Jalur &nbsp;&nbsp;: <?php echo $_smarty_tpl->tpl_vars['cmb']->value->n_jalur;?>
</div>
				<div class="name">NIM &nbsp;&nbsp; : <?php if ($_smarty_tpl->tpl_vars['cmb']->value->nim!=''){?><?php echo $_smarty_tpl->tpl_vars['cmb']->value->nim;?>
<?php }else{ ?>-<?php }?> </div>
              <!-- 
                <?php if (mb_strlen($_smarty_tpl->tpl_vars['cmb']->value->nama_cm, 'UTF-8')<15){?><h3><?php }else{ ?><h4><?php }?><?php echo $_smarty_tpl->tpl_vars['cmb']->value->nama_cm;?>
 <?php if (mb_strlen($_smarty_tpl->tpl_vars['cmb']->value->nama_cm, 'UTF-8')<15){?></h3><?php }else{ ?></h4><?php }?>
                <br>
              <label class="col-md-2"><h5>Prodi </h5> </label>
              <label class="col-md-10"><?php if (mb_strlen($_smarty_tpl->tpl_vars['cmb']->value->progdi, 'UTF-8')<22){?><h5> : <?php }else{ ?><h5 style="margin-bottom:5px"> : <?php }?><?php echo $_smarty_tpl->tpl_vars['cmb']->value->progdi;?>
<?php if (mb_strlen($_smarty_tpl->tpl_vars['cmb']->value->progdi, 'UTF-8')<22){?></h5><?php }else{ ?></h5><?php }?></label>
              <label class="col-md-2"><h5>NIM </h5></label>
              <label class="col-md-10"><h5> : <b><?php echo $_smarty_tpl->tpl_vars['cmb']->value->nim;?>
</b></h5></label>
              <label class="col-md-2"><h5>Jalur </h5> </label>
              <label class="col-md-10"><h5> : <?php echo $_smarty_tpl->tpl_vars['cmb']->value->n_jalur;?>
</h5></label>-->
            </div> 

            <div class="tile-object">
            </div>
        </a>
    </div>

    <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/profil">
    <div class="tile selected image"> 
        <div class="tile-body">
          <?php if ($_smarty_tpl->tpl_vars['cmb']->value->foto==''){?>
            <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/ava.png"/>
          <?php }else{ ?>
            <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['cmb']->value->foto;?>
">
          <?php }?>
        </div>
        <div class="tile-object">
            <div class="name">

            </div>
        </div>
    </div>
    </a>
</div>

<?php }} ?>