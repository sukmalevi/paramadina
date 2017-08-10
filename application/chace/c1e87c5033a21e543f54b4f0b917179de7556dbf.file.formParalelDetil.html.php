<?php /* Smarty version Smarty-3.1.14, created on 2016-04-28 08:44:24
         compiled from "application/views/admisi/formParalelDetil.html" */ ?>
<?php /*%%SmartyHeaderCode:1754790677571f97f71a6875-50734683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1e87c5033a21e543f54b4f0b917179de7556dbf' => 
    array (
      0 => 'application/views/admisi/formParalelDetil.html',
      1 => 1461688827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1754790677571f97f71a6875-50734683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_571f97f71b65f8_21876986',
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571f97f71b65f8_21876986')) {function content_571f97f71b65f8_21876986($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>

<div class="form-data">
    <input id="tmpE" value="" name="tmpE" hidden="">
    <div class="form-group">
            <label class="control-label col-md-3">Jenjang Masuk</label>
            <div class="col-md-7">
                    <select class="form-control" id="grade" name="grade" required>
                            <option>-- Pilih Jenjang --</option>
                            <option value="SMA">SMA</option>
                            <option value="D3">D3</option>
                    </select>
            </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Biaya Uang Masuk</label>
        <div class="input-group col-md-8">
            <input type="text" class="biaya form-control" placeholder="Uang Masuk (Rp.)" id="um" name="um">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Jumlah SKS</label>
        <div class="input-group col-md-8">
            <input type="text" class="biaya form-control" placeholder="Jumlah SKS Kelas Malam" id="um" name="jumlah_sks">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Biaya Per SKS</label>
        <div class="input-group col-md-8">
            <input type="text" class="form-control" placeholder="Biaya Per SKS (Rp.)" id="jumlahSks" name="biaya_sks">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Biaya SPP</label>
        <div class="input-group col-md-8">
            <input type="text" class="biaya form-control" placeholder="Biaya SPP (Rp.)" id="spp" name="spp_total">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Jumlah Angsuran</label>
        <div class="input-group col-md-8">
            <input type="text" class="form-control" placeholder="Banyak Angsuran Kelas Malam" id="spp" name="jml_angsuran">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Tanggal Angsuran Pertama</label>
        <div class="input-group col-md-8">
            <input type="text" class="form-control" placeholder="DD-MM-YYYY" id="spp" name="tgl_awl_angsur">
            <span class="help-block">Format : 23-12-2016</span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Jumlah Pilihan Biaya Daftar Ulang</label>
        <div class="input-group col-md-8">
            <input type="text" class="form-control" placeholder="Jumlah pilihan biaya uang masuk" id="pilihanBiaya" name="jml_pil">
        </div>
    </div>
</div>                   
<div class="modal-footer">
    <button type="button" class="btn default" data-dismiss="modal">Keluar</button>
    <button type="submit" class="btn blue" id="save" value="save" name="opt">Simpan <i class="icon-plus"></i></button>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $('.biaya').blur(function() {
        $('.biaya').formatCurrency();
    });
}); 

$('#pilihanBiaya').change(function(){
   dinamycForm();
});

function dinamycForm(){
    var tempo = $('#pilihanBiaya').val();   
    var tmpE = $('#tmpE').val();
    $('#tmpE').val(tempo); 
    for($i = 1;$i <= tmpE;$i++){
         $('.row-'+$i).remove();
    }   
   
    for($i = 1;$i <= tempo;$i++){
         $('.form-data').append(
              '<div class="form-group row-'+ $i +' ">'+
                  '<label class="control-label col-md-2">Biaya UM '+ $i +'</label>'+
                  '<div class="input-group col-md-4">'+
                      '<input type="text" class="form-control" name="biaya-'+ $i +'"  placeholder="">'+
                  '</div>'+
                  '<label class="control-label col-md-2">Biaya Pembeda '+ $i +'</label>'+
                  '<div class="input-group col-md-4">'+
                      '<input type="text" class="form-control" name="biayabeda-'+ $i +'"  placeholder="">'+
                  '</div>'+
              '</div>');
    }
}
</script><?php }} ?>