<?php /* Smarty version Smarty-3.1.14, created on 2016-07-14 14:39:41
         compiled from "application/views/admisi/kontenPembayaranS2.html" */ ?>
<?php /*%%SmartyHeaderCode:2080641101578741bd7c4147-60223137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5928bd608f88a161b019c5c15939c9aeb4e2e2a' => 
    array (
      0 => 'application/views/admisi/kontenPembayaranS2.html',
      1 => 1467180693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2080641101578741bd7c4147-60223137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'sql' => 0,
    'row' => 0,
    'periode' => 0,
    'jalur' => 0,
    'prodi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_578741bd975848_60142786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578741bd975848_60142786')) {function content_578741bd975848_60142786($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<div class="col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet box purple">
        <div class="portlet-title">
            <div class="caption"><i class="icon-user"></i>Pembayaran Metode Lunas</div>
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
                        <th>Uang Masuk</th>
                        <th>SKS</th>
                        <th>SPP</th>
                        <th>TOTAL</th>
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
                        <td><b><?php echo $_smarty_tpl->tpl_vars['row']->value->description;?>
</b></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->prodi;?>
</td>
                        <td>
                            Total : Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->uangMasuk,0,",",".");?>
<br>
                            Semester 1 : Rp <?php echo number_format(($_smarty_tpl->tpl_vars['row']->value->uangMasuk/$_smarty_tpl->tpl_vars['row']->value->jumlahSemester),0,",",".");?>

                        </td>
                        <td>Rp <?php if ($_smarty_tpl->tpl_vars['row']->value->biayaSks=='0'){?> - <?php }else{ ?><?php echo number_format($_smarty_tpl->tpl_vars['row']->value->biayaSks,0,",",".");?>
<?php }?></td>
                        <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->biayaSpp,0,",",".");?>
</td>
                        <td>Total Biaya Semester 1 : <br> Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->totalBiaya,0,",",".");?>
</td>
                        <td>
                            <a class="editer" href="#formEdit" data-toggle="modal" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">Edit</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->

    <div class="portlet box red">
        <div class="portlet-title">
            <div class="caption"><i class="icon-user"></i>Pembayaran Metode Angsuran</div>
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
                        <th>Detil Biaya</th>
                        <th>Angsuran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <tr>
                        <td><b><?php echo $_smarty_tpl->tpl_vars['row']->value->description;?>
</b></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->prodi;?>
</td>
                        <td>
                            Uang Masuk : Rp <?php echo number_format(($_smarty_tpl->tpl_vars['row']->value->uangMasuk/$_smarty_tpl->tpl_vars['row']->value->jumlahSemester),0,",",".");?>
<br>
                            Biaya SPP : <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->biayaSpp,0,",",".");?>
<br>
                            Biaya SKS : <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->biayaSks,0,",",".");?>

                        </td>
                        <td>
                            Angsuran 1 : <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->biayaSks,0,",",".");?>
 <br>
                            Angsuran 2 : <?php echo number_format((($_smarty_tpl->tpl_vars['row']->value->uangMasuk/$_smarty_tpl->tpl_vars['row']->value->jumlahSemester)+$_smarty_tpl->tpl_vars['row']->value->biayaSpp),0,",",".");?>

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
                <?php echo $_smarty_tpl->getSubTemplate ("admisi/formAddPembayaranS2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
admisi/settingUMS2/edit", {
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