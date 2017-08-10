<?php /* Smarty version Smarty-3.1.14, created on 2013-09-19 03:30:39
         compiled from "application\views\master\edit_cutiBer.html" */ ?>
<?php /*%%SmartyHeaderCode:133235239162d6ab510-73618869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7cfc908acdd3201f490fdcf4f8737288729270c' => 
    array (
      0 => 'application\\views\\master\\edit_cutiBer.html',
      1 => 1379561407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133235239162d6ab510-73618869',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5239162d7efd48_99749146',
  'variables' => 
  array (
    'host' => 0,
    'cuti_ber' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5239162d7efd48_99749146')) {function content_5239162d7efd48_99749146($_smarty_tpl) {?><script>	  
$(function () {
        $('#datetimepickers').datetimepicker({
            pickTime: false
        });
		$('#datetimepickerss').datetimepicker({
            pickTime: false
        });
    });
</script>								
							<div class="content-widgets light-gray">
								<div class="widget-head riscon-orange">
									<h3>Edit Cuti Bersama
										<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterCuti" id="minus" style="float:right"><i class="icon-minus"></i></a>
									</h3>
								</div>
								<div class="widget-container">
									<form class="form-horizontal" name="marketer" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/editCuti/update" id="marketer" method="post">
										<div class="control-group">
											<label class="control-label" >Cuti Bersama</label>
											<div class="controls">
												<input type="text" name="id" id ="id" value="<?php echo $_smarty_tpl->tpl_vars['cuti_ber']->value->id;?>
" style="display:none">
												<input type="text" placeholder="Ket. Cuti Bersama" class="span4" name="cuti_ber" id="cuti_ber" class="required" value="<?php echo $_smarty_tpl->tpl_vars['cuti_ber']->value->ket_cuti_bersama;?>
">
											</div>
										</div>
										<div class="control-group">
												<label class="control-label">Periode Cuti</label>
												<div class="controls">
													<div id="datetimepickers" class="input-append date ">
														<input data-format="yyyy-MM-dd" placeholder="Tanggal Mulai" type="text" name="tgl_cuti" id="tgl_cuti" value="<?php echo $_smarty_tpl->tpl_vars['cuti_ber']->value->tgl_cuti;?>
"><span class="add-on "><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
													</div> s.d.
													<div id="datetimepickerss" class="input-append date ">
														<input data-format="yyyy-MM-dd" placeholder="Tanggal Selesai" type="text" name="tgl_selesai_cuti" id="tgl_selesai_cuti" value="<?php echo $_smarty_tpl->tpl_vars['cuti_ber']->value->tgl_akhir_cuti;?>
"><span class="add-on "><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
													</div>
												</div>
										</div>
											<div class="control-group">
												<label class="control-label" >Status Cuti</label>
												<div class="controls">
													<select data-placeholder="Departemen" class="span" tabindex="2" name="status_cuti" id="status_cuti">	
														<option value="<?php echo $_smarty_tpl->tpl_vars['cuti_ber']->value->status;?>
"><?php if ($_smarty_tpl->tpl_vars['cuti_ber']->value->status=='0'){?>Tidak Aktif<?php }elseif($_smarty_tpl->tpl_vars['cuti_ber']->value->status=='1'){?>Aktif<?php }else{ ?>Selesai<?php }?></option>
														<option value="0">Tidak Aktif</option>	
														<option value="1">Aktif</option>
														<option value="2">Selesai</option>
													</select>
												</div>
											</div>
											<button type="submit" class="btn btn-success" name="save" id="save" value="save">Save</button>
											<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
master/masterCuti" class="btn btn-warning" name="cancel" id="cancel" value="cancel">Cancel</a>
											<button type="reset" class="btn">Reset</button>
									</form>
								</div>
							</div><?php }} ?>