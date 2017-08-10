<?php /* Smarty version Smarty-3.1.14, created on 2014-02-10 12:33:13
         compiled from "application\views\admisi\kontenMahasiswa.html" */ ?>
<?php /*%%SmartyHeaderCode:1095252f84dcd1372f2-37535350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9697e03cb63bd4553f1f8d9196435631310a24e6' => 
    array (
      0 => 'application\\views\\admisi\\kontenMahasiswa.html',
      1 => 1392010387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1095252f84dcd1372f2-37535350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f84dcd2a8123_32583379',
  'variables' => 
  array (
    'prodi' => 0,
    'host' => 0,
    'kodeSmb' => 0,
    'mahasiswa' => 0,
    'row' => 0,
    'key' => 0,
    'key1' => 0,
    'key2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f84dcd2a8123_32583379')) {function content_52f84dcd2a8123_32583379($_smarty_tpl) {?>				<div class="portlet box grey">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-cogs"></i>Peserta Calon Mahasiswa Baru Prodi <?php echo $_smarty_tpl->tpl_vars['prodi']->value->nama;?>
</div>
                        <div class="tools">
						   <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
admisi/exportToExcel/<?php echo $_smarty_tpl->tpl_vars['kodeSmb']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['prodi']->value->nama;?>
" class="btn default btn-xs black" style="margin-bottom: 12px;"><i class="icon-download-alt"></i></a>
                           <a href="javascript:;" class="collapse"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a></div>
                     </div>
                     <div class="portlet-body flip-scroll">
                        <table class="table table-bordered table-striped table-condensed flip-content">
                           <thead class="flip-content">
                              <tr>
                                 <th>No </th>
                                 <th>No. Registrasi</th>
                                 <th>Nama Peserta</th>
                                 <th>Email</th>
                                 <th>Tanggal Pendaftaran</th>
                                 <th>Jalur</th>
                              </tr>
                           </thead>
                           <tbody>
							  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mahasiswa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->No;?>
</td>
								 <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable('No Registrasi', null, 0);?>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->{$_smarty_tpl->tpl_vars['key']->value};?>
</td>
								 <?php $_smarty_tpl->tpl_vars['key1'] = new Smarty_variable('Nama Lengkap', null, 0);?>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->{$_smarty_tpl->tpl_vars['key1']->value};?>
</td>	
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->Email;?>
</td>	
								 <?php $_smarty_tpl->tpl_vars['key2'] = new Smarty_variable('Tanggal Pendaftaran', null, 0);?>						 
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->{$_smarty_tpl->tpl_vars['key2']->value};?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value->Jalur;?>
</td>
                              </tr>
								<?php } ?>
                           </tbody>
                        </table>
                     </div>
					</div><?php }} ?>