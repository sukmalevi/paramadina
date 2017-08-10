<?php /* Smarty version Smarty-3.1.14, created on 2014-01-07 07:19:11
         compiled from "application\views\portal\pendidikan.html" */ ?>
<?php /*%%SmartyHeaderCode:495452cba4648022a6-77682193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82159455f6891c7698d0caa750c692543547a654' => 
    array (
      0 => 'application\\views\\portal\\pendidikan.html',
      1 => 1389079148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '495452cba4648022a6-77682193',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cba4649d1f90_85590436',
  'variables' => 
  array (
    'edu' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cba4649d1f90_85590436')) {function content_52cba4649d1f90_85590436($_smarty_tpl) {?>
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
                              <th>Hapus</th>
                           </tr>
                        </thead>
                        <tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['edu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                              <td><a class="delete" data-toggle="modal" href="#verifikasi" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kodeEdu;?>
" name="delete">Delete</a></td>
                           </tr>
						<?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- END EXAMPLE TABLE PORTLET-->
            </div>
			
			<?php echo $_smarty_tpl->getSubTemplate ("portal/formEdu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					

<script>
      jQuery(document).ready(function() {       
         TableManaged.init();
      });
</script>
<?php }} ?>