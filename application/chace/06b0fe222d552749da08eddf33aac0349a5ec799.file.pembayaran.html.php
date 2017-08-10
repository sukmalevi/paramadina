<?php /* Smarty version Smarty-3.1.14, created on 2017-03-27 20:37:28
         compiled from "application/views/portal/pembayaran.html" */ ?>
<?php /*%%SmartyHeaderCode:7250255425359c14fda2be5-18895442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06b0fe222d552749da08eddf33aac0349a5ec799' => 
    array (
      0 => 'application/views/portal/pembayaran.html',
      1 => 1490234957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7250255425359c14fda2be5-18895442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5359c14fe122e4_44932122',
  'variables' => 
  array (
    'host' => 0,
    'nama' => 0,
    'cmb' => 0,
    'typeBayar' => 0,
    'row' => 0,
    'bankAkun' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359c14fe122e4_44932122')) {function content_5359c14fe122e4_44932122($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/confirmPembayaran/add" enctype="multipart/form-data" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">	
    <div class="portlet box grey">
       <div class="portlet-body form" style="border-top: 1px double #4682B4;">
                     <div class="form-body" style="font-size:bold">
                            <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">DATA DIRI</h3>
                            <div class="form-group">
                               <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Lengkap
                               </label>
                               <div class="col-md-9" >
                                    <label><h4><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</h4></label>
                                    <input value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
" name="kode" hidden>
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="control-label col-md-3" style="text-align:left;width: 220px;">Program Studi
                               </label>
                               <div class="col-md-9" >
                                      <label><h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->progdi;?>
</h4></label>
                               </div>
                            </div>	
                     </div>
                     <div class="form-body">
                            <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Transaksi Pembayaran</h3>	
                            <div class="form-group">
                               <label class="control-label col-md-3" style="text-align:left;width: 220px;">Jumlah Pembayaran
                                <span class="required">*</span>
                               </label>
                               <div class="col-md-5" >
                                      <input type="text" class="biaya form-control" name="totalBiaya" style="text-align: left;" value="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->jenjangType==1){?>300000<?php }else{ ?>500000<?php }?>" required>
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="control-label col-md-3" style="text-align:left;width: 220px;">Tanggal Pembayaran
                                <span class="required">*</span>
                               </label>
                               <div class="col-md-9" >
                                    <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
                                        <input type="text" class="form-control" name="tanggalBayar" style="text-align: left;" required>
                                    </div>
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="control-label col-md-3" style="text-align:left;width: 220px;">Metode Pembayaran
                                <span class="required">*</span>
                               </label>
                               <div class="col-md-3" >
                                      <select  class="form-control" name="typeTrans" id="typeTrans" required>
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
                            <div class="form-group" >
                               <label class="control-label col-md-3" style="text-align:left;width: 220px;">No Kartu ATM
                                <span class="required">*</span>
                               </label>
                               <div class="col-md-5" >
                                      <input type="text" class="form-control" name="noAtmCard" id="noAtmCard" maxlength="16" title="16 digit No. kartu ATM Anda" disabled>												  
                                      <p class="help-block" style="display:none;" id="helpAtm">Masukan 16 digit No. kartu ATM Anda. (Bukan No. Rekening)</p>								  
                                      <p class="help-block" style="display:none;" id="helpAtmno">Lewati jika transaksi pembayaran  Tunai/Tunai Via Bank</p>
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="control-label col-md-3" style="text-align:left;width: 220px;">Rekening Tujuan
                               </label>
                               <div class="col-md-9" >
                                      <label><h4><?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->nama;?>
</h4></label>
                                      <input value="<?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->kode;?>
" name="bankAkun" hidden>
                               </div>
                            </div>	
                            <div class="form-group">
                               <label class="control-label col-md-3" style="text-align:left;width: 220px;">No. Rek. Pengirim
                                <span class="required">*</span>
                               </label>
                               <div class="col-md-5" >
                                            <input type="text" class="form-control" name="no_rek_cmb" required>
                               </div>
                            </div>		
                            <div class="form-group">
                               <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Rek. Pengirim
                                <span class="required">*</span>
                               </label>
                               <div class="col-md-5">
                                            <input type="text" class="form-control" name="nama_rek_cmb" required>
                               </div>
                            </div>										
                            <div class="form-group">
                               <label class="control-label col-md-3" style="text-align:left;width: 220px;">Bukti Pembayaran
                                <span class="required">*</span>
                               </label>
                               <div class="col-md-9">
                                      <input type="file" id="bukti" name="bukti" required>
                                      <p class="help-block">Format : pdf|jpg|png|gif</p>
                               </div>
                            </div>
                            <div class="col-md-12">
                            <ul class="timeline" style="left:0">
                              <li class="timeline-grey">
                                     <div class="timeline-body" style="margin-left:0" class="col-md-9">
                                        <input type="checkbox" name="okekah" value="setuju">Centang Jika Anda Sudah Yakin dengan Transaksi Di atas.
                                     </div>
                              </li>
                            </ul>
                            </div>											
                      <div class="modal-footer">
                             <button type="reset" class="btn default" data-dismiss="modal">Reset</button>
                             <button type="submit" class="btn blue" id="save" value="save" name="opt"> Simpan <i class="icon-save"></i></button>
                      </div>
                    </div>
            </div>
    </div>
</form>
<script>							  
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
	}
});	
</script><?php }} ?>