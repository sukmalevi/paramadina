<?php /* Smarty version Smarty-3.1.14, created on 2016-01-25 15:08:30
         compiled from "application/views/master/formPembayaranAngsur.html" */ ?>
<?php /*%%SmartyHeaderCode:148827472653635ea354f918-09534096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebe3aad6ec443d00f2c8383247ee2803b9209ad2' => 
    array (
      0 => 'application/views/master/formPembayaranAngsur.html',
      1 => 1450234143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148827472653635ea354f918-09534096',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53635ea3614e08_28303932',
  'variables' => 
  array (
    'host' => 0,
    'pembayaran' => 0,
    'periode' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53635ea3614e08_28303932')) {function content_53635ea3614e08_28303932($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mDaftarUlang/edit/do" class="form-horizontal" method="post">
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Kode</label>
            <div class="input-group col-md-6">
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->code;?>
" disabled>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->code;?>
" name="kode" hidden>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->pembayaran;?>
" name="tipePemb" hidden>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->jalur;?>
" name="jalur" hidden>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->kodecil;?>
" name="kodecil" hidden>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->periode_code;?>
" name="periode" hidden>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->pembayaran;?>
" name="tipePemb" hidden>
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
" <?php if ($_smarty_tpl->tpl_vars['pembayaran']->value->periode_code==$_smarty_tpl->tpl_vars['row']->value->kode){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Nama Pembayaran</label>
            <div class="input-group col-md-8">
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->nama;?>
" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Program Studi</label>
            <div class="col-md-8">
                <select class="form-control" id="prodi" name="prodi" disabled>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->prodiTipe;?>
"><?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->prodi;?>
</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label col-md-3">Metod Pembayaran</label>
                    <div class="col-md-8">
                        <select class="form-control" id="pembayaran" name="pembayaran" disabled>
                            <?php if ($_smarty_tpl->tpl_vars['pembayaran']->value->pembayaran=='1'){?>
                            <option value="1">Lunas</option>
                            <?php }else{ ?>
                            <option value="69">Angsuran</option>
                            <?php }?>
                            <option value="1">Lunas</option>
                            <option value="69">Angsuran</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-4">Peringkat</label>
                    <div class="col-md-6">
                        <select class="form-control" id="peringkat" name="peringkat" disabled>
                            <?php if ($_smarty_tpl->tpl_vars['pembayaran']->value->prodiTipe=='1'){?>
                            <option value="1">Pertama</option>
                            <?php }elseif($_smarty_tpl->tpl_vars['pembayaran']->value->prodiTipe=='2'){?>
                            <option value="2">Kedua</option>
                            <?php }else{ ?>
                            <option value="3">Ketiga</option>
                            <?php }?>
                            <option value="1">Pertama</option>
                            <option value="2">Kedua</option>
                            <option value="3">Ketiga</option>
                        </select>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Uang Masuk Rank 1</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->uangMasuk1;?>
" id="um" name="um1">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Uang Masuk Rank 2</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->uangMasuk2;?>
" id="um" name="um2">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Uang Masuk Rank 3</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->uangMasuk3;?>
" id="um" name="um3">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">BPP</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->bpp;?>
" id="bpp" name="bpp">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">SKS</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->sks;?>
" id="sks" name="sks">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">SPP</label>
            <div class="input-group col-md-8">
                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->spp;?>
" id="spp" name="spp">
            </div>
        </div>        
        <div class="form-group">
                <label class="control-label col-md-3">Jumlah SKS</label>
                <div class="input-group col-md-8">
                        <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->jumlahSks;?>
" placeholder="Jumlah SKS Semester 1" id="jumlahSks" name="jumlahSks">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Tempo Angsuran</label>
            <div class="input-group col-md-5">
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->tempoAngsuran;?>
" id="tempo" name="angsurCount" pattern="[0-9]">
            </div>
        </div>
        <div class="form-group">
			<label class="control-label col-md-3">Angsuran 1</label>
			<div class="input-group col-md-4">
				<input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 1" id="angsuran1" name="angsuran1_1" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran1_1;?>
">
			</div>
			<div class="input-group col-md-4">
				<input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 2" id="angsuran1" name="angsuran1_2" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran1_2;?>
">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3"></label>
			<div class="input-group col-md-4">
				<input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 3" id="angsuran1" name="angsuran1_3" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran1_3;?>
">
			</div>
			<div class="input-group col-md-4">
				<input type="text" class="form-control" placeholder="Due Date 1 (DD-MM-YYYY)" id="d_angsur1" name="d_angsur1"  value='<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['pembayaran']->value->due_date1,"%d-%m-%Y");?>
'>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-md-3">Angsuran 2</label>
			<div class="input-group col-md-4">
				<input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 1" id="angsuran2" name="angsuran2_1" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran2_1;?>
">
			</div>
			<div class="input-group col-md-4">
				<input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 2" id="angsuran2" name="angsuran2_2" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran2_2;?>
">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-3"></label>
			<div class="input-group col-md-4">
				<input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 3" id="angsuran2" name="angsuran2_3" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran2_3;?>
">
			</div>
			<div class="input-group col-md-4">
				<input type="text" class="form-control" placeholder="Due Date 2 (DD-MM-YYYY)" id="d_angsur2" name="d_angsur2"  value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['pembayaran']->value->due_date2,'%d-%m-%Y');?>
">
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-md-3">Angsuran 3</label>
			<div class="input-group col-md-4">
				<input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 1" id="angsuran3" name="angsuran3_1" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran3_1;?>
">
			</div>
			<div class="input-group col-md-4">
				<input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 2" id="angsuran3" name="angsuran3_2" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran3_2;?>
">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3"></label>
			<div class="input-group col-md-4">
				<input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 3" id="angsuran3" name="angsuran3_3" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->angsuran3_3;?>
">
			</div>
			<div class="input-group col-md-4">
				<input type="text" class="form-control" placeholder="Due Date 3 (DD-MM-YYYY)" id="d_angsur3" name="d_angsur3"  value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['pembayaran']->value->due_date3,'%d-%m-%Y');?>
">
			</div>
		</div>
        <div class="form-group">
            <label class="control-label col-md-3">Status</label>
            <div class="col-md-6">
                <select class="form-control" id="status" name="status" class="status">
                    <?php if ($_smarty_tpl->tpl_vars['pembayaran']->value->status=='1'){?>
                    <option value="1">AKTIF</option>
                    <?php }else{ ?>
                    <option value="0">TIDAK AKTIF</option>
                    <?php }?>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn blue" id="save" value="edit" name="opt">Save <i class="icon-plus"></i>
                </a>
        </div>
</form>
<script>
$(document).ready(function() {
    $('.biaya').formatCurrency();
    $('.biaya').blur(function() {
        $('.biaya').formatCurrency();
    });
});
</script>
<?php }} ?>