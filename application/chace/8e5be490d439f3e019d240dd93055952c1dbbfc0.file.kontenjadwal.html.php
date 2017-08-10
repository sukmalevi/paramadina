<?php /* Smarty version Smarty-3.1.14, created on 2014-02-14 10:10:51
         compiled from "application\views\smb\kontenjadwal.html" */ ?>
<?php /*%%SmartyHeaderCode:358652ce57905adb10-66028087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e5be490d439f3e019d240dd93055952c1dbbfc0' => 
    array (
      0 => 'application\\views\\smb\\kontenjadwal.html',
      1 => 1392347448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '358652ce57905adb10-66028087',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ce57906eeea8_41122612',
  'variables' => 
  array (
    'host' => 0,
    'jadwal' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce57906eeea8_41122612')) {function content_52ce57906eeea8_41122612($_smarty_tpl) {?>		<div id="bar" style="border: 1px solid;margin-bottom: 20px;" class="hidden-print"></div>
		<div class="invoice">
            <div class="row invoice-logo">
               <div class="col-xs-4 invoice-logo-space"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logop.png" alt="" /> </div>
            </div>
            <div class="row" style="border-top: 1px solid;">
			<div class="col-xs-12" style="text-align: center; font-weight: bold;"><h3><b>KARTU TANDA PESERTA UJIAN</b></h3></div>
			   <div class="col-xs-4">
                  <div class="well" style="width:240px">
				  <?php if ($_smarty_tpl->tpl_vars['jadwal']->value->foto==''){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/ava.png" height="220px" width="200px"/>
				  <?php }else{ ?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['jadwal']->value->foto;?>
" height="220px" width="200px"/>
				  <?php }?>
                  </div>
               </div>
               <div class="col-xs-8 invoice-payment">
                  <ul class="list-unstyled">
                     <li><label style="width: 165px;">Nama Lengkap</label> <label>: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->namaCmb;?>
</label></li>
                     <li><label style="width: 165px;">Nomor Formulir</label> <label>: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->nomor;?>
</label></li>
                     <li><label style="width: 165px;">Periode</label> <label>: 	<?php echo $_smarty_tpl->tpl_vars['jadwal']->value->namaEvent;?>
</label></li>
                     <li><label style="width: 165px;">Program Studi</label> <label>: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->progdi;?>
</label></li>
                     <li><label style="width: 165px;">Jalur Seleksi</label> <label>: <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->jalurCmb;?>
</label></li>
                  </ul>
               </div>	
               <div class="col-xs-3">
                  <h4>Tanggal Ujian</h4>
                  <ul class="list-unstyled">
                     <li style="border: 1px solid;width:170px;padding: 10px;"><?php echo $_smarty_tpl->tpl_vars['jadwal']->value->hari;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->days;?>
 <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->bulan;?>
 <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->tahun;?>
</li>
                  </ul>
               </div>
               <div class="col-xs-4">
                  <h4>Lokasi Ujian</h4>
                  <ul class="list-unstyled">
                     <li><?php echo $_smarty_tpl->tpl_vars['jadwal']->value->prop;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->kabKota;?>
</li>
                     <li><?php echo $_smarty_tpl->tpl_vars['jadwal']->value->alamat;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->kodePos;?>
</li>
					 <li>Tlp. <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->tel;?>
</li>
					 <li>Fax. <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->fax;?>
</li>
                     <li><?php echo $_smarty_tpl->tpl_vars['jadwal']->value->namaGedung;?>
, <?php echo $_smarty_tpl->tpl_vars['jadwal']->value->namaRuang;?>
</li>
                  </ul>
               </div>
               <div class="col-xs-12">
                  <h4>Perlengkapan Persyaratan</h4>
                  <ul class="list-unstyled">
                     <li>1. Foto</li>
                     <li>2. Foto Copy KTP Orang Tua</li>
					 <li>3. Rapor Kelas 1 s/d 3 SMA Sederajat</li>
					 <li><b>Copy Seluruh data Kelengkapan untuk dibawa pada saat ujian seleksi masuk.</b></li>
                  </ul>
               </div>
            </div>
			<hr>
            <div class="row">				
			   <div class="col-xs-1">
					 
               </div>
               <div class="col-xs-4">
				<h4>Tanda Tangan,</h4>
                  <ul class="list-unstyled">
                     <li><br></li>
                     <li><br></li>
					 <li><br></li>
                     <li>Pengawas</li>
                  </ul> 
               </div>
			   <div class="col-xs-2">
					 
               </div>
			   <div class="col-xs-4">
				<h4>Tanda Tangan,</h4>
                  <ul class="list-unstyled">
                     <li><br></li>
                     <li><br></li>
					 <li><br></li>
                     <li>Pewawancara</li>
                  </ul>	 
               </div>			
			   <div class="col-xs-1">
					 
               </div>
            </div>
            <div class="row">
               <div class="col-xs-">
               </div>
               <div class="col-xs-8 invoice-block">
                  <ul class="list-unstyled amounts">
                  </ul>
                  <br />
                  <a class="btn btn-lg blue hidden-print" onclick="javascript:window.print();">Print <i class="icon-print"></i></a>
               </div>
            </div>
         </div><?php }} ?>