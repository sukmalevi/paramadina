<?php /* Smarty version Smarty-3.1.14, created on 2016-04-26 23:56:53
         compiled from "application/views/admisi/formEditUMKL.html" */ ?>
<?php /*%%SmartyHeaderCode:726956352571f991d096316-05476409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afffefa5beed05ee3dff04e96fd2852954d8d056' => 
    array (
      0 => 'application/views/admisi/formEditUMKL.html',
      1 => 1461689805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '726956352571f991d096316-05476409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_571f991d1a3174_32890009',
  'variables' => 
  array (
    'host' => 0,
    'biaya' => 0,
    'periode' => 0,
    'row' => 0,
    'pembeda' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571f991d1a3174_32890009')) {function content_571f991d1a3174_32890009($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/settingUangMasuk/edit/do" class="form-horizontal" method="post">
    <div class="form-body">
        <div class="form-data">
            <div class="form-group">
                <label class="control-label col-md-3">Kode</label>
                <div class="input-group col-md-6">
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value['code'];?>
" disabled>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value['code'];?>
" name="kode" hidden>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value['periode_kode'];?>
" name="periode" hidden>
                    <input type="text" value="KP" name="tipePemb" hidden>
                    <input id="tmpE" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value['banyakPilihanUM'];?>
" name="tmpE" hidden="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Periode</label>
                <div class="col-md-8">
                    <select class="form-control" id="periode" disabled>
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
" <?php if ($_smarty_tpl->tpl_vars['biaya']->value['periode_kode']==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Nama Pembayaran</label>
                <div class="input-group col-md-8">
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value['nama'];?>
" id="nama" name="nama">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Program Studi</label>
                <div class="col-md-8">
                    <select class="form-control" id="prodi" name="prodi" disabled>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value['prodiTipe'];?>
"><?php echo $_smarty_tpl->tpl_vars['biaya']->value['prodi'];?>
</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-md-3">Jenjang Masuk</label>
                    <div class="col-md-7">
                        <select class="form-control" id="grade" name="grade" disabled>
                            <option>-- Pilih Jenjang --</option>
                            <option value="SMA" <?php if ($_smarty_tpl->tpl_vars['biaya']->value['gradeMasuk']=='SMA'){?>selected<?php }?>>SMA</option>
                            <option value="D3" <?php if ($_smarty_tpl->tpl_vars['biaya']->value['gradeMasuk']=='D3'){?>selected<?php }?>>D3</option>
                        </select>
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3">Biaya Uang Masuk</label>
                <div class="input-group col-md-8">
                    <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value['uangMasuk'];?>
" id="um" name="um">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Jumlah SKS</label>
                <div class="input-group col-md-8">
                    <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value['jumlahSks'];?>
" id="um" name="jumlah_sks">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Biaya Per SKS</label>
                <div class="input-group col-md-8">
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value['biayaPerSks'];?>
"  name="biaya_sks">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Biaya SPP</label>
                <div class="input-group col-md-8">
                    <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value['spp'];?>
" id="spp" name="spp_total">
                </div>
            </div>        
            <div class="form-group">
                <label class="control-label col-md-3">Jumlah Angsuran</label>
                <div class="input-group col-md-8">
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value['tempoAngsuran'];?>
" name="jml_angsuran">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Tanggal Angsuran Pertama</label>
                <div class="input-group col-md-8">
                    <input type="text" class="form-control" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['biaya']->value['tglAwalAngsuran'],'%d-%m-%Y');?>
" id="spp" name="tgl_awl_angsur">
                    <span class="help-block">Format : 23-12-2016</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Jumlah Pilihan Biaya Daftar Ulang</label>
                <div class="input-group col-md-8">
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['biaya']->value['banyakPilihanUM'];?>
" id="pilihanBiaya" name="jml_pil">
                </div>
            </div>

            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pembeda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
            <div class="form-group row-<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
">
                <label class="control-label col-md-2">Biaya UM  <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
 </label>
                <div class="input-group col-md-4">
                    <input type="text" class=" form-control" name="biaya-<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pilihan'];?>
">
                </div>
                <label class="control-label col-md-2">Biaya Pembeda  <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
 </label>
                <div class="input-group col-md-4">
                    <input type="text" class=" form-control" name="biayabeda-<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pembeda'];?>
">
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn blue" id="save" value="edit" name="opt">Save</buton>
        </div>
    </div>
</form>

<script>
$(document).ready(function()
	{
    $('.biaya').formatCurrency();
        $('.biaya').blur(function()
        {
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
                      '<input type="text" class=" form-control" name="biaya-'+ $i +'"  placeholder="">'+
                  '</div>'+
                  '<label class="control-label col-md-2">Biaya Pembeda '+ $i +'</label>'+
                  '<div class="input-group col-md-4">'+
                      '<input type="text" class=" form-control" name="biayabeda-'+ $i +'"  placeholder="">'+
                  '</div>'+
              '</div>');
    }
}
</script><?php }} ?>