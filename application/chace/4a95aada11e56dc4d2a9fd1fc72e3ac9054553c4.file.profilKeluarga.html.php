<?php /* Smarty version Smarty-3.1.14, created on 2014-05-02 09:48:36
         compiled from "application/views/portal/profilKeluarga.html" */ ?>
<?php /*%%SmartyHeaderCode:200104946353630784d40174-81772715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a95aada11e56dc4d2a9fd1fc72e3ac9054553c4' => 
    array (
      0 => 'application/views/portal/profilKeluarga.html',
      1 => 1398153920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200104946353630784d40174-81772715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'saudara' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53630784dd26a3_42320551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53630784dd26a3_42320551')) {function content_53630784dd26a3_42320551($_smarty_tpl) {?>											<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['saudara']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
												<div class="row portfolio-block" style="height: 105px;background-color: #FFF;">
													<div class="col-md-1" style="padding: 10px 0;">
													  <div class="portfolio-info">
														 <p></p>
														 <p></P>
														 <a href="#" class="btn bigicn-only" style="padding:0;" >
															<span><?php echo $_smarty_tpl->tpl_vars['row']->value->singProdi;?>
</span>
														 </a>
														   
													  </div>
												   </div>
												   <div class="col-md-3">
													  <div class="portfolio-info">
														 <div class="portfolio-text-info" style=";padding-left: 10px;">
															<h4><?php echo $_smarty_tpl->tpl_vars['row']->value->namaSaudara;?>
</h4>
															<p><?php echo $_smarty_tpl->tpl_vars['row']->value->gender;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggalLahir;?>
</p>
															<p>Anak Ke-<?php echo $_smarty_tpl->tpl_vars['row']->value->nomor;?>
</p>
														 </div>
													  </div>
												   </div>
												   <div class="col-md-3">
													  <div class="portfolio-info">
														 <h4><?php echo $_smarty_tpl->tpl_vars['row']->value->prodi;?>
</h4>
														 <p>NIM : <?php echo $_smarty_tpl->tpl_vars['row']->value->nim;?>
</p>
														 <p>Angkatan : <?php echo $_smarty_tpl->tpl_vars['row']->value->angkatan;?>
, <?php if ($_smarty_tpl->tpl_vars['row']->value->lulus=='1'){?>Alumni<?php }else{ ?>Aktif<?php }?></p>
													  </div>
													</div>
													<div class="col-md-3">
													  <div class="portfolio-info">
														 <h4>Perusahaan</h4>
														 <p><?php echo $_smarty_tpl->tpl_vars['row']->value->kerja;?>
</p>
													  </div>
													</div>
												   <div class="col-md-2">
													   <div class="portfolio-info">
														 <p></p>
														 <p></P>
														 <a href="#" class="deleting" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kodeSaudara;?>
" data-toggle="modal"><span style="color:green;">DELETE</span></a>
													   </div>
												   </div>
												</div>
											<?php } ?>
<?php }} ?>