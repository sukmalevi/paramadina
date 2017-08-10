<?php /* Smarty version Smarty-3.1.14, created on 2015-12-21 10:40:05
         compiled from "application/views/master/kontenPembayaran.html" */ ?>
<?php /*%%SmartyHeaderCode:176245821353608074d59c61-50136129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa1b6a5231d746f7c18f966b613dd19d7ea3a046' => 
    array (
      0 => 'application/views/master/kontenPembayaran.html',
      1 => 1450233862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176245821353608074d59c61-50136129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53608074f2b045_44624404',
  'variables' => 
  array (
    'host' => 0,
    'sql' => 0,
    'row' => 0,
    'total' => 0,
    'total2' => 0,
    'total3' => 0,
    'sql2' => 0,
    'periode' => 0,
    'jalur' => 0,
    'prodi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53608074f2b045_44624404')) {function content_53608074f2b045_44624404($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<div class="col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet box purple">
        <div class="portlet-title">
            <div class="caption"><i class="icon-user"></i>Pembayaran Daftar Ulang Lunas</div>
            <div class="actions">
                <a class="btn blue" href="#add" data-toggle="modal"><i class="icon-pencil"></i> Add</a>
                <a class="btn green" href="#copy" data-toggle="modal"><i class="icon-pencil"></i> Copy</a>
            </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <!-- <th>Peringkat</th> -->
                        <th>Uang Masuk/Rank</th>
                        <th>BPP</th>
                        <th>SKS</th>
                        <th>SPP</th>
                        <th>TOTAL/Rank</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <tr>
                        <td><b><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</b>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->prodi;?>
</td>
                       <!--  <td style="text-align:center">
                            <?php if ($_smarty_tpl->tpl_vars['row']->value->peringkat=='1'){?>Pertama <?php }elseif($_smarty_tpl->tpl_vars['row']->value->peringkat=='2'){?>Kedua <?php }elseif($_smarty_tpl->tpl_vars['row']->value->peringkat=='3'){?>Ketiga <?php }else{ ?>-<?php }?>
                        </td> -->
                        <td>Rp <?php if ($_smarty_tpl->tpl_vars['row']->value->uangMasuk1=='0'){?> - <?php }else{ ?>
                            <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->uangMasuk1,0,",",".");?>
<br>
                            Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->uangMasuk2,0,",",".");?>
<br>
                            Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->uangMasuk3,0,",",".");?>

                            <?php }?>
                        </td>
                        <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->bpp,0,",",".");?>
</td>
                        <td>Rp <?php if ($_smarty_tpl->tpl_vars['row']->value->sks=='0'){?> - <?php }else{ ?><?php echo number_format($_smarty_tpl->tpl_vars['row']->value->sks,0,",",".");?>
<?php }?></td>
                        <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->spp,0,",",".");?>
</td>
                        <td>
                            <b>Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->total1,0,",",".");?>
</b><br>
                            <b>Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->total2,0,",",".");?>
</b><br>
                            <b>Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->total3,0,",",".");?>
</b>
                        </td>
                        <td>
                            <a class="editer" href="#formEdit" data-toggle="modal" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value->periode_kode;?>
">Edit</a>
                        </td>
                        <!-- <td>
								<?php if ($_smarty_tpl->tpl_vars['row']->value->status=='1'){?>
									<a class="nonaktif" href="#" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">AKTIF</a>
								<?php }else{ ?>
									<a class="aktif" href="#" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">NON AKTIF</a>
								<?php }?></td>
                              <td><a class="editer" href="#formEdit" data-toggle="modal" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">Edit</a></td>
                              <td><a class="deleter" href="#verifikasi" data-toggle="modal" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">Delete</a></td>
                               -->
                    </tr>
                    <?php } ?>
                    <!-- <tr>
								<table style="border : 1px solid #DDD;width:100%;height: 45px;">
									<thead>
									<tr>
										<th style="padding-left: 14px;">TOTAL Peringkat 1</th>
										<th style="text-align:right;padding-right: 14px;">Rp<?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,",",".");?>
</th>
									</tr>
									</thead>
								</table>
							</tr>
							<tr>
								<table style="border : 1px solid #DDD;width:100%;height: 45px;">
									<thead>
									<tr>
										<th style="padding-left: 14px;">TOTAL Peringkat 2</th>
										<th style="text-align:right;padding-right: 14px;">Rp<?php echo number_format($_smarty_tpl->tpl_vars['total2']->value,2,",",".");?>
</th>
									</tr>
									</thead>
								</table>
							</tr>
							<tr>
								<table style="border : 1px solid #DDD;width:100%;height: 45px;">
									<thead>
									<tr>
										<th style="padding-left: 14px;">TOTAL Peringkat 3</th>
										<th style="text-align:right;padding-right: 14px;">Rp<?php echo number_format($_smarty_tpl->tpl_vars['total3']->value,2,",",".");?>
</th>
									</tr>
									</thead>
								</table>
							</tr> -->
                </tbody>
            </table>
        </div>
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->

    <div class="portlet box red">
        <div class="portlet-title">
            <div class="caption"><i class="icon-user"></i>Pembayaran Daftar Ulang Angsuran</div>
            <div class="actions">
                <!-- <a class="btn blue" href="#addKredit" data-toggle="modal"><i class="icon-pencil"></i> Add</a> -->
            </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <!-- <th>Peringkat</th> -->
                        <th>Uang Masuk/Rank</th>
                        <th>BPP</th>
                        <th>SKS</th>
                        <th>SPP</th>
                        <th>TOTAL/Rank</th>
                        <th>Cicilan</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <tr>
                        <td><b><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</b>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->prodi;?>
</td>
                        <!-- <td>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value->peringkat=='1'){?>Pertama <?php }elseif($_smarty_tpl->tpl_vars['row']->value->peringkat=='2'){?>Kedua <?php }elseif($_smarty_tpl->tpl_vars['row']->value->peringkat=='3'){?>Ketiga <?php }else{ ?>-<?php }?>
                        </td> -->
                        <td>Rp <?php if ($_smarty_tpl->tpl_vars['row']->value->uangMasuk1=='0'){?> - <?php }else{ ?>
                            <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->uangMasuk1,0,",",".");?>
<br>
                            Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->uangMasuk2,0,",",".");?>
<br>
                            Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->uangMasuk3,0,",",".");?>

                            <?php }?>
                        </td>
                        <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->bpp,0,",",".");?>
</td>
                        <td>Rp <?php if ($_smarty_tpl->tpl_vars['row']->value->sks=='0'){?> - <?php }else{ ?><?php echo number_format($_smarty_tpl->tpl_vars['row']->value->sks,0,",",".");?>
<?php }?></td>
                        <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->spp,0,",",".");?>
</td>
                        <td>							
                            <b>Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->total1,0,",",".");?>
</b><br>
                            <b>Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->total2,0,",",".");?>
</b><br>
                            <b>Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->total3,0,",",".");?>
</b>
                        </td>
                        <td>							
                            <?php echo substr($_smarty_tpl->tpl_vars['row']->value->angsuran1_1,0,1);?>
 jt, <?php echo substr($_smarty_tpl->tpl_vars['row']->value->angsuran2_1,0,1);?>
 jt, <?php echo substr($_smarty_tpl->tpl_vars['row']->value->angsuran3_1,0,1);?>
 jt<br>
                            <?php echo substr($_smarty_tpl->tpl_vars['row']->value->angsuran1_2,0,1);?>
 jt, <?php echo substr($_smarty_tpl->tpl_vars['row']->value->angsuran2_2,0,1);?>
 jt, <?php echo substr($_smarty_tpl->tpl_vars['row']->value->angsuran3_2,0,1);?>
 jt<br>
                            <?php echo substr($_smarty_tpl->tpl_vars['row']->value->angsuran1_3,0,1);?>
 jt, <?php echo substr($_smarty_tpl->tpl_vars['row']->value->angsuran2_3,0,1);?>
 jt, <?php echo substr($_smarty_tpl->tpl_vars['row']->value->angsuran3_3,0,1);?>
 jt
                        </td>
                        <td>
                            <a class="editer" href="#formEdit" data-toggle="modal" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->code;?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value->periode_kode;?>
">Edit</a>
                        </td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="copy" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-wide">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Copy Pembayaran Daftar Ulang</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mDaftarUlang/copy" class="form-horizontal" method="post">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Periode Refernsi</label>
                            <div class="input-group col-md-8">
                               <select class='form-control' name="periode_ref" id="periode">
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Periode Baru</label>
                            <div class="input-group col-md-8">
                               <select class='form-control' name="periode_new" id="periode">
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jalur Seleksi</label>
                            <div class="input-group col-md-8">
                                <select  class="form-control" name="jalur" id="jalur">
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jalur']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>                    
                    <div class="modal-footer">
                        <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn blue" id="save" value="save" name="opt">Copy <i class="icon-plus"></i>
                            </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <!-- /.modal-content -->
</div>
<div class="modal fade" id="add" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-wide">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Tambah Pembayaran Daftar Ulang</h4>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->getSubTemplate ("master/formAddPembayaran.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
        </div>
    </div>
        <!-- /.modal-content -->
</div>
</div>
</div>
<div class="modal fade" id="addKredit" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-wide">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Tambah Pembayaran Daftar Ulang </h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mDaftarUlang/add" class="form-horizontal" method="post">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Kode</label>
                            <div class="input-group col-md-6">
                                <input type="text" class="form-control" placeholder="Kode[Automatic]" id="kode" name="kode" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Pembayaran</label>
                            <div class="input-group col-md-8">
                                <input type="text" class="form-control" placeholder="Nama Pembayaran" id="nama" name="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Program Studi</label>
                            <div class="col-md-8">
                                <select class="form-control" id="prodi" name="prodi">
                                    <option>-- Pilih Kategori Prodi</option>
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-6">Metod Pembayaran</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="pembayaran" name="pembayaran">
                                            <option value="1">Lunas</option>
                                            <option value="0">Angsuran</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Peringkat</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="peringkat" name="peringkat">
                                            <option value="1">Pertama</option>
                                            <option value="2">Kedua</option>
                                            <option value="3">Ketiga</option>
                                            <option value="0">Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tempo Angsuran</label>
                            <div class="input-group col-md-5">
                                <input type="number" class="form-control" placeholder="Tempo Ansuran " id="angsur" name="angsur" pattern="[0-9]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Angsuran 1</label>
                            <div class="input-group col-md-8">
                                <input type="text" class="biaya form-control" placeholder="Jumlah Angsuran Pertama(Rp.)" id="angsuran1" name="angsuran1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Angsuran 2</label>
                            <div class="input-group col-md-8">
                                <input type="text" class="biaya form-control" placeholder="Jumlah Angsuran Kedua(Rp.)" id="angsuran2" name="angsuran2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Angsuran 3</label>
                            <div class="input-group col-md-8">
                                <input type="text" class="biaya form-control" placeholder="Jumlah Angsuran Ketiga(Rp.)" id="angsuran3" name="angsuran3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Total Angsuran</label>
                            <div class="input-group col-md-8">
                                <input type="text" class="biaya form-control" placeholder="Total Angsuran(Rp.)" id="total" name="total">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Uang Masuk</label>
                            <div class="input-group col-md-8">
                                <input type="text" class="biaya form-control" placeholder="Uang Masuk - Angsuran Pertama(Rp.)" id="um" name="um">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">BPP</label>
                            <div class="input-group col-md-8">
                                <input type="text" class="biaya form-control" placeholder="Biaya BPP (Rp.)" id="bpp" name="bpp">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">SKS</label>
                            <div class="input-group col-md-8">
                                <input type="text" class="biaya form-control" placeholder="Biaya SKS (Rp.)" id="sks" name="sks">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">SPP</label>
                            <div class="input-group col-md-8">
                                <input type="text" class="biaya form-control" placeholder="Biaya SPP (Rp.)" id="spp" name="spp">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Status</label>
                            <div class="col-md-6">
                                <select class="form-control" id="status" name="status" class="status">
                                    <option value="1">AKTIF</option>
                                    <option value="0">TIDAK AKTIF</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn blue" id="save" value="save" name="opt">Tambah <i class="icon-plus"></i>
                                </a>
                        </div>
                </form>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
</div>
<div class="modal fade" id="formEdit" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-wide">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Edit Periode Seleksi</h4>
            </div>
            <div class="modal-body">
                <div id="form">
                    </id>
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
$(document).ready(function() {
    $('.biaya').blur(function() {
        $('.biaya').formatCurrency();
    });
}); 

$(".editer").each(function(i, v) {
    $(this).click(function() {
        opt = $(this).attr("name");
        val = $(this).attr("value");
        $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mDaftarUlang/edit", {
            'opt': opt,
            'val': val
        }, function(resp) {
            $('#form').html(resp);
        });
    });
}); 


$(".deleter").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mDaftarUlang/delete ", {'opt':opt, 'val':val},function(resp){
			$('#verifikasiRuang').html(resp);
		});
	});
});


$(".nonaktif ").each(function (i, v){
	$(this).click( function() {	
			id = "nonaktif ";
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mDaftarUlang/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
			location.reload();
		});
	});
});


$(".aktif ").each(function (i, v){
	$(this).click( function() {	
			id = "aktif ";
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post(" <?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mDaftarUlang/delete ", {'opt':opt, 'val':val, 'id':id},function(resp){
			location.reload();
		});
	});
});

</script>
<?php }} ?>