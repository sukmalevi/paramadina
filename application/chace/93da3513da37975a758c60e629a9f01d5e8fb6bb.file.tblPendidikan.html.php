<?php /* Smarty version Smarty-3.1.14, created on 2014-05-08 15:17:27
         compiled from "application/views/smb/tblPendidikan.html" */ ?>
<?php /*%%SmartyHeaderCode:885525742536b3d97ac7679-54637194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93da3513da37975a758c60e629a9f01d5e8fb6bb' => 
    array (
      0 => 'application/views/smb/tblPendidikan.html',
      1 => 1399532321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '885525742536b3d97ac7679-54637194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'eduList' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536b3d97b07070_37306026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536b3d97b07070_37306026')) {function content_536b3d97b07070_37306026($_smarty_tpl) {?>
			<div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="portlet box grey">
                  <div class="portlet-title">
                     <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="javascript:;" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="table-toolbar">
                     </div>
                     <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th>Jenjang</th>
                              <th>Nama Sekolah</th>
                              <th>Propinsi</th>
                              <th>Kabupaten Kota</th>
                              <th>Kode Pos</th>
                              <th>Tahun Lulus</th>							  
                              <th>Jurusan</th>						  
                              <th>Nilai UN</th>		
                           </tr>
                        </thead>
                        <tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eduList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                           <tr >
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->sekolahNama;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->sekolahTipe;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->sekolah;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->propNama;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->kabNama;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->kodepos;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tahunLulus;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->jurusan;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nilai;?>
</td>
                           </tr>
						<?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- END EXAMPLE TABLE PORTLET-->
            </div>
					
<?php }} ?>