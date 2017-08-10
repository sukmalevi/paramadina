<?php /* Smarty version Smarty-3.1.14, created on 2016-03-15 12:08:30
         compiled from "application/views/admisi/kontenAbsen.html" */ ?>
<?php /*%%SmartyHeaderCode:14526242155359bbab0c1594-65641179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e97f6f45c61b07605f77bcd36f7b49bfba8aa93b' => 
    array (
      0 => 'application/views/admisi/kontenAbsen.html',
      1 => 1458017372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14526242155359bbab0c1594-65641179',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5359bbab186450_13760070',
  'variables' => 
  array (
    'host' => 0,
    'event' => 0,
    'absen' => 0,
    'row' => 0,
    'kode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359bbab186450_13760070')) {function content_5359bbab186450_13760070($_smarty_tpl) {?>	    <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="invoice">
            <div class="row invoice-logo">
			<div class="col-xs-12 invoice-logo-space" style="text-align:center"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logop.png" alt="" /> </div>
               <div class="col-xs-12" style="text-align:center">
                  <h3><b>Absensi Tes Potensi Akademik</b></h3>
               </div>
            </div>
            <hr />
            <div class="row">
               <div class="col-xs-6">
                  <ul class="list-unstyled">
                     <li><label style="width:100px"><strong>Gelombang </strong></label>: <?php if ($_smarty_tpl->tpl_vars['event']->value->sesi=='1'){?>Pertama<?php }elseif($_smarty_tpl->tpl_vars['event']->value->sesi=='2'){?>Kedua<?php }elseif($_smarty_tpl->tpl_vars['event']->value->sesi=='3'){?>Ketiga<?php }elseif($_smarty_tpl->tpl_vars['event']->value->sesi=='4'){?>Keempat<?php }elseif($_smarty_tpl->tpl_vars['event']->value->sesi=='5'){?>Keliam<?php }elseif($_smarty_tpl->tpl_vars['event']->value->sesi=='6'){?>Keenam<?php }elseif($_smarty_tpl->tpl_vars['event']->value->sesi=='7'){?>Ketujuh<?php }?></li>
                     <li><label style="width:100px"><strong>Ruang </strong></label>: <?php echo $_smarty_tpl->tpl_vars['event']->value->ruang;?>
</li>
                     <li><label style="width:100px"><strong>Hari / Tanggal </strong></label>: <?php echo $_smarty_tpl->tpl_vars['event']->value->hari;?>
, <?php echo $_smarty_tpl->tpl_vars['event']->value->days;?>
 <?php echo $_smarty_tpl->tpl_vars['event']->value->bulan;?>
 <?php echo $_smarty_tpl->tpl_vars['event']->value->tahun;?>
</li>
                     <li><label style="width:100px"><strong>Waktu </strong></label>: <?php echo $_smarty_tpl->tpl_vars['event']->value->jamMasuk;?>
 - <?php echo $_smarty_tpl->tpl_vars['event']->value->jamKeluar;?>
</li>
                  </ul>
               </div>
               <div class="col-xs-6">
                  <ul class="list-unstyled">
                     <li><label style="width:100px"><strong>Petugas 1</strong></label>: <?php echo $_smarty_tpl->tpl_vars['event']->value->namaPetugas;?>
</li>
                     <li><label style="width:100px"><strong>Petugas 2</strong></label>: <?php echo $_smarty_tpl->tpl_vars['event']->value->namaPetugas2;?>
</li>
                     <li><label style="width:100px"><strong>Petugas 3</strong></label>: <?php echo $_smarty_tpl->tpl_vars['event']->value->namaPetugas3;?>
</li>
                  </ul>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-xs-12">
                  <table class="table table-striped table-bordered table-hover" style="border: 1px solid black">
                     <thead>
                        <tr style="background-color: #3F403E;color: #FFFFFF;">
                           <th>No</th>
                           <th style="width: 138px;">No Registrasi</th>
                           <th class="hidden-480">Nama Mahasiswa</th>
                           <th class="hidden-480" style="width: 150px;text-align:center">Program Studi</th>
                           <th class="hidden-480" style="width: 170px;text-align:center">Tanda Tangan</th>
                        </tr>
                     </thead>
                     <tbody>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['absen']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']++;
?>
                        <tr>
                           <td style="border: 1px double black;padding-top: 20px;"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration'];?>
</td>
                           <td style="border: 1px double black;padding-top: 20px;"><?php echo $_smarty_tpl->tpl_vars['row']->value->nomor;?>
</td>
                           <td class="hidden-480" style="border: 1px double black;padding-top: 20px;"><?php echo $_smarty_tpl->tpl_vars['row']->value->namaPeserta;?>
</td>
                           <td class="hidden-480" style="text-align:center;border: 1px double black;padding-top: 20px;"><?php echo $_smarty_tpl->tpl_vars['row']->value->singkatan;?>
</td>
                           <td class="hidden-480" style="border: 1px double black"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration'];?>
</td>
                        </tr>
                    <?php } ?>
                     </tbody>
                  </table>
               </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-1 invoice-block">
                  <ul class="list-unstyled amounts">
                  <br />
                  <br />
                  <br />
               </div>
               <div class="col-xs-6 invoice-block">
                  <ul class="list-unstyled amounts">
                  <br />
                  <br />
                     <li><strong>Tanggal </strong>______ / _____ / 20____</li>
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                     <li><strong>Jumlah Hadir</strong>___________</li>
                  </ul>
                  <br />
               </div>
			   <div class="col-xs-5 invoice-block">
                  <ul class="list-unstyled amounts">
                  <br />
                  <br />
                     <li><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Pengawas Ujian</strong></li>
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                     <li><strong>(...............................................)</strong></li>
                  </ul>
                  <br />
               </div>
			</div>
            <div class="row">
               <div class="col-xs-12 invoice-block">
                  <br />
                  <a class="btn btn-small blue hidden-print" onclick="javascript:window.print();">Print <i class="icon-print"></i></a>
                  <a href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/exportPeserta/<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
' class='btn btn-small default hidden-print'>Export <i class='icon-download'></i></a>
               </div>
            </div>
         </div><?php }} ?>