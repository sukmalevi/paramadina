<?php /* Smarty version Smarty-3.1.14, created on 2014-02-14 10:18:01
         compiled from "application\views\master\kontenGedung.html" */ ?>
<?php /*%%SmartyHeaderCode:2696852a334436b5878-88698823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c6c5274dbb2d324428bf94d06eca3c67f715c37' => 
    array (
      0 => 'application\\views\\master\\kontenGedung.html',
      1 => 1392347878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2696852a334436b5878-88698823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a3344374a0a2_50814120',
  'variables' => 
  array (
    'gedung' => 0,
    'host' => 0,
    'row' => 0,
    'prop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a3344374a0a2_50814120')) {function content_52a3344374a0a2_50814120($_smarty_tpl) {?>				<div class="tab-pane" id="tab_1_4">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="add-portfolio">
                                 <span>Gedung Universitas Paramadina</span>  	
								 <a class=" btn default" href="#add" data-toggle="modal" style="float:right">
									Tambah <i class="icon-plus"></i>
								 </a> 
                              </div>
                           </div>
                        </div>
                        <!--end add-portfolio-->
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gedung']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <div class="row portfolio-block">
                           <div class="col-md-5">
                              <div class="portfolio-text">
                                 <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/profile/portfolio/logo_metronic.jpg" alt="" />
                                 <div class="portfolio-text-info">
                                    <h4><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</h4>
                                    <p><?php echo $_smarty_tpl->tpl_vars['row']->value->alamat;?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['row']->value->kabupaten;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->propinsi;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->kodePos;?>
</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="portfolio-info">
                                 Total Ruangan
                                 <span style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['row']->value->total_ruang;?>
</span>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="portfolio-btn">
                                 <a href="#manageForm" class="manage btn" data-toggle="modal" name="edit" id="manage" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
">
								 <span>Manage</span></a>                      
                              </div>
                           </div>
                        </div>
						<?php } ?>
                        <!--end row-->
                     </div>
					 <div class="modal fade" id="add" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Edit Username</h4>
                              </div>
								  <div class="modal-body">
									<div class="modal-body">
										<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterGedung/add" class="form-horizontal" method="post">
											<div class="form-body">
												  <div class="form-group">
													 <label  class="control-label col-md-3">Nama</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Nama Gedung" id="gedung" name="gedung">
													 </div>
												  </div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Kode</label>
													 <div class="input-group col-md-6">
														<input type="text" class="form-control" placeholder="Kode Gedung" id="kode" name="kode">
													 </div>
												  </div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Alamat</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Alamat Gedung" id="alamat" name="alamat">
													 </div>
												  </div>
												  <div class="form-group">
													 <label class="control-label col-md-3">Propinsi</label>
													 <div class="col-md-9">
														<select class="form-control" id="prop"  name="prop">
															<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prop']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
												  <div id="selectKabs"></div>
												  <div class="form-group">
													 <label  class="control-label col-md-3">Total Ruangan</label>
													 <div class="input-group col-md-9">
														<input type="text" class="form-control" placeholder="Jumlah Ruangan" id="ruang" name="ruang">
													 </div>
												  </div>
											</div>
										  <div class="modal-footer">
											 <button type="button" class="btn default" data-dismiss="modal">Close</button>
											 <button type="submit" class="btn blue" id="save" value="save" name="opt"> Tambah <i class="icon-plus"></i></a>
										  </div>
										</form>
									</div>
								</div>
                              </div>
                           </div>
                           <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                     </div>
					 
					 <div class="modal fade" id="manageForm" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Edit Data Gedung</h4>
                              </div>
									<div class="modal-body">
										<div id="foGedung"></div>
									</div>
                           </div>
                           <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                     </div>
							
<script>

	$("#prop").change(function(){
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterGedung/prop",{
					'prop':$('#prop').val()					
				},function(resp){
                $('#selectKabs').html(resp);
            });
	});


$(".manage").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterGedung/edit", {'opt':opt, 'val':val},function(resp){
			$('#foGedung').html(resp);
		});
	});
});

</script>
 <?php }} ?>