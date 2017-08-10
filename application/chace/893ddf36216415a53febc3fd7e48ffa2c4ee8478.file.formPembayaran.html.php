<?php /* Smarty version Smarty-3.1.14, created on 2014-01-29 16:00:49
         compiled from "application\views\master\formPembayaran.html" */ ?>
<?php /*%%SmartyHeaderCode:1570052e7296b8311a8-15039858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '893ddf36216415a53febc3fd7e48ffa2c4ee8478' => 
    array (
      0 => 'application\\views\\master\\formPembayaran.html',
      1 => 1390985661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1570052e7296b8311a8-15039858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e7296b927793_35996603',
  'variables' => 
  array (
    'host' => 0,
    'pembayaran' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e7296b927793_35996603')) {function content_52e7296b927793_35996603($_smarty_tpl) {?>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency.all.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
                                <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/mDaftarUlang/edit/do" class="form-horizontal" method="post">
									<div class="form-body">											  
											  <div class="form-group">
												 <label  class="control-label col-md-3">Kode</label>
												 <div class="input-group col-md-6">
													<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->kode;?>
" disabled>
													<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->kode;?>
" name="kode" hidden>
												 </div>
											  </div>
											  <div class="form-group">
												 <label  class="control-label col-md-3">Nama Pembayaran</label>
												 <div class="input-group col-md-8">
													<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->nama;?>
" id="nama" name="nama">
												 </div>
											  </div>
											<div class="form-group">
												<label  class="control-label col-md-3">Program Studi</label>
													<div class="col-md-8">
														<select class="form-control" id="prodi"  name="prodi" disabled>
															<?php if ($_smarty_tpl->tpl_vars['pembayaran']->value->prodiTipe=='1'){?>
															<option value="1">Tipe 1</option>
															<?php }elseif($_smarty_tpl->tpl_vars['pembayaran']->value->prodiTipe=='2'){?>
															<option value="2">Tipe 2</option>
															<?php }else{ ?>
															<option value="3">Tipe 3</option>
															<?php }?>
															<option value="1">Tipe 1</option>															
															<option value="2">Tipe 2</option>
															<option value="3">Tipe 3</option>
														</select>
													</div>
											  </div>
										<div class="row">										  
										  <div class="col-md-6">
											  <div class="form-group">
												<label  class="control-label col-md-6">Metod Pembayaran</label>
													<div class="col-md-6">
														<select class="form-control" id="pembayaran"  name="pembayaran" disabled>
														<?php if ($_smarty_tpl->tpl_vars['pembayaran']->value->pembayran=='1'){?>
															<option value="1">Lunas</option>
														<?php }else{ ?>
															<option value="0">Angsuran</option>
														<?php }?>
															<option value="1">Lunas</option>
															<option value="0">Angsuran</option>
														</select>
													</div>
											  </div>
										  </div>
										  <div class="col-md-6">											
											  <div class="form-group">
												<label  class="control-label col-md-4">Peringkat</label>
													<div class="col-md-6">
														<select class="form-control" id="peringkat"  name="peringkat" disabled>
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
										  </div>
										</div>									  
										  										  
										  <div class="form-group">
                                             <label  class="control-label col-md-3">Uang Masuk</label>
                                             <div class="input-group col-md-8">
                                                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->uangMasuk;?>
" id="um" name="um" >
                                             </div>	
                                          </div>											  
										  <div class="form-group">
                                             <label  class="control-label col-md-3">BPP</label>
                                             <div class="input-group col-md-8">
                                                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->bpp;?>
" id="bpp" name="bpp" >
                                             </div>	
                                          </div>											  
										  <div class="form-group">
                                             <label  class="control-label col-md-3">SKS</label>
                                             <div class="input-group col-md-8">
                                                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->sks;?>
" id="sks" name="sks" >
                                             </div>	
                                          </div>								  										  
										  <div class="form-group">
                                             <label  class="control-label col-md-3">SPP</label>
                                             <div class="input-group col-md-8">
                                                <input type="text" class="biaya form-control" value="<?php echo $_smarty_tpl->tpl_vars['pembayaran']->value->spp;?>
" id="spp" name="spp" >
											 </div>	
                                          </div>
										  <div class="form-group">
											<label  class="control-label col-md-3">Status</label>
												<div class="col-md-6">
													<select class="form-control" id="status"  name="status" class="status">
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
										 <button type="submit" class="btn blue" id="save" value="edit" name="opt"> Tambah <i class="icon-plus"></i></a>
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
</script><?php }} ?>