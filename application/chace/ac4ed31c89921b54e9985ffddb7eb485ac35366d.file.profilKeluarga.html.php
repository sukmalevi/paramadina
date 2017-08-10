<?php /* Smarty version Smarty-3.1.14, created on 2014-02-24 11:42:49
         compiled from "application\views\portal\profilKeluarga.html" */ ?>
<?php /*%%SmartyHeaderCode:448852e0d0d2f00614-49308857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac4ed31c89921b54e9985ffddb7eb485ac35366d' => 
    array (
      0 => 'application\\views\\portal\\profilKeluarga.html',
      1 => 1393216966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '448852e0d0d2f00614-49308857',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e0d0d307aa14_54884017',
  'variables' => 
  array (
    'saudara' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e0d0d307aa14_54884017')) {function content_52e0d0d307aa14_54884017($_smarty_tpl) {?>											<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
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