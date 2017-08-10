<?php /* Smarty version Smarty-3.1.14, created on 2016-11-29 18:37:23
         compiled from "application/views/portal/daftarUlang.html" */ ?>
<?php /*%%SmartyHeaderCode:1785292265360808f32b151-87848616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7949c966422aa3ed326245f73325d5f281468d00' => 
    array (
      0 => 'application/views/portal/daftarUlang.html',
      1 => 1478576013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1785292265360808f32b151-87848616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5360808f3b0261_98215155',
  'variables' => 
  array (
    'host' => 0,
    'prof' => 0,
    'jalur' => 0,
    'saudara' => 0,
    'method' => 0,
    'prodi' => 0,
    'typeBayar' => 0,
    'row' => 0,
    'bankAkun' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5360808f3b0261_98215155')) {function content_5360808f3b0261_98215155($_smarty_tpl) {?><!--<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>-->
<!-- BEGIN FORM-->
<div class="row">
    <div class="col-md-12" style="padding-bottom: 15px; padding-top: 5px; padding-right: 0px;">

    </div>
</div>
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/confirmDaftarUlang/add" enctype="multipart/form-data" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">
    <div class="portlet box grey">
        <div class="portlet-body form" style="border-top: 1px double #4682B4;">
            <div class="form-body" style="font-size:bold">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">DATA DIRI</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Lengkap
                    </label>
                    <div class="col-md-10">
                        <label>
                            <h5><?php echo $_smarty_tpl->tpl_vars['prof']->value->nama_cm;?>
</h5>
                        </label>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['prof']->value->kode_smb;?>
" name="kode" hidden>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['prof']->value->kode_jalur;?>
" name="kode_jalur" hidden>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">No Registrasi
                    </label>
                    <div class="col-md-10">
                        <label>
                            <h5><?php echo $_smarty_tpl->tpl_vars['prof']->value->no_smb;?>
</h5>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Program Studi
                    </label>
                    <div class="col-md-10">
                        <label>
                            <h5><?php echo $_smarty_tpl->tpl_vars['prof']->value->progdi;?>
</h5>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jalur Masuk
                    </label>
                    <div class="col-md-10">
                        <label>
                            <h5><?php echo $_smarty_tpl->tpl_vars['prof']->value->n_jalur;?>
</h5>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Ranking Masuk
                    </label>
                    <div class="col-md-10">
                        <label>
                            <h5><?php if ($_smarty_tpl->tpl_vars['prof']->value->stsResultGrade=='1'){?>Pertama<?php }elseif($_smarty_tpl->tpl_vars['prof']->value->stsResultGrade=='2'){?>Kedua<?php }else{ ?>Ketiga<?php }?></h5>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Transaksi Pembayaran</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Metode Pembayaran
                    </label>
                    <div class="col-md-3" >
                        <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='KP'){?>
                        <div class="checkbox-list">
                            <label>
                                <?php if ($_smarty_tpl->tpl_vars['saudara']->value>0){?>
                                <input type="checkbox" name="yes" checked="true" disabled>Memiliki Saudara Kandung
                                <input name="sau" id="sau" value="1" hidden><?php }elseif($_smarty_tpl->tpl_vars['saudara']->value==0){?>
                                <input type="checkbox" name="no" disabled>Memiliki Saudara Kandung
                                <input name="sau" id="sau" value="0" hidden><?php }?>
                            </label>
                        </div>
                        <?php }?> 
						<?php if ($_smarty_tpl->tpl_vars['method']->value=='1'){?>
                        <div class="radio-list">
                            <label>
                                <input type="radio" name="metodBayar" class="mBayar" value="1" checked="true">Pembayaran Lunas
                            </label>
                            <?php if ($_smarty_tpl->tpl_vars['prodi']->value!='1204'){?> <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='JP'){?> 
                            <label>
                                <input type="radio" name="metodBayar" class="mBayar" value="69" >Pembayaran Angsuran
                            </label>
                            <?php }?><?php }?>
                        </div>
                        <?php }else{ ?>
                        <div class="radio-list">
                            <label>
                                <input type="radio" name="metodBayar" class="mBayar" value="1" >Pembayaran Lunas
                            </label>
                            <?php if ($_smarty_tpl->tpl_vars['prodi']->value!='1204'){?> <?php if ($_smarty_tpl->tpl_vars['jalur']->value!='JP'){?> 
                            <label>
                                <input type="radio" name="metodBayar" class="mBayar" value="69" checked="true" >Pembayaran Angsuran
                            </label>
                            <?php }?><?php }?>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <div class="detailBiaya ">
                </div>		
                <?php if ($_smarty_tpl->tpl_vars['jalur']->value=='01'||$_smarty_tpl->tpl_vars['jalur']->value=='02'||$_smarty_tpl->tpl_vars['jalur']->value=='KP'||$_smarty_tpl->tpl_vars['jalur']->value=='JP'){?>
                <div class="form-group">
                    <label class="control-label col-md-2">Tanggal Pembayaran
                    </label>
                    <div class="col-md-9" >
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
                            <input type="text" class="form-control" name="tanggalBayar" placeholder="" style="text-align: left;" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jenis Pembayaran
                    </label>
                    <div class="col-md-9" >
                        <select class="form-control" name="typeTrans" id="typeTrans" required>
                            <option>Pilih Tipe Pembayaran..</option>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typeBayar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                    <label class="control-label col-md-2">No Kartu ATM
                    </label>
                    <div class="col-md-9" >
                        <input type="text" class="form-control" name="noAtmCard" id="noAtmCard"  disabled required>
                        <p class="help-block" style="display:none;" id="helpAtm">Masukan 16 digit No. kartu ATM Anda</p>
                        <p class="help-block" style="display:none;" id="helpAtmno">Lewati jika transaksi pembayaran Tunai/Tunai Via Bank</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Rekening Tujuan
                    </label>
                    <div class="col-md-9">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->nama;?>
</h4>
                        </label>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->kode;?>
" name="bankAkun" hidden>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">No. Rek. Pengirim
                    </label>
                    <div class="col-md-9" >
                        <input type="number" class="form-control" name="no_rek_cmb" id="no_rek_cmb" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Rek. Pengirim
                    </label>
                    <div class="col-md-9" >
                        <input type="text" class="form-control" name="nama_rek_cmb" id="nama_rek_cmb" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Bukti Pembayaran
                    </label>
                    <div class="col-md-9" >
                        <input type="file" id="bukti" name="bukti" required>
                        <p class="help-block">Format : pdf|jpg|png|gif</p>
                    </div>
                </div>
				<?php }?>
                <div class="modal-footer">
                    <button type="button" class="btn dark" data-dismiss="modal" onClick="window.history.back();"><i class=" icon-chevron-left"></i> Back</button>
                    <button type="submit" class="btn green" id="save" value="save" name="opt">Save <i class="icon-ok"></i>
                </button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>

$(document).ready(function() {
    opt = $('.mBayar').attr("name");
    val = $('.mBayar').attr("value");
    sau = $('#sau').attr("value");

    $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/detailPayment", {'opt':opt, 'val':val, 'sau':sau},function(resp){
            $('.detailBiaya').html(resp);
    });
});
$('.mBayar').click( function() {	
    opt = $(this).attr("name");
    val = $(this).attr("value");
    sau = $('#sau').attr("value");

    $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/detailPayment", {'opt':opt, 'val':val, 'sau':sau},function(resp){
            $('.detailBiaya').html(resp);
    });



});
	



$("#typeTrans").change(function(){	
	val = $(this).val();
        
	//alert (val);
	if (val == '04.2' || val == '04.4'){
		document.getElementById('helpAtmno').style.display = 'none';
		document.getElementById('helpAtm').style.display = 'block';
		$("#noAtmCard").prop('disabled', false);
	}else{
		document.getElementById('helpAtmno').style.display = 'block';
		document.getElementById('helpAtm').style.display = 'none';
		$("#noAtmCard").prop('disabled', true);
		<!-- $("#noAtmCard").prop('maxlength', '16'); -->
		
	}
	if (val == '04.3'){
		$("#no_rek_cmb").prop('required', false);
		$("#nama_rek_cmb").prop('required', false);
		$("#bukti").prop('required', false);
	}else{
		$("#no_rek_cmb").prop('required', true);
		$("#nama_rek_cmb").prop('required', true);
		$("#bukti").prop('required', true);
	}
});	

</script>
<?php }} ?>