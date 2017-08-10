<?php /* Smarty version Smarty-3.1.14, created on 2016-04-26 23:26:43
         compiled from "application/views/admisi/kontenPembayaranParalel.html" */ ?>
<?php /*%%SmartyHeaderCode:99700972571f96c349a3d3-18773144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63721f558ee1b98e5310b7fe046a86ca1273ae6d' => 
    array (
      0 => 'application/views/admisi/kontenPembayaranParalel.html',
      1 => 1461654202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99700972571f96c349a3d3-18773144',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_571f96c36214d5_87046928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571f96c36214d5_87046928')) {function content_571f96c36214d5_87046928($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<div class="col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet box grey">
        <div class="portlet-title">
            <div class="caption">Setting Pembayaran Daftar Ulang Kelas Malam</div>
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
                        <th>Biaya SKS</th>
                        <th>Total SPP</th>
                        <th>Tempo Angsuran</th>
                        <th width="12%">Edit</th>
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
                        <td>Rp <?php if ($_smarty_tpl->tpl_vars['row']->value->uangMasuk=='0'){?> - <?php }else{ ?>
                            <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->uangMasuk,0,",",".");?>
<br>
                            <?php }?>
                        </td>
                        <td>SKS : <?php echo $_smarty_tpl->tpl_vars['row']->value->jumlahSks;?>
 X <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->biayaPerSks,0,",",".");?>
<br>
                            Total Biaya : <?php echo number_format(($_smarty_tpl->tpl_vars['row']->value->jumlahSks*$_smarty_tpl->tpl_vars['row']->value->biayaPerSks),0,",",".");?>

                        </td>
                        <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->spp,0,",",".");?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tempoAngsuran;?>
</td>
                        <td>
                            <a class="detil btn btn-sm dark" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/settingUangMasuk/detil/<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value->periode_kode;?>
" >Detil</a>
                            <a class="editer btn btn-sm blue" href="#formEdit" data-toggle="modal" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
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
                                <select  class="form-control" name="jalur">
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
                <h4 class="modal-title">Tambah Pembayaran Daftar Ulang Kelas Malam</h4>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("admisi/formAddPembayaran.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   
        </div>
    </div>
        <!-- /.modal-content -->
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
admisi/settingUangMasuk/edit", {
            'opt': opt,
            'val': val
        }, function(resp) {
            $('#form').html(resp);
        });
    });
}); 

$(".detil").each(function(i, v) {
    $(this).click(function() {
        opt = $(this).attr("name");
        val = $(this).attr("value");
        $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/settingUangMasuk/detil", {
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