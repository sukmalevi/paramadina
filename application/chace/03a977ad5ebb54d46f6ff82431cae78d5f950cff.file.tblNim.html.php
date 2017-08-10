<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 10:29:13
         compiled from "application/views/smb/tblNim.html" */ ?>
<?php /*%%SmartyHeaderCode:1861962979535e2aeb854d05-42313866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a977ad5ebb54d46f6ff82431cae78d5f950cff' => 
    array (
      0 => 'application/views/smb/tblNim.html',
      1 => 1435111939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1861962979535e2aeb854d05-42313866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535e2aeb8f0f34_53589206',
  'variables' => 
  array (
    'total' => 0,
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e2aeb8f0f34_53589206')) {function content_535e2aeb8f0f34_53589206($_smarty_tpl) {?>		<h4>TOTAL MAHASISWA : <?php echo $_smarty_tpl->tpl_vars['total']->value->total;?>
 Orang</h4>
				<div class="portlet">
                     <div class="portlet-title">
                        <!-- <div class="caption"><i class="icon-calendar"></i>NIM MAHASISWA BARU</div> -->
                        <!-- <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div> -->
                     </div>
                     <div class="portlet-body flip-scroll">
                        <table class="table table-advance table-bordered table-striped table-condensed flip-content" >
                           <thead class="flip-content">
                              <tr>
                                 <th>NAMA MAHSISWA</th>
                                 <th>JALUR</th>
                                 <th>PRODI</th>
                                 <th>NIM</th>
                                 <th>MUNDUR</th>
                              </tr>
                           </thead>
                           <tbody>
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                              <tr>
                                 <td>									
									<div class="panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <?php echo $_smarty_tpl->tpl_vars['row']->value->nama_cm;?>

                                             </h4>
                                          </div>
									</div>
								 </td>
								 <td>
									<div class="panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <?php echo $_smarty_tpl->tpl_vars['row']->value->n_jalur;?>

                                             </h4>
                                          </div>
									</div>
								 </td>
								 <td>
									<div class="panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <?php echo $_smarty_tpl->tpl_vars['row']->value->progdi;?>

                                             </h4>
                                          </div>
									</div>
								 </td>
                                 <td class="nim<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
">
							  <?php if ($_smarty_tpl->tpl_vars['row']->value->nim!=''){?>
								 <div id="accordion1<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" class="panel-group">
                                       <div class="panel panel-info">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <?php echo $_smarty_tpl->tpl_vars['row']->value->nim;?>

                                             </h4>
                                          </div>
                                       </div>
								 </div>
							  <?php }else{ ?>
								 <div id="accordion1" class="panel-group" >
									<a class="confirm btn dark" href="#" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" id="generate"><i class="icon-play"></i></a>
									</div>
							  <?php }?>
								 </td>
								 <td>
								<?php if ($_smarty_tpl->tpl_vars['row']->value->stsMundurAfterReapply=='1'){?>
									<div class="panel-danger">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                Mengundurkan Diri
                                             </h4>
                                          </div>
									</div>
								<?php }else{ ?>
									<div class="panel-success">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/mundurDiri/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
/mundur">
                                                Pengunduran Diri
                                                </a>
                                             </h4>
                                          </div>
									</div>
								<?php }?>
								 </td>
                              </tr>
							<?php } ?>
                           </tbody>
                        </table>
                     </div>
               </div>
			   
					 <div class="modal fade" id="formMundur" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog  modal-wide">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Edit Buka Pendaftaran Seleksi</h4>
                              </div>
                              <div class="modal-body">
								<div id="form"></id>							  
                              </div>
                           </div>
						  </div>
                           <!-- /.modal-content -->
                        </div>
					</div>
<script>

$(".confirm").each(function (i, v){
	$(this).click( function() {
		var val = $(this).attr("value");
		var opt = $(this).attr("id");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbNim/confirm",{
				'val':val,
				'opt':opt
					},function(resp){
					$('.nim'+val).html(resp);
				}); 
		return false;
	});
});



	$(".mundurDiri").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/mundurDiri/mundur", {'opt':opt, 'val':val},function(resp){
			$('#form').html(resp);
		});
	});
	});

</script><?php }} ?>