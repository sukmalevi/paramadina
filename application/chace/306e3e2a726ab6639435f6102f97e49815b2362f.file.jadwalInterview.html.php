<?php /* Smarty version Smarty-3.1.14, created on 2014-02-21 14:58:59
         compiled from "application\views\portal\jadwalInterview.html" */ ?>
<?php /*%%SmartyHeaderCode:238005306dbff3f9993-22751090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '306e3e2a726ab6639435f6102f97e49815b2362f' => 
    array (
      0 => 'application\\views\\portal\\jadwalInterview.html',
      1 => 1392969537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238005306dbff3f9993-22751090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5306dbff616d35_65251497',
  'variables' => 
  array (
    'host' => 0,
    'jadwal' => 0,
    'phone' => 0,
    'cmb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5306dbff616d35_65251497')) {function content_5306dbff616d35_65251497($_smarty_tpl) {?>		<div id="bar" style="border: 1px solid;margin-bottom: 20px;" class="hidden-print"></div>
		<div class="invoice">
            <div class="row invoice-logo" style="text-align:center">
              <!--  <div class="col-xs-12 invoice-logo-space"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logop.png" alt="" /> </div> -->
            </div>
            <div class="row" style="border-top: 0px solid;">
			<div class="row" style="border: 1px solid;width:555px;position:absolute;right:25%;margin-top:1px">				
				<div class="col-xs-12 invoice-logo-space" style="text-align: center;padding-top:5px"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logop.png" alt="" /> </div>
				<div class="col-xs-12" style="text-align: center;border-top:1px solid;"><h3>JADWAL INTERVIEW via PHONE</h3></div>
				   <div class="col-xs-12 invoice-payment">
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
				   <div class="col-xs-5">
					  <h4>Tanggal Interview</h4>
					  <ul class="list-unstyled">
						 <li style="border: 1px solid;width:170px;padding: 10px;"><?php echo $_smarty_tpl->tpl_vars['phone']->value->hariPhone;?>
, <?php echo $_smarty_tpl->tpl_vars['phone']->value->tanggalPhone;?>
 <?php echo $_smarty_tpl->tpl_vars['phone']->value->bulanPhone;?>
 <?php echo $_smarty_tpl->tpl_vars['phone']->value->tahunPhone;?>
</li>
					  </ul>
					  <h4>No Kontak</h4>
					  <ul class="list-unstyled">
						 <li style="border: 1px solid;width:170px;padding: 10px;">No Telp : <?php echo $_smarty_tpl->tpl_vars['phone']->value->no_hp1;?>
</li><br>
						 <li style="border: 1px solid;width:170px;padding: 10px;">No HP : <?php echo $_smarty_tpl->tpl_vars['phone']->value->no_hp2;?>
</li>
					  </ul>
				   </div>
				   <div class="col-xs-4">
					  <?php if ($_smarty_tpl->tpl_vars['cmb']->value->foto==''){?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/ava.png" height="220px" width="200px"/>
					  <?php }else{ ?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['cmb']->value->foto;?>
" height="220px" width="200px"/>
					  <?php }?>
				   </div>
				   <!-- <div class="col-xs-4">
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
				   </div> -->
				   <div class="col-xs-10">
					  <!-- <h4>Perlengkapan Persyaratan</h4>
					  <ul class="list-unstyled">
						 <li>1. Foto</li>
						 <li>2. Foto Copy KTP Orang Tua</li>
						 <li>3. Rapor Kelas 1 s/d 3 SMA Sederajat</li>
						 <li><b>Copy Seluruh data Kelengkapan untuk dibawa pada saat ujian seleksi masuk.</b></li>
					  </ul> -->
				   </div>
				</div>
			</div>
			<!-- 
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
            </div> -->
            <!-- <div class="row">
               <div class="col-xs-">
               </div>
               <div class="col-xs-8 invoice-block">
                  <ul class="list-unstyled amounts">
                  </ul>
                  <br />
                  <a class="btn btn-lg blue hidden-print" onclick="javascript:window.print();">Print <i class="icon-print"></i></a>
               </div>
            </div> -->
         </div><?php }} ?>